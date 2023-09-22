<?php
/*
Template Name: home
*/
?>
<?php get_header();?>

		<main class="main">
			<section class="about">
					<div class="container">
						<h1 class="about__title title"><?php the_field('about__title');?></h1>
						<p class="about__text"><span><?php the_field('about__text_color');?></span><?php the_field('about__text');?></p>
						<div class="about__row">
							<div class="about__small-images">
								<picture>
									<source srcset="<?php the_field('about__small-image-1_320');?>" type="image/png" media="(max-width: 350px)">
									<img src="<?php the_field('about__small-image-1');?>" alt="sity">
								</picture>
								<picture>
									<source srcset="<?php the_field('about__small-image-2_320');?>" type="image/png" media="(max-width: 350px)">
									<img src="<?php the_field('about__small-image-2');?>" alt="sity">
								</picture>
							</div>
							<div class="about__big-image">
								<picture>
									<source srcset="<?php the_field('about__big-image_350');?>" type="image/png" media="(max-width: 350px)">
									<source srcset="<?php the_field('about__big-image_1350');?>" type="image/png" media="(max-width: 1350px)">
									<img src="<?php the_field('about__big-image');?>" alt="sity">
								</picture>
							</div>
						</div>
					</div>
			</section>

			<div class="divider1" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/divider1.png);"></div>
			
			<section class="play">
				<div class="container">
					<div class="play__title-row">
						<div class="play__sticker" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/block-3/sticker.svg);">
							<span>акция</span>
						</div>
						<h2 class="play__title title">Играй и выигрывай!</h2>
					</div>
					<div class="play__text">Играй в <span>Cyberpunk 2077</span> и получи возможность выиграть консоль <span>Xbox Series X</span> или <span>Sony PlayStation 5!</span> Заполни форму ниже и приложи скриншот о покупке игры. Итоги розыгрыша будут подведены 1 февраля. Удачи! ;&#41;</div>
					<div class="play__row">
						<form class="play__form">
							<?php echo do_shortcode('[contact-form-7 id="0ec7f13" title="Контактная форма"]');?>
						</form>
						<div class="play__images">
							<div class="play__image">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/block-3/x-box.png" alt="">
							</div>
							<div class="play__image play__image-rigth">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/block-3/PS5.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="divider2" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/divivder2.png);"></div>

			<section class="hp">
				<div class="container">
					<div class="hp__row">
						<div class="hp__main-images">
							<div class="hp__big-image">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/block-4/monitor.png" alt="">
							</div>
							<div class="hp__logo-icons">
								<div>
									<img class="hp__logo-icon" src="<?php bloginfo('template_url'); ?>/assets/img/block-4/hp-2Logo.svg" alt="">
								</div>
								<div>
									<img class="hp__logo-icon" src="<?php bloginfo('template_url'); ?>/assets/img/block-4/cross.svg" alt="">
								</div>
								<div>
									<img class="hp__logo-icon" src="<?php bloginfo('template_url'); ?>/assets/img/Logo.png" alt="">
								</div>
								</div>
						</div>
						<div class="hp__text">
							<h2 class="hp__title title">Полное погружение вместе с HP</h2>
							<p class="hp__text-description">Погрузись в современные экшен-игры с реалистичным изображением с помощью монитора с диагональю 23,8 дюйма, созданном для отображения максимально насыщенных цветов. Успевай реагировать на любые события с временем отклика 1 мс и частотой в 144 Гц!</p>
							<ul class="hp__list">
								<li>Яркие насыщенные цвета</li>
								<li>Кристальная четкость изображения</li>
								<li>Быстрые движения и плавный геймплей</li>
							</ul>
							<button class="hp__btn btn">Подробнее</button>
						</div>
					</div>
					
				</div>
			</section>

			<section class="purchase">
				<div class="purchase__image">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/purchase/big-img.jpg" alt="image">
				</div>
				<div class="purchase__description">
					<h2 class="purchase__title title">Купить игру<br> Cyberpunk 2077</h2>
					<h3 class="purchase__subtitle">В комплект входит:</h3>
					<ul>
						<li>Футляр с игровыми дисками</li>
						<li>Футляр с кодом для загрузки игры и дисками (pc)</li>
						<li>Справочник с информацией об игровом мире</li>
					</ul>
					<h3 class="purchase__subtitle purchase__subtitle2">Выберите платформу:</h3>
					<div class="purchase__platform-box">
						<div class="purchase__platform-box-item">
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/purchase/pc.svg" alt="PC">
							</a>
						</div>
						<div class="purchase__platform-box-item">
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/purchase/xbox.svg" alt="xbox">
							</a>
						</div>
					</div>
					<div class="purchase__platform-box">
						<div class="purchase__platform-box-item">
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/purchase/stadia.svg" alt="stadia">
							</a>
						</div>
						<div class="purchase__platform-box-item">
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/purchase/ps4.svg" alt="ps4">
							</a>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>
