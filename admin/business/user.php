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
            $avatar = $_FILES['avatar']; 
		    $avatarname = "";
		    if ($avatar['size'] > 0) {
		        $avatarname = uniqid() . '-' . $avatar['name'];
		        move_uploaded_file($avatar['tmp_name'], './public/uploads/' . $avatarname);
		        $avatarname = 'uploads/' . $avatarname;
		        $img = PUBLIC_URL. $avatarname;
		    }
            $sql = "INSERT into user (fullname, avatar, email, phone_number, address, password) values ('$fullname','$img', '$email', '$phone_number', '$address', '$password')";
            executeQuery($sql);
            header ('Location:'.ADMIN_URL.'taikhoan');
        
	}
	function edit_user()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from user where id = $id ";
    $cates = executeQuery($sql);
    // hiển thị view
    admin_render('user/edit_user.php', compact('cates'), 'admin-assets/custom/product_index.js');
}
	function update_user(){
		$fullname= $_POST['fullname'];
        $email= $_POST['email'];
        $phone_number= $_POST['phone_number'];
        $password= $_POST['password'];
        $repassword= $_POST['repassword'];
        $address= $_POST['address'];
        $avatar = $_FILES['avatar']; 
	    $avatarname = "";
	    if ($avatar['size'] > 0) {
	        $filename = uniqid() . '-' . $avatar['name'];
	        move_uploaded_file($avatar['tmp_name'], './public/uploads/' . $avatarname);
	        $avatarname = 'uploads/' . $avatarname;
	        $img = PUBLIC_URL. $avatarname;
	    }
	    $sql = " UPDATE user set fullname = '$fullname',avatar = '$img',phone_number = '$phone_number',password = '$password',address = '$address' where id = $id";
	    executeQuery($sql);
	    header("location: " . ADMIN_URL . 'user');
	}


 ?>