<?php
/**
 * template-parts/service-card.php — Service Card
 *
 * @package elan-law
 */
$delay_class = isset( $args['delay'] ) ? ' delay-' . intval( $args['delay'] ) : '';
$icon        = get_post_meta( get_the_ID(), '_service_icon', true ) ?: 'fa-solid fa-gavel';
$featured    = get_post_meta( get_the_ID(), '_service_featured', true );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'practice-card' . ( $featured ? ' featured' : '' ) . ' fade-up' . $delay_class ); ?>>
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
