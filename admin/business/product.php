<?php

function product_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from product where title like '%$keyword%'";
    $cates = executeQuery($sql, true);

    // hiển thị view
    admin_render('product/index.php', compact('cates', 'keyword'), 'admin-assets/custom/product_index.js');
}
function cate_add_form()
{
    admin_render('product/add-form.php', [], 'admin-assets/custom/product_add.js');
}

function cate_save_add()
{

    $title = $_POST['title'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $iddm = $_POST['iddm'];
    $file = $_FILES['image'];
    $filename = "";
    if($file['size'] > 0){
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
    }

    $sql = " INSERT INTO sanpham (title,price,discount,thumbnail,description,iddm) values ('$title','$price','$discount','$filename','$description','$iddm')";
    $sq = "select * from danhmuc where name ";
    $cates = executeQuery($sql, true);
    compact('cates');
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'sanpham');
}

// Full texts
// id	
// iddm	
// title	
// price	
// discount	
// thumbnail	
// description
