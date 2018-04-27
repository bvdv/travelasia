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
		//get_template_part( 'page', 'feature' );
		?>
		<section class="feature-area section-gap">
		    <div class="container">
		        <div class="row">
		        	<div class="features-carousel owl-carousel owl-theme">
		            <?php category_feature_posts(); ?>
		            </div>
		        </div>
		    </div>
		</section>
		<?php  
        get_template_part( 'page', 'packages' );
        get_template_part( 'page', 'blog' );
        get_template_part( 'page', 'make-pack' );
        get_template_part( 'page', 'contact' );

		
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
