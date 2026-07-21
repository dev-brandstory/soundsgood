<?php
/**
 * Search form.
 *
 * @package SG_Blogs
 */
?>
<form role="search" method="get" class="sg-search-form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="sg-search-field"><?php esc_html_e( 'Search for:', 'sg-blogs' ); ?></label>
	<input type="search" id="sg-search-field" class="sg-search-form__input search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'sg-blogs' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="sg-search-form__submit search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'sg-blogs' ); ?></button>
</form>
