<?php 

/*
Template Name: Auto Locksmith
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
  <?php 
  the_content();
  ?>

  <div class="car__logos">
    <?php 
      if ( have_rows("car_logo") ):
        while ( have_rows("car_logo") ):
          the_row();
          ?>
          <div class="car__logo__container">
            <?php
            $attachment_id = get_sub_field('brand_logo');
            $size = "small";
            $image = wp_get_attachment_image_src( $attachment_id, $size );
            ?>
            <img class="b-lazy car__logo" data-src="<?php echo $image[0]; ?>" alt="<?php echo the_sub_field('brand_name'); ?>" title="<?php echo the_sub_field('brand_name'); ?>" />
            </div>
          <?php
        endwhile;
      endif;
    ?>
  </div>
</section> <!-- end of page content -->

<?php

  endwhile;
endif;

get_footer ();

?>
