<?php
/**
 * Template Name: About Us Page
 *
 * @package elan-law
 */

get_header();
elan_law_page_hero(
  esc_html__( 'About Us', 'elan-law' ),
  esc_html__( 'The Firm', 'elan-law' )
);

// Consume the WP loop so have_posts() is resolved
if ( have_posts() ) {
  the_post();
}
?>

<!-- ============================================================
     SECTION 1 — Passion and Dedication (Split Layout)
     ============================================================ -->
<section class="about-page-section" id="about-passion">
  <div class="container">
    <div class="split">

      <div class="split-media fade-up">
        <img src="https://elanlaw.page.gd/wp-content/uploads/2026/07/about-us.jpg"
             alt="<?php esc_attr_e( 'The Law Office of Robert I. Elan — New York Litigation Attorneys', 'elan-law' ); ?>">
        <div class="media-badge">
          <i class="fa-solid fa-award"></i>
          <div>
            <strong><?php esc_html_e( 'The Elan Law Firm', 'elan-law' ); ?></strong>
            <span><?php esc_html_e( 'New York & Washington D.C.', 'elan-law' ); ?></span>
          </div>
        </div>
      </div>

      <div class="split-text fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'About The Firm', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Passion and Dedication Breed Success in Litigation', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'This office is dedicated to promoting timely, proper, and responsive communications while maintaining excellence in all phases of litigation. Our expertise culminates in a quality work product that mirrors the very best counsel at a fair and reasonable cost.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'The employment and personal injury lawyers at The Elan Law Firm passionately advocate on behalf of our clients who have suffered significant harm in their professional and personal lives. We are committed to our clients and are open to questions and communication day or night to get them the help they need.', 'elan-law' ); ?></p>

        <ul class="about-highlights" style="margin-top:22px;">
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Timely, proper and responsive communications', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Excellence maintained in all phases of litigation', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Quality work product at a fair and reasonable cost', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Available day or night for our clients', 'elan-law' ); ?></li>
        </ul>

        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent" style="margin-top:10px;">
          <?php esc_html_e( 'Schedule a Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 2 — Service Oriented Care (Why Choose / Boxes)
     ============================================================ -->
<section id="service-oriented" style="padding:120px 0; background:linear-gradient(160deg,var(--navy-dark),var(--navy) 60%,var(--navy-light)); color:var(--white); position:relative;">
  <div style="position:absolute;inset:0;background-image:radial-gradient(circle at 15% 85%, rgba(27,164,234,0.15), transparent 40%);pointer-events:none;"></div>
  <div class="container">

    <div class="section-head fade-up">
      <p class="eyebrow" style="justify-content:center; color:var(--accent-light);">
        <?php esc_html_e( 'Our Commitment', 'elan-law' ); ?>
      </p>
      <h2 style="color:var(--white);"><?php esc_html_e( 'Service Oriented Care', 'elan-law' ); ?></h2>
      <p style="color:rgba(255,255,255,0.72);"><?php esc_html_e( 'If you are unsure if you have a case or if you are in need of legal services that are not listed here, we\'re ready and waiting for your call.', 'elan-law' ); ?></p>
    </div>

    <div class="why-grid" style="position:relative;z-index:1;">
      <div class="why-box fade-up">
        <i class="fa-solid fa-comments"></i>
        <h3><?php esc_html_e( 'Constant Communication', 'elan-law' ); ?></h3>
        <p><?php esc_html_e( 'We pride ourselves on timely and constant communication with our clients, creating a community of loyalty and respect.', 'elan-law' ); ?></p>
      </div>
      <div class="why-box fade-up delay-1">
        <i class="fa-solid fa-location-dot"></i>
        <h3><?php esc_html_e( 'New York & Washington D.C.', 'elan-law' ); ?></h3>
        <p><?php esc_html_e( 'Our offices are located in New York and Washington D.C. with a dedicated legal team of over 80 years of combined experience.', 'elan-law' ); ?></p>
      </div>
      <div class="why-box fade-up delay-2">
        <i class="fa-solid fa-scale-balanced"></i>
        <h3><?php esc_html_e( 'Clear Legal Strategies', 'elan-law' ); ?></h3>
        <p><?php esc_html_e( 'We bring extensive knowledge across various practice areas and work with clients to establish clear strategies to achieve success.', 'elan-law' ); ?></p>
      </div>
      <div class="why-box fade-up delay-3">
        <i class="fa-solid fa-gavel"></i>
        <h3><?php esc_html_e( 'Courtroom & Beyond', 'elan-law' ); ?></h3>
        <p><?php esc_html_e( 'We are ready to fight for our clients both inside the courtroom and out, tailoring our approach to every individual case.', 'elan-law' ); ?></p>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     SECTION 3 — Civil Litigation (Split Reverse Layout)
     ============================================================ -->
<section id="civil-litigation" style="padding:120px 0; background:var(--gray-100);">
  <div class="container">
    <div class="split reverse">

      <div class="split-media fade-up">
        <img src="https://elanlaw.page.gd/wp-content/uploads/2026/07/ChatGPT-Image-Jul-20-2026-10_56_12-PM.png"
             alt="<?php esc_attr_e( 'Civil litigation attorneys reviewing legal documents', 'elan-law' ); ?>">
        <div class="media-badge">
          <i class="fa-solid fa-gavel"></i>
          <div>
            <strong><?php esc_html_e( 'Civil Litigation', 'elan-law' ); ?></strong>
            <span><?php esc_html_e( 'Individuals & Companies Represented', 'elan-law' ); ?></span>
          </div>
        </div>
      </div>

      <div class="split-text fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'Practice Focus', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Civil Litigation', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'The Elan Law Firm represents individuals as well as companies involved in civil disputes.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our practice in this area includes representing persons who sustained personal injuries due to motor vehicle accidents or injuries sustained due to defects inside or outside of a house or building.', 'elan-law' ); ?></p>

        <ul class="check-list">
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Motor vehicle accidents and roadway injuries', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Defects inside or outside of a house or building', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Product defects and breach of warranty claims', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Dog bite liability claims', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Bed Bug litigation — hotels, motels, apartments', 'elan-law' ); ?></li>
        </ul>

        <p style="font-size:14.5px; color:var(--gray-600);"><?php esc_html_e( 'At Elan Law Firm, we recognize that no two cases are alike and strive to tailor our services accordingly. Our attorneys are well versed in applicable state and local laws, allowing us to provide clients with a comprehensive understanding of their legal rights.', 'elan-law' ); ?></p>

        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent" style="margin-top:8px;">
          <?php esc_html_e( 'Discuss Your Case', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 4 — Attorney Team
     ============================================================ -->
<section id="attorney-team" style="padding:120px 0; background:var(--white);">
  <div class="container">

    <div class="section-head fade-up">
      <p class="eyebrow" style="justify-content:center;"><?php esc_html_e( 'Meet The Team', 'elan-law' ); ?></p>
      <h2><?php esc_html_e( 'Our Attorneys', 'elan-law' ); ?></h2>
      <p><?php esc_html_e( 'Our dedicated legal team brings over 80 years of combined experience to every case, providing clients with skilled, personalized representation.', 'elan-law' ); ?></p>
    </div>

    <div class="attorney-grid">

      <!-- Robert Elan -->
      <div class="attorney-card fade-up">
        <div class="attorney-avatar">
          <i class="fa-solid fa-user-tie"></i>
        </div>
        <div class="attorney-body">
          <h3><?php esc_html_e( 'Robert Elan', 'elan-law' ); ?></h3>
          <p class="attorney-title"><?php esc_html_e( 'Founder & Principal Attorney', 'elan-law' ); ?></p>
          <div class="attorney-info">
            <a href="mailto:Robert.Elan@elanlaw.com" class="attorney-email">
              <i class="fa-solid fa-envelope"></i> Robert.Elan@elanlaw.com
            </a>
          </div>
          <div class="attorney-actions">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-sm">
              <?php esc_html_e( 'View Profile', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Kenneth Elan -->
      <div class="attorney-card fade-up delay-1">
        <div class="attorney-avatar">
          <i class="fa-solid fa-user-tie"></i>
        </div>
        <div class="attorney-body">
          <h3><?php esc_html_e( 'Kenneth Elan', 'elan-law' ); ?></h3>
          <p class="attorney-title"><?php esc_html_e( 'Senior Attorney', 'elan-law' ); ?></p>
          <div class="attorney-info">
            <a href="mailto:Kenneth@elanlaw.com" class="attorney-email">
              <i class="fa-solid fa-envelope"></i> Kenneth@elanlaw.com
            </a>
          </div>
          <div class="attorney-actions">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-sm">
              <?php esc_html_e( 'View Profile', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Monique Ortiz -->
      <div class="attorney-card fade-up delay-2">
        <div class="attorney-avatar">
          <i class="fa-solid fa-user-tie"></i>
        </div>
        <div class="attorney-body">
          <h3><?php esc_html_e( 'Monique Ortiz', 'elan-law' ); ?></h3>
          <p class="attorney-title"><?php esc_html_e( 'Associate Attorney', 'elan-law' ); ?></p>
          <div class="attorney-info">
            <a href="mailto:Monique.Ortiz@elanlaw.com" class="attorney-email">
              <i class="fa-solid fa-envelope"></i> Monique.Ortiz@elanlaw.com
            </a>
          </div>
          <div class="attorney-actions">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-sm">
              <?php esc_html_e( 'View Profile', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div><!-- .attorney-grid -->

  </div>
</section>

<!-- ============================================================
     CTA Banner
     ============================================================ -->
<?php get_template_part( 'template-parts/cta-banner' ); ?>

<?php get_footer();
