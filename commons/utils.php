<?php

const BASE_URL = "http://localhost/nhom4/";
const PUBLIC_URL = BASE_URL . 'public/';
const ADMIN_URL = BASE_URL . 'cp-admin/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const CLIENT_ASSET = BASE_URL . 'public/client-asset/';
const IMAGE_URL = BASE_URL . 'public/uploads/';
const ADMIN_ROLE = 1;
const USER_ROLE = 2;
const STAFF_ROLE = 3;


function dd(){
    $data = func_get_args();
    echo "<pre>";
    foreach($data as $item){
        var_dump($item);
    }
    echo "</pre>";

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

function getFavoriteProducts(){
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
        return false;
    }
    $userId = $_SESSION['auth']['id'];
    $getFavoriteProductQuery = "select * from favorite_products where user_id = $userId";
    $favoriteProducts = executeQuery($getFavoriteProductQuery, true);
    return $favoriteProducts;
}

function checkAuth($role_id = []){
    
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null || !in_array($_SESSION['auth']['role_id'], $role_id)){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
}

?>