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

    // function edit_my_user(){
    //     $id = isset($_GET['id']) ? $_GET['id'] : "";
    //     // lấy danh sách danh mục
    //     $sql = "select * from user where id = $id ";
    //     $cates = executeQuery($sql);
    //     // hiển thị view
    //     $sql = "SELECT * FROM category";
    //     $list = select_page($sql);
    //     $sql = "SELECT * FROM brand";
    //     $thuonghieu = select_page($sql);
    //     client_render('homepage/edit_my_user.php', compact('cates','list','thuonghieu'), 'admin-assets/custom/category_index.js');
    // }

    function quenmk(){
        $loi = "";
        if(isset($_POST['btn_quenmk']) == true){
            $email = $_POST['email'];
            $connect = get_connect();
            $sql = "SELECT * FROM user WHERE email = ?";
            $stmt = $connect->prepare($sql);
            $stmt->execute([$email]);
            $count = $stmt->rowCount();
            if ($count == 0) {
                $loi = "Email bạn nhập không tồn tại!";
            }
            else {
                $matkhaumoi =  substr(md5(rand(0,999999)),0,8);
                $sql = "UPDATE user set password = ? WHERE email = ?";
                $stmt = $connect->prepare($sql);
                $stmt->execute([$matkhaumoi, $email]);
                send_mail_mk($email, $matkhaumoi);
            }
        }
        $sql = "SELECT * FROM category";
        $list = select_page($sql);
        $sql = "SELECT * FROM brand";
        $thuonghieu = select_page($sql);
        client_render('homepage/quenmk.php', compact('loi', 'list','thuonghieu'));
    }

    function send_mail_mk($email, $matkhaumoi){
        require_once "./vendor/PHPMailer/src/PHPMailer.php"; 
        require_once "./vendor/PHPMailer/src/SMTP.php"; 
        require_once "./vendor/PHPMailer/src/Exception.php"; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'thanhdo12a10@gmail.com'; // SMTP username
            $mail->Password = 'yukihirasouma';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('thanhdo12a10@gmail.com', 'thanh' ); 
            $mail->addAddress($email,$matkhaumoi); 
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'MAIL ĐỔI MẬT KHẨU';
            $noidungthu = "<H2>Chúng tôi gửi mail này vì bạn đã sử dụng chức năng quên mật khẩu</H2>
                MẬT KHẨU MỚI CỦA BẠN LÀ: {$matkhaumoi}
            "; 
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
        } 
        catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
        }
        
    }
    // function doi_mk($id, $password){
    //     $error = "";
    //     if (isset($_POST['btn_doimk']) == true) {
    //         if ($_POST['mknew'] != $_POST['verifymk']) {
    //             $error = 'Mật khẩu không khớp!';
    //         }else {
    //             $error = 'Đổi mật khẩu thành công!';
                
    //         }
            
    //     }
    //     $sql = "UPDATE user SET password WHERE id";
    //     $new_mk = select_page($sql, $id, $password);
    //     $sql = "SELECT * FROM category";
    //     $list = select_page($sql);
    //     $sql = "SELECT * FROM brand";
    //     $thuonghieu = select_page($sql);
    //     client_render('homepage/doi_mk.php', compact('list', 'thuonghieu', 'error', 'new_mk'));
    // }
    
    // function fogetpass($pass, $email){
    //     $sql = "UPDATE user SET password = '$pass' WHERE email = '$email";
    //     select_page($sql);
    // }
?>
