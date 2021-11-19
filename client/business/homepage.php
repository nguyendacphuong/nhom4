<?php
require_once './dao/system_dao.php';


    function home(){
        $name = 'Nguyen Dac Phuong';
        $age = 21;
        // $mainView = "./client/views/homepage/index.php";
        client_render('homepage/index.php',compact('name','age'));
    }




?>