<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>
<div id="content-wrapper">
<section id="slideshow" style="margin-top: -25px; background-color: #fff;">
		<div class="slideshow-full slideshow-home">

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
				  </ol>

					<div class="heading-text-slideshow">
							<div class="inner container">
								<h2 class="slideshow-heading">Our Passion towards love, that is what keeps us here, so we may do it once more.</h2>
								<p>
									<a href="#bookus" class="btn btn-dark">Book Us</a>
								</p>
							</div>
					</div>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/_DSC1528s.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				    <div class="item">
				      <img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/_DSC4784s.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				    <div class="item">
				      <img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/_DSC7116.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				    <div class="item">
				      <img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/_DSC8885.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				    <div class="item">
				      <img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/DSC_2712bw.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>


			<!-- <div class="vertical" style=""><div class="inner container">
								<h2 class="slideshow-heading">Our Passion towards love, that is what keeps us here, so we may do it once more.</h2>
								<p><a href="#bookus" class="btn btn-dark">Book Us</a>
								</p>
			</div> -->
			</div>
		</div>
</section>


					<!-- <div class="col-lg-10 col-lg-offset-1">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h2 class="slideshow-heading">XXXXXXXXXXWe love what we do because photography allows us to show others how we see the world</h2>
								<p>
									<a href="#" target="_blank" class="btn btn-dark">Work</a><a href="#" target="_blank" class="btn btn-dark">Book Us</a><a href="#" target="_blank" class="btn btn-dark">About</a>
								</p>
							</div>
						</div>
					</div>end .row-->
<section id="our-newsletter">
		<div class="container text-center">
			<h2 class="section-title">Under Construction</h2>
				<div class="col-md-6 col-md-offset-3">
					<p>A time for a new season has begun and we are almost ready to show you something new!</p><p>Stay connected in the meantime through our Social Media.</p>
						

					<!-- <div class="newsletter-form">
						<form class="form-inline" role="form">
						  <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
						  </div>
						  <button type="submit" class="btn btn-default">Sign up</button>
						</form>
					</div> -->
				</div>
			</div>
</section>

	<section id="know-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-6">
							<h2 class="section-title">Get to know us</h2>
							<p>This is us having some fun!</p><p><strong>Come have a look!</strong></p>
						</div>
						<div class="col-md-6">
							<a href="#" data-toggle="modal" data-target="#videoModal" class="video-play">
								<div class="vertical overlay">
								<span class="play"><i class="fa fa-play fa-4x text-light"></i></span>
								</div>
								<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/video3.png">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#section-->

	<?php get_template_part('templates/home/section','latest'); ?>

	<section id="our-newsletter">
			<div class="container text-center">
				<h2 class="section-title">Get our Newsletter</h2>
					<div class="col-md-6 col-md-offset-3">
						<p>Be inspired, be Entertained, See Passion in Action, sign up!</p>
							<div class="newsletter-form-gravity">
								<?php gravity_form(2, false, false, false, '', true, 12); ?>
								</div>

						<!-- <div class="newsletter-form">
							<form class="form-inline" role="form">
							  <div class="form-group">
							    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
							  </div>
							  <button type="submit" class="btn btn-default">Sign up</button>
							</form>
						</div> -->
					</div>
				</div>
	</section>
	
<a name="bookus"></a> 
	<section id="book-us"
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section-title">Book us</h2>
								<p><strong>Let’s make magic together</strong></p>
								<p>We love building lasting relationships with the wonderful people we work with.</p>
								<p>To become part of our family, simply fill out the form below &amp; we’ll give you a shout as soon as we can!</p>
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

	
</div><!--content-wrapper-->

<?php get_footer(); ?>
