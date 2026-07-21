<?php
/**
 * sidebar.php — Blog Sidebar
 *
 * @package elan-law
 */
?>
<aside class="sidebar-wrap" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'elan-law' ); ?>">

  <!-- Search Widget -->
  <div class="sidebar-widget sidebar-search">
    <h4><?php esc_html_e( 'Search', 'elan-law' ); ?></h4>
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input type="search"
             placeholder="<?php esc_attr_e( 'Search...', 'elan-law' ); ?>"
             value="<?php echo esc_attr( get_search_query() ); ?>"
             name="s"
             aria-label="<?php esc_attr_e( 'Search for:', 'elan-law' ); ?>">
      <button type="submit" aria-label="<?php esc_attr_e( 'Submit search', 'elan-law' ); ?>">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </form>
  </div>

  <!-- Recent Posts Widget -->
  <div class="sidebar-widget">
    <h4><?php esc_html_e( 'Recent Posts', 'elan-law' ); ?></h4>
    <?php
    $recent = new WP_Query( array(
      'post_type'      => 'post',
      'posts_per_page' => 5,
      'orderby'        => 'date',
      'order'          => 'DESC',
    ) );
    if ( $recent->have_posts() ) :
      while ( $recent->have_posts() ) :
        $recent->the_post();
        ?>
        <div class="recent-post-item">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="recent-post-thumb">
              <?php the_post_thumbnail( array( 64, 64 ) ); ?>
            </a>
          <?php endif; ?>
          <div class="recent-post-info">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span><?php echo esc_html( get_the_date() ); ?></span>
          </div>
        </div>
        <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>

  <!-- Categories Widget -->
  <div class="sidebar-widget">
    <h4><?php esc_html_e( 'Categories', 'elan-law' ); ?></h4>
    <ul>
      <?php
      $cats = get_categories( array( 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => true ) );
      foreach ( $cats as $cat ) :
        echo '<li><a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . ' <span style="color:var(--gray-400);font-size:11px;">(' . esc_html( $cat->count ) . ')</span></a></li>';
      endforeach;
      ?>
    </ul>
  </div>

  <!-- Dynamic Sidebar (widgets from admin) -->
  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
  <?php endif; ?>

  <!-- CTA Card -->
  <div class="sidebar-widget" style="background:var(--navy);padding:30px;text-align:center;">
    <i class="fa-solid fa-phone" style="font-size:32px;color:var(--accent-light);margin-bottom:14px;display:block;"></i>
    <h4 style="color:var(--white);margin-bottom:10px;"><?php esc_html_e( 'Free Consultation', 'elan-law' ); ?></h4>
    <p style="color:rgba(255,255,255,0.72);font-size:13.5px;margin-bottom:18px;">
      <?php esc_html_e( 'Speak directly with Attorney Robert I. Elan about your case.', 'elan-law' ); ?>
    </p>
    <a href="tel:+12129621224" class="btn btn-accent btn-sm" style="width:100%;justify-content:center;">
      (212) 962-1224
    </a>
  </div>

</aside>
