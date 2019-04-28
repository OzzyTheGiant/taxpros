	<footer class="segment container-dark">
		<div class="row">
			<div class="col-lg-4">
				<div>
					<!-- Business name, Wordpress site title -->
					<h2 id="footer-title"><?php bloginfo("name"); ?></h2>
					<!-- Wordpress tagline -->
					<h3><?php bloginfo('description'); ?></h3>
				</div>
			</div>
			<div class="col-lg-4">
				<div>
					<h2>Location</h2>
					<p>123 Main Street</p>
					<p>Anytown, USA 10000</p>
					<p>123-555-1234</p>
				</div>
			</div>
			<div class="col-lg-4">

			</div>
			<div id="copyright" class="col-xs-12"><div>&copy; <?php echo date('Y'); ?> TaxPros. All Rights Reserved</div></div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>