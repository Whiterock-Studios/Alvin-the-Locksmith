<!DOCTYPE html>
<html <?php language_attributes (); ?>>
<head>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta charset="<?php bloginfo ( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title ( '|' , true , 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo ( 'pingback_url' ); ?>">
    <?php wp_head (); ?>
</head>
<body <?php body_class (); ?>>

<header class="header">
  <div class="header__container">
    <section class="header__logo">
        <a href="<?php echo site_url (); ?>" class="header__logo__link">
            <img class="b-lazy" data-src="<?php echo get_template_directory_uri (); ?>/assets/images/alvin-locksmith-logo-small.png"
                 alt="Alvin Locksmith Logo" class="header__logo__image">
        </a>
    </section>
    <section class="header__nav">
        <div class="header__nav__burger">
          <span class="header__nav__burger__line header__nav__burger__line--1"></span>
          <span class="header__nav__burger__line header__nav__burger__line--2"></span>
          <span class="header__nav__burger__line header__nav__burger__line--3"></span>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
        <div class="header__nav__emergency">
          <p>
            <a class="header__nav__emergency__tel" href="tel:<?php echo do_shortcode( '[easy_options id="phone"]' ); ?>"><span class="header__nav__emergency__emergency">Emergency?&nbsp;&nbsp;&nbsp;&nbsp;</span>Call <?php echo do_shortcode( '[easy_options id="phone"]' ); ?></a>
          </p>
        </div>
    </section>
  </div>
</header>
