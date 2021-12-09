<?php
function donhang()
{
	$sql = "select * from orders order by id desc";
	$cates = executeQuery($sql, true);
	admin_render('donhang/index.php', compact('cates'), 'admin-assets/custom/category_index.js');
}

function ad_donhangct(){
	admin_render('donhang/donhangct.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

</body>

</html>