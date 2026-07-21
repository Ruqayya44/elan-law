<?php
/**
 * template-parts/contact-section.php — Contact Section
 *
 * @package elan-law
 */
?>
<!-- ============================================================
     CONTACT
     ============================================================ -->
<section id="contact">
  <div class="container">
    <div class="section-head fade-up">
      <p class="eyebrow" style="justify-content:center;"><?php esc_html_e( 'Get In Touch', 'elan-law' ); ?></p>
      <h2><?php esc_html_e( 'Contact Our Office', 'elan-law' ); ?></h2>
      <p><?php esc_html_e( 'Reach out today for a free, confidential consultation about your legal matter. We respond promptly to every inquiry.', 'elan-law' ); ?></p>
    </div>

    <div class="contact-grid">
      <div class="contact-form-wrap fade-up">
        <h3><?php esc_html_e( 'Send Us a Message', 'elan-law' ); ?></h3>
        <p><?php esc_html_e( 'Fill out the form below and our office will contact you as soon as possible.', 'elan-law' ); ?></p>

        <form id="contact-form" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="cf-name"><?php esc_html_e( 'Full Name', 'elan-law' ); ?></label>
              <input type="text" id="cf-name" name="name" placeholder="<?php esc_attr_e( 'John Doe', 'elan-law' ); ?>" required>
            </div>
            <div class="form-group">
              <label for="cf-phone"><?php esc_html_e( 'Phone Number', 'elan-law' ); ?></label>
              <input type="tel" id="cf-phone" name="phone" placeholder="<?php esc_attr_e( '(212) 000-0000', 'elan-law' ); ?>" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="cf-email"><?php esc_html_e( 'Email Address', 'elan-law' ); ?></label>
              <input type="email" id="cf-email" name="email" placeholder="<?php esc_attr_e( 'you@example.com', 'elan-law' ); ?>" required>
            </div>
            <div class="form-group">
              <label for="cf-area"><?php esc_html_e( 'Practice Area', 'elan-law' ); ?></label>
              <select id="cf-area" name="area" required>
                <option value="" disabled selected><?php esc_html_e( 'Select an option', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Bed Bug Lawyer', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Personal Injury', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Automobile Accidents', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Employment Law / Whistleblowers', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Commercial Litigation', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Real Estate & Transactional Law', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Wills / Trusts / Estates', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Uber Accident Attorney', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Truck Accident Attorney', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Fair Labor Standards Act (FLSA)', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Appeals', 'elan-law' ); ?></option>
                <option><?php esc_html_e( 'Insurance Litigation', 'elan-law' ); ?></option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group full">
              <label for="cf-message"><?php esc_html_e( 'Tell Us About Your Case', 'elan-law' ); ?></label>
              <textarea id="cf-message" name="message" placeholder="<?php esc_attr_e( 'Briefly describe your legal matter...', 'elan-law' ); ?>" required></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-accent form-submit">
            <?php esc_html_e( 'Submit Free Consultation Request', 'elan-law' ); ?> <i class="fa-solid fa-paper-plane"></i>
          </button>

          <div class="form-success" id="form-success">
            <i class="fa-solid fa-circle-check"></i>
            <span><?php esc_html_e( 'Thank you! Your message has been received. Our office will contact you shortly.', 'elan-law' ); ?></span>
          </div>
        </form>
      </div>

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
            title="<?php esc_attr_e( 'Law Office of Robert I. Elan location map', 'elan-law' ); ?>">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>
