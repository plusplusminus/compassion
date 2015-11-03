<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>
<div id="content-wrapper">
	
	<?php get_template_part('templates/home/section','slideshow'); ?>


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

	<?php get_template_part('templates/section','newsletter'); ?>

	<?php get_template_part('templates/section','book'); ?>
	
</div><!--content-wrapper-->

<?php get_footer(); ?>
