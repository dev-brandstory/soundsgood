<?php
/**
 * Page content.
 *
 * @package SG_Blogs
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'sg-article' ); ?>>
	<header class="sg-article__header">
		<?php the_title( '<h1 class="sg-article__title">', '</h1>' ); ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="sg-article__thumb">
			<?php the_post_thumbnail( 'large' ); ?>
		</figure>
	<?php endif; ?>

	<div class="sg-article__content entry-content">
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
