<?php
/*
Template Name: Galllery Template
*/
?>

<?php get_header(); ?>

<div id="content-wrapper">
	<section id="gallery-slideshow">
		<div class="slideshow-full slideshow-gallery">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div id="gallery-carousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#gallery-carousel" data-slide-to="0" class="active"></li>
						    <li data-target="#gallery-carousel" data-slide-to="1"></li>
						    <li data-target="#gallery-carousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
						    <div class="item active">
						      <img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow/slide1.png" alt="">
						    </div>
						    <div class="item">
						      <img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow/Slide2.png" alt="">
						    </div>
						    <div class="item">
						      <img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow/Slide3.png" alt="">
						    </div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#gallery-carousel" data-slide="prev">
						    <span class="fa fa-angle-left"></span>
						  </a>
						  <a class="right carousel-control" href="#gallery-carousel" data-slide="next">
						    <span class="fa fa-angle-right"></span>
						  </a>
						</div>
					</div><!-- end .row-->
				</div>
			</div> <!-- end .container-->
		</div>
	</section>

	<section id="gallery-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						
						<div class="col-md-6">
							<blockquote>
								<?php do_action( 'woothemes_testimonials', array( 'limit' => 1 ) ); ?>
							</blockquote>
						</div>
						
						<div class="col-md-6">
							<div class="gallery-content-text">
								<h2 class="section-title">Let's do a photoshoot</h2>
								<?php the_content(); ?>
								<a href="#" class="btn btn-default">Enquire Now</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section><!--/#section-->

	<section id="stationery">
		<div class="container text-center">
			<h2 class="section-title">Custom Designed Stationery</h2>
				<div class="col-md-6 col-md-offset-3">
					<p>Client wants removed.</p>
					<!-- <a href="#" class="btn btn-default">View More</a> -->
				</div>
			</div>
		</div>
	</section>

	<section id="latest-work">
		<div class="container">
			<h2 class="text-center section-title">Latest <?php echo $post_name ?></h2>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Helen &amp; David</span>
									<p class="more-link">23 September</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/featured-image.jpg"/>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Helen &amp; David</span>
									<p class="more-link">23 September</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/featured-image.jpg"/>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Helen &amp; David</span>
									<p class="more-link">23 September</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/featured-image.jpg"/>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>