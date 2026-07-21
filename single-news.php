<?php
/**
 * single-news.php — Single News Post
 *
 * @package elan-law
 */

get_header();

while ( have_posts() ) :
  the_post();
  elan_law_page_hero( get_the_title(), esc_html__( 'News', 'elan-law' ) );
  ?>

  <section class="single-section">
    <div class="container">
      <div style="max-width:860px;margin:0 auto;">

        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'elan-hero', array( 'class' => 'single-feat-img' ) ); ?>
        <?php endif; ?>

        <div class="single-meta">
          <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
          <span><i class="fa-solid fa-tag"></i> <?php esc_html_e( 'News', 'elan-law' ); ?></span>
        </div>

        <div class="post-body">
          <?php the_content(); ?>
        </div>

        <!-- Back to News -->
        <div style="margin-top:40px;display:flex;gap:14px;flex-wrap:wrap;">
          <a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="btn btn-outline-navy btn-sm">
            <i class="fa-solid fa-arrow-left"></i> <?php esc_html_e( 'Back to News', 'elan-law' ); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-sm">
            <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

      </div>
    </div>
  </section>

<?php endwhile;

get_footer();
