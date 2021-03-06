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
		<h2>Packages</h2>
		<?php
		global $post;
		$args = array('post_type' => 'Packages', 'suppress_filters' => true );
		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
		    <hr>
		    <?php travelasia_post_thumbnail(); ?>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		<?php endforeach; 
		wp_reset_postdata(); ?>
	</div>
</section>

<?php
get_footer();
