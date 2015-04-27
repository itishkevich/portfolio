<?php
	session_start();
	$page = 'contacts';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie ie8" lang="ru"> <![endif]-->
<!--[if IE]>  <html class="no-js ie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
	<title>Портфолио: Связаться со мной</title>
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
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<!--[if lt IE 8]>
	<p class="b-unhappy-browser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Base container: start -->
	<div class="h-base-container">
		<!-- Header: start -->
		<?php
			include 'includes/header.php';
		?>
		<!-- Header: end -->
		<!-- Content: start -->
		<div class="b-content-container m-cfix">
			<!-- Main content: start -->
			<div class="b-content">
				<!-- Contact form: start -->
				<section class="b-section m-cfix">
					<h2 class="b-form-title">У вас интересный проект? Напишите мне</h2>
					<div class="b-form-body">
						<form action="php/contacts.php" class="b-form m-contacts-form" method="post">
							<div class="b-form-line b-columns">
								<div class="b-col m-w50">
									<div class="b-form-label">Имя</div>
									<div class="b-form-field">
										<span class="b-form-tip">Вы не ввели имя</span>
										<input class="b-control b-input required" type="text" name="name" placeholder="Как к Вам обращаться"/>
									</div>
								</div>
								<div class="b-col m-w50">
									<div class="b-form-label">Email</div>
									<div class="b-form-field">
										<span class="b-form-tip m-right-tip">Вы ввели не корректный Email</span>
										<input class="b-control b-input required" type="text" name="email" placeholder="Куда мне писать" />
									</div>
								</div>
							</div>
							<div class="b-form-line">
								<div class="b-form-label">Сообщение</div>
								<div class="b-form-field">
									<span class="b-form-tip">Ваш вопрос</span>
									<textarea class="b-control b-textarea required" name="msg" id="" cols="30" rows="5" placeholder="Кратко в чем суть"></textarea>
								</div>
							</div>
							<div class="b-form-line">
								<div class="b-form-field m-center">
									<div class="g-recaptcha" data-sitekey="6LdCkwUTAAAAACy1DjwmXJ1-ULa1oU0sdYHSv-sU"></div>
								</div>
							</div>
							<div class="b-btn-holder b-columns m-mob">
								<div class="b-col m-w50">
									<input type="submit" class="b-btn" value="Отправить"/>
								</div>
								<div class="b-col m-w50 m-right">
									<input type="reset" class="b-btn m-neg" value="Очистить"/>
								</div>
							</div>
						</form>
					</div>
				</section>
				<!-- Contact form: end -->
			</div>
			<!-- Main content: end -->
			<!-- Sidebar: start -->
			<?php
				include 'includes/sidebar.php';
			?>
			<!-- Sidebar: end -->
		</div>
		<!-- Content: end -->
		<!-- Social icons: start -->
		<?php
			$version = 'mob';
			include 'includes/social.php';
		?>
		<!-- Social icons: end -->
		<div class="b-footer-push"></div>
	</div>
	<!-- Base container: end -->
	<!-- Footer: start -->
	<?php
		include 'includes/footer.php';
	?>
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