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
<h2>Recent Articles</h2>
<?php while ($query->have_posts()) : $query->the_post(); ?>
	<a class="recent-post" href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('full'); ?>
		<h3><?php the_title(); ?></h3>
		<p><?php the_date(); ?></p>
	</a>
<?php 
	endwhile; 
endif;
wp_reset_postdata(); // reset the main query to continue in parent template
?>