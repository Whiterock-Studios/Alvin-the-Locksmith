<?php get_header ();

if (have_posts() ):
  while (have_posts() ):
    the_post();

    $attachment_id = get_field('section_1_background_image');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size );

    ?>

<section class="home__section__1 b-lazy" data-src="<?php echo $image[0]; ?>">
  <div class="home__section__1__container">
    <div class="home__section__1__body">
        <h1 class="home__section__1__body__heading"><?php echo the_field("section_1_heading"); ?></h1>
        <p class="home__section__1__body__tagline">
          <?php echo the_field("section_1_tagline"); ?>
        </p>
    </div>
    <div class="home__section__1__buttons">
      <?php
        if ( have_rows("section_1_call_to_action_buttons") ):
          while ( have_rows("section_1_call_to_action_buttons") ):
            the_row();
              if ( get_sub_field("button_link") ) {
                echo '<a class="alvin__button alvin__button--white" href="';
                echo the_sub_field("button_link");
                echo '">';
                echo the_sub_field("button_text");
                echo '</a>';
              } else {
                echo '<span class="alvin__button alvin__button--white">';
                echo the_sub_field("button_text");
                echo '</span>';
              }
          endwhile;
        endif;
       ?>
    </div>
  </div>
</section>

<section class="home__section__2">
  <img class="section__key-hole b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/key-hole.png" alt="Key Hole" />
  <div class="home__section__2__container">
    <h2 class="home__section__2__heading"><?php the_field("section_2_heading"); ?></h2>
    <?php
    if ( have_rows("section_2_call_to_action_boxes") ):
      while ( have_rows("section_2_call_to_action_boxes") ):
        the_row();

        $attachment_id = get_sub_field('image');
        $size = "medium";
        $image = wp_get_attachment_image_src( $attachment_id, $size );

        ?>
        <div class="home__section__2__box">
          <div class="home__section__2__box__inner">
            <img class="home__section__2__box__image b-lazy" data-src="<?php echo $image[0]; ?>" alt="<?php echo the_sub_field("heading"); ?>" />
            <h1 class="home__section__2__box__heading"><?php echo the_sub_field("heading"); ?></h1>
            <p class="home__section__2__box__body">
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

<section class="home__section__3">
  <div class="home__section__3__container">
    <div class="home__section__3__text">
      <h2 class="home__section__3__heading"><?php the_field("section_3_heading"); ?></h2>
      <p class="home__section__3__body">
        <?php the_field("section_3_body"); ?>
      </p>
      <?php
      if (have_rows("section_3_buttons")){
        while (have_rows("section_3_buttons")){
          the_row();
          ?>
          <a class="alvin__button alvin__button--red home__section__3__button" href="<?php the_sub_field("link"); ?>">
            <?php the_sub_field("text"); ?>
          </a>
          <?php
        }
      }
      ?>
    </div>

    <div class="home__section__3__image">
      <?php
        $attachment_id = get_field('section_3_image');
        $size = "large";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
      ?>
      <img class="b-lazy" data-src="<?php echo $image[0]; ?>" alt="<?php the_field("section_3_heading"); ?> Section Image" />
    </div>
  </div>
</section>

<section class="home__section__promotion">
  <a href="http://www.ultion-lock.co.uk/customersupport/" target="_blank">
    <img class="b-lazy home__section__promotion__ultion" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ultion-banner.jpg" alt="Ultion Lock Banner">
  </a>
  
  <img class="b-lazy home__section__promotion__mla" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/mla-logo.jpg" alt="Master Locksmith Association Logo" />
</section>

<section class="emergency emergency--red">
  <p class="emergency__text emergency__text--medium">
    <?php
    $number = do_shortcode( '[easy_options id="phone"]' );
    ?>
    Emergency? Call <a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a>
  </p>
</section>

<?php
  $attachment_id = get_field('section_4_background');
  $size = "full";
  $image = wp_get_attachment_image_src( $attachment_id, $size );
?>

<section class="home__section__4 b-lazy" data-src="<?php echo $image[0]; ?>">
  <div class="home__section__4__container" style="background">
    <h2 class="home__section__4__heading">
      <?php the_field("section_4_heading"); ?>
    </h2>
    <ul class="home__section__4__list">
      <?php
        if ( have_rows("section_4_item") ){
          while ( have_rows("section_4_item") ){
            the_row();
            ?>

              <li class="home__section__4__list__item"><?php the_sub_field("text"); ?></li>
            <?php
          }
        }
      ?>
    </ul>
  </div>
</section>

<section class="emergency emergency--blue">
  <p class="emergency__text emergency__text--large">
    <?php
    $number = do_shortcode( '[easy_options id="phone"]' );
    ?>
    Emergency? Call <a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a>
  </p>
  <p class="emergency__text--small">
    Or leave a message <strong><a href="<?php echo site_url(); ?>/contact">here</a></strong>
  </p>
</section>

<?php

  endwhile;
endif;

get_footer ();
?>
