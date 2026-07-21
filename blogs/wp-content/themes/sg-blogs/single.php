<?php
/**
 * Single post.
 *
 * @package SG_Blogs
 */

get_header();
?>

<section class="single-post">
	<div class="container single-post__inner">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single' );
			get_template_part( 'template-parts/single', 'cta' );
			get_template_part( 'template-parts/single', 'latest' );
		endwhile;
		?>
	</div>
</section>

<?php get_template_part( 'template-parts/blog', 'faq' ); ?>

<?php
get_footer();
