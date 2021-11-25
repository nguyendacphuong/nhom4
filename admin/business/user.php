<?php 
	function user_index(){
		$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    	$sql = "select * from user where email like '%$keyword%'";
		$cates = executeQuery($sql, true);

	admin_render('user/index.php', compact('cates', 'keyword'), 'admin-assets/custom/product_index.js');
	}
	function user_add(){
    	admin_render('user/user_add.php', [], 'admin-assets/custom/product_add.js');
	}
	function user_save_add(){
            $fullname= $_POST['fullname'];
            $email= $_POST['email'];
            $phone_number= $_POST['phone_number'];
            $password= $_POST['password'];
            $repassword= $_POST['repassword'];
            $address= $_POST['address'];
            $sql = "INSERT into user (fullname, email, phone_number, address, password) values ('$fullname', '$email', '$phone_number', '$address', '$password')";
            executeQuery($sql);
            header ('Location:'.ADMIN_URL.'taikhoan');
        
}
 ?>