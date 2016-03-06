<footer class="footer">
  <section class="footer__upper">
    <div class="footer__container">
      <section class="footer__contact">
            <h3>Get In Touch</h3>
            <?php echo do_shortcode( '[caldera_form id="CF56c22d1a1461e"]' ) ?>
      </section>
      <section class="footer__nav">
        <h3>Our Services</h3>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
      </section>
    </div>
</section>

<section class="footer__lower">
  <div class="footer__container">
    <div class="footer__lower__branding">
      <img class="footer__lower__branding__logo b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/alvin-locksmith-logo-small.png" alt="Alvin Locksmith Logo " />
      <img class="footer__lower__branding__logo b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/mla-logo.jpg" alt="Master Locksmith Association Logo" />
    </div>

    <div class="footer__lower__whiterock">
        <a class="footer__lower__whiterock__link" href="http://whiterockstudios.co.uk">Crated with <i class="fa fa-heart"></i> by Whiterock</a>
    </div>
  </div>
</section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
