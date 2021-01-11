<?php
/*
YARPP Template: Thumbnails
Description: YARPP文章关联插件所需要的模板文件
Mark: 下面的内容进行了改写，请勿覆盖。注意while之间不要有空格，不然前端会有错位
*/ ?>
<div class="postitems">
	<h3><i class="fa">&#xe630;</i>相关推荐</h3>
	<?php if (have_posts()):?>
	<ul>
		<?php
while (have_posts()) : the_post();
//获取略缩图URL
?><li><a class="thumbnail" href="<?php the_permalink() ?>"><?php deel_thumbnail(); ?><span class="tit"><?php the_title_attribute(); ?></span></a></li><?php endwhile;?>
	</ul>
	<?php else: ?>
	<p>还没有关联文章。</p>
	<?php endif; ?>
</div>