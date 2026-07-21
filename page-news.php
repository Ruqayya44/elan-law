<?php
/**
 * Template Name: News Page
 *
 * @package elan-law
 */

get_header();
elan_law_page_hero( esc_html__( 'News', 'elan-law' ) );
?>

<!-- ============================================================
     NEWS LISTING SECTION
     ============================================================ -->
<section class="news-listing-section">
  <div class="container">

    <!-- Intro -->
    <div class="section-head fade-up">
      <h2><?php esc_html_e( 'Latest News & Updates', 'elan-law' ); ?></h2>
      <p><?php esc_html_e( 'Stay informed with the latest legal news, firm updates and important information from The Elan Law Firm.', 'elan-law' ); ?></p>
    </div>

    <?php
    /* ─────────────────────────────────────────────
     * DYNAMIC: query 'news' CPT first.
     * Falls back to hardcoded articles below.
     * ───────────────────────────────────────────── */
    $paged      = max( 1, get_query_var( 'paged' ) );
    $news_query = new WP_Query( array(
      'post_type'      => 'news',
      'posts_per_page' => 9,
      'paged'          => $paged,
      'orderby'        => 'date',
      'order'          => 'DESC',
    ) );
    ?>

    <?php if ( $news_query->have_posts() ) : ?>

      <div class="news-grid">
        <?php
        $i = 0;
        while ( $news_query->have_posts() ) :
          $news_query->the_post();
          $delay = $i % 3;
          ?>
          <article class="news-card fade-up<?php echo $delay ? ' delay-' . $delay : ''; ?>">
            <a href="<?php the_permalink(); ?>" class="news-card-thumb" aria-label="<?php the_title_attribute(); ?>">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'elan-card' ); ?>
              <?php else : ?>
                <div class="news-thumb-placeholder">
                  <i class="fa-solid fa-newspaper"></i>
                </div>
              <?php endif; ?>
              <span class="news-card-cat"><?php esc_html_e( 'News', 'elan-law' ); ?></span>
            </a>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
                <span><i class="fa-regular fa-user"></i> <?php echo esc_html( get_the_author() ); ?></span>
              </div>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo wp_trim_words( get_the_excerpt(), 22, '&hellip;' ); ?></p>
              <a href="<?php the_permalink(); ?>" class="card-link">
                <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </article>
          <?php
          $i++;
        endwhile;
        wp_reset_postdata();
        ?>
      </div>

      <?php elan_law_pagination( $news_query ); ?>

    <?php else : ?>

      <!-- ──────────────────────────────────────────────────────
           STATIC FALLBACK — 5 hardcoded articles
           (Replace with real 'news' CPT posts from WP Admin)
           ────────────────────────────────────────────────────── -->
      <div class="news-grid">

        <!-- Article 1 -->
        <article class="news-card fade-up">
          <div class="news-card-thumb">
            <div class="news-thumb-placeholder">
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <span class="news-card-cat"><?php esc_html_e( 'Uncategorized', 'elan-law' ); ?></span>
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span><i class="fa-regular fa-calendar"></i> <?php esc_html_e( 'May 1, 2025', 'elan-law' ); ?></span>
              <span><i class="fa-regular fa-user"></i> admin</span>
            </div>
            <h3><?php esc_html_e( 'Four Signs It Is Time to Call an Employment Discrimination Attorney', 'elan-law' ); ?></h3>
            <p><?php esc_html_e( 'Workplace discrimination isn\'t just unfair; it\'s illegal. Federal and state laws protect employees from being treated unfairly based on characteristics like race, gender, age, disability, and more. Yet, many people endure harmful behavior at work, unsure of when legal action is necessary. If you\'re struggling with mistreatment, here are four signs it\'s time to seek help from an employment discrimination attorney in New York.', 'elan-law' ); ?></p>
            <div class="news-article-body">
              <h4><?php esc_html_e( '1. Overt Discrimination', 'elan-law' ); ?></h4>
              <p><?php esc_html_e( 'Comments or actions that are clearly racist, sexist, or otherwise prejudiced are a major red flag. Examples include derogatory language, inappropriate jokes, or explicit favoritism toward one group over another. These behaviors create a hostile work environment and should never be ignored.', 'elan-law' ); ?></p>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link">
              <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </article>

        <!-- Article 2 -->
        <article class="news-card fade-up delay-1">
          <div class="news-card-thumb">
            <div class="news-thumb-placeholder">
              <i class="fa-solid fa-scale-balanced"></i>
            </div>
            <span class="news-card-cat"><?php esc_html_e( 'Uncategorized', 'elan-law' ); ?></span>
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span><i class="fa-regular fa-calendar"></i> <?php esc_html_e( 'April 2, 2025', 'elan-law' ); ?></span>
              <span><i class="fa-regular fa-user"></i> admin</span>
            </div>
            <h3><?php esc_html_e( 'Reasons Why You Need an Employment Discrimination Attorney in New York', 'elan-law' ); ?></h3>
            <p><?php esc_html_e( 'Whether it\'s based on race, gender, religion, disability, or more, workplace discrimination violates your rights and can also impact your well-being. If you\'re dealing with such a situation, seeking legal assistance from an employment discrimination attorney in New York is crucial. These attorneys have years of experience in the field and know how to help individuals facing discrimination at work.', 'elan-law' ); ?></p>
            <div class="news-article-body">
              <h4><?php esc_html_e( 'Filing Claims', 'elan-law' ); ?></h4>
              <p><?php esc_html_e( 'Avoid making errors that could delay or jeopardize your case by asking for legal guidance. An experienced workplace discrimination attorney is trained to file claims with agencies like the Equal Employment Opportunity Commission (EEOC) and the New York State Division of Human Rights.', 'elan-law' ); ?></p>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link">
              <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </article>

        <!-- Article 3 -->
        <article class="news-card fade-up delay-2">
          <div class="news-card-thumb">
            <div class="news-thumb-placeholder">
              <i class="fa-solid fa-car-burst"></i>
            </div>
            <span class="news-card-cat"><?php esc_html_e( 'Uncategorized', 'elan-law' ); ?></span>
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span><i class="fa-regular fa-calendar"></i> <?php esc_html_e( 'January 23, 2025', 'elan-law' ); ?></span>
              <span><i class="fa-regular fa-user"></i> admin</span>
            </div>
            <h3><?php esc_html_e( 'Top Mistakes to Avoid After an Accident in New York', 'elan-law' ); ?></h3>
            <p><?php esc_html_e( 'When you\'ve been involved in an accident, the steps you take can significantly impact your claim. Choosing an accident injury lawyer in New York is crucial, but there are also common mistakes you should avoid to protect your rights.', 'elan-law' ); ?></p>
            <div class="news-article-body">
              <h4><?php esc_html_e( '1. Failing to Seek Medical Attention', 'elan-law' ); ?></h4>
              <p><?php esc_html_e( 'Immediately after an accident, prioritize your health. Ignoring injuries can worsen your condition and harm your case by undermining your claim for damages.', 'elan-law' ); ?></p>
              <h4><?php esc_html_e( '2. Not Documenting the Scene', 'elan-law' ); ?></h4>
              <p><?php esc_html_e( 'Gather evidence at the accident site. Take photos, collect witness information, and write details about the event. This documentation is vital for your accident injury lawyer to build a strong case.', 'elan-law' ); ?></p>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link">
              <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </article>

        <!-- Article 4 -->
        <article class="news-card fade-up">
          <div class="news-card-thumb">
            <div class="news-thumb-placeholder">
              <i class="fa-solid fa-gavel"></i>
            </div>
            <span class="news-card-cat"><?php esc_html_e( 'Uncategorized', 'elan-law' ); ?></span>
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span><i class="fa-regular fa-calendar"></i> <?php esc_html_e( 'November 26, 2024', 'elan-law' ); ?></span>
              <span><i class="fa-regular fa-user"></i> admin</span>
            </div>
            <h3><?php esc_html_e( 'Navigate How to File an Auto Accident Lawsuit in New York with Ease', 'elan-law' ); ?></h3>
            <p><?php esc_html_e( 'Filing a lawsuit after an auto accident in the Empire State can be a daunting experience for drivers, passengers, and pedestrians alike. The legal landscape is rife with complexities that can hinder your ability to seek justice and recover damages. Understanding the process is crucial, which is where the expertise of an auto accident lawyer in New York becomes invaluable.', 'elan-law' ); ?></p>
            <div class="news-article-body">
              <h4><?php esc_html_e( 'The Importance of Specialized Legal Representation', 'elan-law' ); ?></h4>
              <p><?php esc_html_e( 'In New York, the "no-fault" insurance system complicates automobile accident matters. This law limits the ability to sue for pain and suffering unless certain thresholds are met. Determining these parameters often requires legal expertise and experienced legal representation.', 'elan-law' ); ?></p>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link">
              <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </article>

        <!-- Article 5 -->
        <article class="news-card fade-up delay-1">
          <div class="news-card-thumb">
            <div class="news-thumb-placeholder">
              <i class="fa-solid fa-bed"></i>
            </div>
            <span class="news-card-cat"><?php esc_html_e( 'Elan Law Firm', 'elan-law' ); ?></span>
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span><i class="fa-regular fa-calendar"></i> <?php esc_html_e( 'January 5, 2023', 'elan-law' ); ?></span>
              <span><i class="fa-regular fa-user"></i> admin</span>
            </div>
            <h3><?php esc_html_e( 'When to Hire a Bed Bug Lawyer', 'elan-law' ); ?></h3>
            <p><?php esc_html_e( 'If you have recently stayed in a hotel and are now dealing with bed bug bites, you may wonder if it\'s time to hire a bed bug lawyer. There are certain situations where hiring a lawyer is the right decision, and understanding when those situations arise can help you protect your legal rights and make sure that justice is served.', 'elan-law' ); ?></p>
            <div class="news-article-body">
              <p><?php esc_html_e( 'Let\'s explore the signs that indicate it\'s time to hire a bed bug lawyer. Bed bugs are minuscule creatures that measure about 4–5 millimeters long. These pests have a distinctively elongated, oval shape and short antennae. At night, these insects feed on the blood of humans and animals, often leaving painful bites and causing significant distress.', 'elan-law' ); ?></p>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="card-link">
              <?php esc_html_e( 'Read More', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </article>

      </div><!-- .news-grid -->

    <?php endif; ?>

  </div>
</section>

<?php get_footer();
