<?php
/**
 * Blog listing card (Figma card).
 *
 * @package SG_Blogs
 */

$reading_mins = function_exists( 'sg_blogs_reading_time' ) ? sg_blogs_reading_time() : 5;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
	<a class="blog-card__media" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'sg-card', array( 'class' => 'blog-card__img' ) ); ?>
		<?php else : ?>
			<span class="blog-card__media-placeholder" aria-hidden="true"></span>
		<?php endif; ?>
	</a>

	<div class="blog-card__body">
		<div class="blog-card__text">
			<h2 class="blog-card__title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<p class="blog-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '…' ) ); ?></p>
		</div>

		<hr class="blog-card__rule" aria-hidden="true">

		<div class="blog-card__footer">
			<span class="blog-card__readtime">
				<?php
				printf(
					/* translators: %d: minutes */
					esc_html__( '%d Min Read', 'sg-blogs' ),
					(int) $reading_mins
				);
				?>
			</span>
			<a class="blog-card__cta" href="<?php the_permalink(); ?>">
				<span><?php esc_html_e( 'Read Our Blog', 'sg-blogs' ); ?></span>
				<span class="blog-card__cta-icon" aria-hidden="true">
					<svg width="12" height="9" viewBox="0 0 12 9" fill="none"><path d="M1 4.5h9M7 1l4 3.5L7 8" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
			</a>
		</div>
	</div>
</article>
