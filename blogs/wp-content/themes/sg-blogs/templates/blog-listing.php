<?php
/**
 * Blog listing — page content.
 *
 * @package SG_Blogs
 */

$sg_book      = sg_blogs_book_url();
$sg_phone     = get_theme_mod( 'sg_phone', '1800 270 1996' );
$sg_phone_tel = preg_replace( '/\D+/', '', $sg_phone );
$sg_cta_img   = SG_BLOGS_URI . '/assets/images/home-blue-cta-person.png';
$sg_cta_bg    = SG_BLOGS_URI . '/assets/images/hearing-care-cta.webp';

$posts_per_page = 6;
$paged          = 1;

$blog_query = new WP_Query(
	array(
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => $posts_per_page,
		'paged'               => $paged,
		'ignore_sticky_posts' => true,
	)
);

$max_pages = (int) $blog_query->max_num_pages;
?>

<!-- ===== Blog Listing Hero ===== -->
<section class="blog-listing-hero" aria-labelledby="blog-listing-heading">
	<div class="blog-listing-hero__inner">
		<p class="blog-listing-hero__eyebrow"><?php esc_html_e( 'Explore Our Blogs', 'sg-blogs' ); ?></p>
		<h1 id="blog-listing-heading" class="blog-listing-hero__title"><?php esc_html_e( 'Insights for Better Hearing', 'sg-blogs' ); ?></h1>
		<p class="blog-listing-hero__desc"><?php esc_html_e( 'Explore expert advice, practical tips, and the latest updates to help you understand, protect, and improve your hearing health.', 'sg-blogs' ); ?></p>
	</div>
</section>

<!-- ===== Blog Posts Grid ===== -->
<section class="blog-listing-posts" aria-label="<?php esc_attr_e( 'Blog posts', 'sg-blogs' ); ?>">
	<div class="container">
		<?php if ( $blog_query->have_posts() ) : ?>
			<div class="blog-listing-grid" id="blogListingGrid" data-page="1" data-max="<?php echo esc_attr( (string) $max_pages ); ?>">
				<?php
				while ( $blog_query->have_posts() ) :
					$blog_query->the_post();
					get_template_part( 'template-parts/content', 'blog-card' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>

			<?php if ( $max_pages > 1 ) : ?>
				<div class="blog-listing-more">
					<button type="button" class="blog-listing-more__btn" id="blogLoadMore" data-page="1" data-max="<?php echo esc_attr( (string) $max_pages ); ?>">
						<?php esc_html_e( 'Load More', 'sg-blogs' ); ?>
					</button>
				</div>
			<?php endif; ?>
		<?php else : ?>
			<div class="blog-listing-empty">
				<p><?php esc_html_e( 'No blog posts published yet. Check back soon.', 'sg-blogs' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- ===== Blog CTA (desktop) ===== -->
<section class="blog-cta-section d-none d-md-block" aria-labelledby="blog-cta-heading">
	<div class="blog-cta-card" style="--blog-cta-person: url('<?php echo esc_url( $sg_cta_bg ); ?>')">
		<div class="blog-cta-card__bg" aria-hidden="true"></div>
		<div class="container blog-cta-card__inner">
			<div class="blog-cta-card__content">
				<div class="blog-cta-card__copy">
					<h2 id="blog-cta-heading"><?php esc_html_e( 'Take the Next Step Toward Better Hearing', 'sg-blogs' ); ?></h2>
					<p><?php esc_html_e( 'If you’re experiencing hearing concerns, our experts are here to help with the right guidance and care.', 'sg-blogs' ); ?></p>
				</div>
				<div class="blog-cta-card__actions">
					<a href="<?php echo esc_url( $sg_book ); ?>" class="blog-cta-card__btn"><?php esc_html_e( 'Book Clinic Visit', 'sg-blogs' ); ?></a>
					<a href="<?php echo esc_url( $sg_book ); ?>" class="blog-cta-card__btn"><?php esc_html_e( 'Book Home Visit', 'sg-blogs' ); ?></a>
				</div>
				<a href="<?php echo esc_url( 'tel:' . $sg_phone_tel ); ?>" class="blog-cta-card__phone">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
						<path d="M11.5 3.5c2.4.3 4.3 2.2 4.6 4.6M11.5 1c3.8.4 6.8 3.4 7.2 7.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
						<path d="M8.4 10.9c1.7 1.7 3.7 2.8 4.5 2.3l.9-.6c.4-.3 1-.2 1.3.2l1.2 1.6c.3.4.3 1.1-.2 1.4-1.1.8-3.3 1-5.9-.6-3-1.9-5-5.1-4.7-6.5.1-.5.5-.8 1-.7l1.8.4c.5.1.8.6.7 1.1l-.3 1.2c-.1.4.1.8.4 1z" fill="currentColor"/>
					</svg>
					<span><strong><?php esc_html_e( 'Call us :', 'sg-blogs' ); ?></strong> <?php echo esc_html( str_replace( ' ', '-', $sg_phone ) ); ?></span>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- ===== Blog CTA (mobile) ===== -->
<section class="blog-cta-mobile d-md-none" aria-labelledby="blog-cta-mobile-heading">
	<div class="blog-cta-mobile__card">
		<div class="blog-cta-mobile__media">
			<img
				src="<?php echo esc_url( $sg_cta_img ); ?>"
				alt="<?php esc_attr_e( 'Woman inviting you to take the next step toward better hearing', 'sg-blogs' ); ?>"
				width="402"
				height="241"
				loading="lazy"
			>
		</div>
		<div class="blog-cta-mobile__body">
			<div class="blog-cta-mobile__content">
				<h2 id="blog-cta-mobile-heading"><?php esc_html_e( 'Take the Next Step Toward Better Hearing', 'sg-blogs' ); ?></h2>
				<p><?php esc_html_e( 'If you’re experiencing hearing concerns, our experts are here to help with the right guidance and care.', 'sg-blogs' ); ?></p>
				<div class="blog-cta-mobile__actions">
					<a href="<?php echo esc_url( $sg_book ); ?>" class="blog-cta-mobile__cta"><?php esc_html_e( 'Book Clinic Visit', 'sg-blogs' ); ?></a>
					<a href="<?php echo esc_url( $sg_book ); ?>" class="blog-cta-mobile__cta"><?php esc_html_e( 'Book Home Visit', 'sg-blogs' ); ?></a>
					<a href="<?php echo esc_url( 'tel:' . $sg_phone_tel ); ?>" class="blog-cta-mobile__phone">
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

<!-- ===== Blog FAQ ===== -->
<?php get_template_part( 'template-parts/blog', 'faq' ); ?>
