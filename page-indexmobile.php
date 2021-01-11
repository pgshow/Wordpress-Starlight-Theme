<?php
//跳转到对应的移动端页
if (!wp_is_mobile()){
	lm214_url_301('/');
}
?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" /> 
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
  <meta http-equiv="cache-control" content="no-siteapp" /> 
  <title><?php wp_title();?></title> 
  <link rel="stylesheet" id="main-css" href="<?php bloginfo('template_url'); ?>/mobile/css/style.css" type="text/css" media="all" /> 
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile/css/animate.min.css">
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/mobile/js/jquery.js"></script> 
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/mobile/js/wow.min.js"></script> 
  <?php wp_head(); ?>
 </head> 
 <body <?php body_class(); ?>> 
  <header class="header"> 
   <div class="container">
   <?php
   $logoTagName = is_home() ? 'h1' : 'div';
   echo '<'.$logoTagName.' class="logo"><a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'-'.get_bloginfo('description').'"><img src="'.get_bloginfo('template_url').'/img/logo.png" /><span>'.get_bloginfo('name').'</span></a></'.$logoTagName.'>';
   ?>
    <div class="themebetter-ent-nav">
     <ul>
	     <?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav', 'echo' => false)) )); ?>
	 </ul>
    </div>
    <span class="themebetter-ent-nav-on"><i class="fa"></i></span> 
    <span class="themebetter-ent-nav-mask"></span> 
   </div> 
  </header>
  
  <?php echo deel_breadcrumbs() ?>


<!--轮播start-->
  <div class="glide homeslide"> 
   <div class="glide__arrows"> 
    <!--轮播切换
    <button class="glide__arrow prev" data-glide-dir="&lt;"><i class="fa"></i></button> 
    <button class="glide__arrow next" data-glide-dir="&gt;"><i class="fa"></i></button> 
  --> 
   </div> 
   <div class="glide__wrapper"> 
    <ul class="glide__track"> 
     <li class="glide__slide"><img src="<?php bloginfo('template_url'); ?>/mobile/i/lunbo1.jpg" /></li> 
     <li class="glide__slide"><img src="<?php bloginfo('template_url'); ?>/mobile/i/lunbo2.jpg" /></li> 
    </ul> 
   </div> 
   <div class="glide__bullets"></div> 
  </div> 
<!--轮播end-->


<!--常见问题start-->
  <div class="row changjianwenti">
    <div class="col-sm-12">
        <div class="text-center section-title-block section-title-block-1 mb-30 pb-40">
            <h2 class="section-title wow fadeIn" style="visibility: visible; animation-name: fadeIn;color:#333;font-weight: 700;font-family: 'Poppins', Helvetica, Arial, sans-serif;">常见问题</h2>
        </div>
    </div>
  </div>

<div class="item col-sm-4 mb-20 mt-20" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;padding-right: 0; padding-left: 0;">
  <?php
  $query_str = 'cat=11&showposts=2&paged=1';
  query_posts($query_str);
  //主循环
  while (have_posts()) : the_post();
  ?>
  <div class="media">
    <div class="media-left">
      <a href="<?php the_permalink() ?>">
        <img class="media-object" src="<?php bloginfo('template_url'); ?>/mobile/i/duihuakuang.png">
      </a>
    </div>
    <div class="media-body wow slideInRight">
      <h4 class="media-heading"><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h4>
    </div>
    <div class="media-bottom wow slideInLeft">
      <?php echo deel_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 55, '...'); ?>
    </div>
  </div>
  <?php
  endwhile; wp_reset_query();
  ?>
  
</div>
<!--常见问题end-->

