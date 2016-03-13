<?php 

/*
Template Name: Services
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
  
  <section class="services">
    <img class="section__key-hole b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/key-hole.png" alt="Key Hole" />
    <div class="service__container">
      <?php
      if ( have_rows("services_call_to_action_boxes") ):
        while ( have_rows("services_call_to_action_boxes") ):
          the_row();

          $attachment_id = get_sub_field('image');
          $size = "medium";
          $image = wp_get_attachment_image_src( $attachment_id, $size );

          ?>
          <div class="services__box equal__box">
            <div class="services__box__inner">
              <img class="services__box__image b-lazy" data-src="<?php echo $image[0]; ?>" alt="<?php echo the_sub_field("heading"); ?>" />
              <h1 class="services__box__heading"><?php echo the_sub_field("heading"); ?></h1>
              <p class="services__box__body">
                <?php echo the_sub_field("body"); ?>
              </p>
              <a class="alvin__button alvin__button--transparent--white" href="<?php echo the_sub_field("link"); ?>"><?php echo the_sub_field("link_text"); ?></a>
            </div>
          </div>
          <?php
        endwhile;
      endif;
       ?>
    </div>
  </section>
</section> <!-- end of page content -->

<?php

  endwhile;
endif;

get_footer ();

?>
