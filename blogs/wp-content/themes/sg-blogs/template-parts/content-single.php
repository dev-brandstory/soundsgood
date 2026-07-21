<?php
/**
 * Single post content (Figma Frame 2147240422).
 *
 * @package SG_Blogs
 */

$subtitle = get_post_meta( get_the_ID(), 'sg_subtitle', true );
if ( ! $subtitle && has_excerpt() ) {
	$subtitle = get_the_excerpt();
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-article' ); ?>>
	<header class="single-article__header">
		<?php the_title( '<h1 class="single-article__title">', '</h1>' ); ?>
		<?php if ( $subtitle ) : ?>
			<p class="single-article__subtitle"><?php echo esc_html( wp_strip_all_tags( $subtitle ) ); ?></p>
		<?php endif; ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="single-article__thumb">
			<?php
			the_post_thumbnail(
				'large',
				array(
					'class'   => 'single-article__img',
					'loading' => 'eager',
				)
			);
			?>
		</figure>
	<?php endif; ?>

	<div class="single-article__content entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sg-blogs' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>
