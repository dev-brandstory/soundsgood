<?php
/**
 * 404 template.
 *
 * @package SG_Blogs
 */

get_header();
?>

<section class="sg-blog">
	<div class="sg-blog__main">
		<div class="container">
			<div class="sg-empty">
				<h1 class="sg-empty__title"><?php esc_html_e( '404', 'sg-blogs' ); ?></h1>
				<p class="sg-empty__text"><?php esc_html_e( 'Sorry, that page could not be found.', 'sg-blogs' ); ?></p>
				<a class="btn btn-primary btn-pill" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to blog', 'sg-blogs' ); ?></a>
				<div style="max-width:420px;margin:32px auto 0;">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
