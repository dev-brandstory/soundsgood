<?php
/**
 * Latest blogs on single post.
 *
 * @package SG_Blogs
 */

$current_id = get_the_ID();
$listing    = sg_blogs_listing_url();

$latest = new WP_Query(
	array(
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => 3,
		'post__not_in'        => array( $current_id ),
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	)
);

if ( ! $latest->have_posts() ) {
	return;
}
?>

<section class="single-latest" aria-labelledby="single-latest-heading">
	<div class="single-latest__head">
		<div class="single-latest__title-row">
			<h2 id="single-latest-heading" class="single-latest__title"><?php esc_html_e( 'Latest Blogs', 'sg-blogs' ); ?></h2>
			<a class="single-latest__view-all" href="<?php echo esc_url( $listing ); ?>"><?php esc_html_e( 'View All', 'sg-blogs' ); ?></a>
		</div>
		<hr class="single-latest__rule" aria-hidden="true">
	</div>

	<div class="single-latest__grid">
		<?php
		while ( $latest->have_posts() ) :
			$latest->the_post();
			get_template_part( 'template-parts/content', 'blog-card' );
		endwhile;
		wp_reset_postdata();
		?>
	</div>
</section>
