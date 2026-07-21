<?php
/**
 * No results.
 *
 * @package SG_Blogs
 */
?>
<div class="sg-empty">
	<h2 class="sg-empty__title"><?php esc_html_e( 'Nothing found', 'sg-blogs' ); ?></h2>
	<p class="sg-empty__text">
		<?php
		if ( is_search() ) {
			esc_html_e( 'Sorry, nothing matched your search. Try again with different keywords.', 'sg-blogs' );
		} else {
			esc_html_e( 'It looks like nothing was found here. Try a search.', 'sg-blogs' );
		}
		?>
	</p>
	<?php get_search_form(); ?>
</div>
