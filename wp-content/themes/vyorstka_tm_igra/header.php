<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/public/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/owl.carousel.css">

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?php bloginfo('template_directory') ?>/public/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory') ?>/public/js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<div id="fh5co-container">

	<?php if (is_front_page()){ ?>
	<div class="js-sticky">
		<div class="fh5co-main-nav">
			<div class="container-fluid">
				<div class="fh5co-menu">
					<a href="#" data-nav-section="home" class="animated slideInLeft">Главная</a>
					<a href="#" data-nav-section="about" class="animated slideInUp">О мастерской</a>
					<a href="#" data-nav-section="courses" class="animated slideInDown">Курсы</a>
					<a href="#" data-nav-section="advantages" class="animated slideInUp">Наша уникальность</a>
					<a href="#" data-nav-section="gallery" class="animated slideInDown">Фотогалерея</a>
					<a href="#" data-nav-section="reviews" class="animated slideInUp">Отзывы</a>
					<a href="#" data-nav-section="news" class="animated slideInDown">Новости</a>
					<a href="#" data-nav-section="contacts" class="animated slideInRight">Контакты</a>
				</div>
			</div>

		</div>
	</div>

	<?php }else{ ?>
	<div class="fh5co-main-nav non-index">
		<div class="container-fluid">
			<div class="fh5co-menu">
				<a href="<?=get_permalink(4)?>">Главная</a>
				<a href="<?=get_permalink(4)?>#fh5co-about">О мастерской</a>
				<a href="<?=get_permalink(4)?>#fh5co-courses">Курсы</a>
				<a href="<?=get_permalink(4)?>#fh5co-advantages">Наша уникальность</a>
				<a href="<?=get_permalink(4)?>#fh5co-gallery">Фотогалерея</a>
				<a href="<?=get_permalink(4)?>#fh5co-reviews">Отзывы</a>
				<a href="<?=get_permalink(4)?>#fh5co-news">Новости</a>
				<a href="<?=get_permalink(4)?>#fh5co-footer">Контакты</a>
			</div>
		</div>

	</div>
	<?php } ?>