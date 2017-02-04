<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
$post_id     = get_queried_object_id();

?>

<div id="comments" class="comments-area row">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title row">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'slresponsive' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation row" role="navigation">
			<h2 class="screen-reader-text row"><?php esc_html_e( 'Comment navigation', 'slresponsive' ); ?></h2>
			<div class="nav-links row">

				<div class="nav-previous six columns"><?php previous_comments_link( esc_html__( 'Older Comments', 'slresponsive' ) ); ?></div>
				<div class="nav-next six columns"><?php next_comments_link( esc_html__( 'Newer Comments', 'slresponsive' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list row">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation row" role="navigation">
			<h2 class="screen-reader-text row"><?php esc_html_e( 'Comment navigation', 'slresponsive' ); ?></h2>
			<div class="nav-links row">

				<div class="nav-previous six columns"><?php previous_comments_link( esc_html__( 'Older Comments', 'slresponsive' ) ); ?></div>
				<div class="nav-next six columns"><?php next_comments_link( esc_html__( 'Newer Comments', 'slresponsive' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments row"><?php esc_html_e( 'Comments are closed.', 'slresponsive' ); ?></p>
	<?php
	endif;

	$args = array(
		'fields'               => array(
									'author' => '<p class="comment-form-author field">' . '<label for="author">' . __( 'Name', 'slresponsive' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
												'<input class="input" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"/></p>',
									'email'  => '<p class="comment-form-email field"><label for="email">' . __( 'Email', 'slresponsive' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
												'<input class="input" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"/></p>',
									'url'    => '<p class="comment-form-url field"><label for="url">' . __( 'Website', 'slresponsive' ) . '</label> ' .
												'<input class="input" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
								),
		'comment_field'        => '<p class="comment-form-comment field"><label for="comment">' . __( 'Comment', 'slresponsive' ) . '</label> <textarea class="input textarea" id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea></p>',
		'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'slresponsive' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
		'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>', 'slresponsive' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
		'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">' . __( 'Your email address will not be published.', 'slresponsive' ) . '</span></p>',
		'comment_notes_after'  => '',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'class_form'           => 'comment-form',
		'class_submit'         => 'submit',
		'name_submit'          => 'submit',
		'title_reply'          => __( 'Leave a Reply', 'slresponsive' ),
		'title_reply_to'       => __( 'Leave a Reply to %s', 'slresponsive' ),
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h3>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel reply', 'slresponsive' ),
		'label_submit'         => __( 'Post Comment', 'slresponsive' ),
		'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
		'submit_field'         => '<p class="medium primary btn form-submit">%1$s %2$s</p>',
		'format'               => 'xhtml',
	);
	comment_form( $args );
	?>

</div><!-- #comments -->
