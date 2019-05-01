<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="segment">
		<nav class="row between-xs middle-xs">
			<div>
				<a class="logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php 
					$logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($logo_id, 'full');
					if (has_custom_logo()) : ?>
					<img src="<?php esc_url($logo); ?>" alt="<?php get_bloginfo('name'); ?>"/>
					<?php else : ?>
					<img src="<?php echo get_template_directory_uri() . '/images/placeholder-logo.png'; ?>" alt="placeholder logo"/>
					<?php endif; ?>
				</a>
			</div>
			<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
			<img id="menu-button" class="menu-button" src="<?php echo get_template_directory_uri() . '/images/menu.svg'; ?>" alt="<?php _e('Menu'); ?>"/>
		</nav>
	</header>