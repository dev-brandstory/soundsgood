<?php
/**
 * Default post card.
 *
 * @package SG_Blogs
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'sg-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="sg-card__media" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
			<?php the_post_thumbnail( 'sg-card' ); ?>
		</a>
	<?php endif; ?>

	<div class="sg-card__body">
		<div class="sg-card__meta">
			<?php sg_blogs_posted_on(); ?>
			<?php sg_blogs_posted_by(); ?>
		</div>

		<h2 class="sg-card__title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

		<div class="sg-card__excerpt">
			<?php the_excerpt(); ?>
		</div>

		<a class="sg-card__more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'sg-blogs' ); ?></a>
	</div>
</article>
