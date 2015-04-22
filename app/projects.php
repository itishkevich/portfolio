<?php
	session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie ie8" lang="ru"> <![endif]-->
<!--[if IE]>  <html class="no-js ie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
	<title>Портфолио: Мои работы</title>
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
	<!-- endbuild -->

	<!-- JS -->
	<script src="js/vendor/modernizr.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
	<p class="b-unhappy-browser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Overlay: start -->
		<div class="l-overlay"></div>
	<!-- Overlay: end -->

	<!-- Lighbox add project: start -->
	<div class="b-lightbox" id="add-project">
		<div class="b-lightbox-header">
			<div class="b-lightbox-title">Добавление проекта</div>
			<a class="b-lightbox-close-btn b-icon-close" href="/"></a>
		</div>
		<div class="b-lightbox-body">
			<form action="php/projects.php" class="b-form" method="post" enctype="multipart/form-data">
				<div class="b-form-line m-reduced">
					<div class="b-form-label m-small-label">Название проекта</div>
					<div class="b-form-field">
						<span class="b-form-tip">Введите название</span>
						<input class="b-control b-input required" type="text" name="name" placeholder="Введите название"/>
					</div>
				</div>
				<div class="b-form-line m-reduced">
					<div class="b-form-label m-small-label">Картинка проекта</div>
					<div class="b-form-field">
						<span class="b-form-tip">Изображение</span>
						<div class="b-custom-upload">
							<input class="b-control b-input b-input-file" type="file" name="upload" id="upload"/>
							<div class="b-fake-upload">
								<div class="b-icon-upload"></div>
								<input class="b-control b-input required b-fake-input" type="text" readonly placeholder="Загрузите изображение" />
							</div>
						</div>
					</div>
				</div>
				<div class="b-form-line m-reduced">
					<div class="b-form-label m-small-label">URL проекта</div>
					<div class="b-form-field">
						<span class="b-form-tip">Ссылка на проект</span>
						<input class="b-control b-input required" type="text" name="url" placeholder="Добавьте ссылку" />
					</div>
				</div>
				<div class="b-form-line m-reduced">
					<div class="b-form-label m-small-label">Описание</div>
					<div class="b-form-field">
						<span class="b-form-tip">Описание проекта</span>
						<textarea class="b-control b-textarea m-short-textarea required m-no-resize" name="msg" id="" cols="30" rows="5" placeholder="Пара слов о Вашем проекте"></textarea>
					</div>
				</div>
				<div class="b-btn-holder m-reduced m-center">
					<input type="submit" class="b-btn" value="Добавить"/>
				</div>
			</form>
		</div>
	</div>
	<!-- Lighbox add project: start -->

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
								<li class="b-nav-item "><a class="b-nav-link b-nav-arrow" href="index.php">Обо мне</a></li>
								<li class="b-nav-item"><a class="b-nav-link m-active" href="projects.php">Мои работы</a></li>
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
				<!-- Project: start -->
				<section class="b-section m-cfix">
					<h2 class="b-section-title">Мои работы</h2>
					<div class="b-section-body">
						<ul class="b-project-list m-cfix">
							<li class="b-project-item">
								<div class="b-project-img-container">
									<img class="b-project-img" src="img/misc/project-thumb1.jpg" alt="project 1">
									<div class="b-project-tip">
										<div class="b-project-tip-text">название</div>
									</div>
								</div>
								<div class="b-project-title">
									<a class="b-project-link" href="http://www.site.ru" target="_blank">www.site.ru</a>
								</div>
								<div class="b-project-descr">
									Информация о проекте 1 превью 2 строки
								</div>
							</li>
							<li class="b-project-item">
								<div class="b-project-img-container">
									<img class="b-project-img" src="img/misc/project-thumb2.jpg" alt="project 2">
									<div class="b-project-tip">
										<div class="b-project-tip-text">название</div>
									</div>
								</div>
								<div class="b-project-title">
									<a class="b-project-link" href="http://www.site.ru" target="_blank">www.site.ru</a>
								</div>
								<div class="b-project-descr">
									Информация о проекте 2 превью 2 строки
								</div>
							</li>
							<li class="b-project-item">
								<div class="b-project-img-container">
									<img class="b-project-img" src="img/misc/project-thumb3.jpg" alt="project 3">
									<div class="b-project-tip">
										<div class="b-project-tip-text">название</div>
									</div>
								</div>
								<div class="b-project-title">
									<a class="b-project-link" href="http://www.site.ru" target="_blank">www.site.ru</a>
								</div>
								<div class="b-project-descr">
									Информация о проекте 3 превью 2 строки
								</div>
							</li>
							<li class="b-project-item">
								<div class="b-project-img-container">
									<img class="b-project-img" src="img/misc/project-thumb4.jpg" alt="project 4">
									<div class="b-project-tip">
										<div class="b-project-tip-text">название</div>
									</div>
								</div>
								<div class="b-project-title">
									<a class="b-project-link" href="http://www.site.ru" target="_blank">www.site.ru</a>
								</div>
								<div class="b-project-descr">
									Информация о проекте 4 превью 2 строки
								</div>
							</li>
							<?php if (isset($_SESSION['auth'])) : ?>
								<li class="b-project-item js-add-project">
									<div class="b-project-img-container m-dashed b-project-add">
										<img class="b-project-img m-invisible" src="img/misc/project-thumb1.jpg" alt="default project">
										<div class="b-project-tip m-visible">
											<div class="b-project-tip-text b-project-add-text">
												<img class="b-project-add-icon" src="img/icon/project.png" alt="Add project">
												<div class="b-project-add-label">Добавить проект</div>
											</div>
										</div>
									</div>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</section>
				<!-- Project: end -->
			</div>
			<!-- Main content: end -->
			<!-- Sidebar: start -->
			<aside class="b-sidebar">
				<!-- Navigation: start -->
				<nav class="b-nav">
					<ul class="b-nav-list">
						<li class="b-nav-item"><a class="b-nav-link" href="index.php">Обо мне</a></li>
						<li class="b-nav-item"><a class="b-nav-link m-active" href="projects.php">Мои работы</a></li>
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