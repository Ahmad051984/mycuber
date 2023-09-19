<!DOCTYPE html>
<html lang="ru">

<head>
	<title>mycuber</title>
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/style.css">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__main">
				<div class="container">
					<div class="header__row">
						<div class="header__logo">
							<a href="#">
								<img src="img/Logo.png" alt="Logo">
							</a>
						</div>
						<ul class="header__icons">
							<li class="header__items">
								<a href=""><img src="img/icons/youtube-logo.svg" alt="youtube-logo"></a>
							</li>
							<li class="header__items">
								<a href=""><img src="img/icons/vk-logo.svg" alt="vk-logo"></a>
							</li>
							<li class="header__items">
								<a href=""><img src="img/icons/facebook-logo.svg" alt="facebook-logo"></a>
							</li>
							<li class="header__items">
								<a href=""><img src="img/icons/twitter-logo.svg" alt="twitter-logo"></a>
							</li>
							<li class="header__items">
								<a href=""><img src="img/icons/twitch-logo.svg" alt="twitch-logo"></a>
							</li>
							<li class="header__items">
								<a href=""><img src="img/icons/instagram-logo.svg" alt="instagram-logo"></a>
							</li>
						</ul>
					</div>
					<div class="header__sticker-row">
						<div class="header__sticker" style="background-image: url(img/Rectangle\ 59.svg);">
							<div class="header__title title">Доступно на всех платформах</div>
							<button class="header__btn btn">
								<span>Узнать больше</span>
							</button>
						</div>
					</div>
				</div>
				
			</div>
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
				  <div class="swiper-slide">
					<img src="img/Slider1920/s1.jpg" alt="">
				  </div>
				  <div class="swiper-slide">
					<img src="img/Slider1920/s2.jpg" alt="">
				  </div>
				  <div class="swiper-slide">
					<img src="img/Slider1920/s3.jpg" alt="">
				  </div>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</header>

		<main class="main">
			<section class="about">
					<div class="container">
						<h1 class="about__title title">Найт-Сити изменит тебя навсегда!</h1>
						<p class="about__text"><span>Cyberpunk 2077</span> — приключенческая ролевая игра, действие которой происходит в мегаполисе Найт-Сити, где власть, роскошь и модификации тела ценятся выше всего. Ты играешь за V, наёмника в поисках устройства, позволяющего обрести бессмертие. Ты сможешь менять киберимпланты, навыки и стиль игры своего персонажа, исследуя открытый мир, где твои поступки влияют на ход сюжета и всё, что тебя окружает.</p>
						<div class="about__row">
							<div class="about__small-images">
								<picture>
									<source srcset="img/block-2/image1-320.png" type="image/png" media="(max-width: 350px)">
									<img src="img/block-2/image1.png" alt="sity">
								</picture>
								<picture>
									<source srcset="img/block-2/image2-320.png" type="image/png" media="(max-width: 350px)">
									<img src="img/block-2/image2.png" alt="sity">
								</picture>
							</div>
							<div class="about__big-image">
								<picture>
									<source srcset="img/block-2/image3-320.png" type="image/png" media="(max-width: 350px)">
									<source srcset="img/block-2/image3-1024.png" type="image/png" media="(max-width: 1350px)">
									<img src="img/block-2/image3.png" alt="sity">
								</picture>
							</div>
						</div>
					</div>
			</section>

			<div class="divider1" style="background-image: url(img/divider1.png);"></div>
			
			<section class="play">
				<div class="container">
					<div class="play__title-row">
						<div class="play__sticker" style="background-image: url(img/block-3/sticker.svg);">
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
								<img src="img/block-3/x-box.png" alt="">
							</div>
							<div class="play__image play__image-rigth">
								<img src="img/block-3/PS5.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="divider2" style="background-image: url(img/divivder2.png);"></div>

			<section class="hp">
				<div class="container">
					<div class="hp__row">
						<div class="hp__main-images">
							<div class="hp__big-image">
								<img src="img/block-4/monitor.png" alt="">
							</div>
							<div class="hp__logo-icons">
								<div>
									<img class="hp__logo-icon" src="img/block-4/hp-2Logo.svg" alt="">
								</div>
								<div>
									<img class="hp__logo-icon" src="img/block-4/cross.svg" alt="">
								</div>
								<div>
									<img class="hp__logo-icon" src="img/Logo.png" alt="">
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
					<img src="img/purchase/big-img.jpg" alt="image">
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
								<img src="img/purchase/pc.svg" alt="PC">
							</a>
						</div>
						<div class="purchase__platform-box-item">
							<a href="#">
								<img src="img/purchase/xbox.svg" alt="xbox">
							</a>
						</div>
					</div>
					<div class="purchase__platform-box">
						<div class="purchase__platform-box-item">
							<a href="#">
								<img src="img/purchase/stadia.svg" alt="stadia">
							</a>
						</div>
						<div class="purchase__platform-box-item">
							<a href="#">
								<img src="img/purchase/ps4.svg" alt="ps4">
							</a>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer class="footer">
			<div class="container">
				<div class="footer__white">
					<div class="footer__logo">
						<div class="footer__logo-item footer__logo-item-main-logo">
							<a href="#">
								<img src="img/Logo.png" alt="">
							</a>
						</div>
						<div class="footer__logo-item">
							<img src="img/CD_Projekt_logo1.svg" alt="">
						</div>
						
					</div>
					<div class="footer__links">
						<a href=""><div>Лицензия</div></a>
						<a href=""><div>Политика конфиденциальности</div></a>
					</div>
				</div>
				</div>
			<div class="footer__black">CD PROJEKT®, Cyberpunk®, Cyberpunk 2077®</div>
			
			
		</footer>

		<script src="js/swiper-bundle.min.js"></script>
		<script src="js/script.js"></script>	
	</div>







</body>