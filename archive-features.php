<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelasia
 */

get_header();?>
<section class="feature-area section-gap">
	<div class="container">
		<div class="row">
			<?php
				global $post;
				$args = array('post_type' => 'Features', 'suppress_filters' => true );
				    $lastposts = get_posts( $args );
				        foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
				            <div class="sigle-feature col-lg-3 col-md-6 feature-owl">
					        <?php echo get_post_meta( get_the_ID(), 'icon', true); ?>
					        <h4><?php the_title(); ?></h4>
					        <?php the_content(); ?>
				            </div>
			            <?php endforeach; 
			wp_reset_postdata(); ?>
		</div>
</div>
</section>

<?php
get_footer();
