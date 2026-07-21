<?php
/**
 * SG Blogs theme functions.
 *
 * @package SG_Blogs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SG_BLOGS_VERSION', '1.4.2' );
define( 'SG_BLOGS_DIR', get_template_directory() );
define( 'SG_BLOGS_URI', get_template_directory_uri() );

require_once SG_BLOGS_DIR . '/inc/template-tags.php';

/**
 * Theme setup.
 */
function sg_blogs_setup() {
	load_theme_textdomain( 'sg-blogs', SG_BLOGS_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 104,
			'width'       => 178,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'sg-blogs' ),
			'mobile'  => __( 'Mobile Menu', 'sg-blogs' ),
			'footer'  => __( 'Footer Menu', 'sg-blogs' ),
		)
	);

	set_post_thumbnail_size( 1200, 630, true );
	add_image_size( 'sg-card', 640, 400, true );
}
add_action( 'after_setup_theme', 'sg_blogs_setup' );

/**
 * Content width.
 */
function sg_blogs_content_width() {
	$GLOBALS['content_width'] = 760;
}
add_action( 'after_setup_theme', 'sg_blogs_content_width', 0 );

/**
 * Widget areas.
 */
function sg_blogs_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'sg-blogs' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here.', 'sg-blogs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sg_blogs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sg_blogs_scripts() {
	wp_enqueue_style(
		'sg-blogs-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'sg-blogs-bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
		array(),
		'5.3.8'
	);
	wp_enqueue_style(
		'sg-blogs-aos',
		'https://unpkg.com/aos@next/dist/aos.css',
		array(),
		null
	);
	wp_enqueue_style(
		'sg-blogs-global',
		SG_BLOGS_URI . '/assets/css/global.css',
		array( 'sg-blogs-bootstrap' ),
		SG_BLOGS_VERSION
	);
	wp_enqueue_style(
		'sg-blogs-site',
		SG_BLOGS_URI . '/assets/css/site.css',
		array( 'sg-blogs-global' ),
		SG_BLOGS_VERSION
	);
	wp_enqueue_style(
		'sg-blogs-mq',
		SG_BLOGS_URI . '/assets/css/media-queries.css',
		array( 'sg-blogs-site' ),
		SG_BLOGS_VERSION
	);
	wp_enqueue_style(
		'sg-blogs-blog',
		SG_BLOGS_URI . '/assets/css/blog.css',
		array( 'sg-blogs-mq' ),
		SG_BLOGS_VERSION
	);

	wp_enqueue_script(
		'sg-blogs-bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.3.8',
		true
	);
	wp_enqueue_script(
		'sg-blogs-aos',
		'https://unpkg.com/aos@next/dist/aos.js',
		array(),
		null,
		true
	);
	wp_enqueue_script(
		'sg-blogs-site',
		SG_BLOGS_URI . '/assets/js/site.js',
		array( 'sg-blogs-bootstrap', 'sg-blogs-aos' ),
		SG_BLOGS_VERSION,
		true
	);
	wp_enqueue_script(
		'sg-blogs-theme',
		SG_BLOGS_URI . '/assets/js/theme.js',
		array( 'sg-blogs-site' ),
		SG_BLOGS_VERSION,
		true
	);

	wp_localize_script(
		'sg-blogs-theme',
		'sgBlogs',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'sg_blogs_load_more' ),
			'i18n'    => array(
				'loading' => __( 'Loading…', 'sg-blogs' ),
				'loadMore' => __( 'Load More', 'sg-blogs' ),
			),
		)
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sg_blogs_scripts' );

/**
 * AJAX: Load more blog cards.
 */
function sg_blogs_ajax_load_more() {
	check_ajax_referer( 'sg_blogs_load_more', 'nonce' );

	$page = isset( $_POST['page'] ) ? absint( $_POST['page'] ) : 1;
	$page = max( 1, $page );

	$query = new WP_Query(
		array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => 6,
			'paged'               => $page,
			'ignore_sticky_posts' => true,
		)
	);

	ob_start();
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			get_template_part( 'template-parts/content', 'blog-card' );
		}
		wp_reset_postdata();
	}
	$html = ob_get_clean();

	wp_send_json_success(
		array(
			'html'     => $html,
			'page'     => $page,
			'maxPages' => (int) $query->max_num_pages,
			'hasMore'  => $page < (int) $query->max_num_pages,
		)
	);
}
add_action( 'wp_ajax_sg_blogs_load_more', 'sg_blogs_ajax_load_more' );
add_action( 'wp_ajax_nopriv_sg_blogs_load_more', 'sg_blogs_ajax_load_more' );

/**
 * Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function sg_blogs_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'sg_blogs_contact',
		array(
			'title'    => __( 'Sounds Good Contact', 'sg-blogs' ),
			'priority' => 30,
		)
	);

	$wp_customize->add_setting( 'sg_main_site_url', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control(
		'sg_main_site_url',
		array(
			'label'       => __( 'Main site URL', 'sg-blogs' ),
			'description' => __( 'Leave empty to auto-detect (parent of /blogs/).', 'sg-blogs' ),
			'section'     => 'sg_blogs_contact',
			'type'        => 'url',
		)
	);

	$wp_customize->add_setting( 'sg_phone', array( 'default' => '1800 270 1996', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'sg_phone', array( 'label' => __( 'Phone', 'sg-blogs' ), 'section' => 'sg_blogs_contact', 'type' => 'text' ) );

	$wp_customize->add_setting( 'sg_hours', array( 'default' => 'Mon - Sat (10 AM - 7 PM)', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'sg_hours', array( 'label' => __( 'Hours', 'sg-blogs' ), 'section' => 'sg_blogs_contact', 'type' => 'text' ) );

	$wp_customize->add_setting( 'sg_book_url', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'sg_book_url', array( 'label' => __( 'Book appointment URL', 'sg-blogs' ), 'section' => 'sg_blogs_contact', 'type' => 'url' ) );

	$wp_customize->add_setting( 'sg_whatsapp', array( 'default' => '919843078635', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'sg_whatsapp', array( 'label' => __( 'WhatsApp number (with country code)', 'sg-blogs' ), 'section' => 'sg_blogs_contact', 'type' => 'text' ) );

	$wp_customize->add_setting( 'sg_email', array( 'default' => 'hello@soundsgood.in', 'sanitize_callback' => 'sanitize_email' ) );
	$wp_customize->add_control( 'sg_email', array( 'label' => __( 'Email', 'sg-blogs' ), 'section' => 'sg_blogs_contact', 'type' => 'email' ) );
}
add_action( 'customize_register', 'sg_blogs_customize_register' );

/**
 * Excerpt length.
 *
 * @param int $length Length.
 * @return int
 */
function sg_blogs_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'sg_blogs_excerpt_length' );

/**
 * Excerpt more.
 *
 * @param string $more More.
 * @return string
 */
function sg_blogs_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'sg_blogs_excerpt_more' );

/**
 * Body class for blog layout.
 *
 * @param array $classes Classes.
 * @return array
 */
function sg_blogs_body_class( $classes ) {
	$classes[] = 'sgBlogsPage';
	return $classes;
}
add_filter( 'body_class', 'sg_blogs_body_class' );
