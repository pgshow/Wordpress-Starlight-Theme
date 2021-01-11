<?php get_header();?>
<div class="focusbanner" style="height:200px;background-image: url(http://demo.themebetter.com/themebetter-ent/wp-content/themes/themebetter-ent/img/b01.jpg)"></div>
<section class="container">
    <div class="pagecontainer">
    	<div class="pagemenus">
			<ul><?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'page_left_nav', 'echo' => false)) )); ?>
</ul>
		</div>
		<?php while (have_posts()) : the_post(); ?>
	    <div class="pagecontent">

			
	    		<header class="pagecontent-header">
	    			<h1><?php the_title(); ?></h1>
	    		</header>

	    		<article class="article-content">
	    			<?php the_content(); ?>
	    		</article>

			
	        
<div class="article-actions clearfix">
	<div class="shares">
        <strong>分享到：</strong>
        <a href="javascript:;" data-url="http://demo.themebetter.com/themebetter-ent/about" class="share-weixin" title="分享到微信"><i class="fa">&#xe608;</i></a><a etap="share" data-share="qzone" class="share-qzone" title="分享到QQ空间"><i class="fa">&#xe601;</i></a><a etap="share" data-share="weibo" class="share-tsina" title="分享到新浪微博"><i class="fa">&#xe602;</i></a><a etap="share" data-share="tqq" class="share-tqq" title="分享到腾讯微博"><i class="fa">&#xe606;</i></a><a etap="share" data-share="qq" class="share-sqq" title="分享到QQ好友"><i class="fa">&#xe603;</i></a><a etap="share" data-share="renren" class="share-renren" title="分享到人人网"><i class="fa">&#xe604;</i></a><a etap="share" data-share="douban" class="share-douban" title="分享到豆瓣网"><i class="fa">&#xe605;</i></a>
    </div>
</div>	    </div>
		<?php endwhile;  ?>
    </div>
</section>

<?php get_footer();?>