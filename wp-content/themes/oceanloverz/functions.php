<?

// remove space in title
add_filter('wp_title', create_function('$a, $b','return str_replace(" $b ","",$a);'), 10, 2);

// add thumbnails
add_theme_support('post-thumbnails');

// add menu
if (function_exists('add_theme_support')) {
		add_theme_support('menus');
}

// delete [...] in post
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// templates for single page of category
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat )
  {
    if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
    }
  }
  return $t;
}