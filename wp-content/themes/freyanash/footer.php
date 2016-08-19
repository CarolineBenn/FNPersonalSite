<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

    </div>
    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="row">
        <div class="medium-12 columns">
          <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'menu_class'     => 'primary-menu',
                ));
              ?>
            </nav>
          <?php endif; ?>

          <?php if ( has_nav_menu( 'social' ) ) : ?>
            <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'social',
                  'menu_class'     => 'social-links-menu',
                  'depth'          => 1,
                  'link_before'    => '<span class="screen-reader-text">',
                  'link_after'     => '</span>',
                ) );
              ?>
            </nav>
          <?php endif; ?>

          <div class="site-info">
            <?php
              /**
               * Fires before the twentysixteen footer text for footer customization.
               *
               * @since Twenty Sixteen 1.0
               */
              do_action( 'twentysixteen_credits' );
            ?>
          </div>
        </div>
      </div>
    </footer>

  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/modernizr.js"></script>
  <script type="text/javascript" src="/js/foundation.min.js"></script>
  <script type="text/javascript">$(document).foundation();</script>
  <script type="text/javascript" src="/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
