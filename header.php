<!DOCTYPE html>
<html <?php language_attributes(); ?>">

<head>
	<title>mycuber</title>

	<?php wp_head(); ?>

	<!-- <link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/style.css"> -->
	<meta http-equiv="Content-type" content="text/html; <?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__main">
				<div class="container">
					<div class="header__row">
						<div class="header__logo">
							<?php the_custom_logo();?>
						</div>
						<ul class="header__icons">
							<li class="header__items">
								<a target="_blank" href="<?php the_field('link_youtube');?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/youtube-logo.svg" alt="youtube-logo"></a>
							</li>
							<li class="header__items">
								<a target="_blank" href="<?php the_field('link_vk');?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/vk-logo.svg" alt="vk-logo"></a>
							</li>
							<li class="header__items">
								<a target="_blank" href="<?php the_field('link_facebook');?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/facebook-logo.svg" alt="facebook-logo"></a>
							</li>
							<li class="header__items">
								<a target="_blank" href="<?php the_field('link_twitter');?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-logo.svg" alt="twitter-logo"></a>
							</li>
							<li class="header__items">
								<a target="_blank" href="<?php the_field('link_twitch');?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitch-logo.svg" alt="twitch-logo"></a>
							</li>
							<li class="header__items">
								<a target="_blank" href="<?php the_field('link_instagram');?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/instagram-logo.svg" alt="instagram-logo"></a>
							</li>
						</ul>
					</div>
					<div class="header__sticker-row">
						<div class="header__sticker" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/Rectangle59.svg);">
							<div class="header__title title"><?php the_field('header_sticker');?></div>
							<button class="header__btn btn">
								<span>Узнать больше</span>
							</button>
						</div>
					</div>
				</div>
				
			</div>
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	'category'    => 3
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
		<div class="swiper-slide">
		<img src="<?php the_post_thumbnail_url();?>" alt="slide">
			</div>
		<?php 
	}
} 
wp_reset_postdata(); // Сбрасываем $post
?>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</header>