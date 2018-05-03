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

	    <!-- Start about Area -->
	    <section class="about-area">
	    	<div class="container-fluid">
	    		<div class="row d-flex justify-content-end align-items-center">
	    			<?php 
	    			global $post;
	    			$args = array( 'numberposts' => 1 ,'post_type' => 'make-pack', 'suppress_filters' => true );
	    			$lastposts = get_posts( $args ); 
	    			foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
	    			<div class="col-lg-6 col-md-12 about-left">	
	    				<?php the_content(); 
	    				the_excerpt();
	    				?>
	    				<button class="btn btn-black" data-toggle="modal" data-target="#packModal">Make Package of your own</button>
	    				<!-- The Modal -->
	    				<div class="modal fade" id="packModal">
	    					<div class="modal-dialog modal-dialog-centered">
	    						<div class="modal-content">
	    							<!-- Modal Header -->
	    							<div class="modal-header">
	    								<h4 class="modal-title">Ask for custom package</h4>
	    								<button type="button" class="close" data-dismiss="modal">&times;</button>
	    							</div>
	    							<!-- Modal body -->
	    							<div class="modal-body">
	    								<!-- Default form contact -->
	    								<form>
	    									<!-- <p class="h4 text-center mb-4">Write to us</p> -->
	    									<!-- Default input name -->
	    									<label for="defaultFormContactNameEx" class="grey-text">Your name</label>
	    									<input type="text" id="defaultFormContactNameEx" class="form-control">
                                            <br>
	    									<!-- Default input email -->
	    									<label for="defaultFormContactEmailEx" class="grey-text">Your email</label>
	    									<input type="email" id="defaultFormContactEmailEx" class="form-control">
                                            <br>
                                            <!-- Default input subject -->
	    									<label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
	    									<input type="text" id="defaultFormContactSubjectEx" class="form-control">
	    									<br>
	    									<!-- Default textarea message -->
	    									<label for="defaultFormContactMessageEx" class="grey-text">Your message</label>
	    									<textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>
	    									<div class="text-center mt-4">
	    										<button class="btn btn-outline-warning" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
	    									</div>
	    								</form>
	    								<!-- Default form contact -->
	    							</div>
                                    <!-- Modal footer -->
	    							<div class="modal-footer">
	    								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	    							</div>
                                </div>
		    					</div>
		    				</div>
		    			</div>   
		    			<?php 
		    		endforeach; 
		    		wp_reset_postdata(); ?>
		    		<div class="col-lg-6 col-md-12 about-right no-padding">
		    			<?php the_post_thumbnail( 'full', array('class' => 'img-fluid' )); ?>
		    		</div>
		    	</div> 
		    </div>
		</section>     
        <!-- End about Area -->

        <!-- Start Contact Area -->
        <section class="contact-area" id="contact" style="padding-top: 120px;">
        	<div class="container">
        		<div class="contact-info-area">
        			<div class="row">
				        <?php 
				        global $post;
				        $args = array('numberposts' => 4 ,'post_type' => 'Contacts', 'suppress_filters' => true );
				        $lastposts = get_posts( $args ); 
				            foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
				                <div class="single-info col-lg-3 col-md-6">
				        	        <h4><?php the_title(); ?></h4>
				        	        <?php the_content(); ?>
				        	    </div>
				        <?php 
				            endforeach; 
				        wp_reset_postdata();
				        ?>
                    </div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row align-items-center d-flex justify-content-start">
					<div class="col-lg-6 col-md-12 contact-left no-padding">
						<!-- WP Google Map plugin by SRMILON, 
		                Recommendation: width:100%, height: 545px 
						<?php echo do_shortcode( '[gmap-embed id="170"]' ); ?>--> 
					</div>
					<div class="col-lg-4 col-md-12 pt-100 pb-100">
						<form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
							<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
							<textarea class="common-textarea mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
							<div class="alert-msg">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
        <!-- End Contact Area -->


</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
