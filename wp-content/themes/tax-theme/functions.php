<?php
function add_theme_styles_and_scripts() {
	wp_enqueue_style("main", get_template_directory_uri() . '/style.css', false, '1.1');
	wp_enqueue_script("menu-button", get_template_directory_uri() . "/javascript/menu-button.js", false, '1.1');
}

function register_menus() {
	register_nav_menus([
		'header-menu' => __('Header Navigation Menu'),
		'footer-menu' => __('Footer Navigation Menu')
	]);
}

function setup_custom_logo() {
	add_theme_support('custom-logo', [
		"header-text" => ["site-title"]
	]);
}

add_action('after_setup_theme', 'setup_custom_logo');
add_action('init', 'register_menus');
add_action("wp_enqueue_scripts", "add_theme_styles_and_scripts");
add_theme_support('post-thumbnails');

// Remove unnecessary Adjacent Post query, since we will use a 'Recent Posts' sidebar
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
