<?php
/**
 * Template Name: Single Service Layout
 *
 * @package elan-law
 */

get_header();
elan_law_page_hero( get_the_title() );
?>

<section class="service-detail-section">
  <div class="container">
    <div class="service-layout-grid">
      
      <!-- Left Sidebar Navigation -->
      <aside class="service-sidebar fade-up">
        <ul class="service-nav-list">
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'ALL SERVICES', 'elan-law' ); ?></a></li>
          <li class="<?php echo is_page( 'personal-injury' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/personal-injury/' ) ); ?>"><?php esc_html_e( 'PERSONAL INJURY', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'bed-bug-lawyer' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/bed-bug-lawyer/' ) ); ?>"><?php esc_html_e( 'BED BUG LAWYER', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'real-estate-and-transactional' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/real-estate-and-transactional/' ) ); ?>"><?php esc_html_e( 'REAL ESTATE AND TRANSACTIONAL', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'wills-trusts-estates' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/wills-trusts-estates/' ) ); ?>"><?php esc_html_e( 'WILLS/TRUSTS/ESTATES', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'commercial-litigation' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/commercial-litigation/' ) ); ?>"><?php esc_html_e( 'COMMERCIAL LITIGATION', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'automobile-accidents' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/automobile-accidents/' ) ); ?>"><?php esc_html_e( 'AUTOMOBILE ACCIDENTS', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'uber-accident-attorney' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/uber-accident-attorney/' ) ); ?>"><?php esc_html_e( 'UBER ACCIDENT ATTORNEY', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'truck-accident-lawyer' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/truck-accident-lawyer/' ) ); ?>"><?php esc_html_e( 'TRUCK ACCIDENT LAWYER', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'employment-law-whistleblowers' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/employment-law-whistleblowers/' ) ); ?>"><?php esc_html_e( 'EMPLOYMENT LAW/WHISTLEBLOWERS', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'fair-labor-standards-act-flsa' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/fair-labor-standards-act-flsa/' ) ); ?>"><?php esc_html_e( 'FAIR LABOR STANDARDS ACT (FLSA)', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'appeals' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/appeals/' ) ); ?>"><?php esc_html_e( 'APPEALS', 'elan-law' ); ?></a>
          </li>
          <li class="<?php echo is_page( 'insurance-litigation' ) ? 'active' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/insurance-litigation/' ) ); ?>"><?php esc_html_e( 'INSURANCE LITIGATION', 'elan-law' ); ?></a>
          </li>
        </ul>
      </aside>

      <!-- Right Main Content -->
      <main class="service-main-content fade-up delay-1">
        <article class="service-article">
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
              
              if ( has_post_thumbnail() ) {
                echo '<div class="service-featured-image">';
                the_post_thumbnail( 'large' );
                echo '</div>';
              }
              
              echo '<div class="service-article-content">';
              the_content();
              echo '</div>';

            endwhile;
          endif;
          ?>
        </article>
      </main>

    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>
<?php get_footer(); ?>
