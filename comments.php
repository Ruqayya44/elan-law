<?php
/**
 * comments.php — Comments Template
 *
 * @package elan-law
 */

if ( post_password_required() ) {
  return;
}
?>

<div class="comments-area" id="comments">

  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
      <?php
      printf(
        esc_html( _nx( '%1$s Comment', '%1$s Comments', get_comments_number(), 'comments title', 'elan-law' ) ),
        esc_html( number_format_i18n( get_comments_number() ) )
      );
      ?>
    </h2>

    <ol class="comment-list">
      <?php
      wp_list_comments( array(
        'style'       => 'ol',
        'short_ping'  => true,
        'avatar_size' => 0,
        'callback'    => function( $comment, $args, $depth ) {
          ?>
          <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'comment-item' ); ?>>
            <div class="comment-body">
              <p class="comment-author-name"><?php comment_author(); ?></p>
              <p class="comment-date"><?php comment_date(); ?> <?php esc_html_e( 'at', 'elan-law' ); ?> <?php comment_time(); ?></p>
              <div class="comment-text"><?php comment_text(); ?></div>
              <?php
              comment_reply_link( array_merge( $args, array(
                'add_below' => 'comment',
                'depth'     => $depth,
                'max_depth' => $args['max_depth'],
                'before'    => '<p>',
                'after'     => '</p>',
              ) ) );
              ?>
            </div>
          </li>
          <?php
        },
      ) );
      ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav class="comment-navigation" style="margin:30px 0;display:flex;gap:14px;">
        <div><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'elan-law' ) ); ?></div>
        <div><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'elan-law' ) ); ?></div>
      </nav>
    <?php endif; ?>

  <?php endif; ?>

  <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
    <p class="no-comments" style="color:var(--gray-600);font-size:14px;">
      <?php esc_html_e( 'Comments are closed.', 'elan-law' ); ?>
    </p>
  <?php endif; ?>

  <!-- Comment Form -->
  <?php if ( comments_open() ) : ?>
    <div class="comment-form-wrap">
      <?php
      comment_form( array(
        'title_reply'          => esc_html__( 'Leave a Comment', 'elan-law' ),
        'label_submit'         => esc_html__( 'Post Comment', 'elan-law' ),
        'comment_notes_before' => '',
        'comment_field'        => '<div class="form-group full"><label for="comment">' . esc_html__( 'Comment', 'elan-law' ) . '</label><textarea id="comment" name="comment" class="" rows="5" required></textarea></div>',
        'fields'               => array(
          'author' => '<div class="form-row"><div class="form-group"><label for="author">' . esc_html__( 'Name', 'elan-law' ) . '</label><input id="author" name="author" type="text" required></div>',
          'email'  => '<div class="form-group"><label for="email">' . esc_html__( 'Email', 'elan-law' ) . '</label><input id="email" name="email" type="email" required></div></div>',
          'url'    => '',
          'cookies'=> '',
        ),
        'submit_button'        => '<button type="submit" class="btn btn-accent" id="%4$s">%3$s <i class="fa-solid fa-paper-plane"></i></button>',
      ) );
      ?>
    </div>
  <?php endif; ?>

</div><!-- .comments-area -->
