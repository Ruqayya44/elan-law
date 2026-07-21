<?php
/**
 * search.php — Search Results
 *
 * @package elan-law
 */

get_header();
elan_law_page_hero(
  sprintf( esc_html__( 'Search Results for: %s', 'elan-law' ), '&ldquo;' . get_search_query() . '&rdquo;' ),
  esc_html__( 'Search', 'elan-law' )
);
?>

<section class="search-results-section">
  <div class="container">

    <div class="search-form-wrap">
      <?php get_search_form(); ?>
    </div>

    <?php if ( have_posts() ) : ?>
      <p class="search-results-count">
        <?php
        global $wp_query;
        printf(
          esc_html( _n( 'Found %s result for', 'Found %s results for', $wp_query->found_posts, 'elan-law' ) ),
          '<strong>' . esc_html( $wp_query->found_posts ) . '</strong>'
        );
        echo ' &ldquo;' . esc_html( get_search_query() ) . '&rdquo;';
        ?>
      </p>
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
        <i class="fa-solid fa-magnifying-glass"></i>
        <h2><?php esc_html_e( 'No Results Found', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'We couldn\'t find anything matching your search. Try different keywords.', 'elan-law' ); ?></p>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer();
