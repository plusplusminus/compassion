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
		</div>
	</section>

	<?php get_template_part('templates/section','newsletter'); ?>

</div><!--content-wrapper-->

<?php get_footer(); ?>
