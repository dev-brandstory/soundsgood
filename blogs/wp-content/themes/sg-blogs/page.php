<?php
/**
 * Page template.
 *
 * @package SG_Blogs
 */

get_header();
?>

<section class="sg-blog">
	<div class="sg-blog__main">
		<div class="container">
			<div class="sg-blog__layout sg-blog__layout--full">
				<div class="sg-blog__content">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );

						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					endwhile;
					?>
				</div>

				<?php /* Restore sidebar later: uncomment get_sidebar() and remove sg-blog__layout--full from the layout div above. */ ?>
				<?php // get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
