<?php 
	function donhang(){
		$sql = "select * from orders order by id desc";
    	$cates = executeQuery($sql, true);
		admin_render('donhang/index.php', compact('cates'), 'admin-assets/custom/category_index.js');

	}
 ?>