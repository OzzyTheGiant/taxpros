<?php
function add_theme_styles() {
	wp_enqueue_style("main", get_template_directory_uri() . '/style.css', false, '1.1');
}
add_action("wp_enqueue_scripts", "add_theme_styles");