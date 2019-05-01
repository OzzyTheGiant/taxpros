<?php get_header(); ?>
<main id="error-404" class="segment container-gray">
	<h1><?php _e('Page Not Found'); ?></h1>
	<p><?php _e("It appears that this page doesn't exist!"); ?></p>
	<a class="button main" href="<?php get_home_url(); ?>"><?php _e("Home Page"); ?></a>
</main>
<?php get_footer(); ?>