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
		<h2>Features</h2>
		<br>
		<?php
		global $post;
		$args = array('post_type' => 'Features', 'suppress_filters' => true );
		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
		    <h3><?php echo get_post_meta( get_the_ID(), 'icon', true); ?></h3>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
			<hr>
		<?php endforeach; 
		wp_reset_postdata(); ?>
	</div>
</section>

<?php
get_footer();
