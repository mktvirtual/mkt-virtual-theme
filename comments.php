<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<?php if ( post_password_required() ) : ?>
				<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;

?>

<?php
	// Formulário para adicionar comentário
    if (comments_open()) {
        $comment_form_args = array(
          'title_reply' => 'Deixe seu comentário',
          'comment_field' => '<div class="fill-parent mt clearfix"><label class="span--3--16" for="comment">Mensagem</label><textarea required class="input input--textarea span--13--16 omega" id="comment" name="comment" rows="8" aria-required="true"></textarea></div>',
          'comment_notes_before' => '',
          'comment_notes_after' => '',
          'label_submit' => 'Enviar'
        );
        comment_form($comment_form_args);
    }
?>

<?php if ( have_comments() ) : ?>
    <?php  ?>
			<!-- STARKERS NOTE: The following h3 id is left intact so that comments can be referenced on the page -->

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'twentyten' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyten' ) ); ?>
<?php endif; // check for comment navigation ?>

      <?php

      ?>
      <h3 id="comments-title" class="gamma text--uppercase color--detail"><?php
        echo 'Comentários ('.get_comments_number().')';
      ?></h3>
			<ol class="nav nav--stacked">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					//wp_list_comments('avatar_size=59');
					wp_list_comments('callback=wordpressapi_comments&avatar_size=59');
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'twentyten' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyten' ) ); ?>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>
