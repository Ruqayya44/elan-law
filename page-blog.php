<?php
/**
 * Template Name: Blog Page
 *
 * A static page template for the Blog listing page.
 * WordPress will use home.php automatically when a Posts Page
 * is set in Settings → Reading. This template acts as a manual
 * alternative that can be assigned to any page.
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

    <div class="section-head fade-up">
      <p class="eyebrow" style="justify-content:center;"><?php esc_html_e( 'Legal Insights', 'elan-law' ); ?></p>
      <h2><?php esc_html_e( 'Our Blog', 'elan-law' ); ?></h2>
      <p><?php esc_html_e( 'Legal insights, case law updates, and important information for our clients and the community we serve.', 'elan-law' ); ?></p>
    </div>

    <?php
    $paged = max( 1, get_query_var( 'paged' ) );
    $blog_query = new WP_Query( array(
      'post_type'      => 'post',
      'posts_per_page' => 9,
      'paged'          => $paged,
      'orderby'        => 'date',
      'order'          => 'DESC',
    ) );

    if ( $blog_query->have_posts() ) :
      echo '<div class="posts-grid">';
      $i = 0;
      while ( $blog_query->have_posts() ) :
        $blog_query->the_post();
        get_template_part( 'template-parts/blog-card', null, array( 'delay' => $i % 3 ) );
        $i++;
      endwhile;
      echo '</div>';
      wp_reset_postdata();
      elan_law_pagination( $blog_query );
    else : ?>
      <div class="no-results-wrap">
        <i class="fa-solid fa-pen-to-square"></i>
        <h2><?php esc_html_e( 'No Blog Posts Yet', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'Legal insights are coming soon. Check back for updates from our office.', 'elan-law' ); ?></p>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer();
