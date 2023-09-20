
<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() .'/assets/css/swiper-bundle.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() .'/assets/css/style.css');

	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
}); 

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>