<? get_header();?>
			<?
			    $cat = get_the_category();
			    $cat_name = 'home_slider';
			    $n = 10;   // post quanity
			    $args = array(
			        'category_name' => $cat_name,
			        'post_type' => 'post',
			        'posts_per_page' => $n,
			    );
			    $home_slider = new WP_Query($args);
			?>

		    <? if($home_slider):?>
				<!-- begin slider  -->
				<div class="slider">
					<ul class="slider-list">
						<?while($home_slider->have_posts()) : $home_slider->the_post();?>
							<li class="slider__item">
								<? the_post_thumbnail();?>
							</li>
						<?php endwhile; ?>
					</ul>
					<a href="/products/" class="btn slider__shop">
						<span class="busket-white"></span>
						shop now
					</a>
				</div>
				<!-- end slider -->
            <? endif;?>

			<!-- begin home  -->
			<div class="home">
				<div class="home-top">
					<div class="home-inst home-box">
						<div class="home-box-inner">
							<a href="<?=get_field('instagram_link', 'user_1')?>" target="_blank" class="btn btn-redlight">Join us on Instagram!</a>
							<div class="clearfix"></div>
							<a class="btn btn-redlight" href="<?=get_field('instagram_link', 'user_1')?>" target="_blank">follow us</a>
						</div>
					</div>
					<!-- /.home-inst -->

					<div class="home-subscribe home-box">
						<div class="home-box-inner">
							<div class="subscribe-desc-container">
								<h2>Join your fellow Oceanloverz and receive</h2>
								<h2>a monthly inspiring Oceanloverz story:</h2>
							</div>
							<!-- Ontaport Subscribe form -->
							<? require(get_template_directory() . '/include/_ontaport_subscribe.php');?>
						</div>
					</div>
					<!-- /.home-subscribe -->
				</div>

				<div class="home-middle">
					<div class="home-insights home-box">
						<div class="home-box-inner">
							<a href="/insights/" class="btn btn-large btn-brown">insights</a>
						</div>
					</div>
					<!-- /.home-insights -->

					<div class="home-products home-box">
						<div class="home-box-inner">
							<a href="/products/" class="btn btn-blue-super-bold btn-large">products</a>
							<div class="clearfix"></div>
							<a class="btn btn-blue" href="/products/">shop now</a>
						</div>
					</div>
					<!-- /.home-products -->
				</div>

				<div class="home-bottom">
					<div class="home-about home-box">
						<div class="home-box-inner">
							<a href="/about/" class="btn btn-large btn-green">about</a>
						</div>
					</div>
					<!-- /.home-about -->

					<div class="home-contact home-box">
						<div class="home-box-inner">
							<a href="/contact/" class="btn  btn-large btn-purple">contact</a>
						</div>
					</div>
					<!-- /.home-contact -->
				</div>
			</div>
			<!-- end home -->
<? get_footer();?>