<!--企业简介start-->
<div class="section-cta section-block text-center data-bg qiyejianjie1">
    <div class="cta-overlay blend-color-1"></div>
            <div class="col-sm-8 col-sm-offset-2">
                <div class="cta-title mt-40 mb-30">
                <div class="text-center section-title-block section-title-block-1 mb-30 pb-40">
                    <h2 class="section-title white-textcolor wow fadeIn">企业简介</h2>
                </div>
                <div class="col-half wow slideInRight"> 
                 <div class="testmonial-box-detail"> 
                  <p>　　斯达莱特（STARLIGHT）立志于生态能源分散分布式应用，潜心研发生态能源微型储能应用系统，在太阳能路灯和太阳能庭院灯方面率先引入了智能控制理念，现已获得发明专利3项，实用新型专利10项，外观专利13项。<br><br>　　由深圳斯达莱特亮化科技有限公司、重庆斯达莱特新能源科技有限公司以及 HONGKONG STARLIGHT BRIGHTEN TECHNOLOGY CO.,LTD 三个实体企业组成，集合研发、营销、生产和对外贸易共同为全球客户提供生态能源应用整体解决方案。</p> 
                 </div> 
                </div>
                <div class="cta-btns-group wow slideInLeft" style="text-align: center;margin-top: 30px;">
                <a href="/brand_mobile/" rel="nofollow" class="btn twp-btn twp-btn-primary chakan" style="width: 135px;height: 46px;line-height: 36px;font-size:16px;">查看详情</a>
                </div>
                </div>
            </div>
        </div>
<!--企业简介end-->

<div class="container" style="margin-top:20px;">
<!--视频中心start-->
  <div class="row changjianwenti">
    <div class="col-sm-12">
        <div class="text-center section-title-block section-title-block-1 mb-30 pb-40">
            <h2 class="section-title  wow fadeIn" style="visibility: visible; animation-name: fadeIn;color:#333;font-weight: 700;font-family: 'Poppins', Helvetica, Arial, sans-serif;">视频中心</h2>
        </div>
    </div>
  </div>
  
  <div class="row pt-20"> 
     <div class="col-sm-4 mb-20"> 
    <div class="about-us-box light-bgcolor wow slideInRight"> 
     <figure class="image-box"> 
      <a href="/2016-dashiji/"> <img src="http://www.sidalit.com/wp-content/themes/Starlight/img/c_introduce2.jpg" /> 
       <div class="image-box-hover"> 
        <div class="hover-wrapper"> 
         <span class="ion-paper-airplane alt-textcolor"></span> 
        </div> 
       </div> </a> 
     </figure> 
     <div class="image-box-detail wow slideInLeft"> 
      <p class="mb-10" style="text-align:center;padding-top:10px; padding-bottom:10px;">企业风范视频展示</p> 
     </div> 
    </div> 
   </div> 
   <div class="col-sm-4 mb-20"> 
    <div class="about-us-box light-bgcolor wow slideInLeft"> 
     <figure class="image-box"> 
      <a href="/all-solar-light/"> <img src="http://www.sidalit.com/wp-content/themes/Starlight/img/c_introduce1.jpg" /> 
       <div class="image-box-hover"> 
        <div class="hover-wrapper"> 
         <span class="ion-paper-airplane alt-textcolor"></span> 
        </div> 
       </div> </a> 
     </figure> 
     <div class="image-box-detail wow slideInRight"> 
      <p class="mb-10" style="text-align:center;padding-top:10px; padding-bottom:10px;"> 全系列太阳能灯具产品演示 </p> 
     </div> 
    </div> 
   </div> 

   <div class="col-sm-4 mb-20"> 
    <div class="about-us-box light-bgcolor wow slideInRight"> 
     <figure class="image-box"> 
      <a href="http://www.sidalit.com/solar-light-videos/"> <img src="http://www.sidalit.com/wp-content/themes/Starlight/img/c_introduce3.jpg" /> 
       <div class="image-box-hover"> 
        <div class="hover-wrapper"> 
         <span class="ion-paper-airplane alt-textcolor"></span> 
        </div> 
       </div> </a> 
     </figure> 
     <div class="image-box-detail wow slideInLeft"> 
      <p class="mb-10" style="text-align:center;padding-top:10px; padding-bottom:10px;"> 太阳能照明产品视频展示 </p> 
     </div> 
    </div> 
   </div> 
  </div>
  </div>
