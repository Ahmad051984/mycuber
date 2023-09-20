<?php
/*
Template Name: home
*/
?>
<?php get_header();?>

		<main class="main">
			<section class="about">
					<div class="container">
						<h1 class="about__title title">Найт-Сити изменит тебя навсегда!</h1>
						<p class="about__text"><span>Cyberpunk 2077</span> — приключенческая ролевая игра, действие которой происходит в мегаполисе Найт-Сити, где власть, роскошь и модификации тела ценятся выше всего. Ты играешь за V, наёмника в поисках устройства, позволяющего обрести бессмертие. Ты сможешь менять киберимпланты, навыки и стиль игры своего персонажа, исследуя открытый мир, где твои поступки влияют на ход сюжета и всё, что тебя окружает.</p>
						<div class="about__row">
							<div class="about__small-images">
								<picture>
									<source srcset="<?php bloginfo('template_url'); ?>/assets/img/block-2/image1-320.png" type="image/png" media="(max-width: 350px)">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/block-2/image1.png" alt="sity">
								</picture>
								<picture>
									<source srcset="<?php bloginfo('template_url'); ?>/assets/img/block-2/image2-320.png" type="image/png" media="(max-width: 350px)">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/block-2/image2.png" alt="sity">
								</picture>
							</div>
							<div class="about__big-image">
								<picture>
									<source srcset="<?php bloginfo('template_url'); ?>/assets/img/block-2/image3-320.png" type="image/png" media="(max-width: 350px)">
									<source srcset="<?php bloginfo('template_url'); ?>/assets/img/block-2/image3-1024.png" type="image/png" media="(max-width: 1350px)">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/block-2/image3.png" alt="sity">
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
							<input class="play__name" type="text" name="name" placeholder="Как тебя зовут?">
							<input class="play__email" type="email" name="email" placeholder="Твой е-mail">
							<input class="play__file" id="play__file" type="file" name="screenshot">
							<label class="play__file-lable" for="play__file"><span>Прикрепить скриншот</span> 
								<span class="play__file-text">.png / .jpg / .pdf</span>
							</label>
							<button class="play__btn btn">Отправить</button>
							<div class="play__checkbox">
								<input class="play__check" type="checkbox" name="checkbox" id="checkbox">
								<label for="checkbox">Согласен на обработку персональных данных</label>
							</div>
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
