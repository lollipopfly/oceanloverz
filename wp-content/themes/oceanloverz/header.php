<!doctype html>
<html lang="en">
<head>
	<title><?=wp_title();?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/node_modules/slick-carousel/slick/slick-theme.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />

	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url');?>/js/libs/html5shiv.min.js"></script>
	<![endif]-->

	<? if (is_home()): ?>
		<!-- ONTAPORT -->
		<link rel="stylesheet" href="//app.ontraport.com/js/formeditor/moonrayform/paymentplandisplay/production.css" type="text/css" />
		<link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.default.css" type="text/css" />
		<link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.publish.css" type="text/css" />
		<link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/minify/?g=moonrayCSS" type="text/css" />
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/formEditor/gencss.php?uid=p2c2385f183" type="text/css" />
		<script type="text/javascript" src="//forms.ontraport.com/v2.4/include/formEditor/genjs-v3.php?html=false&uid=p2c2385f183"></script>
	<?endif ?>

	<? wp_head();?>
</head>
<body>
	<!-- begin wrap  -->
	<div class="wrap">
		<header class="header">
			<!-- begin header-top  -->
			<div class="header-top">
				<a href="#" class="header-top__link">Join your fellow Oceanloverz and receive a monthly inspiring Oceanloverz story! <span class="arr_next"></span></a>
			</div>
			<!-- end header-top -->

			<!-- begin header-bottom  -->
			<div class="header-bottom">
				<div class="container">
					<div class="header-bottom-row">
						<div class="nav-container">
							<a href="/" class="logo"></a>
							<button class="burger">
								<span class="burger__row one-icon"></span>
								<span class="burger__row two-icon"></span>
								<span class="burger__row three-icon"></span>
							</button>

							<!-- Main navigation -->
							<?
							$menu_args = array(
								'menu'       => 'main',
								'container'  => false,
								'menu_class' => 'nav',
							);
							wp_nav_menu($menu_args);
							?>
						</div>

						<div class="social">
							<ul>
								<li class="social__item">
									<a href="<?=get_field('facebook_link', 'user_1');?>" target="_blank" class="social__link"><span class="facebook"></span></a>
								</li>
								<li class="social__item">
									<a href="<?=get_field('instagram_link', 'user_1');?>" target="_blank" class="social__link"><span class="instagram"></span></a>
								</li>
								<li class="social__item">
									<a href="<?=get_field('twitter_link', 'user_1');?>" target="_blank" class="social__link"><span class="twitter"></span></a>
								</li>
								<li class="social__item">
									<a href="/products/" class="social__link"><span class="basket-social"></span></a>
								</li>
							</ul>
							<!-- /.social -->
						</div>
					</div>
				</div>
			</div>
			<!-- end header-bottom -->
		</header>

		<!-- begin main  -->
		<div class="main">
			<!-- PAGE TEMPLATE -->
			<? if(!is_home()): ?>
				<!-- begin page  -->
				<div class="page">
					<? if (get_the_post_thumbnail() || is_category()): ?>
						<div class="slide-container">
							<!-- Check category page (insights) -->
							<? if (is_category('insights')): ?>
								<?
									$cat = get_the_category();
									$cat_id = $cat[0]->cat_ID;
									$cat_img_src = get_field('image', 'category_'.$cat_id);
								?>
								<img src="<?=$cat_img_src?>">
							<!-- Check single post -->
							<? elseif(is_single()): ?>
								<img src="<? bloginfo('template_url');?>/images/slides/insights_inner_slide.jpg">
							<? else: ?>
								<!-- Page image -->
								<?=get_the_post_thumbnail();?>
							<? endif ?>
							<a href="/products/" class="btn slider__shop">
								<span class="busket-white"></span>
								shop now
							</a>
						</div>
					<? endif ?>

					<!-- begin page-container  -->
					<div class="page-container">
			<? endif;?>