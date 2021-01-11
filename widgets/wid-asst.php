<?php
/*
富媒体助手
*/

//注册插件
add_action( 'widgets_init', 'register_asst' );
function register_asst() {
 
    register_widget( 'asst' );
 
}

//插件构建类
class asst extends WP_Widget {

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
			'asst',
	 
			// 小工具名称
			__('S-富媒体', 's-asst' ),
	 
			// 小工具选项
			array (
				'description' => __( '斯达莱特 - 支持 html 显示富媒体广告等。', 's-asst' )
			)
	 
		);
    }
 
    function form( $instance ) {
?>

		<p>
			<label>
				Html代码：
				<textarea id="<?php echo $this->get_field_id('code'); ?>" name="<?php echo $this->get_field_name('code'); ?>" class="widefat" rows="12" style="font-family:Courier New;"><?php echo $instance['code']; ?></textarea>
			</label>
		</p>
	
<?php
    }
 
    function update( $new_instance, $old_instance ) {
		//把旧的数据传给新的数组
	    $instance = $old_instance;
		
		$instance[ 'code' ] = $new_instance[ 'code' ];   //代码
		
		return $instance;
    }
 
    function widget( $args, $instance ) {
		extract( $args ); //数组中的keys转换成变量 
		
		$code = $instance['code'];
		
		echo $before_widget;
		echo $code;
		echo $after_widget;
    }
}
?>