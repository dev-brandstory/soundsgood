<?php
/**
 * Theme footer.
 *
 * @package SG_Blogs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sg_main      = sg_blogs_main_site_url();
$sg_logo_sm   = sg_blogs_logo_url( 'logo.svg' );
$sg_email     = get_theme_mod( 'sg_email', 'hello@soundsgood.in' );
$sg_whatsapp  = preg_replace( '/\D+/', '', get_theme_mod( 'sg_whatsapp', '919843078635' ) );
$sg_wa_text   = rawurlencode( __( 'Hi Sounds Good, I would like to know more about your hearing care services.', 'sg-blogs' ) );
$sg_map       = SG_BLOGS_URI . '/assets/images/location-map.svg';
$sg_pin       = SG_BLOGS_URI . '/assets/images/map-pin.svg';

$pins = array(
	array( 'class' => 'footer-location__pin1', 'city' => 'Coimbatore', 'map' => 'https://maps.app.goo.gl/Tx9LURxU2egCttj97', 'x' => '20%', 'y' => '37%' ),
	array( 'class' => 'footer-location__pin2', 'city' => 'Tirupur', 'map' => 'https://maps.app.goo.gl/YGpkqWes1MUPLPza8', 'x' => '30%', 'y' => '28%' ),
	array( 'class' => 'footer-location__pin3', 'city' => 'Theni', 'map' => 'https://maps.app.goo.gl/Rq8HYP7Cq5yaBnNf8', 'x' => '30%', 'y' => '52%' ),
	array( 'class' => 'footer-location__pin4', 'city' => 'Madurai', 'map' => 'https://maps.app.goo.gl/zMKM74j5n2DFxtE6A', 'x' => '42%', 'y' => '52%' ),
	array( 'class' => 'footer-location__pin5', 'city' => 'Ramanathapuram', 'map' => 'https://maps.app.goo.gl/VF12Fn7CPvzFtKvi7', 'x' => '60%', 'y' => '63%' ),
	array( 'class' => 'footer-location__pin6', 'city' => 'Tuticorin', 'map' => 'https://maps.app.goo.gl/zfmuo4jYaiLadJak7', 'x' => '47%', 'y' => '70%' ),
	array( 'class' => 'footer-location__pin7', 'city' => 'Tirunelveli', 'map' => 'https://maps.app.goo.gl/v9hdxmsXeap4KaLcA', 'x' => '33%', 'y' => '76%' ),
	array( 'class' => 'footer-location__pin8', 'city' => 'Nagercoil', 'map' => 'https://maps.app.goo.gl/q2Qenc9u2HzmJ9Ed9', 'x' => '29%', 'y' => '88%' ),
);
?>
</main>

<!-- ===== Footer Location CTA (desktop) ===== -->
<section class="footer-location d-none d-md-block" aria-labelledby="footer-location-heading">
	<div class="container">
		<div class="footer-location__card" data-aos="fade-up">
			<span class="footer-location__map-glow" aria-hidden="true"></span>
			<div class="footer-location__content">
				<h2 id="footer-location-heading"><?php esc_html_e( 'We Are Closer To You Than You Think!', 'sg-blogs' ); ?></h2>
				<p><?php esc_html_e( 'Locate your nearest Soundsgood clinic to book a professional hearing check-up today.', 'sg-blogs' ); ?></p>
			</div>
			<div class="footer-location__map">
				<div class="footer-location__map-stage" id="footerMapPins">
					<img class="footer-location__map-img" src="<?php echo esc_url( $sg_map ); ?>" alt="<?php esc_attr_e( 'Map of Sounds Good clinic locations across Tamil Nadu', 'sg-blogs' ); ?>" width="460" height="290" loading="lazy">
					<?php foreach ( $pins as $pin ) : ?>
					<a class="footer-location__pin <?php echo esc_attr( $pin['class'] ); ?>" href="<?php echo esc_url( $pin['map'] ); ?>" target="_blank" rel="noopener noreferrer" style="--pin-x: <?php echo esc_attr( $pin['x'] ); ?>; --pin-y: <?php echo esc_attr( $pin['y'] ); ?>;" data-city="<?php echo esc_attr( $pin['city'] ); ?>">
						<span class="footer-location__pin-spin" aria-hidden="true">
							<img class="footer-location__pin-icon footer-location__pin-icon--front" src="<?php echo esc_url( $sg_pin ); ?>" alt="" width="42" height="42">
							<img class="footer-location__pin-icon footer-location__pin-icon--back" src="<?php echo esc_url( $sg_pin ); ?>" alt="" width="42" height="42">
						</span>
						<span class="footer-location__tab"><?php echo esc_html( $pin['city'] ); ?> <svg width="12" height="12" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== Footer Location CTA (mobile) ===== -->
<section class="footer-location-mobile d-md-none" aria-labelledby="footer-location-mobile-heading">
	<div class="container">
		<div class="footer-location-mobile__card">
			<div class="footer-location-mobile__content">
				<h2 id="footer-location-mobile-heading"><?php esc_html_e( 'We Are Closer To You Than You Think!', 'sg-blogs' ); ?></h2>
				<p><?php esc_html_e( 'Locate your nearest Soundsgood clinic to book a professional hearing check-up today.', 'sg-blogs' ); ?></p>
			</div>
			<div class="footer-location-mobile__map">
				<div class="footer-location-mobile__map-stage" id="footerMapPinsMobile">
					<img class="footer-location__map-img" src="<?php echo esc_url( $sg_map ); ?>" alt="<?php esc_attr_e( 'Map of Sounds Good clinic locations across Tamil Nadu', 'sg-blogs' ); ?>" width="340" height="280" loading="lazy">
					<?php foreach ( $pins as $pin ) : ?>
					<a class="footer-location__pin <?php echo esc_attr( $pin['class'] ); ?>" href="<?php echo esc_url( $pin['map'] ); ?>" target="_blank" rel="noopener noreferrer" style="--pin-x: <?php echo esc_attr( $pin['x'] ); ?>; --pin-y: <?php echo esc_attr( $pin['y'] ); ?>;" data-city="<?php echo esc_attr( $pin['city'] ); ?>">
						<span class="footer-location__pin-spin" aria-hidden="true">
							<img class="footer-location__pin-icon footer-location__pin-icon--front" src="<?php echo esc_url( $sg_pin ); ?>" alt="" width="32" height="32">
							<img class="footer-location__pin-icon footer-location__pin-icon--back" src="<?php echo esc_url( $sg_pin ); ?>" alt="" width="32" height="32">
						</span>
						<span class="footer-location__tab"><?php echo esc_html( $pin['city'] ); ?></span>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="site-footer">
	<div class="site-footer__main">
		<div class="site-footer__stripe site-footer__stripe--green"></div>
		<div class="site-footer__stripe site-footer__stripe--navy"></div>
		<div class="container">
			<div class="row g-4 align-items-start site-footer__grid">
				<div class="col-lg-3 col-md-6">
					<div class="footer_logo_wrapper">
						<a href="<?php echo esc_url( $sg_main ); ?>" class="site-footer__logo">
							<img src="<?php echo esc_url( $sg_logo_sm ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="178" height="104" loading="lazy"/>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<?php
					if ( has_nav_menu( 'footer' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'container'      => false,
								'menu_class'     => 'site-footer__links',
								'depth'          => 1,
							)
						);
					} else {
						?>
					<ul class="site-footer__links">
						<li><a href="<?php echo esc_url( $sg_main ); ?>"><?php esc_html_e( 'Home', 'sg-blogs' ); ?></a></li>
						<li><a href="<?php echo esc_url( $sg_main . 'hearing-loss' ); ?>"><?php esc_html_e( 'Hearing Loss', 'sg-blogs' ); ?></a></li>
						<li><a href="<?php echo esc_url( $sg_main . 'hearing-aid' ); ?>"><?php esc_html_e( 'Hearing Aid', 'sg-blogs' ); ?></a></li>
						<li><a href="<?php echo esc_url( $sg_main . 'about' ); ?>"><?php esc_html_e( 'About Sounds Good', 'sg-blogs' ); ?></a></li>
						<li><a href="<?php echo esc_url( $sg_main . 'contact' ); ?>"><?php esc_html_e( 'Free Video consulting', 'sg-blogs' ); ?></a></li>
						<li><a href="<?php echo esc_url( $sg_main . 'contact' ); ?>"><?php esc_html_e( 'Contact Us', 'sg-blogs' ); ?></a></li>
					</ul>
						<?php
					}
					?>
				</div>
				<div class="col-lg-2 col-md-6">
					<ul class="site-footer__links">
						<li><a href="https://www.facebook.com/soundsgoodhearingcare/" rel="noopener noreferrer" target="_blank"><?php esc_html_e( 'Facebook', 'sg-blogs' ); ?></a></li>
						<li><a href="#" rel="noopener noreferrer"><?php esc_html_e( 'Twitter', 'sg-blogs' ); ?></a></li>
						<li><a href="#" rel="noopener noreferrer"><?php esc_html_e( 'Linkedin', 'sg-blogs' ); ?></a></li>
						<li><a href="https://www.instagram.com/soundsgoodhearingcare/" rel="noopener noreferrer" target="_blank"><?php esc_html_e( 'Instagram', 'sg-blogs' ); ?></a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6">
					<ul class="site-footer__contact">
						<li>
							<a href="tel:4345464356">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.24 11.4 11.4 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 014 5a1 1 0 011-1h3.5a1 1 0 011 1 11.4 11.4 0 00.57 3.58 1 1 0 01-.24 1L6.6 10.8z" stroke="currentColor" stroke-width="2"/></svg>
								<span>(434) 546-4356</span>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( 'https://wa.me/' . $sg_whatsapp ); ?>" rel="noopener noreferrer">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2a9.5 9.5 0 00-8.2 14.3L3 22l5.9-.8A9.5 9.5 0 1012 2z" stroke="currentColor" stroke-width="2"/><path d="M8.5 9.5c.4 1.8 2.2 3.6 4 4l1.2-.6c.3-.2.7-.1.9.2l.7 1.2c.2.3.1.7-.2.9-1.3.8-3.1.7-5.3-.8-2.2-1.6-3-3.5-2.8-5 .1-.4.5-.6.8-.5l1.3.3c.3.1.5.4.4.7L9 10c-.1.3 0 .6.3.8l.2.1z" fill="currentColor"/></svg>
								<span>8489978689</span>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( 'mailto:' . $sg_email ); ?>">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="2"/><path d="M4 7l8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
								<span><?php echo esc_html( $sg_email ); ?></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer__bottom">
		<div class="container">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Soundsgood. <?php esc_html_e( 'All rights reserved.', 'sg-blogs' ); ?></p>
		</div>
	</div>
</footer>

<!-- ===== Floating WhatsApp ===== -->
<a
	class="wa-float"
	href="<?php echo esc_url( 'https://wa.me/' . $sg_whatsapp . '?text=' . $sg_wa_text ); ?>"
	target="_blank"
	rel="noopener noreferrer"
	aria-label="<?php esc_attr_e( 'Chat with us on WhatsApp', 'sg-blogs' ); ?>"
>
	<span class="wa-float__pulse" aria-hidden="true"></span>
	<span class="wa-float__pulse wa-float__pulse--delay" aria-hidden="true"></span>
	<svg class="wa-float__icon" width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
		<path d="M17.5 14.4c-.3-.1-1.6-.8-1.8-.9-.3-.1-.4-.1-.6.1-.2.3-.7.9-.8 1-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.5-1-.9-1.5-1.9-1.7-2.2-.2-.3 0-.4.1-.6l.4-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.3.3-.9.9-.9 2.1s.9 2.4 1 2.6c.1.2 1.8 2.8 4.4 3.9 1.5.6 2.1.7 2.8.6.4-.1 1.4-.6 1.6-1.1.2-.5.2-1 .1-1.1-.1-.1-.3-.2-.6-.3zM12.1 2C6.6 2 2.1 6.5 2.1 12c0 1.8.5 3.4 1.3 4.9L2 22l5.3-1.4c1.4.8 3 1.2 4.7 1.2 5.5 0 10-4.5 10-10S17.6 2 12.1 2zm0 18.2c-1.5 0-3-.4-4.3-1.2l-.3-.2-3.1.8.8-3.1-.2-.3c-.8-1.4-1.3-2.9-1.3-4.5 0-4.7 3.8-8.5 8.5-8.5s8.5 3.8 8.5 8.5-3.9 8.5-8.6 8.5z"/>
	</svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
