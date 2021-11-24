<?php

function product_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách sản phẩm
    $sql = "select * from product where title like '%$keyword%'";
    $cates = executeQuery($sql, true);

    // hiển thị view
    admin_render('product/index.php', compact('cates', 'keyword'), 'admin-assets/custom/product_index.js');
}
function cate_add_form()
{
    $sql = "select * from category  ";
    $cates = pdo_query($sql, true);
    admin_render('product/add-form.php', compact('cates'), 'admin-assets/custom/product_add.js');
}

function cate_save_add()
{

    $title = $_POST['title'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $file = $_FILES['thumbnail'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
        $img = PUBLIC_URL. $filename;
    }

    $sql = " INSERT INTO product (title,price,discount,thumbnail,description,category_id) values
     ('$title','$price','$discount','$img','$description','$category_id')";
    executeQuery($sql, true);

    header("location: " . ADMIN_URL . 'sanpham');
}
function edit_form()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from product where id = $id ";
    $lis = executeQuery($sql);

    $sql = "select * from category order by id desc";
    $cates = pdo_query($sql);

    // hiển thị view
    admin_render('product/edit-form.php', compact('cates', 'lis'), 'admin-assets/custom/product_index.js');
}
// function update_form()
// {
//     $id = $_POST['id'];
//     $title = $_POST['title'];
//     $price = $_POST['price'];
//     $discount = $_POST['discount'];
//     $description = $_POST['description'];
//     $category_id = $_POST['category_id'];
//     $file = $_FILES['thumbnail'];
//     $filename = "";
//     if ($file['size'] > 0) {
//         $filename = uniqid() . '-' . $file['name'];
//         move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
//         $filename = 'uploads/' . $filename;
//     }
//     $sql = " UPDATE product set title = '$title',price = '$price',discount = '$discount',description = '$description',
//     category_id = '$category_id',thumbnail = '$filename', where id = $id";
//     executeQuery($sql);
//     header("location: " . ADMIN_URL . 'sanpham');
// }

// Full texts
// id	
// iddm	
// title	
// price	
// discount	
// thumbnail	
// description
