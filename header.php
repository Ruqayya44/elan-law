<?php
/**
 * header.php — Site Header / Navbar
 *
 * @package elan-law
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ============================================================
     HEADER / NAVBAR
     ============================================================ -->
<header id="main-header">
  <div class="container nav-wrap">

    <!-- Logo / Brand -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" rel="home">
      <?php
      if ( has_custom_logo() ) :
        the_custom_logo();
      else : ?>
        <img src="https://elanlaw.page.gd/wp-content/uploads/2026/07/logo-updated-pzturi27cfauf1rga8s3nj8hc450ozt0a9imcbswsq.png"
             alt="<?php bloginfo( 'name' ); ?>"
             class="site-logo">
      <?php endif; ?>
    </a>

    <!-- Primary Navigation -->
    <nav class="nav-links" id="nav-links" aria-label="<?php esc_attr_e( 'Primary Navigation', 'elan-law' ); ?>">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => false,
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'fallback_cb'    => function() {
          // Fallback inline links if no menu assigned yet
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
    </nav>

    <!-- CTA + Mobile Toggle -->
    <div class="nav-cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-sm">
        <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?>
      </a>
      <button class="nav-toggle"
              id="nav-toggle"
              aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'elan-law' ); ?>"
              aria-expanded="false"
              aria-controls="nav-links">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>
</header>

<main id="main-content">
