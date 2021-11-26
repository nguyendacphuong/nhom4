<?php
session_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";
require_once './commons/utils.php';
require_once './dao/system_dao.php';
require_once 'globol.php';
switch ($url) {
    case '/':
        require_once './client/business/dashboard.php';
        dashboard_index();
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
<<<<<<< Updated upstream
       
=======
        //    thương hiệu
    case 'cp-admin/thuong-hieu':
        require_once './admin/business/category.php';
        brand_index();
        break;
    case 'cp-admin/thuong-hieu/xoa':
        require_once './admin/business/category.php';
        brand_remove();
        break;
    case 'cp-admin/thuong-hieu/tao-moi':
        require_once './admin/business/category.php';
        brand_add_form();
        break;
    case 'cp-admin/thuong-hieu/luu-tao-moi':
        require_once './admin/business/category.php';
        brand_save_add();
        break;
    case 'cp-admin/thuong-hieu/capnhat':
        require_once './admin/business/category.php';
        brand_edit_form();
        break;
    case 'cp-admin/thuong-hieu/update':
        require_once './admin/business/category.php';
        brand_update_form();
        break;
        // and thương hiệu
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
    case 'cp-admin/sanpham/xoa':
        require_once './admin/business/product.php';
        product_remove();
        break;
        // end sản phẩm
>>>>>>> Stashed changes

    case 'cp-admin/sanpham/capnhat':
        require_once './admin/business/product.php';
        edit_form();
        break;
    case 'cp-admin/sanpham/update':
        require_once './admin/business/product.php';
        update_form();
        break;
    case 'cp-admin/taikhoan':
        require_once './admin/business/user.php';
        user_index();
        break;
    case 'cp-admin/taikhoan/tao-moi':
        require_once './admin/business/user.php';
        user_add();
        break;
<<<<<<< Updated upstream
    

=======
    case 'cp-admin/taikhoan/luu-tao-moi':
        require_once './admin/business/user.php';
        user_save_add();
        break;
    case 'cp-admin/taikhoan/edit-user':
        require_once './admin/business/user.php';
        edit_user();
        break;
    case 'cp-admin/taikhoan/update-user':
        require_once './admin/business/user.php';
        update_user();

        // 
    case 'cp-admin/slide':
        require_once './admin/business/category.php';
        slide_index();
        break;
    case 'cp-admin/slide/tao-moi':
        require_once './admin/business/category.php';
        slide_add();
        break;
    case 'cp-admin/slide/luu-tao-moi':
        require_once './admin/business/category.php';
        slide_save_add();
        break;
    case 'cp-admin/slide/xoa':
        require_once './admin/business/category.php';
        slide_remove();
        break;
    case 'cp-admin/slide/capnhat':
        require_once './admin/business/category.php';
        slide_edit_form();
        break;
    case 'cp-admin/slide/update':
        require_once './admin/business/category.php';
        slide_update_form();
        break;

// ================================ TIN TỨC ======================================

case 'cp-admin/news':
    require_once './admin/business/dashboard.php';
    news_index();
    break;
case 'cp-admin/news/tao-moi':
    require_once './admin/business/dashboard.php';
    news_add();
    break;
case 'cp-admin/news/luu-tao-moi':
    require_once './admin/business/dashboard.php';
    news_save_add();
    break;
case 'cp-admin/news/xoa':
    require_once './admin/business/dashboard.php';
    news_remove();
    break;
case 'cp-admin/news/capnhat':
    require_once './admin/business/dashboard.php';
    news_edit_form();
    break;
case 'cp-admin/news/update':
    require_once './admin/business/dashboard.php';
    news_update_form();
    break;
>>>>>>> Stashed changes
    default:
        # code...
        break;
}
