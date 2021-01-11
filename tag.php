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

<section class="container">
	
	<div class="leader">
	    <h1><?php echo single_tag_title(); ?></h1>
	</div>

	
	<div class="themebetter-ent-loop-default-content">
	
	<?php
	//自定义文章输出数量
	$slug = get_query_var('tag');  //获取标签别名
	
	$limit = 10; //每页文章数
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	$query_str = 'tag='.$slug.'&showposts='.$limit.'&paged='.$paged;
	
	query_posts($query_str);
	
	//主循环
	while (have_posts()) : the_post();
	?><article class="themebetter-ent-loop-item"><a class="thumbnail" href="<?php the_permalink() ?>"><?php deel_thumbnail(); ?></a><time><?php the_time('Y-n-j') ?></time><h2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h2><div class="desc"><?php echo deel_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 80, '...'); ?></div></article><?php endwhile; wp_reset_query();?>
	  
	</div>
	
	<div class="tag_cloud">
	  <div class="hot_tags">热门标签</div>
	  <div class="line">
	    <img src="http://www.sidalit.com/wp-content/themes/starlight/img/tags_line.png" />
	  </div>
	  <div class="tags">
		  <?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=5000');?>
	  </div>
	</div>
	
	<?php deel_paging($query_str); ?>
	
</section>
<style>
.pagination {
	margin-top: 10px;
}
@media (max-width: 768px) {
	.pagination {
		margin-top: 20px;
	}
}
@media (max-width: 544px) {
	.pagination {
		margin-top: 22px;
	}
}
</style>

<?php get_footer();?>