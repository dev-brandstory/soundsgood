<?php
/**
 * Template tags and helpers.
 *
 * @package SG_Blogs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main marketing site URL (parent of /blogs/).
 *
 * @return string
 */
function sg_blogs_main_site_url() {
	$stored = get_theme_mod( 'sg_main_site_url', '' );
	if ( $stored ) {
		return trailingslashit( $stored );
	}

	$home = home_url( '/' );
	// If WP lives in /blogs/, strip that segment for main site links.
	$main = preg_replace( '#/blogs/?$#', '/', untrailingslashit( $home ) );
	return trailingslashit( $main ? $main : $home );
}

/**
 * Book appointment URL on main site.
 *
 * @return string
 */
function sg_blogs_book_url() {
	$custom = get_theme_mod( 'sg_book_url', '' );
	if ( $custom ) {
		return esc_url( $custom );
	}
	return esc_url( sg_blogs_main_site_url() . 'contact' );
}

/**
 * Blog listing page URL (Blog Listing template, else posts index / home).
 *
 * @return string
 */
function sg_blogs_listing_url() {
	$pages = get_pages(
		array(
			'meta_key'   => '_wp_page_template',
			'meta_value' => 'home.php',
			'number'     => 1,
		)
	);

	if ( ! empty( $pages ) ) {
		return esc_url( get_permalink( $pages[0]->ID ) );
	}

	$posts_page = (int) get_option( 'page_for_posts' );
	if ( $posts_page ) {
		return esc_url( get_permalink( $posts_page ) );
	}

	return esc_url( home_url( '/' ) );
}

/**
 * Find clinic / branches URL on main site.
 *
 * @return string
 */
function sg_blogs_clinic_url() {
	$custom = get_theme_mod( 'sg_clinic_url', '' );
	if ( $custom ) {
		return esc_url( $custom );
	}
	return esc_url( sg_blogs_main_site_url() . 'contact#our-branches' );
}

/**
 * Estimated reading time in minutes.
 *
 * @param int|null $post_id Post ID.
 * @return int
 */
function sg_blogs_reading_time( $post_id = null ) {
	$post_id = $post_id ? (int) $post_id : get_the_ID();
	$content = get_post_field( 'post_content', $post_id );
	$words   = str_word_count( wp_strip_all_tags( (string) $content ) );
	$mins    = (int) ceil( $words / 200 );
	return max( 1, $mins );
}

/**
 * Logo URL (custom logo or theme asset).
 *
 * @param string $fallback_file Relative to theme assets/images/.
 * @return string
 */
function sg_blogs_logo_url( $fallback_file = 'sounds-good-logo.svg' ) {
	$custom_id = get_theme_mod( 'custom_logo' );
	if ( $custom_id ) {
		$url = wp_get_attachment_image_url( $custom_id, 'full' );
		if ( $url ) {
			return $url;
		}
	}
	return SG_BLOGS_URI . '/assets/images/' . ltrim( $fallback_file, '/' );
}

/**
 * Fallback primary menu (links to main site — extensionless).
 *
 * @param array $args wp_nav_menu args.
 */
function sg_blogs_fallback_menu( $args ) {
	$base = sg_blogs_main_site_url();
	$items = array(
		array( 'label' => __( 'Home', 'sg-blogs' ), 'url' => $base ),
		array( 'label' => __( 'Hearing Loss', 'sg-blogs' ), 'url' => $base . 'hearing-loss' ),
		array( 'label' => __( 'Hearing Aid', 'sg-blogs' ), 'url' => $base . 'hearing-aid' ),
		array( 'label' => __( 'Testimonials', 'sg-blogs' ), 'url' => $base . 'testimonials' ),
		array( 'label' => __( 'Blog', 'sg-blogs' ), 'url' => home_url( '/' ) ),
		array( 'label' => __( 'About Sounds Good', 'sg-blogs' ), 'url' => $base . 'about' ),
	);

	echo '<ul class="' . esc_attr( $args['menu_class'] ) . '">';
	foreach ( $items as $item ) {
		$active = ( untrailingslashit( $item['url'] ) === untrailingslashit( home_url( '/' ) ) && is_home() )
			? ' is-active'
			: '';
		printf(
			'<li><a class="header-nav__link%s" href="%s">%s</a></li>',
			esc_attr( $active ),
			esc_url( $item['url'] ),
			esc_html( $item['label'] )
		);
	}
	echo '</ul>';
}

/**
 * Fallback mobile menu.
 *
 * @param array $args wp_nav_menu args.
 */
function sg_blogs_fallback_mobile_menu( $args ) {
	$base = sg_blogs_main_site_url();
	$items = array(
		array( 'label' => __( 'Home', 'sg-blogs' ), 'url' => $base ),
		array( 'label' => __( 'Hearing Loss', 'sg-blogs' ), 'url' => $base . 'hearing-loss' ),
		array( 'label' => __( 'Hearing Aid', 'sg-blogs' ), 'url' => $base . 'hearing-aid' ),
		array( 'label' => __( 'Testimonials', 'sg-blogs' ), 'url' => $base . 'testimonials' ),
		array( 'label' => __( 'Blog', 'sg-blogs' ), 'url' => home_url( '/' ) ),
		array( 'label' => __( 'About Sounds Good', 'sg-blogs' ), 'url' => $base . 'about' ),
		array( 'label' => __( 'Contact Us', 'sg-blogs' ), 'url' => $base . 'contact' ),
	);

	echo '<ul class="' . esc_attr( $args['menu_class'] ) . '">';
	foreach ( $items as $item ) {
		printf(
			'<li><a href="%s">%s</a></li>',
			esc_url( $item['url'] ),
			esc_html( $item['label'] )
		);
	}
	echo '</ul>';
}

/**
 * Posted on meta.
 */
function sg_blogs_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_html( get_the_modified_date() )
	);

	printf(
		'<span class="sg-meta__date">%s</span>',
		$time_string // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	);
}

/**
 * Posted by meta.
 */
function sg_blogs_posted_by() {
	printf(
		'<span class="sg-meta__author"><a href="%1$s">%2$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html( get_the_author() )
	);
}

/**
 * Entry footer categories/tags.
 */
function sg_blogs_entry_footer() {
	$categories = get_the_category_list( esc_html__( ', ', 'sg-blogs' ) );
	if ( $categories ) {
		printf( '<span class="sg-meta__cats">%s</span>', $categories ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	$tags = get_the_tag_list( '', esc_html__( ', ', 'sg-blogs' ) );
	if ( $tags ) {
		printf( '<span class="sg-meta__tags">%s</span>', $tags ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
