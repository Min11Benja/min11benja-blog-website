<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package min11benja
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

 <div class="white-space-10"></div>

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
    <h3 class="title">
       <span>
     	<?php
			$min11benja_comment_count = get_comments_number();
			if ( '1' === $min11benja_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Una sola opinion en &ldquo;%1$s&rdquo;', 'min11benja' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s opinion acerca de &ldquo;%2$s&rdquo;', '%1$s opiniones acerca de &ldquo;%2$s&rdquo;', $min11benja_comment_count, 'comments title', 'min11benja' ) ),
					number_format_i18n( $min11benja_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
        </span>
    </h3><!-- .comments-title -->

	
<div class="white-space-10"></div>

 <ul class="comments">
   <?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
 </ul><!-- end  blog comments -->

<?php if ( !comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Commentarios estan cerrados para este blog post.', 'min11benja' ); ?></p>
		<?php endif; ?>
<?php endif; // have_comments() ?>


<?php comment_form(); ?>

           
