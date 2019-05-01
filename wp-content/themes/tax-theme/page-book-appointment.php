<?php get_header(); ?>
<main class="segment container-gray" id="book-appointment">
	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<form id="book-appointment-form" class="container-dark">
		<input type="hidden" name="honeypot" value=""/>
		<input type="text" name="name" placeholder="Full Name"/>
		<input type="text" name="email" placeholder="Email Address"/>
		<input type="text" name="phone" placeholder="Phone Number"/>
		<input type="text" name="appointment_time" placeholder="Appointment Date & Time"/>
		<textarea placeholder="Your message"></textarea>
		<button type="submit" class="button main"><?php _e('Book Appointment');?></button>
	</form>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>