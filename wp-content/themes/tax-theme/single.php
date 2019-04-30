<?php get_header(); ?>
<main id="post-container" class="segment">
	<article id="post" class="row">
		<?php while (have_posts()) : the_post(); ?>
		<div id="title-bar" class="col-xs-12">
			<h1><?php the_title(); ?></h1>
			<p><time datetime="<?php echo get_the_date('c'); ?>"><?php the_date(); ?></time></p>
		</div>
		<div id="article-content" class="col-sm-8 col-xs-12">
			<?php the_post_thumbnail('full'); ?>
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
		<aside class="col-sm-4 col-xs-12">
			<?php get_sidebar(); ?>
		</aside>
	</article>
</main>
<?php get_footer(); ?>