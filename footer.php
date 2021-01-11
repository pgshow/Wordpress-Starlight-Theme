  <footer class="footer">
    <div class="bottom_link">
      <ul>
        <?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav_bottom', 'echo' => false)) )); ?>
      </ul>
    </div>

    <div class="bottom_cont">
      <div class="b_logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('blogname'); ?>" width="168"></div>
      <div>
        <div class="pinfo">
            <span class="f_info_1">重庆市永川区星光大道999号1栋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span class="f_info_2">电话：400-100-9713&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>传真：051-816-8837<br /><span>
            <span class="f_info_4"><?php echo get_option( 'zh_cn_l10n_icp_num' );?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail : <a class="mail" href="mailto:manager@sidalit.net" rel="nofollow">manager@sidalit.net</a><br /></span>
          <div class="copyright">
            COPYRIGHT © 2016-2017 SIDALIT CO.,LTD ALL RIGHTS RESERVED.
          </div>
        </div>
      </div>
    </div>
	<?php
	if (is_home() || is_front_page()) {
	    wp_list_bookmarks('category=236&
category_orderby=id&category_before=<div class="links">&category_after=</div>&before=<li>&after=</li>&show_images=0&
show_description=1&orderby=name&title_before=<ul>&title_after=</ul>');
	}
?>
</footer>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js?ver=<?php theme_version(); ?>"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/float/kefu.css">
  <div id="box-kefu">
    <div class="kefu-close"></div>
    <div class="kefu-open">
        <div>
        <ul>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=1400483395&site=qq&menu=yes" target="_blank"><i class="qq"></i>在线客服</a></li>
            <li><a href="http://www.sidalit.com/contact/"><i class="txt"></i>联系电话</a></li>
        </ul>
        </div>
        <a href="javascript:;" class="close">关闭</a>
    </div>
</div>
<script>var online= new Array();</script>
<script src="http://webpresence.qq.com/getonline?Type=1&1400483395:"></script>
<script src="<?php bloginfo('template_url'); ?>/float/kefu.js?ver=<?php theme_version(); ?>"></script>
 </body>
</html>