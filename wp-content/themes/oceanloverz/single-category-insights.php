<? get_header();?>
    <? if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?
            // acf post main image
            $post_detail_img = get_field('post_detail_image');
        ?>
        <h2 class="page__title page__title-green"><? the_title(); ?></h2>
        <?php if ($post_detail_img['url']): ?>
            <img src="<?=$post_detail_img['url']?>" class="single__img">
        <?php endif ?>
        <div class="single__content">
            <? the_content(); ?>
        </div>
    <? endwhile; endif; ?>

        <div class="single__pagination">
            <? previous_post_link('<span class="single__pagination__prev">%link</span>', 'prev bLog post', TRUE);?>
            <? next_post_link( '<span class="single__pagination__next">%link</span>', 'next bLog post', TRUE ); ?>
        </div>
<? get_footer();?>