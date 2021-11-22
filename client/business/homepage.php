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
        if (isset($_POST['dangnhap'])) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['pass'] = $_POST['pass'];
        }
        if (isset($_POST['dangnhap'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $err = [];
            if ($email == "") {
                $err['email'] ='bạn chưa nhập email';
            }
            if ($pass == "") {
                $err['pass'] ='bạn chưa nhập pass';
            }
            if ($email && $pass != '') {
                $sql = "SELECT * FROM user WHERE email = '$email'";
                $connect = get_connect();
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $user = $stmt -> fetch();
                if($user != false){
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['pass'] = $_POST['pass'];
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
