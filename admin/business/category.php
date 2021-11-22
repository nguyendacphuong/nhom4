<?php

function cate_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from danhmuc where name like '%$keyword%'";
    $cates = executeQuery($sql, true);

    // hiển thị view
    admin_render('category/index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
}

function cate_remove()
{
    $id = $_GET['id'];
    $sql = "delete from danhmuc where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
}

function cate_add_form()
{
    admin_render('category/add-form.php', [], 'admin-assets/custom/category_add.js');
}

function cate_save_add()
{
    $name = $_POST['name'];
    $show_menu = isset($_POST['show_menu']) ? 1 : 0;
    $sql = "insert into danhmuc (name, show_menu) values ('$name', $show_menu)";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
    
}
function edit_form()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from danhmuc where id = $id";
    $cates = executeQuery($sql, '');

    // hiển thị view
    admin_render('category/edit-form.php', compact('cates'), 'admin-assets/custom/category_index.js');
}
function update_form()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $show_menu = isset($_POST['show_menu']) ? 1 : 0;
    $sql = " UPDATE danhmuc set name = '$name',show_menu = '$show_menu' where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
}
// and danh mục

?>
