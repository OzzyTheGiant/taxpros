<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav>
			<div>
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
			</div>
			<div>
				<ul>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'items_wrap' => '%3$s')); ?>
				</ul>
			</div>
		</nav>
	</header>