<?php
/*
文本助手小工具
*/

//注册插件
add_action( 'widgets_init', 'register_textasst' );
function register_textasst() {
 
    register_widget( 'textasst' );
 
}

//插件构建类
class textasst extends WP_Widget {

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
			'textasst',
	 
			// 小工具名称
			__('S-文本助手', 's-textasst' ),
	 
			// 小工具选项
			array (
				'description' => __( '斯达莱特 - 显示一个特别推荐的文本。', 's-textasst' )
			)
	 
		);
    }
 
    function form( $instance ) {
?>

		<p><label>名称：<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" class="widefat" />
		</label></p>
		
		<p><label>标语：<input id="<?php echo $this->get_field_id('slogan'); ?>" name="<?php echo $this->get_field_name('slogan'); ?>" type="text" value="<?php echo $instance['slogan']; ?>" class="widefat" />
		</label></p>
		
		<p><label>描述：<input id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo $instance['description']; ?>" class="widefat" />
		</label></p>
		
		<p><label>链接：<input id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo $instance['url']; ?>" class="widefat" />
		</label></p>
		
		<p>
			<label>
				样式：
				<select style="width:100%;" id="<?php echo $this->get_field_id('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" style="width:100%;">
					<option value="style01" <?php selected('style01', $instance['style']); ?>>蓝色</option>
					<option value="style02" <?php selected('style02', $instance['style']); ?>>橘红色</option>
					<option value="style03" <?php selected('style03', $instance['style']); ?>>绿色</option>
					<option value="style04" <?php selected('style04', $instance['style']); ?>>紫色</option>
				</select>
			</label>
		</p>
	
<?php
    }
 
    function update( $new_instance, $old_instance ) {
		//把旧的数据传给新的数组
	    $instance = $old_instance;
		
		$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );   //名称
		$instance[ 'slogan' ] = strip_tags( $new_instance[ 'slogan' ] ); //标语
		$instance[ 'description' ] = strip_tags( $new_instance[ 'description' ] ); //描述
		$instance[ 'url' ] = strip_tags( $new_instance[ 'url' ] ); //地址
		$instance[ 'style' ] = strip_tags( $new_instance[ 'style' ] ); //样式
		
		return $instance;
    }
 
    function widget( $args, $instance ) {
		extract( $args ); //数组中的keys转换成变量 
		
		$title = apply_filters('widget_name', $instance['title']);
		$slogan = $instance['slogan'];
		$description = $instance['description'];
		$url = $instance['url'];
		$style = $instance['style'];
		
		echo $before_widget;
		echo '<a class="'.$style.'" href="'.$url.'" rel="nofollow"><strong>'.$title.'</strong><h2>'.$slogan.'</h2><p>'.$description.'</p></a>';
		echo $after_widget;
    }
}
?>