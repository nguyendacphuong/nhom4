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
        client_render('homepage/dangnhap.php');
    }
    function logout(){
    unset($_SESSION['auth']);
    header('location: ' . BASE_URL . 'dangnhap');
}
    function lienhe(){
        client_render('homepage/lienhe.php');
    }
?>
