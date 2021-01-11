<section class="container">
    <div class="content-wrap">
    	<div class="content">

    		<?php while (have_posts()) : the_post(); ?>
            <div class="article-container">
        		
                    <header class="article-header">
                        <h1 class="article-title"><?php the_title(); ?></h1>
                        <div class="article-meta">
                            <span class="item item-time"><?php the_time('Y-n-j') ?>  </span>
                            <span class="item item-edit"><?php edit_post_link('编辑'); ?></span>
                        </div>
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