<?php

function dashboard_index(){
    $sql = "select * from product order by view desc limit 0,6";
    $items = pdo_query($sql);
    $sql = "select * from slideshow ";
    $itemsl = pdo_query($sql);
    $sql = "select * from product order by id desc limit 0,13";
    $newitems = pdo_query($sql);
    client_render('homepage/slider.php', compact('items', 'newitems','itemsl')); 
}

function chitiet(){
    $id = $_GET['id'];
    $sql = "select * from product where id = '$id'";
    $item = pdo_query($sql);
    $category_id = $item[0]['category_id'];
    $sql = "SELECT * FROM product WHERE category_id = '$category_id' AND id != '$id' limit 4";
    $itemcungloais = select_page($sql);
    client_render('homepage/chitietsp.php', compact('item', 'itemcungloais')); 
}
function tintuc_index(){
    $sql = "select * from news";
    $items = pdo_query($sql);

    client_render('homepage/tintuc.php', compact( 'items')); 
}
function tintucchitiet_index(){
    $id = $_GET['id'];
    $sql = "select * from news where id = '$id'";
    $itemct = pdo_query($sql);

    client_render('homepage/tintucchitiet.php', compact( 'itemct')); 
}

<<<<<<< Updated upstream
=======
function list_product()
{
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM product   where category_id = '$id'";
    } else {
        $value = isset($_GET['timkiem']) ? $_GET['timkiem'] : "";
        $sql = "SELECT * FROM product INNER JOIN brand ON product.brand_id = brand.id WHERE 
        title like '%$value%'
        OR price LIKE '%$value%' 
         ";
    }
    $items = select_page($sql);
>>>>>>> Stashed changes

function quan(){
    client_render('homepage/quan.php'); 
}
function ao(){
    client_render('homepage/ao.php'); 
}
function nam(){
    $sql = "SELECT * FROM category";
<<<<<<< Updated upstream
    $listRecord = select_page($sql);
    client_render('layouts/header.php', compact('listRecord')); 
=======
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM product   where brand_id = '$id'";
    } else {
        $value = isset($_GET['timkiem']) ? $_GET['timkiem'] : "";
        $sql = "SELECT * FROM product INNER JOIN brand ON product.brand_id = brand.id WHERE 
        title like '%$value%'
        OR price LIKE '%$value%' 
         ";
    }
    $items = select_page($sql);

    $sql = "SELECT * FROM product  ORDER BY view desc limit 6";
    $viewss = select_page($sql);
    client_render('homepage/thuonghieu.php', compact('items', 'list', 'viewss', 'thuonghieu'));
>>>>>>> Stashed changes
}
function nu(){
    client_render('homepage/nu.php'); 
}


