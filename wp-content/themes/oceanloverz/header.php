<!doctype html>
<html lang="">
<head>
	<title><?=wp_title();?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />

	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url');?>/js/libs/html5shiv.min.js"></script>
	<![endif]-->
	<? wp_head;?>
</head>
<body>
	<!-- begin wrap  -->
	<div class="wrap">
		<header class="header">
			<!-- begin header-top  -->
			<div class="header-top">
				<a href="#" class="header-top__link">Join your fellow Oceanloverz and receive a monthly inspiring Oceanloverz story! <span class="header-top-arr"></span></a>
			</div>
			<!-- end header-top -->

			<!-- begin header-bottom  -->
			<div class="header-bottom">
				<div class="container">
					<div class="header-bottom-row">
						<div class="nav-container">
							<a href="/" class="logo"></a>
							<nav class="main-nav navbar navbar-default">
							  <div class="container-fluid">
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar one-icon"></span>
							        <span class="icon-bar two-icon"></span>
							        <span class="icon-bar three-icon"></span>
							      </button>
							    </div>

							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							      <!-- <ul class="nav navbar-nav">
							        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
							        <li><a href="#">Products</a></li>
							        <li><a href="#">Insights</a></li>
							        <li><a href="#">About</a></li>
							        <li><a href="#">Contact</a></li>
							      </ul> -->
									<?
									$menu_args = array(
										'menu'            => 'main',
										'container'       => false,
										'menu_class'      => 'nav navbar-nav',
										// 'fallback_cb'     => 'wp_page_menu',
										// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									);
								wp_nav_menu($menu_args);
								?>
							    </div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						</div>

						<div class="social">
							<ul>
								<li class="social__item"><a href="#" class="social__link"><span class="facebook"></span></a></li>
								<li class="social__item"><a href="#" class="social__link"><span class="instagram"></span></a></li>
								<li class="social__item"><a href="#" class="social__link"><span class="twitter"></span></a></li>
								<li class="social__item"><a href="#" class="social__link"><span class="basket-social"></span></a></li>
							</ul>
							<!-- /.social -->
						</div>
					</div>
				</div>
			</div>
			<!-- end header-bottom -->
		</header>

		<!-- begin slider  -->
		<div class="slider">
			<ul class="slider-list">
				<li class="slider__item">
					<img src="<?php bloginfo('template_url');?>/images/slide.jpg" alt="slide1">
					<!-- <div class="slider__desc">
						<p class="slider__desc-text">“The sea, once it casts its spell, holds one in its net of wonder forever.“</p>
						<span class="slider__desc-author">Jacques Yves Cousteau</span>
					</div> -->
				</li>
				<li class="slider__item">
					<img src="<?php bloginfo('template_url');?>/images/slide.jpg" alt="slide1">
					<!-- <div class="slider__desc">
						<p class="slider__desc-text">“The sea, once it casts its spell, holds one in its net of wonder forever.“</p>
						<span class="slider__desc-author">Jacques Yves Cousteau</span>
					</div> -->
				</li>
			</ul>
			<a href="/products/" class="btn slider__shop">
				<span class="busket-white"></span>
				shop now
			</a>
		</div>
		<!-- end slider -->

		<!-- begin main  -->
		<div class="main">