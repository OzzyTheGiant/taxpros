<?php
/**
 * The header for our theme.
 *
 * @package Tax Theme
 *
 */
?>
<?php get_header(); ?>
	<main>
		<div id="headline" class="segment container-dark">
			<div class="row">
				<div class="col-lg-8">
					<!-- Home page title, Wordpress tagline -->
					<h1><?php bloginfo('description'); ?></h1>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae sed ea eius. Consequatur pariatur dignissimos minima quos adipisci quaerat reiciendis, beatae, possimus dolor in exercitationem quis aperiam dicta distinctio quasi.</p>
					<a class="button main" href="#">Book Appointment</a>
				</div>
			</div>
		</div>
		<div class="segment container-light" id="sales-pitch">
			<h2>Why You Should Choose TaxPros</h2>
			<div class="row">
				<div class="col-lg-4">
					<div class="sales-pitch-point container-green">
						<img src="http://placehold.it/300x200/"/>
						<h3>Save Time</h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ea commodi molestiae incidunt, consequatur, ut aut autem nobis odio minus mollitia illum ex pariatur? Architecto aspernatur atque corrupti quos fugit!</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sales-pitch-point container-green">
						<img src="http://placehold.it/300x200/"/>
						<h3>Access Documents Online</h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ea commodi molestiae incidunt, consequatur, ut aut autem nobis odio minus mollitia illum ex pariatur? Architecto aspernatur atque corrupti quos fugit!</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sales-pitch-point container-green">
						<img src="http://placehold.it/300x200/"/>
						<h3>Track Efile Status</h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ea commodi molestiae incidunt, consequatur, ut aut autem nobis odio minus mollitia illum ex pariatur? Architecto aspernatur atque corrupti quos fugit!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="segment container-gray" id="article-list">
			<h2>Latest Articles</h2>
			<div class="row">
				<?php
				$query = new WP_Query([
					"numberposts" => 4,
					"post_status" => 'publish',
					"meta_query" => [
						'key' => '_thumbnail_id',
						"value" => "0",
						"compare" => ">"
					]
				]);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post() ?>
					<div class="col-tb-6 col-xs-12">
						<a class="post-card" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full'); ?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_date(); ?></p>
						</a>
					</div>
					<?php endwhile; ?>
				<?php else : ?>
					<p class="col-xs-12">The posts could not be loaded. Try refreshing the page.</p>
				<?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
		<?php get_template_part("partials/call-to-action", "page"); ?>
	</main>
<?php get_footer(); ?>