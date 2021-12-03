<?php

    function home(){
        client_render('homepage/homepage.php');
    }
    function dangnhap(){
        if(isset($_POST) && isset($_POST['dangnhap'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $err = [];
            if ($email && $password != '') {
                $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
                $connect = get_connect();
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $user = $stmt -> fetch();
                if($user != false){
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['auth'] = $user;
                    header("Location: ".BASE_URL);
                }
            }
            
        }
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('homepage/dangnhap.php', compact('list','thuonghieu'), 'admin-assets/custom/category_index.js');
    }
    function logout(){
    unset($_SESSION['auth']);
    header('location: ' . BASE_URL . 'dangnhap');
}
//===============================GỬI PHẢN HỒI===================================//
    function lienhe(){
        $err=[];
        if(isset($_POST) && isset($_POST['btnsend'])){
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone_number= $_POST['phone_number'];
            $subject_name= $_POST['subject_name'];
            $note= $_POST['note'];
            $created_at= date("Y-m-d H:i:s");
            if(empty($name && $email && $phone_number && $subject_name && $note && $created_at)){
               $err[] = '<script> alert("Bạn chưa điền đầy đủ thông tin") </script>';
            }
            if(empty($err)){
                $sql = "insert into feedback (name, email, phone_number, subject_name, note, created_at) values ('$name', '$email', '$phone_number', '$subject_name', '$note', '$created_at')";
                executeQuery($sql);
                header ('Location:'.BASE_URL);
            }
        }
        $sql = "SELECT * FROM category";
        $list = select_page($sql);
        $sql = "SELECT * FROM brand";
        $thuonghieu = select_page($sql);
        client_render('homepage/lienhe.php', compact('list', 'thuonghieu'));
    }
    
?>
