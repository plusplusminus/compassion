<?php
/*
Template Name: Galllery Template - Lifestyle
*/
?>

<?php get_header(); ?>

<div id="content-wrapper">
	<section id="gallery-slideshow">
		<div class="slideshow-full slideshow-gallery">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
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
						      <img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow-lifestyle/_DSC0008.jpg" alt="">
						    </div>
						    <div class="item">
						      <img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow-lifestyle/_DSC2421ss.jpg" alt="">
						    </div>
						    <div class="item">
						      <img src="<?php bloginfo('stylesheet_directory');?>/library/images/slideshow-lifestyle/DSC_7776s.jpg" alt="">
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
					</div><!-- end .row-->
				</div>
			</div> <!-- end .container-->
		</div>
	</section>

	<section id="gallery-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						
						<div class="col-md-6">
							<blockquote>
								<p>Through our experience and interaction with other photographers, you and Billy were more professional, passionate and made us feel more at ease. Thank you for the amazing photos and memories.</p>
								<footer>Nicholas &amp; Ilana in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
							<blockquote>
								<p>From our family shoot to our engagement shoot, super happy with every single shot! You guys are so talented. Looking forward to many more shoots with you!</p>
								<footer>Justine &amp; Rean in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
						
						<div class="col-md-6">
							<div class="gallery-content-text">
								<h2 class="section-title">Let's do a photoshoot</h2>
								<p>We firmly believe in the ethos that family comes first; it’s a work ethic we bring to the photographs we take of individuals, loved ones, couples and children.</p>
								<p>We’re passionate about capturing the true essence of every moment spent with the special people in your life.</p>
								<p>Billy puts his incredible skillset to use to bring out a person’s inner beauty and to coax out the magic that binds families, in a relaxed atmosphere that let’s your true self shine through.</p>
								<a href="#" class="btn btn-default">Enquire Now</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section><!--/#section-->

	<section id="stationery">
		<div class="container text-center">
			<h2 class="section-title">Custom Designed Stationery</h2>
				<div class="col-md-6 col-md-offset-3">
					<p>Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius.</p>
					<a href="#" class="btn btn-default">View More</a>
				</div>
			</div>
		</div>
	</section>

	<section id="latest-work">
		<div class="container">
			<h2 class="text-center section-title">Latest Lifestyle</h2>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Jane Doe</span>
									<p class="more-link">Cape Town</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/slideshow-lifestyle/DSC_7776s.jpg"/>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Baby Jane</span>
									<p class="more-link">Durban</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/slideshow-lifestyle/_DSC2421ss.jpg"/>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a class="hover-block" href="#">
								<div class="hover-text">
									<span class="img-title">Smith Family</span>
									<p class="more-link">Cape Town</p>
								</div>
								<div class="hover-img">
									<img class="img-responsive" src="<?php bloginfo('stylesheet_directory' );?>/library/images/slideshow-lifestyle/_DSC0008.jpg"/>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>