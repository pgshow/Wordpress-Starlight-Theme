<section class="container">
	
	<div class="leader">
	    <h1><?php single_cat_title() ?></h1>
	</div>

	
	<div class="themebetter-ent-loop-column-content">
	
	<?php
	//自定义文章输出数量
	$cat = get_query_var('cat');
	$yourcat = get_category($cat);
	$slug = $yourcat->slug;  //获取分类别名
	
	$limit = 20; //每页文章数
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	$query_str = 'category_name='.$slug.'&showposts='.$limit.'&paged='.$paged;
	
	query_posts($query_str);
	
	//主循环
	while (have_posts()) : the_post();
	?><article class="themebetter-ent-loop-item"><a class="thumbnail" href="<?php the_permalink() ?>"><?php deel_thumbnail(); ?></a><h2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h2></article><?php endwhile; wp_reset_query();?>
	
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