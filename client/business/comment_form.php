<?php 
	function comment_add(){
		$sql = "select * from contents";
    	$cates = pdo_query($sql, true);
    	admin_render('homepage/chitietsp.php', compact('cates'));
	}
	function comment_form(){
		$contents = $_POST['contents'];
		$created_at = date('Y-m-d H:s:i');
		$id_user = $_SESSION['auth']['id'];
		$id_sp = $_GET['id'];
		$sql = "INSERT into contents (id_user, id_sp, created_at)
			 values ('$id_user','$id_sp', '$created_at')";
            executeQuery($sql);
            header ('Location:'.CLIENT_URL.'chitietsp');
	client_render('homepage/chitietsp.php');
	}


 ?>