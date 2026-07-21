<?php
/**
 * Theme header.
 *
 * @package SG_Blogs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sg_phone     = get_theme_mod( 'sg_phone', '1800 270 1996' );
$sg_phone_tel = preg_replace( '/\D+/', '', $sg_phone );
$sg_hours     = get_theme_mod( 'sg_hours', 'Mon - Sat (10 AM - 7 PM)' );
$sg_book_url  = sg_blogs_book_url();
$sg_main      = sg_blogs_main_site_url();
$sg_logo      = sg_blogs_logo_url( 'sounds-good-logo.svg' );
$sg_logo_sm   = sg_blogs_logo_url( 'logo.svg' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<!-- Top utility bar -->
	<div class="header-top d-none d-lg-block">
		<div class="container">
			<div class="header-top__inner flex justify-end items-center gap-4">
				<div class="header-top__item flex items-center gap-2">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
					<span><?php echo esc_html( $sg_hours ); ?></span>
				</div>
				<div class="header-top__item flex items-center gap-2">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.24 11.4 11.4 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 014 5a1 1 0 011-1h3.5a1 1 0 011 1 11.4 11.4 0 00.57 3.58 1 1 0 01-.24 1L6.6 10.8z" stroke="currentColor" stroke-width="2"/></svg>
					<a href="<?php echo esc_url( 'tel:' . $sg_phone_tel ); ?>"><?php echo esc_html( $sg_phone ); ?></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Logo + brand stripes -->
	<div class="header-brand d-none d-lg-block">
		<div class="header-brand__stripe header-brand__stripe--green"></div>
		<div class="header-brand__stripe header-brand__stripe--navy"></div>
		<div class="container">
			<a class="header-brand__logo" href="<?php echo esc_url( $sg_main ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — Home">
				<img src="<?php echo esc_url( $sg_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="178" height="104" loading="eager">
			</a>
		</div>
	</div>

	<!-- Desktop navigation -->
	<nav class="header-nav d-none d-lg-block" aria-label="<?php esc_attr_e( 'Main navigation', 'sg-blogs' ); ?>">
		<div class="container">
			<div class="header-nav__inner flex items-center justify-end gap-5">
				<a class="header-nav__logo" href="<?php echo esc_url( $sg_main ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — Home" aria-hidden="true" tabindex="-1">
					<img src="<?php echo esc_url( $sg_logo ); ?>" alt="" width="120" height="70" loading="eager">
				</a>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'header-nav__list flex items-center gap-2',
						'fallback_cb'    => 'sg_blogs_fallback_menu',
						'depth'          => 1,
					)
				);
				?>
				<a href="<?php echo esc_url( $sg_book_url ); ?>" class="btn btn-outline-accent btn-pill"><?php esc_html_e( 'Book appointment', 'sg-blogs' ); ?></a>
			</div>
		</div>
	</nav>

	<!-- Mobile header -->
	<div class="header-mobile d-lg-none">
		<div class="header-mobile__stripe header-mobile__stripe--green" aria-hidden="true"></div>
		<div class="header-mobile__stripe header-mobile__stripe--navy" aria-hidden="true"></div>
		<div class="header-mobile__inner">
			<a class="header-mobile__logo" href="<?php echo esc_url( $sg_main ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — Home">
				<img src="<?php echo esc_url( $sg_logo_sm ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="95" height="47" loading="eager">
			</a>
			<button class="header-mobile__toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="<?php esc_attr_e( 'Open menu', 'sg-blogs' ); ?>">
				<span></span><span></span><span></span>
			</button>
		</div>
	</div>

	<!-- Mobile offcanvas menu -->
	<div class="offcanvas offcanvas-start mobile-menu" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
		<div class="offcanvas-header">
			<h2 class="offcanvas-title" id="mobileMenuLabel"><?php esc_html_e( 'Menu', 'sg-blogs' ); ?></h2>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="<?php esc_attr_e( 'Close', 'sg-blogs' ); ?>"></button>
		</div>
		<div class="offcanvas-body">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mobile',
					'container'      => false,
					'menu_class'     => 'mobile-menu__list',
					'fallback_cb'    => 'sg_blogs_fallback_mobile_menu',
					'depth'          => 1,
				)
			);
			?>
			<div class="mobile-menu__contact">
				<p><a href="<?php echo esc_url( 'tel:' . $sg_phone_tel ); ?>"><?php echo esc_html( $sg_phone ); ?></a></p>
				<p class="text-sm"><?php echo esc_html( $sg_hours ); ?></p>
			</div>
			<a href="<?php echo esc_url( $sg_book_url ); ?>" class="btn btn-outline-accent btn-pill btn-block mt-4"><?php esc_html_e( 'Book appointment', 'sg-blogs' ); ?></a>
		</div>
	</div>
</header>

<main id="primary" class="site-main">
