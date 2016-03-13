<?php
get_header(); 

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
?>

<section class="page__title__container">
	<h1 class="page__title">
		<?php the_title(); ?>
	</h1>
</section>

<section class="page__content">
	<?php the_content(); ?>
</section>

<?php

		endwhile;
	endif;

get_footer();

?>