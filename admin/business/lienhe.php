<?php 
    function contact_index(){
        $sql = "select * from feedback";
        $itemcontacts = select_page($sql);
        admin_render('contact/index.php', compact('itemcontacts') ,'admin-assets/custom/category_index.js');
    }
    function contact_remove(){
        $id = $_GET['id'];
        $sql = "delete from feedback where id = $id";
        select_page($sql);
        header("location: " . ADMIN_URL . 'contact');
    }
    function email_form(){
        admin_render('category/brand-add.php', []);
    }
?>