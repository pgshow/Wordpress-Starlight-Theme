<?php  
include('wid-textbanner.php'); //文本助手
include('wid-product.php');    //产品小工具
include('wid-asst.php');       // 富媒体助手

//add_action('widgets_init','unregister_d_widget');
function unregister_d_widget(){
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
}

?>