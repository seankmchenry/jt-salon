<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <!-- Top -->
    <div class="footer-top site-footer__top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'menu_class' => 'footer-nav__menu', 'container_class' => 'footer-nav__area' ) ); ?>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </div>

    <!-- Bottom -->
    <div class="footer-bottom site-footer__bottom center">
      <!-- Copyright -->
      <span class="footer-copyright footer-bottom__copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.</span>

      <?php
      if ( get_theme_mod( 'street_address' ) ) { ?>
        <!-- Address -->
        <span class="footer-address footer-bottom__address"><?php echo get_theme_mod( 'street_address' ); ?>,</span>
      <?php }

      if ( get_theme_mod( 'city_state_zip' ) ) { ?>
        <!-- City, State, Zip -->
        <span class="footer-cszip footer-bottom__cszip"><?php echo get_theme_mod( 'city_state_zip' ); ?>.</span>
      <?php }
      ?>

      <!-- Credits -->
      <span class="footer-credits footer-bottom__credits">Site by <a href="http://tincupdigital.com/">Tin Cup Digital</a>.</span>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
