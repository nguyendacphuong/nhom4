<?php
    function dangky(){
        $err=[];
        if(isset($_POST) && isset($_POST['btn_dangky'])){
            $username= $_POST['username'];
            $email= $_POST['email'];
            $tell= $_POST['tell'];
            $pass= $_POST['pass'];
            $repass= $_POST['repass'];
            if(empty($username && $email && $tell && $pass && $repass)){
                $err['a'] = 'Vui lòng điền đầy đủ thông tin!';
            }
            if($pass != $repass){
                $err['a'] = 'Mật khẩu không khớp!';
            }
            if(empty($err)){
                $sql = "insert into user (username, email, tell, pass) values ('$username', '$email', '$tell', '$pass')";
                executeQuery($sql);
                header ('Location:'.BASE_URL.'dangnhap');
            }
        }
        
        
        // header("Location:".BASE_URL. '/');
        client_render('homepage/dangky.php');
}
?>