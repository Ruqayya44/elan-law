<?php
/**
 * index.php — Fallback template
 *
 * WordPress requires this file to exist. It acts as the ultimate
 * fallback for all requests that don't match a more specific template.
 *
 * @package elan-law
 */

get_header();
?>

<section class="listing-section">
  <div class="container">
    <?php elan_law_page_hero( esc_html__( 'Latest Posts', 'elan-law' ) ); ?>

    <?php if ( have_posts() ) : ?>
      <div class="posts-grid" style="margin-top:60px;">
        <?php
        $i = 0;
        while ( have_posts() ) :
          the_post();
          get_template_part( 'template-parts/blog-card', null, array( 'delay' => $i % 3 ) );
          $i++;
        endwhile;
        ?>
      </div>
      <?php elan_law_pagination(); ?>
    <?php else : ?>
      <div class="no-results-wrap">
        <i class="fa-solid fa-folder-open"></i>
        <h2><?php esc_html_e( 'Nothing Found', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'elan-law' ); ?></p>
        <?php get_search_form(); ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();
