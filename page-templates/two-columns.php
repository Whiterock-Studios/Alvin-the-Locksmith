<?php 

/*
Template Name: Two Column
*/

get_header ();

if (have_posts() ):
  while (have_posts() ):
    the_post();

?>
<section class="page__title__container">  
  <h1 class="page__title">
    <?php the_title(); ?>
  </h1>
</section>

<section class="page__content">
  <div class="half">
    <?php the_content(); ?>
  </div>

  <div class="half">
    <?php the_field('right_hand_side'); ?>
  </div>
</section> <!-- end of page content -->

<?php

  endwhile;
endif;

get_footer ();

?>
