<?php

$themename = $dname.'主题';

$options = array(
    "s_description",
);

function mytheme_add_admin() {
    global $themename, $options;
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
                update_option( $value, $_REQUEST[ $value ] ); 
            }
            header("Location: admin.php?page=starlight.php&saved=true");
            die;
        }
    }
    add_theme_page($themename." Options", $themename."设置", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_admin() {
    global $themename, $options;
    $i=0;
    if ( $_REQUEST['saved'] ) echo '<div class="updated settings-error"><p>'.$themename.'修改已保存</p></div>';
?>

<div class="wrap d_wrap">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/admin/admin.css"/>
    <h2><?php echo $themename; ?>设置
        <span class="d_themedesc">设计师：<a href="http://www.romantic214.com/" target="_blank">火翼</a></span>
    </h2>

<form method="post" class="d_formwrap">
    <table>
    <thead>
        <tr>
            <th width="200"></th>
            <th></th>
        </tr>
    </thead>
    <tr>
        <td class="d_tit">说明</td>
        <td>
            <input class="ipt-b" type="text" id="s_description" name="s_description" value="<?php echo dopt('s_description'); ?>">
        </td>
    </tr>
    
    <tr>
    	<td class="d_tit"></td>
    	<td>
    		<div class="d_desc">
    			<input class="button-primary" name="save" type="submit" value="保存设置">
    			</div>
    		<input type="hidden" name="action" value="save">
    		</td>
    	</tr>

    </table>
</form>
</div>
<script>
var aaa = []
jQuery('.d_wrap input, .d_wrap textarea').each(function(e){
    if( jQuery(this).attr('id') ) aaa.push( jQuery(this).attr('id') )
})
console.log( aaa )
</script>
<?php } ?>
<?php add_action('admin_menu', 'mytheme_add_admin');?>