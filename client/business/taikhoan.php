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
            if(empty($fullname && $email && $address && $password && $repassword && $phone_number)){
                $err[] = '<script> alert("Vui lòng điền đầy đủ thông tin!") </script>';
            }
            if($password != $repassword){
                $err[] = '<script> alert("Mật khẩu không khớp!") </script>';
            }
            if(empty($err)){
                $sql = "insert into user (fullname, email, phone_number, address, password) values ('$fullname', '$email', '$phone_number', '$address', '$password')";
                executeQuery($sql);
                header ('Location:'.BASE_URL.'dangnhap');
            }
        }
        
        
        // header("Location:".BASE_URL. '/');
        client_render('homepage/dangky.php');
}
?>