<!--视频中心end-->

<!--推荐灯具start-->
   <div class="testmonial-section section-bg-1 section-cta section-block data-bg tuijiandengju"> 
    <div class="cta-overlay blend-color"></div> 
     <div class="col-pad-0"> 
      <div class="testmonial-wrapper pt-50 clearfix"> 
       <div class="col-sm-12"> 
        <div class="text-center section-title-block section-title-block-1 mb-30 pb-40"> 
         <h2 class="section-title wow fadeIn" style="visibility: visible; animation-name: fadeIn;">推荐太阳能灯具</h2> 
        </div> 
       </div> 
       <div class="col-md-6 col-sm-12 col-xs-12 clearpadding" data-mh="col-group" style="margin-top: -15px"> 
        <div class="cta-overlay secondary-bgcolor"></div> 
        <div class="col-half col-half-left wow slideInRight"> 
         <figure class="image-box"> 
          <a href="#"> <img src="<?php bloginfo('template_url'); ?>/mobile/i/index1.jpg" />  </a> 
         </figure> 
        </div> 
        <div class="col-half" style="background: #425eb5;"> 
         <div class="testmonial-box-detail"> 
          <h3 class="block-title wow slideInLeft" style="margin-top: 15px;"> <a href="/solar-street-light/yitishiludeng/">太阳能一体式路灯</a> </h3> 
          <div class="title-seperator alt-bgcolor wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;"></div> 
          <p class="wow fadeIn">斯达莱特太阳能一体式路灯自主研发的智能控制平台赋予照明系统更加智能的控制模式——春夏秋冬四季模式自动切换，以充定放的智能控制延长锂电池寿命。</p> 
         </div> 
        </div> 
       </div> 

       <div class="col-md-6 col-sm-12 col-xs-12 clearpadding" data-mh="col-group" style="margin-top: 15px;"> 
        <div class="cta-overlay secondary-bgcolor"></div> 
        <div class="col-half col-half-left wow slideInLeft"> 
         <figure class="image-box"> 
          <a href="#"> <img src="<?php bloginfo('template_url'); ?>/mobile/i/index2.jpg" /> </a> 
         </figure> 
        </div> 
        <div class="col-half" style="background: #e34258;"> 
         <div class="testmonial-box-detail"> 
          <h3 class="block-title wow slideInRight" style="margin-top: 15px;"> <a href="/solar/tingyuandeng/">太阳能农家庭院灯</a> </h3> 
          <div class="title-seperator alt-bgcolor wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;"></div>
          <p class="wow fadeIn">深入融合村镇居民生产生活的照明需求，采用针对农家庭院的控制器模式，高亮的太阳能庭院灯划破漆黑的夜空，照亮村庄的每一个角落，让我们的村民走近智慧生活。</p> 
         </div> 
        </div> 
       </div> 
	   
	   <div class="col-md-6 col-sm-12 col-xs-12 clearpadding" data-mh="col-group" style="margin-top: 15px;"> 
        <div class="cta-overlay secondary-bgcolor"></div> 
        <div class="col-half col-half-left wow slideInLeft"> 
         <figure class="image-box"> 
          <a href="#"> <img src="<?php bloginfo('template_url'); ?>/mobile/i/index3.jpg" /> </a> 
         </figure> 
        </div> 
        <div class="col-half" style="background: #425eb5;"> 
         <div class="testmonial-box-detail"> 
          <h3 class="block-title wow slideInRight" style="margin-top: 15px;"> <a href="/solar/weiqiangdeng/">太阳能围墙灯</a> </h3> 
          <div class="title-seperator alt-bgcolor wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;"></div>
          <p class="wow fadeIn">灯体简约优美，可安置在建筑外围和广场绿地的围墙、立柱、台阶上，物联网时代，手机APP个性调节亮灯模式，营造节日气氛，利用光的表现力，抒写优美城市心情。</p> 
         </div> 
        </div> 
       </div>
	   
	   <div class="col-md-6 col-sm-12 col-xs-12 clearpadding" data-mh="col-group" style="margin-top: 15px;"> 
        <div class="cta-overlay secondary-bgcolor"></div> 
        <div class="col-half col-half-left wow slideInLeft"> 
         <figure class="image-box"> 
          <a href="#"> <img src="<?php bloginfo('template_url'); ?>/mobile/i/index4.jpg" /> </a> 
         </figure> 
        </div> 
        <div class="col-half" style="background: #e34258;"> 
         <div class="testmonial-box-detail"> 
          <h3 class="block-title wow slideInRight" style="margin-top: 15px;"> <a href="/solar-street-light/jingguandeng/">太阳能景观灯</a> </h3> 
          <div class="title-seperator alt-bgcolor wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;"></div>
          <p class="wow fadeIn">个性定制化的设计，完美将产品融入不同风格的园林景观，浑然一体、自然优美。科学智能的照明控制系统让产品更加符合节能环保理念，优质的生产质量控制让产品更加持久耐用。</p> 
         </div> 
        </div> 
       </div>
	   
	   
       
     </div> 
	      <div class="gengduochanpin">
          <h2><a href="http://www.sidalit.com/solar/" rel="nofollow">更多产品</a></h2>
       </div>
    </div> 
   </div> 
