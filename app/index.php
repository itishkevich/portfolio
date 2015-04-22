<?php
	session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie ie8" lang="ru"> <![endif]-->
<!--[if IE]>  <html class="no-js ie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
	<title>Портфолио</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Seo -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Styles -->
	<!-- build:css css/normalize.css -->
	<link rel="stylesheet" href="bower/normalize.css/normalize.css">
	<!-- endbuild -->
	<link rel="stylesheet" href="css/styles.css">

	<!-- JS -->
	<script src="js/vendor/modernizr.min.js"></script>

</head>
<body>
	<!--[if lt IE 8]>
		<p class="b-unhappy-browser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Base container: start -->
	<div class="h-base-container">
		<!-- Header: start -->
		<header class="l-header">
			<div class="b-header m-cfix">
				<!-- Logo: start -->
				<a class="b-logo" href="/">
					<img class="b-logo-img" src="img/misc/logo.png" alt="logo"/>
					<span class="b-logo-text m-hidden">Сайт Порфолио</span>
				</a>
				<!-- Logo: end -->
				<!-- Social icons: start -->
				<ul class="b-social-list">
					<li class="b-social-item"><a class="b-icon-social m-vk" href="#" target="_blank">vk</a></li>
					<li class="b-social-item"><a class="b-icon-social m-twitter" href="#" target="_blank">twitter</a></li>
					<li class="b-social-item"><a class="b-icon-social m-facebook" href="#" target="_blank">facebook</a></li>
					<li class="b-social-item"><a class="b-icon-social m-github" href="#" target="_blank">github</a></li>
				</ul>
				<!-- Social icons: end -->
				<!-- Nav toggle: start -->
				<div class="b-nav-toggle">
					<a class="b-icon-nav" href="#"></a>
					<div class="b-nav-flyout">
						<!-- Navigation: start -->
						<nav class="b-nav m-flyout">
							<ul class="b-nav-list">
								<li class="b-nav-item "><a class="b-nav-link b-nav-arrow m-active" href="index.php">Обо мне</a></li>
								<li class="b-nav-item"><a class="b-nav-link" href="projects.php">Мои работы</a></li>
								<li class="b-nav-item"><a class="b-nav-link" href="contacts.php">Связаться со мной</a></li>
							</ul>
						</nav>
						<!-- Navigation: end -->
					</div>
				</div>
				<!-- Nav toggle: end -->
			</div>
		</header>
		<!-- Header: end -->
		<!-- Content: start -->
		<div class="b-content-container m-cfix">
			<!-- Main content: start -->
			<div class="b-content">
				<!-- Main info: start -->
				<section class="b-section m-cfix">
					<h2 class="b-section-title">Основная информация</h2>
					<div class="b-section-body">
						<div class="b-avatar">
							<img src="img/misc/irina.tishkevich.png" alt="Тишкевич Ирина" class="b-avatar-img" />
						</div>
						<ul class="b-profile-list">
							<li class="b-profile-item">
								<div class="b-profile-label">Меня зовут:</div>
								<div class="b-profile-value">Тишкевич Ирина</div>
							</li>
							<li class="b-profile-item">
								<div class="b-profile-label">Мой возраст:</div>
								<div class="b-profile-value">28 лет</div>
							</li>
							<li class="b-profile-item">
								<div class="b-profile-label">Мой город:</div>
								<div class="b-profile-value">Минск, Беларусь</div>
							</li>
							<li class="b-profile-item">
								<div class="b-profile-label">Моя специализация:</div>
								<div class="b-profile-value">html-developer</div>
							</li>
							<li class="b-profile-item">
								<div class="b-profile-label">Ключевые навыки:</div>
									<div class="b-profile-value"><ul class="b-skill-list">
										<li class="b-skill-item">html</li>
										<li class="b-skill-item">css</li>
										<li class="b-skill-item">javascript</li>
										<li class="b-skill-item">gulp</li>
										<li class="b-skill-item">git</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- Main info: end -->
				<!-- Experience: start -->
				<section class="b-section m-cfix">
					<h2 class="b-section-title">Опыт работы</h2>
					<div class="b-section-body">
						<ul class="b-education-list">
							<li class="b-education-item b-icon-education m-case">
								<div class="b-education-descr">"Viaden" - Senior HTML5 Developer</div>
								<div class="b-education-date">Aпрель 2014 - по настоящее время</div>
							</li>
							<li class="b-education-item b-icon-education m-case">
								<div class="b-education-descr">"VRP Consulting" - UI Developer</div>
								<div class="b-education-date">Июль 2009 - Aпрель 2014</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- Experience: end -->
				<!-- Education: start -->
				<section class="b-section m-cfix">
					<h2 class="b-section-title">Образование</h2>
					<div class="b-section-body">
						<ul class="b-education-list">
							<li class="b-education-item b-icon-education m-learn">
								<div class="b-education-descr">Высшее, БГУИР</div>
								<div class="b-education-date">2004 - 2009</div>
							</li>
							<li class="b-education-item b-icon-education m-list">
								<div class="b-education-descr">Курсы Loftschool.ru</div>
								<div class="b-education-date">Март 2015 - по настоящее время</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- Education: end -->
			</div>
			<!-- Main content: end -->
			<!-- Sidebar: start -->
			<aside class="b-sidebar">
				<!-- Navigation: start -->
				<nav class="b-nav">
					<ul class="b-nav-list">
						<li class="b-nav-item"><a class="b-nav-link m-active" href="index.php">Обо мне</a></li>
						<li class="b-nav-item"><a class="b-nav-link" href="projects.php">Мои работы</a></li>
						<li class="b-nav-item"><a class="b-nav-link" href="contacts.php">Связаться со мной</a></li>
					</ul>
				</nav>
				<!-- Navigation: end -->
				<!-- Contacts: start -->
				<div class="b-contacts">
					<div class="b-contact-title">
						<span class="b-contact-text">Контакты</span>
					</div>
					<ul class="b-contact-list">
						<li class="b-contact-item"><a class="b-contact-link b-icon-contact m-mail" href="mailto:irina.tsishkevich@gmail.com">irina@gmail.com</a></li>
						<li class="b-contact-item"><a class="b-contact-link b-icon-contact m-phone" href="tel:+375291111111">+375291111111</a></li>
						<li class="b-contact-item"><a class="b-contact-link b-icon-contact m-skype" href="skype:irina.zankevich?chat">irina.zankevich</a></li>
					</ul>
				</div>
				<!-- Contacts: end -->
			</aside>
			<!-- Sidebar: end -->
		</div>
		<!-- Content: end -->
		<!-- Social icons: start -->
		<ul class="b-social-list m-invert m-mob">
			<li class="b-social-item"><a class="b-icon-social m-vk" href="#">vk</a></li>
			<li class="b-social-item"><a class="b-icon-social m-twitter" href="#">twitter</a></li>
			<li class="b-social-item"><a class="b-icon-social m-facebook" href="#">facebook</a></li>
			<li class="b-social-item"><a class="b-icon-social m-github" href="#">github</a></li>
		</ul>
		<!-- Social icons: end -->
		<div class="b-footer-push"></div>
	</div>
	<!-- Base container: end -->
	<!-- Footer: start -->
	<div class="l-footer">
		<footer class="b-footer">
			<div class="b-footer-login">
				<?php if (isset($_SESSION['auth'])) : ?>
					<a class="b-icon-login m-open" href="php/logout.php">logout</a>
				<?php else: ?>
					<a class="b-icon-login m-lock" href="login.php">login</a>
				<?php endif; ?>
			</div>
			<p class="b-copyright">&copy; 2015, Это мой сайт, пожалуйста, не копируйте и не воруйте его.</p>
		</footer>
	</div>
	<!-- Footer: end -->

	<!-- JS: start -->
	<!-- build:js js/vendor/jquery.min.js -->
	<script src="bower/jquery/dist/jquery.min.js"></script>
	<!-- endbuild -->

	<!--[if IE 8]>
	<script src="js/vendor/selectivizr.min.js"></script>
	<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

	<script src="js/main.js"></script>

	<!-- JS: end -->
</body>
</html>