<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelasia
 */

get_header();?>
<section class="feature-area">
	<div class="container">
		<br>
		<h2>Blog</h2>
		<?php
		global $post;
		$args = array('post_type' => 'Blog', 'suppress_filters' => true );
		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
		    <hr>
		    <?php travelasia_post_thumbnail(); ?>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
			<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
				<div>
					<a href="#"><span><?php echo get_the_author(); ?></span></a>
				</div>
				<div class="meta">
					<?php echo get_the_date(); ?>
					<span class="lnr lnr-bubble"></span> <?php comments_number( 'No Comments', '01', '%' ); ?>
				</div>
			</div>
		<?php endforeach; 
		wp_reset_postdata(); ?>
	</div>
</section>

<?php
get_footer();
