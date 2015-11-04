<?php
/*
Template Name: Content Page Template
*/
?>

<?php get_header(); ?>
	
	<div id="content-wrapper">
	
		<?php get_template_part('templates/home/section','slideshow'); ?>

		<section id="page-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="gallery-content-text">
							<h2 class="section-title"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#section-->

		<?php get_template_part('templates/home/section','latest'); ?>

		<?php get_template_part('templates/section','book'); ?>

		<?php get_template_part('templates/section','newsletter'); ?>
	
		</div><!--content-wrapper-->

<?php get_footer(); ?>
