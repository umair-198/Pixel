<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<?php comment_form_1(); 


?><h4 class="comment-title"><?php echo get_comments_number(); ?> Comment</h4><br>
<?php
if (have_comments()) : ?>
    <ol class="co-comment-list">
        <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
            ));
        ?>
    </ol>
	<?php
endif;
