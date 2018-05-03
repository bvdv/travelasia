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

		<!-- start banner Area -->
		<section class="banner-area relative" id="home" style="background:url(<?php echo get_header_image();?>)">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-start" style="height: 915px;">
					    <?php 
						global $post;
						$args = array( 'numberposts' => 1 ,'post_type' => 'banner', 'suppress_filters' => true );
						$lastposts = get_posts( $args ); 
						    foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
                                <div class="banner-content col-lg-9 col-md-12">	
						            <h1><?php the_title(); ?></h1>
						            <?php the_content(); ?>
						            <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="primary-btn">See Details<span class="lnr lnr-arrow-right"></span></a>
				                </div>   
                        <?php 
					        endforeach; 
					wp_reset_postdata(); ?>
			    </div> 
		    </div> 
	    </section>
        <!-- End banner Area -->
        
        <!-- Start booking Area -->
        <?php
		
		get_template_part( 'page', 'booking' );
		
		?>
		<!-- End booking Area -->

		<!-- Start feature Area -->
		<section class="feature-area section-gap">
			<div class="container">
				<div class="row">
					<div class="features-carousel owl-carousel owl-theme">
						<?php 
						global $post;
						$args = array('post_type' => 'Features', 'suppress_filters' => true );
						$lastposts = get_posts( $args ); 
						foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
						<div class="sigle-feature col-lg-3 col-md-6 customized-owl">
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
        <!-- End feature Area --> 

        <!-- Start packages Area --> 
	    <section class="packages-area" id="package" style="padding-bottom: 0px">
	    	<div class="container-fluid">
	    		<div class="row d-flex justify-content-center">
	    			<div class="col-md-6 pb-80 header-text">
	    				<h1>Popular Packages</h1>
	    				<p>Take a look at the popular packages</p>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="packages-carousel owl-carousel owl-theme">
	    			<?php 
	    			global $post;
	    			$args = array( 'numberposts' => 6 ,'post_type' => 'Packages', 'suppress_filters' => true );
	    			$lastposts = get_posts( $args ); 
	    			foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
	    			    <div class="col-lg-2 col-sm-6 single-packages no-padding customized-owl">
	    				    <div class="content">
	    					    <a href="<?php echo get_post_type_archive_link('packages'); ?>"> 
	    						    <div class="content-overlay"></div>
	                                <?php the_post_thumbnail( 'medium', array(
	                                	'class' => 'content-image img-fluid d-block mx-auto' )); ?>
                                    <div class="content-details fadeIn-bottom">
	    							    <h4 class="content-title"><?php the_title(); ?></h4>
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
	        </div>
	    </section>
        <!-- End packages Area -->

        <!-- Start blog Area -->
        <section class="blog-area" id="blog">
        	<div class="container">
        		<div class="row justify-content-center">
        			<div class="col-md-8 pb-30 header-text">
        				<br><br>
        				<h1>Our Recent Blogs</h1>
        			</div>
        		</div>
        		<div class="row">
        			<?php 
        			global $post;
        			$args = array( 'numberposts' => 3 ,'post_type' => 'Blog', 'suppress_filters' => true );
        			$lastposts = get_posts( $args ); 
        				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
        				    <div class="single-blog col-lg-4 col-md-4">
        					    <a href="<?php echo get_post_type_archive_link('blog'); ?>">
        						    <?php the_post_thumbnail( 'medium', array(
        							'class' => 'f-img img-fluid mx-auto' )); ?>
        						</a>
        						<h4>
        							<a href="<?php echo get_post_type_archive_link('blog'); ?>"><?php the_title(); ?></a>
        						</h4>
        						<p>
        							<?php  the_excerpt(); ?>
        						</p>
        						<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
        							<div>
        								<a href="#"><span><?php echo get_the_author(); ?></span></a>
        							</div>
        							<div class="meta">
        								<?php echo get_the_date(); ?>
        								<span class="lnr lnr-bubble"></span> <?php comments_number( 'No Comments', '01', '%' ); ?>
        							</div>
        						</div>
        					</div>
        					<?php 
        				endforeach; 
        			wp_reset_postdata();?> 
        		</div>	
        	</div>	
        </section>	
        <!-- End blog Area -->

	    <?php  
	    
	    
	    get_template_part( 'page', 'make-pack' );
	    get_template_part( 'page', 'contact' );


	?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
