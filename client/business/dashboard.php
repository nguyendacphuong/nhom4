<?php

function dashboard_index(){
    $sql = "select * from product limit 0,6";
    $items = pdo_query($sql);

    $sql = "select * from product order by id desc limit 0,13";
    $newitems = pdo_query($sql);
    client_render('homepage/slider.php', compact('items', 'newitems')); 
}


?>