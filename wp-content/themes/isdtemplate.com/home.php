<?php get_header(); ?>

	<!-- your home html -->
	<!-- Banner -->
	<section class="hp-slideshow">
		<h2 class="hidden">hidden h2</h2>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?><?php endif ?>
	</section>
	<!-- Banner end -->


	<!-- your home html -->

<?php get_footer(); ?>
