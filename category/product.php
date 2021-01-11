<section class="container">
	
	<div class="leader">
	    <h1><?php single_cat_title() ?></h1>
	</div>

	
	<div class="themebetter-ent-loop-product-container">

    <div class="themebetter-ent-loop-product-filters">
                <h3><i class="fa">&#xe61f;</i>产品中心 <span class="far" etap="all_lists"><i class="fa">&#xe6a8;</i></span></h3>
        <ul>
            	<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'product_left_nav', 'echo' => false)) )); ?>
        </ul>
    </div>

    <div class="themebetter-ent-loop-product-content">
	<?php
	//自定义文章输出数量
	$cat = get_query_var('cat');
	$yourcat = get_category($cat);
	$slug = $yourcat->slug;  //获取分类别名
	
	//如果分类里只有一个产品，则跳转到该产品页
	$the_products = get_the_category();
	
	$limit = 12; //每页文章数
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	//如果是产品中心首页，就要把太阳能路灯分类也一并查询
	if($slug == 'solar') {
		//3为产品中心ID，234为太阳能路灯分类ID
		$query_str = 'cat=3,234&showposts='.$limit.'&paged='.$paged;
	} else {
		$query_str = 'category_name='.$slug.'&showposts='.$limit.'&paged='.$paged;
	}
	
	$post_list = query_posts($query_str);
	
	//主循环
	while (have_posts()) : the_post();
	?><article class="themebetter-ent-loop-item"><a class="thumbnail" href="<?php the_permalink() ?>"><?php deel_thumbnail(); ?></a><h2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h2><footer><span class="contact"><a href="/contact/"><img src="<?php bloginfo('template_url'); ?>/img/contact.png" /></a></span></footer></article><?php endwhile; wp_reset_query();?>
	
	</div>
	
	<?php deel_paging($query_str); ?>
	</div>
	
</section>
<?php
//如果分类里只有一个产品，则跳转到该产品页
if(!is_paged() && sizeof($post_list) <= 1) {
	$the_article = get_posts('category_name='.$slug);
		
	$go_url = get_permalink( $the_article[0]->ID );
		
	if($go_url) {
		echo '<script>location.href="'.$go_url.'";</script>';
	}
}
?>