<?php
	session_start();
	$page = 'projects';
	include 'php/db_projects.php';
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
						<input class="b-control b-input required" type="text" name="name" placeholder="Введите название" />
					</div>
				</div>
				<div class="b-form-line m-reduced">
					<div class="b-form-label m-small-label">Картинка проекта</div>
					<div class="b-form-field">
						<span class="b-form-tip">Изображение</span>
						<div class="b-custom-upload">
							<input class="b-control b-input b-input-file" type="file" name="upload" id="upload" />
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
					<input type="submit" class="b-btn" value="Добавить" />
				</div>
			</form>
		</div>
	</div>
	<!-- Lighbox add project: start -->

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
				<!-- Project: start -->
				<section class="b-section m-cfix">
					<h2 class="b-section-title">Мои работы</h2>
					<div class="b-section-body">
						<ul class="b-project-list m-cfix">
							<? while($row = mysql_fetch_array($result)) { ?>
								<li class="b-project-item">
									<div class="b-project-img-container">
										<img class="b-project-img" src="<?=$row['img_path']?>" alt="<?=$row['site_name']?>" />
										<div class="b-project-tip">
											<div class="b-project-tip-text"><?=$row['site_name']?></div>
										</div>
									</div>
									<div class="b-project-title">
										<a class="b-project-link" href="<?=$row['site_link']?>" target="_blank"><?=$row['site_link_text']?></a>
									</div>
									<div class="b-project-descr">
										<?=$row['site_descr']?>
									</div>
								</li>
							<? } ?>
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