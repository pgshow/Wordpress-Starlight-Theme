<?php

$dname = 'Starlight';

add_action('after_setup_theme', 'deel_setup');

include('admin/starlight.php');
include('widgets/index.php');

function deel_setup() {
	
	//增加新的略缩图尺寸
	add_image_size( 'product-thumb', 400, 260, true );
	add_image_size( 'product-small', 100, 100, true );
	
	//去除头部冗余代码
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'wp_generator');
	
	//禁止加载WP自带的jquery.js
	if ( !is_admin() ) { // 后台不禁止
	    function my_init_method() {
	        wp_deregister_script( 'jquery' );  // 取消原有的 jquery 定义
		}
	    add_action('init', 'my_init_method'); 
	}
	wp_deregister_script( 'l10n' );
	
	//阻止站内PingBack
	add_action('pre_ping','deel_noself_ping');

	//缩略图设置
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(220, 220, true);

	//定义菜单
	if (function_exists('register_nav_menus')) {
		register_nav_menus(array(
			'nav'           => __('顶部导航'),
			'nav_bottom'    => __('底部菜单'),
			'page_left_nav' => __('通用页左侧菜单'),
			'product_left_nav' => __('产品页左侧菜单'),
		));
	}
}

// 取消原有jQuery
function footerScript() {
    if ( !is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', false, '3.0', dopt('d_jquerybom_b') ? true : false );   
        wp_enqueue_script( 'jquery' );   
    }  
}  
add_action( 'init', 'footerScript' );

//略缩图调用
if (!function_exists('deel_thumbnail')):
	function deel_thumbnail() {
		global $post;
		if (has_post_thumbnail()) {
			$domsxe       = simplexml_load_string(
						     get_the_post_thumbnail());
			if(get_the_post_thumbnail()) {
			    $thumbnailsrc = $domsxe->attributes()->src;
			} else {
				$thumbnailsrc = get_bloginfo('template_url'
	) . '/img/thumbnail.png';
			}
			echo '<img src="' . $thumbnailsrc . '" alt="' . trim(
			  strip_tags($post->post_title)) . '" class="thumb" />';
		} else {
			$content = $post->post_content;
			preg_match_all(
'/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim'
				   , $content, $strResult, PREG_PATTERN_ORDER);
			$n = count($strResult[1]);
			if ($n > 0) {
				echo '<img src="' . $strResult[1][0] .
	 '" alt="' . trim(strip_tags($post->post_title)) . '" class="thumb" />';
			} else {
				echo '<img src="' . get_bloginfo('template_url'
	) . '/img/thumbnail.png" alt="' . trim(strip_tags($post->post_title)) .
							   '" class="thumb" />';
			}
		}
	}
endif;

//略缩图URL调用
if (!function_exists('thumbnail_url')):
	function thumbnail_url() {
		global $post;
		if (has_post_thumbnail()) {
			$domsxe       = simplexml_load_string(
						     get_the_post_thumbnail());
			$thumbnailsrc = $domsxe->attributes()->src;
		}
		return $thumbnailsrc;
	}
endif;

//分享工具
function deel_share(){
    echo '<div class="shares"><strong>分享到：</strong><a href="javascript:;" data-url="'.get_permalink().'" class="share-weixin" title="分享到微信"><i class="fa">&#xe608;</i></a><a etap="share" data-share="qzone" class="share-qzone" title="分享到QQ空间"><i class="fa">&#xe601;</i></a><a etap="share" data-share="weibo" class="share-tsina" title="分享到新浪微博"><i class="fa">&#xe602;</i></a><a etap="share" data-share="tqq" class="share-tqq" title="分享到腾讯微博"><i class="fa">&#xe606;</i></a><a etap="share" data-share="qq" class="share-sqq" title="分享到QQ好友"><i class="fa">&#xe603;</i></a><a etap="share" data-share="renren" class="share-renren" title="分享到人人网"><i class="fa">&#xe604;</i></a><a etap="share" data-share="douban" class="share-douban" title="分享到豆瓣网"><i class="fa">&#xe605;</i></a>
</div>';
}

//注册侧边栏小工具
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'          => '全站侧栏',
		'id'            => 'widget_sitesidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget_tit">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => '首页侧栏',
		'id'            => 'widget_sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget_tit">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => '分类/标签/搜索页侧栏',
		'id'            => 'widget_othersidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget_tit">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => '文章页侧栏',
		'id'            => 'widget_postsidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget_tit">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => '页面侧栏',
		'id'            => 'widget_pagesidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget_tit">',
		'after_title'   => '</h3>'
	));
}

//面包屑导航
function deel_breadcrumbs(){
    if( !is_single() ) return false;
    $categorys = get_the_category();
    $category = $categorys[0];
    
    return '<div class="breadcrumbs"><img src="'.get_bloginfo('template_url').'/img/breadcrumbs.png" />
	<a href="'.get_bloginfo('url').'" class="breadcrumbs_first">'.get_bloginfo('name').'</a> <small>></small> '.get_category_parents($category->term_id, true, ' <small>></small> ').'<span class="muted">'.get_the_title().'</span></div>
	<style>@media (max-width: 544px) { .article-container{margin-top:0;} }</style>';
	
}

