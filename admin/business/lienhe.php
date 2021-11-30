<?php
require_once './dao/system_dao.php';
function lienhe(){
    $noi_dung = $_POST['noi_dung'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $sql = " INSERT INTO lienhe (noi_dung,name,phone) values
     ('$noi_dung','$name','$phone')";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'lien_he');
}

function cave_lienhe()
{
    $sql = "select * from lienhe ";
    $cates = pdo_query($sql, true);
    admin_render('product/lien_he.php', compact('cates','cate'), 'admin-assets/custom/lienhe.js');
}

?>