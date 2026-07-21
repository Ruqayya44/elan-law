<?php
/**
 * single.php — Single Blog Post
 *
 * @package elan-law
 */

get_header();

while ( have_posts() ) :
  the_post();
  elan_law_page_hero( get_the_title(), esc_html__( 'Blog', 'elan-law' ) );
  ?>

  <section class="single-section">
    <div class="container">
      <div class="single-wrap">

        <!-- Main Content -->
        <div class="single-content-area">

          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'elan-hero', array( 'class' => 'single-feat-img' ) ); ?>
          <?php endif; ?>

          <div class="single-meta">
            <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
            <span><i class="fa-regular fa-user"></i> <?php echo esc_html( get_the_author() ); ?></span>
            <?php if ( has_category() ) : ?>
              <span><i class="fa-solid fa-folder-open"></i> <?php the_category( ', ' ); ?></span>
            <?php endif; ?>
            <span><i class="fa-regular fa-clock"></i> <?php echo esc_html( ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ) ); ?> <?php esc_html_e( 'min read', 'elan-law' ); ?></span>
          </div>

          <div class="post-body">
            <?php the_content(); ?>
          </div>

          <!-- Categories & Tags -->
          <?php if ( has_category() || has_tag() ) : ?>
            <div class="post-terms">
              <?php if ( has_category() ) : ?>
                <span class="term-label"><?php esc_html_e( 'Categories:', 'elan-law' ); ?></span>
                <?php
                $cats = get_the_category();
                foreach ( $cats as $cat ) :
                  echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="post-cat-link">' . esc_html( $cat->name ) . '</a>';
                endforeach;
                ?>
              <?php endif; ?>
              <?php if ( has_tag() ) : ?>
                <br><span class="term-label" style="margin-top:10px;display:inline-block;"><?php esc_html_e( 'Tags:', 'elan-law' ); ?></span>
                <?php
                $tags = get_the_tags();
                if ( $tags ) :
                  foreach ( $tags as $tag ) :
                    echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" class="post-tag-link">' . esc_html( $tag->name ) . '</a>';
                  endforeach;
                endif;
                ?>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <!-- Post Navigation -->
          <nav class="post-nav" style="margin-top:40px;display:flex;justify-content:space-between;gap:20px;flex-wrap:wrap;">
            <?php
            $prev = get_previous_post();
            $next = get_next_post();
            if ( $prev ) :
              echo '<a href="' . esc_url( get_permalink( $prev ) ) . '" class="btn btn-outline-navy btn-sm"><i class="fa-solid fa-arrow-left"></i> ' . esc_html__( 'Previous Post', 'elan-law' ) . '</a>';
            endif;
            if ( $next ) :
              echo '<a href="' . esc_url( get_permalink( $next ) ) . '" class="btn btn-outline-navy btn-sm">' . esc_html__( 'Next Post', 'elan-law' ) . ' <i class="fa-solid fa-arrow-right"></i></a>';
            endif;
            ?>
          </nav>

          <!-- Comments -->
          <?php
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
          ?>

        </div><!-- .single-content-area -->

        <!-- Sidebar -->
        <?php get_sidebar(); ?>

      </div><!-- .single-wrap -->
    </div>
  </section>

<?php endwhile;

get_footer();
