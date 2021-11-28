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
    $sql = "select * from brand  ";
    $cate = pdo_query($sql, true);
    admin_render('product/add-form.php', compact('cates','cate'), 'admin-assets/custom/product_add.js');
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

    $created_at = $updated_at = date('Y-m-d H:s:i');
    $file = $_FILES['thumbnail'];
    
    $filename = "";
    $brand_id = $_POST['brand_id'];
    $number = $_POST['number'];
    $status = isset($_POST['status']) ? 1 : 0;
    $created_at = $updated_at = date('Y-m-d H:s:i');
    $file = $_FILES['thumbnail'];
    $filename = "";

    $file1 = $_FILES['image1'];
    $filename1 = "";

    $file4 = $_FILES['image4'];
    $filename4 = "";

    $file3 = $_FILES['image3'];
    $filename3 = "";

    $file2 = $_FILES['image2'];
    $filename2 = "";
    

    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
        $img = PUBLIC_URL . $filename;
    }


    $sql = " INSERT INTO product (title,price,discount,thumbnail,description,category_id,created_at,updated_at) values
     ('$title','$price','$discount','$img','$description','$category_id',' $created_at','$updated_at')";

    if ($file1['size'] > 0) {
        $filename1 = uniqid() . '-' . $file1['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename1);
        $filename1 = 'uploads/' . $filename1;
        $img1 = PUBLIC_URL . $filename1;
    }
    if ($file2['size'] > 0) {
        $filename2 = uniqid() . '-' . $file2['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename2);
        $filename2 = 'uploads/' . $filename2;
        $img2 = PUBLIC_URL . $filename2;
    }
    if ($file3['size'] > 0) {
        $filename3 = uniqid() . '-' . $file3['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename3);
        $filename3 = 'uploads/' . $filename3;
        $img3 = PUBLIC_URL . $filename3;
    }
    if ($file4['size'] > 0) {
        $filename4 = uniqid() . '-' . $file4['name'];
        move_uploaded_file($file4['tmp_name'], './public/uploads/' . $filename4);
        $filename4 = 'uploads/' . $filename4;
        $img4 = PUBLIC_URL . $filename4;
    }
  
   

    $sql = " INSERT INTO product (title,price,discount,thumbnail,image1,image2,image3,image4,description,number,category_id,brand_id,status,created_at,updated_at) values
     ('$title','$price','$discount','$img','$img1','$img2','$img3','$img4','$description','$number','$category_id','$brand_id','$status',' $created_at','$updated_at')";
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

    $sql = "select * from category ";
    $cates = pdo_query($sql);
    
    $sql = "select * from brand ";
    $cate = pdo_query($sql);

    // hiển thị view
    admin_render('product/edit-form.php', compact('cates', 'lis','cate'), 'admin-assets/custom/product_index.js');
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
