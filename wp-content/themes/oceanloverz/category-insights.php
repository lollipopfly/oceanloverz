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
                    ?>
                    <li class="insights__item clearfix">
                        <? the_post_thumbnail();?>
                        <div class="insights__block">
                            <div class="insights__block__wrapper">
                                <h3 class="insights__title"><?php the_title(); ?></h3>
                                <div class="insights__preview">Leaf Collection is now available.</div>
                                <a href="<?php the_permalink()?>" class="insights__more btn btn-blue">read more</a>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <? endif;?>
    <? //wp_pagenavi( array( 'query' => $recent ));?>
<? get_footer();?>