<?php
    require_once './dao/system_dao.php';
    function home(){
        client_render('homepage/homepage.php');
    }
    function chitiet(){
        client_render('homepage/chitietsp.php');
    }
    function dangky(){
        client_render('homepage/dangky.php');
    }
    function dangnhap(){
        client_render('homepage/dangnhap.php');
    }
    function lienhe(){
        client_render('homepage/lienhe.php');
    }
?>