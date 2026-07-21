<?php
/**
 * Search results.
 *
 * @package SG_Blogs
 */

get_header();
?>

<section class="sg-blog">
	<div class="sg-blog__main">
		<div class="container">
			<header class="sg-blog__header">
				<h1 class="sg-blog__title">
					<?php
					printf(
						/* translators: %s: search query */
						esc_html__( 'Search results for: %s', 'sg-blogs' ),
						'<span>' . esc_html( get_search_query() ) . '</span>'
					);
					?>
				</h1>
			</header>

			<div class="sg-blog__layout sg-blog__layout--full">
				<div class="sg-blog__content">
					<?php if ( have_posts() ) : ?>
						<ul class="sg-post-grid">
							<?php
							while ( have_posts() ) :
								the_post();
								echo '<li>';
								get_template_part( 'template-parts/content', 'search' );
								echo '</li>';
							endwhile;
							?>
						</ul>

						<nav class="sg-pagination" aria-label="<?php esc_attr_e( 'Search results', 'sg-blogs' ); ?>">
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
