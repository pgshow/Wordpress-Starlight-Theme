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
  <link rel="stylesheet" id="main-css" href="<?php bloginfo('template_url'); ?>/style.css?ver=<?php theme_version(); ?>" type="text/css" media="all" />
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js?ver=<?php theme_version(); ?>"></script>
  <!--[if (IE 6)|(IE 7)|(IE 8)]><script>alert("你的IE浏览器版本太低，网页排版出错，请换360、搜狗、QQ浏览器来访问！")</script><![endif]-->
  <!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script><![endif]--> 
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