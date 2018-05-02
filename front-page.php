<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelasia
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
        <?php
		get_template_part( 'page', 'banner' );
		get_template_part( 'page', 'booking' );
		
		?>
		<section class="feature-area section-gap">
			<div class="container">
				<div class="row">
					<div class="features-carousel owl-carousel owl-theme">
						<?php 
						global $post;
						$args = array('post_type' => 'Features', 'suppress_filters' => true );
						$lastposts = get_posts( $args ); 
						foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
						<div class="sigle-feature col-lg-3 col-md-6 feature-owl">
							<?php echo get_post_meta( get_the_ID(), 'icon', true); ?>
							<h4><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>
							<a href="<?php echo get_post_type_archive_link('features'); ?>" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
						</div>
						<?php 
					endforeach; 
					wp_reset_postdata();
					?> 
				</div>
			</div>
		</div>
	    </section>
	    <section class="packages-area" id="package">
	    	<div class="container-fluid">
	    		<div class="row d-flex justify-content-center">
	    			<div class="col-md-6 pb-80 header-text">
	    				<h1>Popular Packages</h1>
	    				<p>Take a look at the popular packages</p>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<?php 
	    			global $post;
	    			$args = array( 'numberposts' => 6 ,'post_type' => 'Packages', 'suppress_filters' => true );
	    			$lastposts = get_posts( $args ); 
	    			foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
	    			    <div class="col-lg-2 col-sm-6 single-packages no-padding">
	    				    <div class="content">
	    					    <a href="<?php echo get_post_type_archive_link('packages'); ?>"> 
	    						    <div class="content-overlay"></div>
	                                <?php travelasia_post_thumbnail( 'medium', array(
	                                	'class' => 'content-image img-fluid d-block mx-auto' )); ?>
                                    <div class="content-details fadeIn-bottom">
	    							    <h3 class="content-title"><?php the_title(); ?></h3>
	    						    </div>
	    					    </a>
	    				    </div>
	    			    </div>
	    			<?php 
	    		    endforeach; 
	    		wp_reset_postdata();
	    		?> 
	    	    </div>
	        </div>
	        <div class="container-fluid" style="background-color:Black"><br><br><br><br></div>
	    </section>
	    <?php  
	    //get_template_part( 'page', 'packages' );
	    get_template_part( 'page', 'blog' );
	    get_template_part( 'page', 'make-pack' );
	    get_template_part( 'page', 'contact' );


	?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
