<?php
/**
 * Comments template.
 *
 * @package SG_Blogs
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="sg-comments comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$sg_count = get_comments_number();
			printf(
				/* translators: 1: comment count, 2: post title */
				esc_html( _n( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $sg_count, 'sg-blogs' ) ),
				esc_html( number_format_i18n( $sg_count ) ),
				'<span>' . wp_kses_post( get_the_title() ) . '</span>'
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php the_comments_navigation(); ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sg-blogs' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
