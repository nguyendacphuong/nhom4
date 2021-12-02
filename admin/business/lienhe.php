<?php 
    function contact_index(){
        $sql = "select * from feedback";
        $itemcontacts = select_page($sql);
        admin_render('contact/index.php', compact('itemcontacts'));
    }

?>