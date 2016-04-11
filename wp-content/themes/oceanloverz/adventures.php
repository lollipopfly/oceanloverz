<?
/*
    Template Name: Adventures
*/
    get_header();
?>
    <h2 class="page__title page__title-orange">Adventures</h2>

    <?
        $cat = get_the_category();
        $cat_name = 'adventures_slider';
        $n = 10;   // post quanity
        $args = array(
            'category_name' => $cat_name,
            'post_type' => 'post',
            'posts_per_page' => $n,
        );
        $adventures_slider = new WP_Query($args);
    ?>

    <? if($adventures_slider):?>
        <div class="adventures-slider">
            <?while($adventures_slider->have_posts()) : $adventures_slider->the_post();?>
                <div class="adventures-slider__iten">
                    <? the_post_thumbnail();?>
                </div>
            <?php endwhile; ?>
        </div>
    <? endif;?>

    <div class="adventures-thumbnail__list">
        <div class="adventures-thumbnail__item">
            <img src="<?php bloginfo('template_url');?>/images/adventures_image1.jpg" alt="">
        </div>
        <div class="adventures-thumbnail__item">
            <img src="<?php bloginfo('template_url');?>/images/adventures_image2.jpg" alt="">
        </div>
        <div class="adventures-thumbnail__item">
            <img src="<?php bloginfo('template_url');?>/images/adventures_image3.jpg" alt="">
        </div>
    </div>
<? get_footer();?>
