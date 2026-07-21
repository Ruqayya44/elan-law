<?php
/**
 * home.php — Blog Index Page
 *
 * Loaded when Settings → Reading → "Posts page" is set.
 *
 * @package elan-law
 */

get_header();
elan_law_page_hero(
  esc_html__( 'Blog', 'elan-law' ),
  esc_html__( 'Legal Insights', 'elan-law' )
);
?>

<section class="listing-section">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <div class="posts-grid">
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
        <i class="fa-solid fa-pen-to-square"></i>
        <h2><?php esc_html_e( 'No Posts Yet', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'Check back soon for legal insights and firm updates.', 'elan-law' ); ?></p>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();
