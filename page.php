<?php
/**
 * page.php — Generic Page Template
 *
 * @package elan-law
 */

get_header();

while ( have_posts() ) :
  the_post();
  elan_law_page_hero( get_the_title() );
  ?>

  <section class="page-content-section">
    <div class="container">
      <div class="page-content-wrap">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'elan-hero', array( 'style' => 'width:100%;border-radius:16px;margin-bottom:40px;' ) ); ?>
        <?php endif; ?>
        <div class="wp-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

<?php endwhile;

get_footer();
