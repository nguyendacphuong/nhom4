<?php
function donhang()
{
	$sql = "select * from tinhtrangdh";
	$list = executeQuery($sql);
	$sql = "SELECT * from orders order by id desc";
    $sql = "SELECT orders.*,tinhtrangdh.name AS 'status' FROM orders JOIN tinhtrangdh ON orders.id_ttdh = tinhtrangdh.id";
	$cates = executeQuery($sql, true);
	admin_render('donhang/index.php', compact('cates','list'), 'admin-assets/custom/category_index.js');
}
function edit_donhangct(){
	$id = isset($_GET['id']) ? $_GET['id'] : "";
	$sql = "SELECT * from orders where id = $id ";
	$list = executeQuery($sql, true);
	$sql = "SELECT * from order_detail";
	$cates = executeQuery($sql, true);
	$sql = "SELECT * from tinhtrangdh";
	$tt = executeQuery($sql, true);
	admin_render('donhang/donhangct.php', compact('list','cates','tt'));
}

function update_dh(){
	$id = $_POST['id'];
	$id_ttdh = $_POST['id_ttdh'];
	$updated_at = date('Y-m-d H:s:i');
    $sql = " UPDATE orders set id_ttdh = '$id_ttdh', updated_at = '$updated_at' where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'donhang');

	
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