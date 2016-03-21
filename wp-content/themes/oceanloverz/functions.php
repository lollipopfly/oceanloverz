<?

// remove space in title
add_filter('wp_title', create_function('$a, $b','return str_replace(" $b ","",$a);'), 10, 2);

// add thumbnails
add_theme_support('post-thumbnails');

// add menu
if (function_exists('add_theme_support')) {
		add_theme_support('menus');
}