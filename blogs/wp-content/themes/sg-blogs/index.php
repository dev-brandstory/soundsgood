<?php
/**
 * Main blog index.
 *
 * @package SG_Blogs
 */

get_header();
?>

<section class="sg-blog">
	<div class="sg-blog__main">
		<div class="container">
			<header class="sg-blog__header">
				<h1 class="sg-blog__title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
				<?php if ( get_bloginfo( 'description' ) ) : ?>
					<p class="sg-blog__intro"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
				<?php endif; ?>
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

						<nav class="sg-pagination" aria-label="<?php esc_attr_e( 'Posts', 'sg-blogs' ); ?>">
							<?php
							the_posts_pagination(
								array(
									'mid_size'  => 2,
									'prev_text' => __( 'Prev', 'sg-blogs' ),
									'next_text' => __( 'Next', 'sg-blogs' ),
								)
							);
							?>
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
