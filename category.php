<?php
get_header();

//用换行符分割分类图像描述
$category_description = preg_split('/\n|\r\n?/', strip_tags(category_description()));
?>

</div>

<div class="focusbanner" style="height:200px;background-image: url(<?php
//如果该栏目banner图没设定，就调用默认的
if (function_exists('z_taxonomy_image_url')) {
	if(z_taxonomy_image_url()) {
	    echo z_taxonomy_image_url();
	} else {
	    echo get_bloginfo('template_url').'/img/category_banner.jpg';
	}
} else {
	echo get_bloginfo('template_url').'/img/fail_categories_images.png';
}
 ?>)">
	  <div class="title1"><?php echo $category_description[0]; ?></div>
	  <div class="title2"><?php echo $category_description[1]; ?></div>
</div>
<?php
//获取分类模板名
$tmp_val = get_option('_dxwp_cat_template_' . $cat);

//选择对应的分类模板
switch ($tmp_val)
{
	case 'product':
	  include(TEMPLATEPATH . '/category/product.php');
	  break;
	  
	case 'case':
	  include(TEMPLATEPATH . '/category/case.php');
	  break;
	  
	default:
	  include(TEMPLATEPATH . '/category/default.php');
}
?>

<?php get_footer();?>