//列表分页代码
if ( ! function_exists( 'deel_paging' ) ) :
function deel_paging($query_str) {
	
	//重置wordpress分页自身定义的查询
	query_posts($query_str);
	
    $p = 4;
    if ( is_singular() ) return;
    global $wp_query, $paged;
    $max_page = $wp_query->max_num_pages;
    if ( $max_page == 1 ) return; 
    echo '<div class="pagination"><ul>';
    if ( empty( $paged ) ) $paged = 1;
    // echo '<span class="pages">Page: ' . $paged . ' of ' . $max_page . ' </span> '; 
    echo '<li class="prev-page">'; previous_posts_link('上一页'); echo '</li>';

    if ( $paged > $p + 1 ) p_link( 1, '<li>第一页</li>' );
    if ( $paged > $p + 2 ) echo "<li><span>···</span></li>";
    for( $i = $paged - $p; $i <= $paged + $p; $i++ ) { 
        if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<li class=\"active\"><span>{$i}</span></li>" : p_link( $i );
    }
    if ( $paged < $max_page - $p - 1 ) echo "<li><span> ... </span></li>";
    //if ( $paged < $max_page - $p ) p_link( $max_page, '&raquo;' );
    echo '<li class="next-page">'; next_posts_link('下一页'); echo '</li>';
    // echo '<li><span>共 '.$max_page.' 页</span></li>';
    echo '<li><span>共 '.$max_page.' 页</span></li></ul></div>';
}
function p_link( $i, $title = '' ) {
    if ( $title == '' ) $title = "第 {$i} 页";
    echo "<li><a href='", esc_html( get_pagenum_link( $i ) ), "'>{$i}</a></li>";
}
endif;

//限制字数的文章简介
function deel_strimwidth($str ,$start, $width, $trimmarker){
    $output = preg_replace('/^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$start.'}((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$width.'}).*/s','\1',$str);
    return $output.$trimmarker;
}

//数据读取与过滤
function dopt($e) {
	return stripslashes(get_option($e));
}

//给分类添加自定义属性，包括模板选择功能
add_action('edit_category_form', '_dxwp_category_template_form');

function _dxwp_category_template_form($tag) {
	if ($_GET['tag_ID'] != 0) {
		$templates = array(
			'default' => '默认模板',
			'product' => '产品列表',
			'case'    => '案例列表'
		);
		$tmp_val = get_option('_dxwp_cat_template_' . $tag->term_id);
		?>

<table class="form-table">
	<tbody>
		<tr class="form-field">
			<th scope="row" valign="top">
				<label for="_dxwp_cat_template">模板</label>
			</th>
			<td>
				<select id="_dxwp_cat_template" name="_dxwp_cat_template">
					<?php
foreach ($templates as $key => $name):
		?>
					<option value="<?php
echo $key;
		?>" <?php
selected($key, $tmp_val);
		?>><?php
echo $name;
		?></option>
					<?php
endforeach;
		?>
				</select>
				<span class="description">选择该分类目录所使用的模板。</span>
				<input type="hidden" name="_dxwp_cat_template_on" value="yes" />
			</td>
		</tr>
	</tbody>
</table>
<?php
}
}

//保存分类提交的模板属性
add_action('edit_category', '_dxwp_save_category_template');

function _dxwp_save_category_template($cat_id) {
	if ($_POST['_dxwp_cat_template_on'] == 'yes') {
		update_option('_dxwp_cat_template_' . $cat_id, $_POST['_dxwp_cat_template']);
	}
}


/*在文章编辑页新增一个项目 */
function starlight_add_custom_box() {
        add_meta_box(
            'product_attributes',
            '产品属性（只限产品使用）',
            'starlight_add_custom_box_callback',
            'post'
        );
}

//回调函数，在后台管理处显示自定义代码
function starlight_add_custom_box_callback( $post ) {
	
	$product_attributes = get_post_meta( $post->ID, '_slight_product_attributes', true );
	
	echo '<textarea rows="6" name="product_attributes" style="margin-top: 12px; margin-bottom: 0px; width:100%;">'.$product_attributes.'</textarea><p>每行一个属性，注意字数，前台自动排版。</p>';
}

//保存自定义属性
function starlight_save_custom_box( $post_ID ) {
    $post_ID = $_POST['post_ID'];
	
    //过滤用户输入
	$mydata = strip_tags( $_POST['product_attributes'] );
	
	//新增或者更新
	add_post_meta($post_ID, '_slight_product_attributes', $mydata, true)
	or
    update_post_meta($post_ID, '_slight_product_attributes', $mydata);
}

add_action( 'add_meta_boxes', 'starlight_add_custom_box' );
add_action( 'save_post', 'starlight_save_custom_box' );

//获取主题版本号
function theme_version() {
    $my_theme = wp_get_theme();
    echo 'starlight-'.$my_theme -> get('Version');
}


//用 Multiple Post Thumbnails 插件给文章添加多个特色图片
if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(
        array(
            'label' => '产品第1张图片<br />若为空，就调用普通文章页面，否则调用产品页面布局',
            'id' => 'first-image',
            'post_type' => 'post'
        )
    );
    new MultiPostThumbnails(
        array(
            'label' => '产品第2张图片',
            'id' => 'second-image',
            'post_type' => 'post'
        )
    );
	new MultiPostThumbnails(
        array(
            'label' => '产品第3张图片',
            'id' => 'third-image',
            'post_type' => 'post'
        )
    );
	new MultiPostThumbnails(
        array(
            'label' => '产品第4张图片',
            'id' => 'fourth-image',
            'post_type' => 'post'
        )
    );
	new MultiPostThumbnails(
        array(
            'label' => '产品第5张图片',
            'id' => 'fifth-image',
            'post_type' => 'post'
        )
    );
}