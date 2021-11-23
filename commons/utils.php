<?php

const BASE_URL = "http://localhost/nhom4/";
const PUBLIC_URL = BASE_URL . 'public/';
const ADMIN_URL = BASE_URL . 'cp-admin/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const CLIENT_ASSET = BASE_URL . 'public/client-asset/';
const IMAGE_URL = CLIENT_ASSET . 'img/';


function dd(){
    $data = func_get_args();
    echo "<pre>";
    var_dump($data);
    echo "<pre>";

}

function client_render($view, $data = []){
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}

function admin_render($view, $data = [], $jsFile = null){
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}


?>