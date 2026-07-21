<?php
/**
 * Template Name: Contact Us Page
 *
 * @package elan-law
 */

get_header();
elan_law_page_hero(
  esc_html__( 'Contact Us', 'elan-law' ),
  esc_html__( 'Get In Touch', 'elan-law' )
);
?>

<section class="contact-page-section">
  <div class="container">

    <div class="section-head fade-up">
      <h2><?php esc_html_e( 'Contact Our Office', 'elan-law' ); ?></h2>
      <p><?php esc_html_e( 'Reach out today for a free, confidential consultation about your legal matter. We respond promptly to every inquiry.', 'elan-law' ); ?></p>
    </div>

    <div class="contact-grid">

      <!-- Contact Form Area -->
      <div class="contact-form-wrap fade-up">
        <h3><?php esc_html_e( 'Send Us a Message', 'elan-law' ); ?></h3>
        <p><?php esc_html_e( 'Fill out the form below and our office will contact you as soon as possible.', 'elan-law' ); ?></p>

        <?php
        // ─────────────────────────────────────────────────────────
        // CONTACT FORM SHORTCODE PLACEHOLDER
        // Replace the block below with your preferred contact form shortcode.
        // Examples:
        //   Contact Form 7:  [contact-form-7 id="123" title="Contact form 1"]
        //   WPForms:         [wpforms id="456"]
        //   Gravity Forms:   [gravityforms id="1"]
        //
        // To insert, go to Pages → Edit this page → add your shortcode
        // in the WordPress Editor, OR replace the echo below.
        // ─────────────────────────────────────────────────────────
        if ( have_posts() ) :
          the_post();
          if ( get_the_content() ) :
            the_content(); // If you paste the shortcode in the editor, it renders here
          else :
            // Default placeholder form shown until shortcode is added
            ?>
            <div style="padding:30px;border:2px dashed rgba(27,164,234,0.3);border-radius:16px;text-align:center;color:var(--gray-600);">
              <i class="fa-solid fa-plug" style="font-size:40px;color:var(--accent);margin-bottom:16px;display:block;"></i>
              <h4 style="font-size:20px;margin-bottom:8px;color:var(--navy);"><?php esc_html_e( 'Contact Form Placeholder', 'elan-law' ); ?></h4>
              <p style="font-size:14px;"><?php esc_html_e( 'Edit this page in the WordPress admin and paste your contact form shortcode (e.g., Contact Form 7, WPForms) to display your form here.', 'elan-law' ); ?></p>
            </div>
            <?php
          endif;
        endif;
        ?>
      </div>

      <!-- Contact Info Side -->
      <div class="contact-side fade-up delay-1">
        <div class="contact-info-card">
          <h3><?php esc_html_e( 'Office Details', 'elan-law' ); ?></h3>
          <div class="info-item">
            <i class="fa-solid fa-location-dot"></i>
            <div>
              <strong><?php esc_html_e( 'Law Office of Robert I. Elan', 'elan-law' ); ?></strong>
              <span><?php esc_html_e( '14 Vanderventer Avenue, Suite 115', 'elan-law' ); ?></span>
              <span><?php esc_html_e( 'Port Washington, New York 11050', 'elan-law' ); ?></span>
            </div>
          </div>
          <div class="info-item">
            <i class="fa-solid fa-phone"></i>
            <div>
              <strong><?php esc_html_e( 'Office Phone', 'elan-law' ); ?></strong>
              <a href="tel:+12129621224">(212) 962-1224</a>
            </div>
          </div>
          <div class="info-item">
            <i class="fa-solid fa-mobile-screen"></i>
            <div>
              <strong><?php esc_html_e( 'Cell Phone', 'elan-law' ); ?></strong>
              <a href="tel:+15166802320">(516) 680-2320</a>
            </div>
          </div>
          <div class="info-item">
            <i class="fa-solid fa-clock"></i>
            <div>
              <strong><?php esc_html_e( 'Office Hours', 'elan-law' ); ?></strong>
              <span><?php esc_html_e( 'Monday – Friday: 9:00 AM – 6:00 PM', 'elan-law' ); ?></span>
              <span><?php esc_html_e( 'Saturday: By appointment only', 'elan-law' ); ?></span>
            </div>
          </div>
        </div>

        <div class="map-placeholder">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.6263754743697!2d-73.6940!3d40.8259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ5JzMzLjIiTiA3M8KwNDEnMzguNCJX!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="<?php esc_attr_e( 'Office location map', 'elan-law' ); ?>">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer();
