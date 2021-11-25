<?php

function dashboard_index(){
    $sql = "select * from product order by view desc limit 0,6";
    $items = pdo_query($sql);

    $sql = "select * from product order by id desc limit 0,13";
    $newitems = pdo_query($sql);
    client_render('homepage/slider.php', compact('items', 'newitems')); 
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


