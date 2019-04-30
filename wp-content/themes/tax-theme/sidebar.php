<?php
/* Display top 3 recent posts, except the one currently viewing */
$query = new WP_Query([
	"numberposts" => 3,
	"post_status" => 'publish',
	'post__not_in' => [$post->ID],
	"meta_query" => [
		'key' => '_thumbnail_id',
		"value" => "0",
		"compare" => ">"
	]
]);

if ($query->have_posts()) : ?>
<div class="row">
	<h2 class="col-xs-12">Recent Articles</h2>
	<?php while ($query->have_posts()) : $query->the_post(); ?>
	<div class="col-sm-12 col-tb-6 col-xs-12">
		<a class="post-card" href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('full'); ?>
			<h3><?php the_title(); ?></h3>
			<p><?php the_date(); ?></p>
		</a>
	</div>
	<?php endwhile; ?>
</div>
<?php endif;
wp_reset_postdata(); // reset the main query to continue in parent template
?>