<?php
function add_theme_styles() {
	wp_enqueue_style("main", get_template_directory_uri() . '/style.css', false, '1.1');
}

add_action("wp_enqueue_scripts", "add_theme_styles");
add_theme_support('post-thumbnails');

// Remove unnecessary Adjacent Post query, since we will use a 'Recent Posts' sidebar
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );