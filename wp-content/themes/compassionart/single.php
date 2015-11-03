<?php get_header(); ?>
      
 <div id="content-wrapper">
 
    <div class="container">  

		<div id="content" class="clearfix row">

			<div id="main" class="col-lg-10 col-lg-offset-1 clearfix" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">
						<div class="titlewrap clearfix">
							<h1 class="single-title entry-title text-center"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p class="byline vcard text-center">
								<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time> | <a href="<?php comments_link(); ?>"><?php comments_number( ' No Comments', ' 1 Comment', ' % Comments' ); ?></a>
							</p>
						</div>
					</header> <?php // end article header ?>

					<?php global $brew_options; ?>

					<section class="entry-content single-content clearfix" itemprop="articleBody">
						<?php the_content(); ?>
					</section> <?php // end article section ?>

				</article>

			</div><!--#main-->

		</div><!--/#content-->

	</div><!--/.container-->


	<section id="single-extras">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-6">
							<h2 class="section-title">Service Providers</h2>
 							<?php echo do_shortcode('[show-some-love]');?>
						</div>
							
						<div class="col-md-6">
							<h2 class="section-title">Featured Venue</h2>
							<div class="row">
								<div class="col-md-6">
									<a href="#" class="">
										<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/video.jpg">
									</a>
								</div>
								<div class="col-md-6">
									<a href="#"><strong>Le Franschoek Hotel</strong></a>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <a href="#" class="venue-more">Read more</a></p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.container-->

	</section><!--/#section-->

	<div class="container">

		<div id="content" class="clearfix row">

			<div id="main" class="col-lg-10 col-lg-offset-1 clearfix" role="main">

				<footer class="article-footer single-footer clearfix">
					<span class="tags pull-left"><?php the_tags( '<span class="tags-title">' . __( 'TAGS:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></span>
					<div class="social-sharing">
						Share this:
						<ul>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-pinterest"></span></a></li>
						</ul>
					</div>
				</footer> <?php // end article footer ?>

          <?php comments_template(); ?>

					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>

				</div> <?php // end #main ?>

			</div> <?php // end #content ?>

    </div> <?php // end ./container ?>

 </div> <!--/#content-wrapper-->

<?php get_footer(); ?>
