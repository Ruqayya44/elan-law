<?php
/**
 * template-parts/hero.php — Home Hero Section
 *
 * @package elan-law
 */
?>
<!-- ============================================================
     HERO SECTION — premium split screen
     ============================================================ -->
<section id="hero">
  <div class="hero-bg-shapes" aria-hidden="true">
    <span class="blur-shape shape-1"></span>
    <span class="blur-shape shape-2"></span>
    <span class="blur-shape shape-3"></span>
  </div>

  <div class="container hero-grid">
    <div class="hero-content fade-up">
      <p class="eyebrow"><?php esc_html_e( 'Port Washington, New York · Trial & Litigation Counsel', 'elan-law' ); ?></p>
      <h1><?php esc_html_e( 'Committed Legal Advocacy Built on Experience, Integrity', 'elan-law' ); ?> <em><?php esc_html_e( '& Results', 'elan-law' ); ?></em></h1>
      <p class="hero-lead"><?php esc_html_e( 'This office is dedicated to providing timely, proper and responsive communication while maintaining excellence throughout every phase of litigation.', 'elan-law' ); ?></p>
      <p class="hero-lead"><?php esc_html_e( 'Our expertise culminates in a quality work product that reflects the very best of private counsel at a fair and reasonable cost.', 'elan-law' ); ?></p>

      <div class="hero-btns">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
        <a href="tel:+12129621224" class="btn btn-outline">
          <i class="fa-solid fa-phone"></i> <?php esc_html_e( 'Call (212) 962-1224', 'elan-law' ); ?>
        </a>
      </div>

      <ul class="trust-badges">
        <li><i class="fa-solid fa-award"></i> <?php esc_html_e( '100+ Years Combined Experience', 'elan-law' ); ?></li>
        <li><i class="fa-solid fa-user-tie"></i> <?php esc_html_e( 'Client Focused Representation', 'elan-law' ); ?></li>
        <li><i class="fa-solid fa-comments"></i> <?php esc_html_e( 'Responsive Communication', 'elan-law' ); ?></li>
        <li><i class="fa-solid fa-circle-check"></i> <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?></li>
      </ul>
    </div>

    <div class="hero-media fade-up delay-1">
      <div class="hero-media-frame">
        <img src="https://elanlaw.page.gd/wp-content/uploads/2026/07/about-us.jpg"
             alt="<?php esc_attr_e( 'Professional law firm office setting in New York', 'elan-law' ); ?>">
      </div>
      <div class="hero-glass-card card-top">
        <i class="fa-solid fa-location-dot"></i>
        <div>
          <strong><?php esc_html_e( 'Port Washington, NY', 'elan-law' ); ?></strong>
          <span><?php esc_html_e( 'Serving Clients Throughout New York', 'elan-law' ); ?></span>
        </div>
      </div>
      <div class="hero-glass-card card-bottom">
        <i class="fa-solid fa-shield-halved"></i>
        <div>
          <strong><?php esc_html_e( 'Bed Bug Litigation', 'elan-law' ); ?></strong>
          <span><?php esc_html_e( 'A Firm Specialty Practice', 'elan-law' ); ?></span>
        </div>
      </div>
    </div>
  </div>

  <a href="#practice-areas" class="scroll-indicator" aria-label="<?php esc_attr_e( 'Scroll down', 'elan-law' ); ?>">
    <span class="mouse"></span>
    <?php esc_html_e( 'Scroll', 'elan-law' ); ?>
  </a>
</section>
