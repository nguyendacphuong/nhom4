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
    case 'cp-admin':
        checkAuth([ADMIN_ROLE,STAFF_ROLE]);
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin/danh-muc':
        checkAuth([ADMIN_ROLE,STAFF_ROLE]);
        require_once './admin/business/category.php';
        cate_index();
        break;
    case 'cp-admin/danh-muc/xoa':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        cate_remove();
        break;
    case 'cp-admin/danh-muc/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        cate_add_form();
        break;
    case 'cp-admin/danh-muc/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        cate_save_add();
        break;
        //    thương hiệu
    case 'cp-admin/thuong-hieu':
        checkAuth([ADMIN_ROLE,STAFF_ROLE]);
        require_once './admin/business/category.php';
        brand_index();
        break;
    case 'cp-admin/thuong-hieu/xoa':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_remove();
        break;
    case 'cp-admin/thuong-hieu/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_add_form();
        break;
    case 'cp-admin/thuong-hieu/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_save_add();
        break;
    case 'cp-admin/thuong-hieu/capnhat':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_edit_form();
        break;
    case 'cp-admin/thuong-hieu/update':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_update_form();
        break;
        // and thương hiệu
    case 'chitietsp':
        require_once './client/business/dashboard.php';
        chitiet();
        break;
    case 'dangnhap':
        require_once './client/business/homepage.php';
        dangnhap();
        break;
    case 'dang-xuat':
        require_once './client/business/homepage.php';
        logout();
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
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        edit_form();
        break;
    case 'cp-admin/danh-muc/update':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        update_form();
        break;
        // and danh mục

    case 'cp-admin/sanpham':
        checkAuth([ADMIN_ROLE,STAFF_ROLE]);
        require_once './admin/business/product.php';
        product_index();
        break;

    case 'cp-admin/sanpham/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        cate_add_form();
        break;
    case 'cp-admin/sanpham/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        cate_save_add();
        break;
    // end sản phẩm

    case 'cp-admin/sanpham/capnhat':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        edit_form();
        break;
    case 'cp-admin/sanpham/update':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        update_form();
        break;
        // end sản phẩm
    case 'cp-admin/taikhoan':
        checkAuth([ADMIN_ROLE,STAFF_ROLE]);
        require_once './admin/business/user.php';
        user_index();
        break;
    case 'cp-admin/taikhoan/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        user_add();
        break;
    case 'cp-admin/taikhoan/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        user_save_add();
        break;
    case 'cp-admin/taikhoan/edit-user':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        edit_user();
        break;
    case 'cp-admin/taikhoan/update-user':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        update_user();


    case 'cp-admin/taikhoan/xoa':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        user_remove();
        //aa
    case 'my-user':
        checkAuth([ADMIN_ROLE,STAFF_ROLE,USER_ROLE]);
        require_once './client/business/taikhoan.php';
        my_user();
        //aa
    case 'my-user/edit':
        require_once './client/business/taikhoan.php';
        edit_my_user();
        break;
    case 'my-user/update':
        require_once './client/business/taikhoan.php';
        my_user_update();

        break;
    //hiển thị sản phẩm theo danh mục
    case 'quan':
        require_once './client/business/dashboard.php';
        quan();
        break;
    case 'ao':
        require_once './client/business/dashboard.php';
        ao();
        break;
    case 'nam':
        require_once './client/business/dashboard.php';
        nam();
        break;
    case 'nu':
        require_once './client/business/dashboard.php';
        nu();
        break;

        //aa
    
    

    break;
    default:
        # code...
        break;
}