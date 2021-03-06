<?php
/*
Template Name: Galllery Template
*/
global $post;
get_header();
$category = get_post_meta($post->ID,'_ppm_category_select',true);
?>
<div id="content-wrapper">
	
	<?php get_template_part('templates/section','slideshow'); ?>

	<section id="gallery-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						
						<div class="col-md-6">
						
							<?php do_action( 'woothemes_testimonials', array( 'limit' => 1, 'orderby' => 'rand', 'category' => $category ) ); ?>
						</div>
						
						<div class="col-md-6">
							<div class="gallery-content-text">
								<h2 class="section-title">Let's do a photoshoot</h2>
								<?php the_content(); ?>
								<a data-toggle="modal" data-target="#workModal" class="btn btn-default">Enquire Now</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section><!--/#section-->

	<?php get_template_part('templates/gallery/section','children'); ?>

	<?php get_template_part('templates/gallery/section','latest'); ?>

	<?php get_template_part('templates/gallery/section','features'); ?>

</div>
<?php get_footer(); ?>