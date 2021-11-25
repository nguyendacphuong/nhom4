<?php

    function home(){
        client_render('homepage/homepage.php');
    }
    function chitiet(){
        client_render('homepage/chitietsp.php');
    }
    function dangky(){
        client_render('homepage/dangky.php');
    }
    function dangnhap(){
        if(isset($_POST) && isset($_POST['dangnhap'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $err = [];
            if ($email == "") {
                $err['email'] ='bạn chưa nhập email';
            }
            if ($password == "") {
                $err['password'] ='bạn chưa nhập password';
            }
            if ($email && $password != '') {
                $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
                $connect = get_connect();
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $user = $stmt -> fetch();
                if($user != false){
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    header("Location: ".BASE_URL.'cp-admin');
                }
            }
            
        }
        client_render('homepage/dangnhap.php');
    }
    function lienhe(){
        client_render('homepage/lienhe.php');
    }
?>
