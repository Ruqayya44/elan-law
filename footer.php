<?php
/**
 * footer.php — Site Footer
 *
 * @package elan-law
 */
?>

</main><!-- #main-content -->

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer>
  <div class="container">
    <div class="footer-grid">

      <!-- Brand Column -->
      <div class="footer-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" rel="home">
          <?php
          if ( has_custom_logo() ) :
            the_custom_logo();
          else : ?>
            <img src="https://elanlaw.page.gd/wp-content/uploads/2026/07/logo-updated-pzturi27cfauf1rga8s3nj8hc450ozt0a9imcbswsq.png"
                 alt="<?php bloginfo( 'name' ); ?>"
                 class="site-logo"
                 style="max-height:50px;">
          <?php endif; ?>
        </a>
        <p><?php esc_html_e( 'Dedicated to providing timely, responsive communication while maintaining excellence throughout every phase of litigation.', 'elan-law' ); ?></p>
        <div class="social-icons">
          <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Facebook', 'elan-law' ); ?>">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'LinkedIn', 'elan-law' ); ?>">
            <i class="fa-brands fa-linkedin-in"></i>
          </a>
          <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Twitter / X', 'elan-law' ); ?>">
            <i class="fa-brands fa-x-twitter"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4><?php esc_html_e( 'Quick Links', 'elan-law' ); ?></h4>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'container'      => false,
          'items_wrap'     => '<ul>%3$s</ul>',
          'fallback_cb'    => function() {
            echo '<ul>';
            echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'elan-law' ) . '</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">' . esc_html__( 'Our Services', 'elan-law' ) . '</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">' . esc_html__( 'About Us', 'elan-law' ) . '</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/news/' ) ) . '">' . esc_html__( 'News', 'elan-law' ) . '</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/blog/' ) ) . '">' . esc_html__( 'Blogs', 'elan-law' ) . '</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact Us', 'elan-law' ) . '</a></li>';
            echo '</ul>';
          },
        ) );
        ?>
      </div>

      <!-- Practice Areas -->
      <div>
        <h4><?php esc_html_e( 'Practice Areas', 'elan-law' ); ?></h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Bed Bug Lawyer', 'elan-law' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Personal Injury', 'elan-law' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Automobile Accidents', 'elan-law' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Commercial Litigation', 'elan-law' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Real Estate Law', 'elan-law' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Appeals', 'elan-law' ); ?></a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4><?php esc_html_e( 'Contact Us', 'elan-law' ); ?></h4>
        <ul class="footer-contact">
          <li>
            <i class="fa-solid fa-location-dot"></i>
            <span><?php esc_html_e( '14 Vanderventer Avenue, Suite 115, Port Washington, New York 11050', 'elan-law' ); ?></span>
          </li>
          <li>
            <i class="fa-solid fa-phone"></i>
            <a href="tel:+12129621224">(212) 962-1224</a>
          </li>
          <li>
            <i class="fa-solid fa-mobile-screen"></i>
            <a href="tel:+15166802320">(516) 680-2320</a>
          </li>
          <li>
            <i class="fa-solid fa-clock"></i>
            <span><?php esc_html_e( 'Mon – Fri: 9:00 AM – 6:00 PM', 'elan-law' ); ?></span>
          </li>
        </ul>
      </div>

    </div><!-- .footer-grid -->

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
      <p>
        &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
        <?php bloginfo( 'name' ); ?>.
        <?php esc_html_e( 'All rights reserved.', 'elan-law' ); ?>
      </p>
      <p>
        <?php esc_html_e( 'Attorney Advertising. Prior results do not guarantee a similar outcome.', 'elan-law' ); ?>
        &nbsp;|&nbsp;
        <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'elan-law' ); ?></a>
      </p>
    </div>

  </div><!-- .container -->
</footer>

<!-- Back to Top -->
<button id="back-to-top" aria-label="<?php esc_attr_e( 'Scroll back to top', 'elan-law' ); ?>">
  <i class="fa-solid fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
