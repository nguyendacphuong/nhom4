<?php 
	function donhang(){
		$sql = "select * from orders";
    	$cates = executeQuery($sql);
		admin_render('donhang/index.php', compact('cates'), 'admin-assets/custom/category_index.js');

	}
	
 ?>