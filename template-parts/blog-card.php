<?php
/**
 * template-parts/blog-card.php — Blog Post Card
 *
 * Usage: get_template_part( 'template-parts/blog-card' );
 * (Call within a WP_Query loop)
 *
 * @package elan-law
 */
$delay_class = isset( $args['delay'] ) ? ' delay-' . intval( $args['delay'] ) : '';
$cats        = get_the_category();
$cat_name    = ! empty( $cats ) ? esc_html( $cats[0]->name ) : '';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card fade-up' . $delay_class ); ?>>
  <a href="<?php the_permalink(); ?>" class="post-card-thumb" aria-label="<?php the_title_attribute(); ?>">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'elan-card' ); ?>
    <?php else : ?>
      <div class="post-card-thumb-placeholder">
        <i class="fa-solid fa-scale-balanced"></i>
      </div>
    <?php endif; ?>
    <?php if ( $cat_name ) : ?>
      <span class="post-card-cat"><?php echo $cat_name; ?></span>
    <?php endif; ?>
  </a>

  <div class="post-card-body">
    <div class="post-card-meta">
      <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
      <span><i class="fa-regular fa-user"></i> <?php echo esc_html( get_the_author() ); ?></span>
    </div>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo wp_trim_words( get_the_excerpt(), 18, '&hellip;' ); ?></p>
    <a href="<?php the_permalink(); ?>" class="card-link">
      <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</article>
