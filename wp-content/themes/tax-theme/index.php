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
		<div class="segment container-dark" id="article-list">
			
		</div>
		<?php get_template_part("partials/call-to-action", "page"); ?>
	</main>
<?php get_footer(); ?>