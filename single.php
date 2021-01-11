<?php
get_header();

function pthumbnail_url($name, $size) {
	if (class_exists('MultiPostThumbnails')) {
		
		$post_id = get_the_ID();
		
		//获取该特色图ID
		$thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), $name, $post_id);
		
		//获取该图片尺寸的URL
		$img_url = wp_get_attachment_image_src( $thumbnail_id, $size );
		$img_url = $img_url[0];
		
		return $img_url;
	}
}

if(pthumbnail_url('first-image', 'product-thumb')) {
	include( 'modules/product.php' );
} else {
	include( 'modules/normal.php' );
}
?>

<?php get_footer(); ?>