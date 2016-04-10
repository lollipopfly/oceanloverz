<? get_header();?>
    <?
        $cat = get_the_category();
        $cat_id = $cat[0]->cat_ID;
        $id = $cat_id; // category ID
        $n = 10;   // post quanity
        $args = array(
            'cat' => $id,
            'post_type' => 'post',
            'posts_per_page' => $n,
            'paged' => get_query_var('paged'),
        );

        $recent = new WP_Query($args);?>
        <? if($recent):?>
            <ul class="insights">
                <?while($recent->have_posts()) : $recent->the_post();?>
                    <? $date = get_the_date('n F Y');
                        $excerpt = get_the_excerpt();
                        $preview = get_field('preview');
                    ?>
                    <li class="insights__item clearfix">
                        <div class="insights__image__container">
                            <? the_post_thumbnail();?>
                        </div>
                        <div class="insights__block">
                            <div class="insights__block__wrapper">
                                <h3 class="insights__title"><?php the_title(); ?></h3>
                                <?php if ($preview): ?>
                                    <div class="insights__preview"><?=$preview?></div>
                                <?php endif ?>
                                <a href="<?php the_permalink()?>" class="insights__more btn btn-blue">read more</a>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <? endif;?>

        <?php if ($recent->max_num_pages > 1): ?>
            <div class="pagination">
                <span class="pagination__prev"><? previous_posts_link( 'Newer posts' );?></span>
                <span class="pagination__next"><? next_posts_link( 'Older posts', $recent->max_num_pages );?></span>
            </div>
        <?php endif ?>
<? get_footer();?>