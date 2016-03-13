<?php
get_header(); 

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
?>

<section class="page__title__container">
	<h1 class="page__title">
		Page Not Found
	</h1>
</section>

<section class="page__content">
	<p>Sorry, the page you are looking for can't be found! Please click <a href="<?php echo site_url(); ?>">here</a> to go home or use the navigation above.</p>
</section>

<?php

		endwhile;
	endif;

get_footer();

?>