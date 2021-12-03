<?php

function product_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách sản phẩm
    $sql = "SELECT product.*,category.name AS 'name_cate' FROM product JOIN category ON product.category_id = category.id where title like '%$keyword%'";
    $cates = executeQuery($sql, true);

    // hiển thị view
    admin_render('product/index.php', compact('cates', 'keyword'), 'admin-assets/custom/product_index.js');
}

function cate_add_form()
{
    $sql = "select * from category  ";
    $cates = pdo_query($sql, true);
    $sql = "select id , name_brand from brand  ";
    $cate = pdo_query($sql, true);
    admin_render('product/add-form.php', compact('cates', 'cate'), 'admin-assets/custom/product_add.js');
}

function cate_save_add()
{

    $title = $_POST['title'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    $number = $_POST['number'];
    $status = isset($_POST['status']) ? 1 : 0;
    $created_at = $updated_at = date('Y-m-d H:s:i');
    $file = $_FILES['thumbnail'];
    $filename = "";

    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
        $img = PUBLIC_URL . $filename;
    }

    $sql = " INSERT INTO product (title,price,discount,thumbnail,description,number,category_id,brand_id,status,created_at,updated_at) values
     ('$title','$price','$discount','$img','$description','$number','$category_id','$brand_id','$status',' $created_at','$updated_at')";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'sanpham');
}
function product_remove()
{
    $id = $_GET['id'];
    $sql = "delete from product where id = $id";

    executeQuery($sql);
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
    $sql = "select * from brand order by id desc";

    $brand_id = pdo_query($sql);

    // hiển thị view
    admin_render('product/edit-form.php', compact('cates', 'lis','brand_id'), 'admin-assets/custom/product_index.js');
}
function update_form()
{
    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $status = isset($_POST['status']) ? 1 : 0;
    $created_at = $updated_at = date('Y-m-d H:s:i');
    $file = $_FILES['thumbnail'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
    }
    $sql = " UPDATE product set title = '$title',price = '$price',discount = '$discount',description = '$description',
    category_id = '$category_id',thumbnail = '$filename',status = '$status', updated_at = '$updated_at',created_at='$created_at' where id = $id";
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
