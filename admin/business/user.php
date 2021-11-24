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
 ?>