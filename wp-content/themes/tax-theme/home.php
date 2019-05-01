<?php get_header(); ?>
<main id="post-container" class="segment">
	<div class="row">
		<h1 class="col-xs-12">News and Tips</h1>
	</div>
	<?php if (have_posts()) : ?>
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
		<div class="col-md-4 col-tb-6 col-xs-12">
			<a class="post-card" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('full'); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_date(); ?></p>
			</a>
		</div>
		<?php endwhile; ?>
	</div>
	<?php else : ?>
	<p><?php _e('Posts could not be loaded'); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>