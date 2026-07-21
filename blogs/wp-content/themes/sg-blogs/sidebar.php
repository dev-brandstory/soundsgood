<?php
/**
 * Sidebar.
 *
 * @package SG_Blogs
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sg-sidebar widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'sg-blogs' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
