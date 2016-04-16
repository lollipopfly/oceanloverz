<?
/*
	Template Name: About
*/
	get_header();
?>
	<h2 class="page__title page__title-green">
		At Oceanlovers we are on a mission to
		unite all loverz of the ocean, share the beauty of all
		things salty and behold our beautiful ocean world.
	</h2>

	<div class="about__text-top">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content();?>
		<?php endwhile; endif; ?>
	</div>

	<h2 class="page__title page__title-purple">Who is behind Oceanlovers</h2>

	<?
		$cat = get_the_category();
		$cat_name = 'about_carousel';
		$n = 10;   // post quanity
		$args = array(
			'category_name' => $cat_name,
			'post_type' => 'post',
			'posts_per_page' => $n,
		);
	    $about_carousel = new WP_Query($args);
	?>

	<? if($about_carousel):?>
		<div class="about-carousel">
			<?while($about_carousel->have_posts()) : $about_carousel->the_post();?>
				<div class="about-carousel__item">
					<? the_post_thumbnail();?>
					<div class="about-carousel__item__overlay"></div>
				</div>
			<?php endwhile; ?>
		</div>
	<? endif;?>

	<p>Franziska Iseli is a lover of all things salty, mad adventurer and philanthropic entrepreneur.</p>

<? get_footer();?>
