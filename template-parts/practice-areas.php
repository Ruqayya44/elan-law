<?php
/**
 * template-parts/practice-areas.php — Practice Areas Grid
 *
 * @package elan-law
 */
?>
<!-- ============================================================
     PRACTICE AREAS
     ============================================================ -->
<section id="practice-areas">
  <div class="container">
    <div class="section-head fade-up">
      <h2><?php esc_html_e( 'Our Practice Areas', 'elan-law' ); ?></h2>
      <p><?php esc_html_e( 'We provide comprehensive, dedicated legal representation across a broad range of practice areas, tailored to the circumstances of every client we serve.', 'elan-law' ); ?></p>
    </div>

    <?php
    // Check if Services CPT has posts; if so, render dynamically
    $services_query = new WP_Query( array(
      'post_type'      => 'service',
      'posts_per_page' => 12,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
    ) );

    if ( $services_query->have_posts() ) :
      echo '<div class="practice-grid">';
      $delay = 0;
      while ( $services_query->have_posts() ) :
        $services_query->the_post();
        $icon    = get_post_meta( get_the_ID(), '_service_icon', true ) ?: 'fa-solid fa-gavel';
        $featured = get_post_meta( get_the_ID(), '_service_featured', true );
        $delay_class = $delay % 3 === 1 ? ' delay-1' : ( $delay % 3 === 2 ? ' delay-2' : '' );
        ?>
        <article class="practice-card<?php echo $featured ? ' featured' : ''; ?> fade-up<?php echo esc_attr( $delay_class ); ?>">
          <?php if ( $featured ) : ?>
            <span class="featured-tag"><?php esc_html_e( 'Firm Specialty', 'elan-law' ); ?></span>
          <?php endif; ?>
          <div class="practice-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words( get_the_excerpt(), 18, '&hellip;' ); ?></p>
          <a href="<?php the_permalink(); ?>" class="card-link">
            <?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
          </a>
        </article>
        <?php
        $delay++;
      endwhile;
      wp_reset_postdata();
      echo '</div>';

    else :
      // Fallback: static practice areas from the original HTML
      ?>
      <div class="practice-grid">

        <article class="practice-card featured fade-up">
          <span class="featured-tag"><?php esc_html_e( 'Firm Specialty', 'elan-law' ); ?></span>
          <div class="practice-icon"><i class="fa-solid fa-bed"></i></div>
          <h3><?php esc_html_e( 'Bed Bug Lawyer', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Representing guests and tenants harmed by bed bug infestations in hotels, motels, B&Bs and apartment buildings nationwide.', 'elan-law' ); ?></p>
          <a href="#bed-bug-attorney" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-1">
          <div class="practice-icon"><i class="fa-solid fa-user-injured"></i></div>
          <h3><?php esc_html_e( 'Personal Injury', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Advocating for individuals injured through the negligence of others and pursuing full, fair compensation.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-2">
          <div class="practice-icon"><i class="fa-solid fa-car-burst"></i></div>
          <h3><?php esc_html_e( 'Automobile Accidents', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Representing drivers, passengers and pedestrians injured in motor vehicle accidents throughout New York.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up">
          <div class="practice-icon"><i class="fa-solid fa-bullhorn"></i></div>
          <h3><?php esc_html_e( 'Employment Law / Whistleblowers', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Protecting employees who face retaliation, wrongful termination or other workplace violations.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-1">
          <div class="practice-icon"><i class="fa-solid fa-gavel"></i></div>
          <h3><?php esc_html_e( 'Commercial Litigation', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Resolving complex business disputes for individuals and companies through negotiation or trial.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-2">
          <div class="practice-icon"><i class="fa-solid fa-building"></i></div>
          <h3><?php esc_html_e( 'Real Estate & Transactional Law', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Guiding clients through residential and commercial real estate transactions and disputes.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up">
          <div class="practice-icon"><i class="fa-solid fa-file-signature"></i></div>
          <h3><?php esc_html_e( 'Wills / Trusts / Estates', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Helping clients plan for the future and protect their families through wills, trusts and estate matters.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-1">
          <div class="practice-icon"><i class="fa-solid fa-car-side"></i></div>
          <h3><?php esc_html_e( 'Uber Accident Attorney', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Representing passengers and drivers injured in rideshare accidents involving Uber and similar services.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-2">
          <div class="practice-icon"><i class="fa-solid fa-truck"></i></div>
          <h3><?php esc_html_e( 'Truck Accident Attorney', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Pursuing claims on behalf of individuals injured in accidents involving commercial trucks.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up">
          <div class="practice-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
          <h3><?php esc_html_e( 'Fair Labor Standards Act (FLSA)', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Fighting for workers who have been denied proper overtime wages and fair compensation under federal law.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-1">
          <div class="practice-icon"><i class="fa-solid fa-landmark-dome"></i></div>
          <h3><?php esc_html_e( 'Appeals', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Providing skilled appellate advocacy before New York State and Federal appellate courts.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="practice-card fade-up delay-2">
          <div class="practice-icon"><i class="fa-solid fa-file-shield"></i></div>
          <h3><?php esc_html_e( 'Insurance Litigation', 'elan-law' ); ?></h3>
          <p><?php esc_html_e( 'Holding insurance companies accountable when they act in bad faith or wrongfully deny valid claims.', 'elan-law' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link"><?php esc_html_e( 'Learn More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </article>

      </div><!-- .practice-grid -->
    <?php endif; ?>

  </div>
</section>
