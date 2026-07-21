<?php
/**
 * template-parts/cta-banner.php — CTA Banner Section
 *
 * @package elan-law
 */
?>
<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<section id="cta-banner">
  <div class="container fade-up">
    <h2><?php esc_html_e( 'Facing a Legal Challenge? We\'re Ready to Help.', 'elan-law' ); ?></h2>
    <p><?php esc_html_e( 'Schedule your free, no-obligation consultation today and speak directly with attorney Robert I. Elan about your case.', 'elan-law' ); ?></p>
    <div class="cta-btns">
      <a href="tel:+12129621224" class="btn btn-accent">
        <i class="fa-solid fa-phone"></i> <?php esc_html_e( 'Call Now: (212) 962-1224', 'elan-law' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">
        <?php esc_html_e( 'Contact Us', 'elan-law' ); ?>
      </a>
    </div>
  </div>
</section>
