<?php
/*
Template Name: About Us Template
*/
?>

<?php get_header(); ?>
<div id="content-wrapper">
	<section id="about-us">
		<div class="slideshow-full slideshow-gallery">
			<div class="row">
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
						
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<div class="row">
										<div class="carousel-caption">
											<h2 class="slideshow-heading">About Us</h2>
											<?php the_content(); ?>
												<a href="/about-us" target="_blank" class="btn btn-dark">About Us</a><a href="/why-us" target="_blank" class="btn btn-dark">Why Us</a>
										</div>
									</div>
								</div><!-- end .row-->
							</div>
						</div> <!-- end .container-->
						
				    </div>
				    <div class="item">
				    	<img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow/slide1.png" alt="">
						
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<div class="row">
										<div class="carousel-caption">
											<h2 class="slideshow-heading">About Us</h2>
											<p>Insert 2nd paragraph here.</p>
												<a href="/about-us" target="_blank" class="btn btn-dark">About Us</a><a href="/why-us" target="_blank" class="btn btn-dark">Why Us</a>
											</p>
										</div>
									</div>
								</div><!-- end .row-->
							</div>
						</div> <!-- end .container-->
				    </div>
				    <div class="item">
				    	<img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow/slide1.png" alt="">
						
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<div class="row">
										<div class="carousel-caption">
											<h2 class="slideshow-heading">About Us</h2>
											<p>Insert 3rd paragraph here.</p>
												<a href="/about-us" target="_blank" class="btn btn-dark">About Us</a><a href="/why-us" target="_blank" class="btn btn-dark">Why Us</a>
											</p>
										</div>
									</div>
								</div><!-- end .row-->
							</div>
						</div> <!-- end .container-->
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
			</div>
		</div>
	</section>

	<section id="our-work">
		<div class="container">
			<h2 class="text-center section-title">Our Work</h2>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Wedding</span>
									<p class="more-link">View More</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/featured-image.jpg"/>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Lifestyle</span>
									<p class="more-link">View More</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/featured-image.jpg"/>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Commercial</span>
									<p class="more-link">View More</p>
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

	<section id="book-us"
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section-title">Book us</h2>
							<p>LET’S MAKE MAGIC TOGETHER</p>
							<p>WE LOVE BUILDING LASTING RELATIONSHIPS WITH THE WONDERFUL PEOPLE WE WORK WITH.</p>
							<p>TO BECOME PART OF OUR FAMILY, SIMPLY FILL OUT THE FORM BELOW &amp; WE’LL GIVE YOU A SHOUT AS SOON AS WE CAN!</p>
						</div>
					
						<div class="col-md-8">
							<div class="contact-form">
								<?php gravity_form(1, false, false, false, '', true, 12); ?>
							</div>
						</div>
				</div>
				
			</div>
		</div>
	</section><!--/#section-->

	<section id="our-newsletter">
		<div class="container text-center">
			<h2 class="section-title">Get our Newsletter</h2>
				<div class="col-md-6 col-md-offset-3">
					<p>BE INSPIRED, BE ENTERTAINED, SEE PASSION IN ACTION, SIGN UP!</p>
					<div class="newsletter-form">
						<form class="form-inline" role="form">
						  <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
						  </div>
						  <button type="submit" class="btn btn-default">Sign up</button>
						</form>
					</div>
				</div>
			</div>
		</div> 
	</section>
</div><!--content-wrapper-->

<?php get_footer(); ?>
