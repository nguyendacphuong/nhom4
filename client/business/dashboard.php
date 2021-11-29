<?php
require_once './dao/system_dao.php';
function dashboard_index(){
    $sql = "select * from product order by view desc limit 0,6";
    $items = pdo_query($sql);
    $sql = "select * from slideshow ";
    $itemsl = pdo_query($sql);
    $sql = "select * from product order by id desc limit 0,13";
    $newitems = pdo_query($sql);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    client_render('homepage/slider.php', compact('items', 'newitems','itemsl','list')); 
}

function chitiet(){
    $id = $_GET['id'];
    $sql = "select * from product where id = '$id'";
    $item = pdo_query($sql);
    $category_id = $item[0]['category_id'];
    $sql = "SELECT * FROM product WHERE category_id = '$category_id' AND id != '$id' limit 4";
    $itemcungloais = select_page($sql);

    //
    
    if(isset($_POST) && isset($_POST['comment'])){
        $id_sp = $_GET['id'];
        $contents = $_POST['contents'];
        $created_at = date('Y-m-d H:s:i');
        if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) {
            $id_user = $_SESSION['auth']['id'];
            $name = $_SESSION['auth']['fullname'];
            $emailcmt = $_SESSION['auth']['email'];
            $avtcmt = $_SESSION['auth']['avatar'];
            $sql = "INSERT INTO contents (id_user, name, emailcmt,avtcmt,id_sp,contents,created_at) VALUES ('$id_user','$name','$emailcmt', '$avtcmt','$id_sp','$contents','$created_at')";
            executeQuery($sql);
            header('Location:'. BASE_URL . 'chitietsp?id='. $id);

        }else{
            $name = $_POST['name'];
            $emailcmt = $_POST['emailcmt'];
            $sql = "INSERT INTO contents (id_sp,contents,created_at,name, emailcmt) VALUES ('$id_sp','$contents','$created_at','$name','$emailcmt')";
            executeQuery($sql);
            header('Location:'. BASE_URL . 'chitietsp?id='. $id);
        }
            
    }
    

    client_render('homepage/chitietsp.php', compact('item', 'itemcungloais')); 
}
function tintuc_index(){
    $sql = "select * from news";
    $items = pdo_query($sql);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    client_render('homepage/tintuc.php', compact( 'items','list')); 
}
function tintucchitiet_index(){
    $id = $_GET['id'];
    $sql = "select * from news where id = '$id'";
    $itemct = pdo_query($sql);

    client_render('homepage/tintucchitiet.php', compact( 'itemct')); 
}



function list_product(){
    $sql = "SELECT * FROM product";
    $items = select_page($sql);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    
    client_render('homepage/shop.php',compact('items','list'));
}
function category_sp(){
    $id = $_GET['id'];
    // $sql = "select * from product where id = '$id'";
    // $item = pdo_query($sql);
    
    $sql = "SELECT * FROM product  JOIN category  where category_id = '$id'";
    $itemcungloai = select_page($sql);
    
    $sql = "SELECT * FROM category ";
    $list = select_page($sql);
    client_render('homepage/category_sp.php', compact( 'itemcungloai','list')); 
}


?>