<!--推荐灯具end-->

<!--最新资讯start-->
<div class="item col-sm-4 mb-20 mt-20 wow fadeIn" style="margin-top: -20px">
<section id="the-automobile-blog-layout-2" class="widget the_automobile_blog_widgets"> 
   <div class="blog-section pt-50 pb-50"> 
    <div class="container"> 
     <div class="row"> 
      <div class="col-sm-12"> 
       <div class="text-center section-title-block section-title-block-1 mb-30 pb-40"> 
        <h2 class="section-title  wow fadeIn" style="visibility: visible; animation-name: fadeIn;">最新资讯</h2> 
       </div> 
      </div> 

       <div class="glide homeslide"  style="margin-top: -15px;"> 
     <div class="glide__arrows"> 
     </div> 
     <div class="glide__wrapper"> 
      <ul class="glide__track"> 
	  <?php
	  $query_str = 'cat=4,5,11&showposts=8&paged=1';
	  query_posts($query_str);
	  //主循环
	  while (have_posts()) : the_post();
	  ?>
       <li class="glide__slide">
        <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('product-thumb') ?>" /></a>
        <div class="media">
        <div class="media-left">
          <a href="<?php the_permalink() ?>">
            <img class="media-object" src="<?php bloginfo('template_url'); ?>/mobile/i/duihuakuang.png">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading to-left"><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h4>
        </div>
        <div class="media-bottom" style="text-align: left">
          <?php echo deel_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 52, '...'); ?>
        </div>
      </div>
       </li> 
      <?php
	  endwhile; wp_reset_query();
	  ?>
      </ul> 
     </div> 
     <div class="glide__bullets glide__bullets1" style="bottom: 0%;"></div> 
    </div> 

    </div> 
   </div> 
   </div>
  </section>
  </div>
 <!--最新资讯end-->
 <!--footer start-->
<div class="footer">
  <h3>联系我们</h3>
  <div>
    <span class="tel">400 100 9713</span>
    <span class="time">一至周五:8:30-18:00</span>
  </div>
  <ul>
    <?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav_bottom', 'echo' => false)) )); ?>
  </ul>
</div>
 <!--footer end-->
 <script>
   new WOW().init();
 </script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/mobile/js/main.js"></script> 
</body>
</html>