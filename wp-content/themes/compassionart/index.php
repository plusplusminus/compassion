<?php get_header(); ?>

<div id="content-wrapper">
	
	<section id="index-wrapper">
	
		<div class="container">

			<div id="content" class="row clearfix">

				<div id="main" class="col-lg-10 col-lg-offset-1 clearfix" role="main">

					<div class="index-header">
						<h2 class="section-title">Latest Blog Posts</h2>
						<ul id="categories">
							<li><a href="#">Wedding</a></li>
							<li><a href="#">Portraits</a></li>
							<li><a href="#">Commercial</a></li>
						</ul>
					</div>

					<div class="row">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<div class="col-md-4">

								<a class="hover-block" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
									
										<div class="hover-text">
											<span class="img-title"><?php the_title(); ?></span>
											<p class="more-link"><?php get_the_time('Y-m-j') ?> <?php echo get_the_time(get_option('date_format')) ?></p>
										</div>
										<div class="hover-img">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-featured' ); ?>
											<?php if ( has_post_thumbnail() ) { ?>
													<?php the_post_thumbnail( 'post-featured img-responsive' ); ?>
											<?php } // end if ?>
										</div>

									</article> <?php // end article ?>

								</a>
							
							</div>

						<?php endwhile; ?>

					</div>

						<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link pull-left"><?php next_posts_link( __( '<i class="fa fa-angle-left"></i> Older Entries', 'bonestheme' )) ?></li>
									<li class="next-link pull-right"><?php previous_posts_link( __( 'Newer Entries <i class="fa fa-angle-right"></i>', 'bonestheme' )) ?></li>
								</ul>
						</nav>

					<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

					<?php endif; ?>

				</div> <?php // end #main ?>

			</div> <?php // end #content ?>

		</div> <!-- end ./container -->
	
	</section>

</div><!--/#content-wrapper-->
<?php get_footer(); ?>