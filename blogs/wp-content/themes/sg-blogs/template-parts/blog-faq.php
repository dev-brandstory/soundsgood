<?php
/**
 * Blog FAQ accordion (shared: listing + single).
 *
 * @package SG_Blogs
 */

$blog_faqs = array(
	array(
		'q' => __( 'What are the different types and styles of hearing aids?', 'sg-blogs' ),
		'a' => __( 'Today’s hearing aids are smaller and designed to be discreet. Many are nearly undetectable even close up. One model actually sits completely in the canal of your ear and is practically invisible when worn. Alternately, fashionable, meant-to-be seen hearing aids in fun color combinations and exotic flowery flourishes are available.', 'sg-blogs' ),
	),
	array(
		'q' => __( 'What are the most common hearing loss causes?', 'sg-blogs' ),
		'a' => __( 'Hearing loss can result from aging, long-term noise exposure, ear infections, wax buildup, certain medications, and underlying health conditions. An audiologist can identify the exact cause with a professional hearing evaluation.', 'sg-blogs' ),
	),
	array(
		'q' => __( 'Wouldn’t I already know if I had hearing loss?', 'sg-blogs' ),
		'a' => __( 'Not always. Hearing loss often develops gradually, so many people adapt without noticing. Common signs include asking others to repeat themselves, turning up the TV, or struggling in noisy environments.', 'sg-blogs' ),
	),
	array(
		'q' => __( 'Doesn\'t hearing loss only affect old people?', 'sg-blogs' ),
		'a' => __( 'No. While hearing loss is more common with age, it can affect people of all ages due to noise exposure, genetics, infections, or injury. Early care helps protect hearing at every stage of life.', 'sg-blogs' ),
	),
	array(
		'q' => __( 'How do I know hearing aids will work for me?', 'sg-blogs' ),
		'a' => __( 'A hearing assessment helps match you with the right device for your lifestyle and level of hearing loss. With proper fitting and follow-up care, most people experience clear improvement in everyday conversations and confidence.', 'sg-blogs' ),
	),
);
?>
<section class="blog-faq" aria-labelledby="blog-faq-heading">
	<div class="blog-faq__inner">
		<h2 id="blog-faq-heading" class="blog-faq__title"><?php esc_html_e( 'FAQ - Hearing Loss', 'sg-blogs' ); ?></h2>

		<div class="blog-faq__list" id="blogFaq">
			<?php
			foreach ( $blog_faqs as $i => $faq ) :
				$is_open  = 0 === $i;
				$panel_id = 'blog-faq-panel-' . ( $i + 1 );
				$btn_id   = 'blog-faq-btn-' . ( $i + 1 );
				?>
			<div class="blog-faq__item<?php echo $is_open ? ' is-open' : ''; ?>">
				<button
					type="button"
					class="blog-faq__trigger"
					id="<?php echo esc_attr( $btn_id ); ?>"
					aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
					aria-controls="<?php echo esc_attr( $panel_id ); ?>"
				>
					<span class="blog-faq__question"><?php echo esc_html( $faq['q'] ); ?></span>
					<span class="blog-faq__icon" aria-hidden="true">
						<svg class="blog-faq__icon-plus" width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path d="M8 3.2v9.6M3.2 8h9.6" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round"/>
						</svg>
						<svg class="blog-faq__icon-minus" width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path d="M3.2 8h9.6" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round"/>
						</svg>
					</span>
				</button>
				<div
					class="blog-faq__panel"
					id="<?php echo esc_attr( $panel_id ); ?>"
					role="region"
					aria-labelledby="<?php echo esc_attr( $btn_id ); ?>"
					<?php echo $is_open ? '' : 'hidden'; ?>
				>
					<p><?php echo esc_html( $faq['a'] ); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
