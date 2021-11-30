<?php 
	function comment_index(){
		$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
		$sql = "select * from contents where emailcmt like '%$keyword%'";
		$cates = executeQuery($sql, true);
		admin_render('comments/index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
	}
 ?>