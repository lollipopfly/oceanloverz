<?
/*
	Template Name: About
*/
	get_header();
?>
	<!-- begin page  -->
	<div class="page about-page">
		<div class="slide-container">
			<img class="slide-container__img" src="<? bloginfo('template_url');?>/images/slides/about_slide.jpg">
			<a href="/products/" class="btn slider__shop">
				<span class="busket-white"></span>
				shop now
			</a>
		</div>

		<!-- begin page-container  -->
		<div class="page-container">
			<h2 class="page__title page__title-green">
				At Oceanloverz we are on a mission to
				unite all loverz of the ocean, share the beauty of all
				things salty and behold our beautiful ocean world.
			</h2>

			<div class="about__text-top">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content();?>
				<?php endwhile; endif; ?>
			</div>

			<h2 class="page__title page__title-purple">Who is behind Oceanloverz</h2>

			<div class="about-carousel">
				<div class="about-carousel__item">
					<img src="<? bloginfo('template_url');?>/images/slides/about_slides/slide1.jpg"></div>
				<div class="about-carousel__item">
					<img src="<? bloginfo('template_url');?>/images/slides/about_slides/slide2.jpg"></div>
				<div class="about-carousel__item">
					<img src="<? bloginfo('template_url');?>/images/slides/about_slides/slide3.jpg"></div>
				<div class="about-carousel__item">
					<img src="<? bloginfo('template_url');?>/images/slides/about_slides/slide1.jpg"></div>
			</div>

			<p>Franziska Iseli is a lover of all things salty, mad adventurer and philanthropic entrepreneur.</p>
		</div>
		<!-- end page-container -->


	</div>
	<!-- end page -->
<? get_footer();?>
