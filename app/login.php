<?php
	session_start();
	$page = 'login';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie ie8" lang="ru"> <![endif]-->
<!--[if IE]>  <html class="no-js ie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
	<title>Портфолио: Логин</title>
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

	<!-- Base container: start -->
	<div class="h-base-container">
		<!-- Content: start -->
		<div class="b-content-container">
			<!-- Login form: start -->
			<div class="b-login-form">
				<h2 class="b-form-title m-big-font">Авторизуйтесь</h2>
				<form action="php/auth.php" class="b-form b-form-body b-login-form-body" method="post">
					<div class="b-form-line m-spaced">
						<div class="b-form-label m-big-label m-center">Логин</div>
						<div class="b-form-field">
							<span class="b-form-tip">Введите логин</span>
							<input class="b-control b-input m-big-input required" type="text" name="login" placeholder="Введите логин"/>
						</div>
					</div>
					<div class="b-form-line m-spaced">
						<div class="b-form-label m-big-label m-center">Пароль</div>
						<div class="b-form-field">
							<span class="b-form-tip">Введите пароль</span>
							<input class="b-control b-input m-big-input required" type="password" name="password" placeholder="Введите пароль" />
						</div>
					</div>
					<div class="b-btn-holder m-center m-b-reset">
						<input type="submit" class="b-btn m-big-btn" value="Войти"/>
					</div>
				</form>
			</div>
			<!-- Login form: end -->
		</div>
		<!-- Content: end -->
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

	<script src="js/main.js"></script>

	<!--[if IE 8]>
	<script src="js/vendor/selectivizr.min.js"></script>
	<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

	<!-- JS: end -->
</body>
</html>