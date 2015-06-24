<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Reserve
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div id="footer-cta">
      <h2 class="reservetoday"><?php esc_html_e( 'Reserve today', 'reserve' ); ?></h2>
      <ul>
          <li><a href="https://itunes.apple.com/us/app/reserve-better-dining-experience/id919147310?ls=1&amp;mt=8" class="itunes outbound"><img src="//s3.amazonaws.com/reserve.com/homepage/icon_appstore.png" alt="Apple App Store" /></a></li>
          <li><a href="https://play.google.com/store/apps/details?id=com.reserve.android"><img src="//s3.amazonaws.com/reserve.com/homepage/icon_googleplay.png" alt="Google Play" /></a></li>
      </ul>
    </div>

    <div id="footer-footer">
      <?php wp_nav_menu( array(
        'theme_location' => 'about',
        'menu_id' => 'about-menu',
        'container'       => 'nav',
        'items_wrap' => '<h3>' . esc_html__( 'About', 'reserve' ) . '</h3> <ul>%3$s</ul>',
        'fallback_cb'   => false,
      ) ); ?>

      <?php wp_nav_menu( array(
        'theme_location' => 'restaurants',
        'menu_id' => 'restaurants-menu',
        'container'       => 'nav',
        'items_wrap' => '<h3>' . esc_html__( 'Restaurants', 'reserve' ) . '</h3> <ul>%3$s</ul>',
        'fallback_cb'   => false,
      ) ); ?>

      <?php wp_nav_menu( array(
        'theme_location' => 'support',
        'menu_id' => 'support-menu',
        'container'       => 'nav',
        'items_wrap' => '<h3>' . esc_html__( 'Support', 'reserve' ) . '</h3> <ul>%3$s</ul>',
        'fallback_cb'   => false,
      ) ); ?>

      <div id="footer-more">
        <?php wp_nav_menu( array(
          'theme_location' => 'social',
          'menu_id' => 'social-menu',
          'container_class' => 'whatever',
          'fallback_cb'   => false,
        ) ); ?>

          <small>
            <a href="<?php echo esc_url( __( 'http://wordpress.com/', 'reserve' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'reserve' ), 'WordPress' ); ?></a>
            <span>Copyright <?php echo esc_html( date( 'Y' ) ); ?></span>
            <a href="//reserve.com/legal/terms" class="footer-link">Terms &amp; Conditions</a>
            <a href="//reserve.com/legal/privacy" class="footer-link">Privacy Policy </a>
          </small>
    </div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
