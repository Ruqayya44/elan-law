<?php
/**
 * archive.php — Archive Template (categories, tags, dates, authors)
 *
 * @package elan-law
 */

get_header();

$archive_title = get_the_archive_title();
$archive_desc  = get_the_archive_description();

elan_law_page_hero( $archive_title, esc_html__( 'Archive', 'elan-law' ) );
?>

<section class="listing-section">
  <div class="container">
    <?php if ( $archive_desc ) : ?>
      <div class="archive-desc" style="max-width:720px;margin:0 auto 40px;color:var(--gray-600);font-size:15px;text-align:center;">
        <?php echo wp_kses_post( $archive_desc ); ?>
      </div>
    <?php endif; ?>

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
        <i class="fa-solid fa-folder-open"></i>
        <h2><?php esc_html_e( 'Nothing Found', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'No posts found in this archive.', 'elan-law' ); ?></p>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();
