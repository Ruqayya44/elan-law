<?php
/**
 * template-parts/about.php — About the Firm Section
 *
 * @package elan-law
 */
?>
<!-- ============================================================
     ABOUT ROBERT ELAN
     ============================================================ -->
<section id="about">
  <div class="container">
    <div class="split reverse">
      <div class="split-media fade-up">
        <img src="https://elanlaw.page.gd/wp-content/uploads/2026/07/ChatGPT-Image-Jul-20-2026-10_56_12-PM.png"
             alt="<?php esc_attr_e( 'Attorney reviewing and signing legal documents', 'elan-law' ); ?>">
      </div>

      <div class="split-text fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'About The Firm', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Robert I. Elan, Esq.', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'This office is dedicated to providing timely, proper and responsive communication while maintaining excellence throughout every phase of litigation.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our expertise culminates in a quality work product that reflects the very best of private counsel at a fair and reasonable cost.', 'elan-law' ); ?></p>

        <ul class="about-highlights">
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Direct access to your attorney at every stage of your case', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Responsive, proper communication throughout litigation', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'A quality work product reflecting the best of private counsel', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Representation at a fair and reasonable cost', 'elan-law' ); ?></li>
        </ul>

        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-navy">
          <?php esc_html_e( 'Schedule a Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>

        <p class="about-signature">
          <?php esc_html_e( 'Robert I. Elan', 'elan-law' ); ?>
          <span><?php esc_html_e( 'Founder & Principal Attorney', 'elan-law' ); ?></span>
        </p>
      </div>
    </div>
  </div>
</section>
