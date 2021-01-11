<?php
//跳转到对应的移动端页
if (wp_is_mobile()){
	lm214_url_301('/indexmobile/');
}
?>

<?php get_header();?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/indexstyle.css?ver=<?php theme_version(); ?>" />

  <div class="glide homeslide"> 
   <div class="glide__arrows"> 
    <button class="glide__arrow prev" data-glide-dir="&lt;"><i class="fa"></i></button> 
    <button class="glide__arrow next" data-glide-dir="&gt;"><i class="fa"></i></button> 
   </div> 
   <div class="glide__wrapper"> 
    <ul class="glide__track">
     <li class="glide__slide"><img src="<?php bloginfo('template_url'); ?>/img/b01.jpg" /></li>
     <li class="glide__slide"><img src="<?php bloginfo('template_url'); ?>/img/b02.jpg" /></li>
    </ul> 
   </div> 
   <div class="glide__bullets"></div> 
  </div> 
  <div id="hotitem">
			<div class="container">
				<h1>创新太阳能产品</h1>
				<p>重庆斯达莱特是一家专业的太阳能路灯生产厂家，致力于研发太阳能路灯、太阳能庭院灯等新能源产品，<br />公司潜心挖掘市场需求，开发了一批具有自主知识产权的新型产品，目前已成为市政户外照明工程项目优选生产商。</p>
				<ul id="itemlist" onscroll="showli();">
					<li>
						<div class="itembox i1">
							<a href="http://www.sidalit.com/solar-street-light/"><img src="<?php bloginfo('template_url'); ?>/img/business_img01.jpg" /></a>
							<h2><a href="http://www.sidalit.com/solar-street-light/">太阳能路灯</a></h2>
						</div>
					</li>
					<li>
						<div class="itembox i2">
							<a href="http://www.sidalit.com/solar/tingyuandeng/"><img src="<?php bloginfo('template_url'); ?>/img/business_img02.jpg" /></a>
							<h2><a href="http://www.sidalit.com/solar/tingyuandeng/">太阳能庭院灯</a></h2>
						</div>
					</li>
					<li>
						<div class="itembox i3">
							<a href="http://www.sidalit.com/solar/dimaideng/"><img src="<?php bloginfo('template_url'); ?>/img/business_img03.jpg" /></a>
							<h2><a href="http://www.sidalit.com/solar/dimaideng/">太阳能地埋灯</a></h2>
						</div>
					</li>
					<li>
						<div class="itembox i3">
							<a href="http://www.sidalit.com/solar/weiqiangdeng/"><img src="<?php bloginfo('template_url'); ?>/img/business_img04.jpg" /></a>
							<h2><a href="http://www.sidalit.com/solar/weiqiangdeng/">太阳能围墙灯</a></h2>
						</div>
					</li>
					<li>
						<div class="itembox i5">
							<a href="http://www.sidalit.com/solar/dizhuandeng/"><img src="<?php bloginfo('template_url'); ?>/img/business_img05.jpg" /></a>
							<h2><a href="http://www.sidalit.com/solar/dizhuandeng/">太阳能地砖灯</a></h2>
						</div>
					</li>
					<li>
						<div class="itembox i6">
							<a href="http://www.sidalit.com/solar/qiaoliangdeng/"><img src="<?php bloginfo('template_url'); ?>/img/business_img06.jpg" /></a>
							<h2><a href="http://www.sidalit.com/solar/qiaoliangdeng/">太阳能桥梁亮化模块</a></h2>
						</div>
					</li>
				</ul>
				<div class="sention-arrow">
					<a onclick="Scroll('profile');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
					
				</div>
				

			</div>
		</div>
		
		<!--
        	作者：840894321@qq.com
        	时间：2017-06-15
        	描述：第一板块结束，简介开始
        -->

		<div id="profile">
			<div class="container">
				<div class="conpany">
					<p>斯达莱特（STARLIGHT）立志于生态能源分散分布式应用，潜心研发生态能源微型储能应用系统，在太阳能路灯和太阳能庭院灯方面率先引入了智能控制理念，现已获得发明专利3项，实用新型专利10项，外观专利13项。产品实现了光控、时控、人体感应、手持遥控和APP控制等智能控制模式，拥有安装简便、真彩亮灯、交互娱乐和模块化、免维护的优势特点。
	</p><p>目前，服务网络已覆盖我国华中、华北、西北、西南等区域。同时，墨西哥、美国、土耳其、德国、尼日利亚等十余个国家已建立经销网点。我们的产品依托企业强大的技术实力和渠道优势正快速辐射全球。
	斯达莱特秉承“绿色环保、高新技术”的企业态度和“美丽环境、快乐心情”的客户体验价值，不断奉献更多的生态能源应用整体解决方案，为塑造和谐的户外生活环境不懈努力！
					</p>
					<a href="<?php bloginfo('url')?>/brand/index.html" target="_blank" title="斯达莱特公司介绍" rel="nofollow">查看更多信息 &raquo;</a>
				</div>
				<div class="conpanynews">
					<div class="conpanyimg">
						<a href="/all-solar-light/" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/img/c_introduce1.jpg" /></a>
						<p align="center"><a href="/all-solar-light/" target="_blank" rel="nofollow">全系列太阳能灯具产品演示</a></p>
					</div>
					<div class="conpanyimg">
						<a href="/2016-dashiji/" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/img/c_introduce2.jpg" /></a>
						<p align="center"><a href="http://v.youku.com/v_show/id_XMjg2OTY5MTQzMg==.html" target="_blank" rel="nofollow">2016年公司大事记</a></p>
					</div>
					<div class="conpanyimg">
						<a href="/solar-light-videos/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/c_introduce4.jpg" /></a>
						<p align="center"><a href="http://www.sidalit.com/solar-light-videos/" target="_blank">太阳能照明产品视频展示</a></p>
					</div>
					<div class="conpanyimg">
						<a href="http://v.youku.com/v_show/id_XMjQ3MzQ1MjM0MA==.html" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/img/c_introduce3.jpg" /></a>
						<p align="center"><a href="http://v.youku.com/v_show/id_XMjQ3MzQ1MjM0MA==.html" target="_blank" rel="nofollow">农家太阳能庭院灯视频案例</a></p>
					</div>
				</div>
				<div class="sention-arrow">
					<a onclick="Scroll('s1');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
				</div>
			</div>
		</div>
		

		<div id="s1">
			<div class="container">
				<div class="stitle">
					<h1>太阳能<br/>一体式路灯</h1>
					<div class="niceline"></div>
					<p>一体化结构设计完美的实现了低功耗、高亮度、长寿命、免维护等特点</p>
				</div>
				<div class="sention-arrow">
					<a onclick="Scroll('s2');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
				</div>
			</div>
		</div>
		<div id="s2">
			<div class="container">
				<div class="stitle">
					<h1>太阳能<br/>分体式路灯</h1>
					<div class="niceline"></div>
					<p>定制化方案可根据地域和安装环境，春夏秋冬四季模式自动切换</p>
				</div>
				<div class="sention-arrow">
					<a onclick="Scroll('s3');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
				</div>
			</div>
		</div>
		<div id="s3">
			<div class="container">
				<div class="stitle">
					<h1>太阳能<br/>围墙灯</h1>
					<div class="niceline"></div>
					<p>灯体简约优美，可安置在小区、公园或者围墙柱头上，真彩变色，极具观赏性</p>
				</div>
				<div class="sention-arrow">
					<a onclick="Scroll('s4');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
				</div>
			</div>
		</div>
		<div id="s4">
			<div class="container">
				<div class="stitle lefttitlestyle">
					<h1>太阳能<br/>景观灯</h1>
					<div class="niceline"></div>
					<p>可个性定制的设计完美将产品融入不同风格的园林景观</p>
				</div>
				<div class="sention-arrow">
					<a onclick="Scroll('s5');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
				</div>
			</div>
		</div>
		<div id="s5">
			<div class="container">
				<div class="stitle lefttitlestyle800">
					<h1>太阳能<br/>道钉</h1>
					<div class="niceline"></div>
					<p>主动发光和被动反光结合，极大保障夜间和雨雾天驾驶安全</p>
				</div>
				<div class="sention-arrow">
					<a onclick="Scroll('s6');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
				</div>
			</div>
		</div>
		<div id="s6">
			<div class="container">
				<div class="stitle lefttitlestyle600">
					<h1>太阳能<br/>地埋灯</h1>
					<div class="niceline"></div>
					<p>无需布线，可自由排列布局的设计理念带给场景亮化新的体验</p>
				</div>
				<div class="sention-arrow">
					<a onclick="Scroll('newscenter');"><img src="<?php bloginfo('template_url'); ?>/img/section_arr.png" /></a>
				</div>
			</div>
		</div>
		<div id="newscenter">
			<div class="container">
				
				<div class="newstitle">
					<h1>资讯中心</h1>
					<P>最新最快最专业的资讯中心</P>
				</div>
				
				<div class="questions">
					<div class="newscontentbox">
						<div class="detailtitle">
							<a href="/questions/">常见问题</a> <span class="more"><a href="/questions/" title="常见问题" rel="nofollow">更多 +</a></span>
						</div>
						<ul id="questionlist">
						<?php
						$query_str = 'cat=11&showposts=12&paged=1';
						query_posts($query_str);
						//主循环
						while (have_posts()) : the_post();
						?>
							<li>
								<h3><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h3>
								<p><?php echo deel_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 82, ''); ?></p>
							</li>
						<?php endwhile; wp_reset_query();?>
						</ul>
					</div>
				</div>
				<div class="newsbox">
					<div id="newsconpany">
						<div class="newscontentbox">
						<div class="detailtitle">
							<a href="/company/">公司新闻</a> <span class="more"><a href="/company/" title="公司新闻" rel="nofollow">更多 +</a></span>
						</div>
						<div class="firstnews">
						<?php
						$query_str = 'cat=5&showposts=8&paged=1';
						query_posts($query_str);
						$i = 1; //文章序列
						//主循环
						while (have_posts()) : the_post();
						   if($i == 1) {
						?>
							<a href="<?php the_permalink() ?>"><img src="<?php echo thumbnail_url() ?>" width="150px" height="100px" /></a>
							<div class="firstnewscontent">
								<a href="<?php the_permalink() ?>"><b><?php the_title_attribute(); ?></b></a>
							<p><?php echo deel_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 23, '...'); ?></p>
							</div>
						</div>
						<ul>
						<?php
						} else {
						?>
							<li>
								<a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a>
							</li>
						<?php
						}
						$i++;
						endwhile; wp_reset_query();
						?>
						</ul>
					</div>
					</div>
					<div id="pronews">
						<div class="newscontentbox">
						<div class="detailtitle">
							<a href="/news/">行业资讯</a> <span class="more"><a href="/news/" title="行业资讯" rel="nofollow">更多 +</a></span>
						</div>
						<div class="firstnews">
						<?php
						$query_str = 'cat=4&showposts=8&paged=1';
						query_posts($query_str);
						$i = 1; //文章序列
						//主循环
						while (have_posts()) : the_post();
						   if($i == 1) {
						?>
							<a href="<?php the_permalink() ?>"><img src="<?php echo thumbnail_url() ?>" width="150px" height="100px" /></a>
							<div class="firstnewscontent">
								<a href="<?php the_permalink() ?>"><b><?php the_title_attribute(); ?></b></a>
							<p><?php echo deel_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 23, '...'); ?></p>
							</div>
						</div>
						<ul>
						<?php
						} else {
						?>
							<li>
								<a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a>
							</li>
						<?php
						}
						$i++;
						endwhile; wp_reset_query();
						?>
						</ul>
					</div>
					</div>
				</div>
				
			</div>
		</div>

<script>
function Scroll(id){
	$("html,body").stop(true);
	$("html,body").animate(swing,{
		scrollTop: $("#"+id).offset().top},1000);
	}
	
$(function () {
	 //绑定滚动条事件  
	$(window).bind("scroll", function () {  
		var sTop = $(window).scrollTop();  
		var sTop = parseInt(sTop);  
		if (sTop >= 300) {  
			if (!$(".itembox").is(":visible")) {  
				try {  
					$(".i1").delay(100).fadeIn(1000);
					$(".i2").delay(400).fadeIn(1000);
					$(".i3").delay(800).fadeIn(1000);
					$(".i4").delay(1200).fadeIn(1000);
					$(".i5").delay(1600).fadeIn(1000);
					$(".i6").delay(2000).fadeIn(1000);
	   
				} catch (e) {  
					$(".itembox").show();  
				}                        
			}  
		}  
	});  
})

function Scroll(id){
	$("html,body").stop(true);$("html,body").animate({scrollTop: $("#"+id).offset().top},1000);
}
</script>

<?php get_footer();?>