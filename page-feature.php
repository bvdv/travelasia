<?php
if (is_page( $page = 'Feature' )) {
	get_header();
}
?>
<section class="feature-area section-gap">
	<div class="container">
		<div class="row">
			<div class="sigle-feature col-lg-3 col-md-6">
				<span class="lnr lnr-rocket"></span>
				<h4>Easy Flight Search</h4>
				<p>
					inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
				</p>
				<a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
			</div>
			<div class="sigle-feature col-lg-3 col-md-6">
				<span class="lnr lnr-magic-wand"></span>
				<h4>Get Hotel Offers</h4>
				<p>
					inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
				</p>
				<a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
			</div>
			<div class="sigle-feature col-lg-3 col-md-6">
				<span class="lnr lnr-gift"></span>
				<h4>Holiday Packages</h4>
				<p>
					inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
				</p>
				<a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
			</div>
			<div class="sigle-feature col-lg-3 col-md-6">
				<span class="lnr lnr-phone"></span>
				<h4>Dedicated Support</h4>
				<p>
					inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
				</p>
				<a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
			</div>
        </div>
	</div>
</section>

<?php
category_feature_posts();      
if (is_page( $page = 'Feature' )) {
	get_footer();
}

?>


