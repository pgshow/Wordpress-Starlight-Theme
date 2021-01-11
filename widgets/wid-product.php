<?php
/*
产品展示小工具
*/

//注册插件
add_action( 'widgets_init', 'register_product' );
function register_product() {
 
    register_widget( 'product' );
 
}

//插件构建类
class product extends WP_Widget {

/*
小工具类有清晰的结构，一般固定4个成员函数

__construct 配置小工具
form 在后台添加表单内容
update 进行更新保存
widget 输出显示在页面上
*/

    function __construct() {
		parent::__construct(
	 
			// 小工具ID
			'product',
	 
			// 小工具名称
			__('S-产品展示', 's-product' ),
	 
			// 小工具选项
			array (
				'description' => __( '斯达莱特 - 略缩图展示产品。', 's-product' )
			)
	 
		);
    }
 
    function form( $instance ) {
?>

		<p><label>名称：<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" class="widefat" />
		</label></p>
		
		<p><label>产品ID：（多个ID之间用英文符号 , 隔开）<input id="<?php echo $this->get_field_id('ids'); ?>" name="<?php echo $this->get_field_name('ids'); ?>" type="text" value="<?php echo $instance['ids']; ?>" class="widefat" />
		</label></p>
	
<?php
    }
 
    function update( $new_instance, $old_instance ) {
		//把旧的数据传给新的数组
	    $instance = $old_instance;
		
		$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );   //名称
		$instance[ 'ids' ] = strip_tags( $new_instance[ 'ids' ] ); //产品ID
		
		return $instance;
    }
 
    function widget( $args, $instance ) {
		extract( $args ); //数组中的keys转换成变量 
		
		$title = apply_filters('widget_name', $instance['title']);
		$ids = $instance['ids'];
		
		echo '<div class="themebetter-ent-lists themebetter-ent-lists-thumb-top themebetter-ent-lists-title-lines-1 themebetter-ent-lists-desc-lines-4">';
		echo '<header><h3>'.$title.'</h3></header>';
		echo '<div class="themebetter-ent-lists-content"><ul>';
		
		echo stheme_posts_list( $ids );  //调用下面定义的函数输出列表
				
		echo '</ul></div></div>';
    }
}

//输出产品列表
function stheme_posts_list($ids) {
	
	global $post;
	
	$myposts = get_posts('include='.$ids.'&orderby=menu_order');
	
	if($myposts) : foreach( $myposts as $post ) : setup_postdata( $post );
?>

<li><a href="<?php the_permalink(); ?>" class="thumbnail"><img src="<?php echo thumbnail_url() ?>" class="thumb"></a><h2><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h2><footer><span class="contact"><a href="/contact/"><img src="<?php bloginfo('template_url'); ?>/img/contact.png" /></a></span></footer></li>

<?php
    endforeach; endif;
	wp_reset_postdata(); 
}
?>