<?php
add_filter('widget_text', 'do_shortcode');
// Support Featured Images
add_theme_support( 'post-thumbnails' );

// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}
the_content();

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_enqueue_scripts', 5);

// add_filter( 'widget_text', 'shortcode_unautop');
// add_filter( 'widget_text', 'do_shortcode', 11);
