<?php
    function dangky(){
        $err=[];
        if(isset($_POST) && isset($_POST['btn_dangky'])){
            $fullname= $_POST['fullname'];
            $email= $_POST['email'];
            $phone_number= $_POST['phone_number'];
            $password= $_POST['password'];
            $repassword= $_POST['repassword'];
            $address= $_POST['address'];
            if(empty($fullname && $email && $phone_number && $password && $repassword && $address )){
               $err[] = '<script> alert("Bạn chưa điền đầy đủ thông tin") </script>';
            }
            if($password != $repassword){
                $err[] = '<script> alert("Mật khẩu không khớp") </script>';
            }
            if(empty($err)){
                $sql = "insert into user (fullname, email, phone_number, address, password) values ('$fullname', '$email', '$phone_number', '$address', '$password')";
                executeQuery($sql);
                header ('Location:'.BASE_URL);
            }
        }
        
        
        // header("Location:".BASE_URL. '/');
        client_render('homepage/dangky.php');
}

    function my_user(){
        $sql = "SELECT * FROM category";
        $list = select_page($sql);
        $sql = "SELECT * FROM brand";
        $thuonghieu = select_page($sql);
        client_render('homepage/my-user-form.php', compact('list','thuonghieu'));
    }
    function edit_my_user()
{

    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from user where id = $id ";
    $cates = executeQuery($sql);
    // hiển thị view
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('homepage/edit_my_user.php', compact('cates','list','thuonghieu'), 'admin-assets/custom/category_index.js');
}
    function my_user_update(){
        
        
    }
 

?>