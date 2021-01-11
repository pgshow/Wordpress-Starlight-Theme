<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/product.css?ver=<?php theme_version(); ?>" />
<div id="productslider">
	<div class="container">
		<div id="Glide" class="glide">
			<div class="glide__arrows">
				<a class="glide__arrow prev" data-glide-dir="<">
					<img src="<?php bloginfo('template_url'); ?>/img/lft.jpg" /></a>
				<a class="glide__arrow next" data-glide-dir=">">
					<img src="<?php bloginfo('template_url'); ?>/img/rt.jpg" /></a>
			</div>
			<div class="glide__wrapper">
				<ul class="glide__track">
				<?php
				//读取产品特色图片——中尺寸
				function pthumbnail1($name) {
					if (class_exists('MultiPostThumbnails')) {
						$img_url_m = pthumbnail_url($name, 'product-thumb');
						$img_url_b = pthumbnail_url($name, 'Full');
						if($img_url_m) {
							echo '<li class="glide__slide"><a href="'.$img_url_b.'"><img src="'.$img_url_m.'"></a>';
						}
					}
				}
				
				//显示5张特色图片——中
				pthumbnail1('first-image');
				pthumbnail1('second-image');
				pthumbnail1('third-image');
				pthumbnail1('fourth-image');
				pthumbnail1('fifth-image');
				?>
				</ul>
			</div>
			<div class="glide__bullets">
				<?php
				//显示产品特色图片小
				function pthumbnail2($name, $num) {
					if(class_exists('MultiPostThumbnails')) {
						$img_url_s = pthumbnail_url($name, 'product-small');
						if($img_url_s) {
							echo '<a href="#" data-glide-trigger="#Glide" data-glide-dir="='.$num.'"><img src="'.$img_url_s.'" /></a>';
						}
					}
				}
				?>
				<?php
				//显示5张特色图片——小尺寸
				pthumbnail2('first-image',1);
				pthumbnail2('second-image',2);
				pthumbnail2('third-image',3);
				pthumbnail2('fourth-image',4);
				pthumbnail2('fifth-image',5);
				?>
			</div>
		</div>
		<div class="productinfobox">
			<div class="productinfo">
				<h1><?php the_title(); ?></h1>
				<p><?php the_excerpt(); ?></p>
			</div>
			<div class="product_other">
				<?php
				//输出产品属性
				$product_attributes = get_post_meta( get_the_ID(), '_slight_product_attributes', true );
				$product_attributes = preg_split('/\n|\r\n?/', strip_tags($product_attributes));
				
				foreach($product_attributes as $value){
					echo '<span>'.$value.'</span>';
				}
				?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>


<section class="container">
    <div class="content-wrap">
    	<div class="content">

    		<?php while (have_posts()) : the_post(); ?>
            <div class="article-container">
        		
                    <header class="article-header">
					    <div class="article-title product_detail"> </div>
                    </header>
                
        		<article class="article-content">
        			<?php the_content(); ?>
                </article>

                <div class="article-tags"><?php the_tags('', '', ''); ?></div>
                <div class="article-actions clearfix"><?php deel_share(); ?></div>
				
            </div>
            <?php endwhile;  ?>
            
                        
                            <?php related_posts(); ?>
            
    	</div>
    </div>
	
	<?php get_sidebar();?>
    
    </section>
    <script>
	$(document).ready(function() {
		//页面dom加载完后才执行
		$("#Glide").glide({type: "carousel"});
	});
	</script>