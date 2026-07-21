<?php
/**
 * Single post mid-page CTA (Figma Section 5).
 *
 * @package SG_Blogs
 */

$sg_book      = sg_blogs_book_url();
$sg_clinic    = sg_blogs_clinic_url();
$sg_phone     = get_theme_mod( 'sg_phone', '1800 270 1996' );
$sg_phone_tel = preg_replace( '/\D+/', '', $sg_phone );
$sg_cta_img   = SG_BLOGS_URI . '/assets/images/home-blue-cta-person.png';
$sg_cta_bg    = SG_BLOGS_URI . '/assets/images/hearing-care-cta.webp';
?>

<section class="single-cta d-none d-md-block" aria-labelledby="single-cta-heading">
	<div class="single-cta__card" style="--single-cta-person: url('<?php echo esc_url( $sg_cta_bg ); ?>')">
		<div class="single-cta__bg" aria-hidden="true"></div>
		<div class="single-cta__content">
			<div class="single-cta__copy">
				<h2 id="single-cta-heading"><?php esc_html_e( 'Ready to Improve Your Hearing?', 'sg-blogs' ); ?></h2>
				<p><?php esc_html_e( 'Book a consultation or visit your nearest branch today.', 'sg-blogs' ); ?></p>
			</div>
			<div class="single-cta__actions">
				<a href="<?php echo esc_url( $sg_book ); ?>" class="single-cta__btn"><?php esc_html_e( 'Book a Hearing Test', 'sg-blogs' ); ?></a>
				<a href="<?php echo esc_url( $sg_clinic ); ?>" class="single-cta__btn"><?php esc_html_e( 'Find a Clinic', 'sg-blogs' ); ?></a>
			</div>
			<a href="<?php echo esc_url( 'tel:' . $sg_phone_tel ); ?>" class="single-cta__phone">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
					<path d="M11.5 3.5c2.4.3 4.3 2.2 4.6 4.6M11.5 1c3.8.4 6.8 3.4 7.2 7.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
					<path d="M8.4 10.9c1.7 1.7 3.7 2.8 4.5 2.3l.9-.6c.4-.3 1-.2 1.3.2l1.2 1.6c.3.4.3 1.1-.2 1.4-1.1.8-3.3 1-5.9-.6-3-1.9-5-5.1-4.7-6.5.1-.5.5-.8 1-.7l1.8.4c.5.1.8.6.7 1.1l-.3 1.2c-.1.4.1.8.4 1z" fill="currentColor"/>
				</svg>
				<span><strong><?php esc_html_e( 'Call us :', 'sg-blogs' ); ?></strong> <?php echo esc_html( str_replace( ' ', '-', $sg_phone ) ); ?></span>
			</a>
		</div>
	</div>
</section>

<section class="single-cta-mobile d-md-none" aria-labelledby="single-cta-mobile-heading">
	<div class="single-cta-mobile__card">
		<div class="single-cta-mobile__media">
			<img
				src="<?php echo esc_url( $sg_cta_img ); ?>"
				alt="<?php esc_attr_e( 'Woman inviting you to improve your hearing', 'sg-blogs' ); ?>"
				width="348"
				height="290"
				loading="lazy"
			>
		</div>
		<div class="single-cta-mobile__body">
			<div class="single-cta-mobile__content">
				<h2 id="single-cta-mobile-heading"><?php esc_html_e( 'Ready to Improve Your Hearing?', 'sg-blogs' ); ?></h2>
				<p><?php esc_html_e( 'Book a consultation or visit your nearest branch today.', 'sg-blogs' ); ?></p>
				<div class="single-cta-mobile__actions">
					<a href="<?php echo esc_url( $sg_book ); ?>" class="single-cta-mobile__cta"><?php esc_html_e( 'Book a Hearing Test', 'sg-blogs' ); ?></a>
					<a href="<?php echo esc_url( $sg_clinic ); ?>" class="single-cta-mobile__cta"><?php esc_html_e( 'Find a Clinic', 'sg-blogs' ); ?></a>
					<a href="<?php echo esc_url( 'tel:' . $sg_phone_tel ); ?>" class="single-cta-mobile__phone">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
							<path d="M11.5 3.5c2.4.3 4.3 2.2 4.6 4.6M11.5 1c3.8.4 6.8 3.4 7.2 7.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
							<path d="M8.4 10.9c1.7 1.7 3.7 2.8 4.5 2.3l.9-.6c.4-.3 1-.2 1.3.2l1.2 1.6c.3.4.3 1.1-.2 1.4-1.1.8-3.3 1-5.9-.6-3-1.9-5-5.1-4.7-6.5.1-.5.5-.8 1-.7l1.8.4c.5.1.8.6.7 1.1l-.3 1.2c-.1.4.1.8.4 1z" fill="currentColor"/>
						</svg>
						<span><strong><?php esc_html_e( 'Call us :', 'sg-blogs' ); ?></strong> <?php echo esc_html( str_replace( ' ', '-', $sg_phone ) ); ?></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
