<?php
/**
 * template-parts/news-card.php — News Post Card
 *
 * @package elan-law
 */
$delay_class = isset( $args['delay'] ) ? ' delay-' . intval( $args['delay'] ) : '';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card fade-up' . $delay_class ); ?>>
  <a href="<?php the_permalink(); ?>" class="post-card-thumb" aria-label="<?php the_title_attribute(); ?>">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'elan-card' ); ?>
    <?php else : ?>
      <div class="post-card-thumb-placeholder">
        <i class="fa-solid fa-newspaper"></i>
      </div>
    <?php endif; ?>
    <span class="post-card-cat"><?php esc_html_e( 'News', 'elan-law' ); ?></span>
  </a>

  <div class="post-card-body">
    <div class="post-card-meta">
      <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
    </div>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo wp_trim_words( get_the_excerpt(), 18, '&hellip;' ); ?></p>
    <a href="<?php the_permalink(); ?>" class="card-link">
      <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</article>
