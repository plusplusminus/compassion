<?php global $post; ?>

<?php

	$paged = 1;
	if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
	if ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
	$paged = intval( $paged );

	$category = get_post_meta($post->ID,'_ppm_category_select',true);

	$query_args = array(
		'post_type' => 'post',
		'paged' => $paged,
		'posts_per_page'    => 3,
		'category_name' => $category
	);

	query_posts($query_args);
	$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
?>

<section id="features">
	<div class="container">
		<h2 class="text-center section-title">We've Been Featured</h2>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">

					<?php if ( have_posts() ) : $count = 0; ?>
						<?php while ( have_posts() ) : the_post(); $count++;?>
							<article id="post-<?php the_ID(); ?>" class="col-sm-4 article" role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<a class="hover-block" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
									<div class="hover-text">
										<span class="img-title"><?php the_title(); ?></span>
										<p class="more-link"><?php the_time( get_option( 'date_format' ) ); ?></p>
									</div>
									<div class="hover-img">
										<?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
									</div>
								</a>
						    	<?php get_template_part('/templates/content','article'); ?>
							</article>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>