<?php function url()
{
	return "http://localhost/soundsgood/";
	return sprintf(
		"%s://%s%s",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'],
		dirname($_SERVER['REQUEST_URI']) . "/"
	);
}
?>

<?php
if (!defined('BASE_URL')) {
  define('BASE_URL', 'http://localhost/soundsgood/');
}
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
	<link rel="canonical" href="<?php echo $canonical; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="robots" content="INDEX, FOLLOW">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/global.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/media-queries.css">
</head>

<body class="<?php echo $pageclass; ?>">

<header class="site-header">
	<!-- Top utility bar -->
	<div class="header-top d-none d-lg-block">
		<div class="container">
			<div class="header-top__inner flex justify-end items-center gap-4">
				<div class="header-top__item flex items-center gap-2">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
					<span>Mon - Sat (10 AM - 7 PM)</span>
				</div>
				<div class="header-top__item flex items-center gap-2">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.24 11.4 11.4 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 014 5a1 1 0 011-1h3.5a1 1 0 011 1 11.4 11.4 0 00.57 3.58 1 1 0 01-.24 1L6.6 10.8z" stroke="currentColor" stroke-width="2"/></svg>
					<a href="tel:18002701996">1800 270 1996</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Logo + brand stripes -->
	<div class="header-brand d-none d-lg-block">
		<div class="header-brand__stripe header-brand__stripe--green"></div>
		<div class="header-brand__stripe header-brand__stripe--navy"></div>
		<div class="container">
			<a class="header-brand__logo" href="<?php echo BASE_URL; ?>" aria-label="Sounds Good Hearing Care — Home">
				<img src="<?php echo BASE_URL; ?>assets/images/logo/sounds-good-logo.svg" alt="Sounds Good Hearing Care" width="178" height="104" loading="eager">
			</a>
		</div>
	</div>

	<!-- Desktop navigation -->
	<nav class="header-nav d-none d-lg-block" aria-label="Main navigation">
		<div class="container">
			<div class="header-nav__inner flex items-center justify-end gap-5">
				<ul class="header-nav__list flex items-center gap-2">
					<li><a class="header-nav__link <?php echo ($current_page == 'index.php') ? 'is-active' : ''; ?>" href="<?php echo BASE_URL; ?>">Home</a></li>
					<li><a class="header-nav__link <?php echo ($current_page == 'hearing-loss.php') ? 'is-active' : ''; ?>" href="<?php echo BASE_URL; ?>hearing-loss.php">Hearing Loss</a></li>
					<li><a class="header-nav__link" href="<?php echo BASE_URL; ?>hearing-aid.php">Hearing Aid</a></li>
					<li><a class="header-nav__link <?php echo ($current_page == 'testimonials.php') ? 'is-active' : ''; ?>" href="<?php echo BASE_URL; ?>testimonials.php">Testimonials</a></li>
					<li><a class="header-nav__link" href="<?php echo BASE_URL; ?>blog.php">Blog</a></li>
					<li><a class="header-nav__link <?php echo ($current_page == 'about.php') ? 'is-active' : ''; ?>" href="<?php echo BASE_URL; ?>about.php">About Sounds Good</a></li>
				</ul>
				<a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-outline-accent btn-pill">Book appointment</a>
			</div>
		</div>
	</nav>

	<!-- Mobile header -->
	<div class="header-mobile d-lg-none">
		<div class="header-mobile__stripe header-mobile__stripe--green" aria-hidden="true"></div>
		<div class="header-mobile__stripe header-mobile__stripe--navy" aria-hidden="true"></div>
		<div class="header-mobile__inner">
			<a class="header-mobile__logo" href="<?php echo BASE_URL; ?>" aria-label="Sounds Good Hearing Care — Home">
				<img src="<?php echo BASE_URL; ?>assets/images/header/logo.svg" alt="Sounds Good Hearing Care" width="95" height="47" loading="eager">
			</a>
			<button class="header-mobile__toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Open menu">
				<span></span><span></span><span></span>
			</button>
		</div>
	</div>

	<!-- Mobile offcanvas menu -->
	<div class="offcanvas offcanvas-start mobile-menu" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
		<div class="offcanvas-header">
			<h2 class="offcanvas-title" id="mobileMenuLabel">Menu</h2>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<ul class="mobile-menu__list">
				<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
				<li><a href="<?php echo BASE_URL; ?>hearing-loss.php">Hearing Loss</a></li>
				<li><a href="<?php echo BASE_URL; ?>hearing-aid.php">Hearing Aid</a></li>
				<li><a href="<?php echo BASE_URL; ?>testimonials.php">Testimonials</a></li>
				<li><a href="<?php echo BASE_URL; ?>blog.php">Blog</a></li>
				<li><a href="<?php echo BASE_URL; ?>about.php">About Sounds Good</a></li>
				<li><a href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
			</ul>
			<div class="mobile-menu__contact">
				<p><a href="tel:18002701996">1800 270 1996</a></p>
				<p class="text-sm">Mon - Sat (10 AM - 7 PM)</p>
			</div>
			<a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-outline-accent btn-pill btn-block mt-4">Book appointment</a>
		</div>
	</div>
</header>

<main>
