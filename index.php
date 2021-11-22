<?php
session_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";
require_once './commons/utils.php';
require_once './dao/system_dao.php';
require_once 'globol.php';
switch ($url) {
    case '/':
        require_once './client/business/homepage.php';
        home();
        break;
    case 'danh-muc':
        require_once './client/business/category.php';
        list_product();
        break;
    case 'cp-admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin/danh-muc':
        require_once './admin/business/category.php';
        cate_index();
        break;
    case 'cp-admin/danh-muc/xoa':
        require_once './admin/business/category.php';
        cate_remove();
        break;
    case 'cp-admin/danh-muc/tao-moi':
        require_once './admin/business/category.php';
        cate_add_form();
        break;
    case 'cp-admin/danh-muc/luu-tao-moi':
        require_once './admin/business/category.php';
        cate_save_add();
        break;
        // -----------------------------------------
    case 'trangchu':
        require_once './client/business/dashboard.php';
        dashboard_index();
        break;
        // -----------------------------------------------
    case 'chitietsp':
        require_once './client/business/homepage.php';
        chitiet();
        break;
    case 'dangnhap':
        require_once './client/business/homepage.php';
        dangnhap();
        break;
    case 'dang-ky':
        require_once './client/business/taikhoan.php';
        dangky();
        break;
    case 'lienhe':
        require_once './client/business/homepage.php';
        lienhe();
        break;

    case 'cp-admin/danh-muc/capnhat':
        require_once './admin/business/category.php';
        edit_form();
        break;
    case 'cp-admin/danh-muc/update':
        require_once './admin/business/category.php';
        update_form();
        break;
        // and danh mục

    case 'cp-admin/sanpham':
        require_once './admin/business/product.php';
        product_index();
        break;
    case 'cp-admin/sanpham/tao-moi':
        require_once './admin/business/product.php';
        cate_add_form();
        break;
    case 'cp-admin/sanpham/luu-tao-moi':
        require_once './admin/business/product.php';
        cate_save_add();
        break;


    default:
        # code...
        break;
}
