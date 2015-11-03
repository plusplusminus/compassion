<?php
/*
Template Name: Contact Us Template
*/
?>

<?php get_header(); ?>
<div id="content-wrapper">
	<section id="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-6">
							<h2 class="section-title">Contact us</h2>
								<?php the_content(); ?>
						</div>
					
						<div class="col-md-6">
							<div class="contact-form">
								<?php gravity_form(1, false, false, false, '', true, 12); ?>
							</div>
						</div>
				</div>
				
			</div>
		</div>
	</section>

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
