<?php
/**
 * Archive template.
 *
 * @package SG_Blogs
 */

get_header();
?>

<section class="sg-blog">
	<div class="sg-blog__main">
		<div class="container">
			<header class="sg-blog__header">
				<?php the_archive_title( '<h1 class="sg-archive__title">', '</h1>' ); ?>
				<?php the_archive_description( '<div class="sg-archive__desc">', '</div>' ); ?>
			</header>

			<div class="sg-blog__layout sg-blog__layout--full">
				<div class="sg-blog__content">
					<?php if ( have_posts() ) : ?>
						<ul class="sg-post-grid">
							<?php
							while ( have_posts() ) :
								the_post();
								echo '<li>';
								get_template_part( 'template-parts/content', get_post_type() );
								echo '</li>';
							endwhile;
							?>
						</ul>

						<nav class="sg-pagination" aria-label="<?php esc_attr_e( 'Archive', 'sg-blogs' ); ?>">
							<?php the_posts_pagination(); ?>
						</nav>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>

				<?php /* Restore sidebar later: uncomment get_sidebar() and remove sg-blog__layout--full from the layout div above. */ ?>
				<?php // get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
