<?php
// Support Featured Images
add_theme_support( 'post-thumbnails' );

// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}
the_content();
