<?php 
	global $post;
   	$post_thumbnail_id = get_post_thumbnail_id();
   	$args = array(
       'order'          => 'ASC',
       'post_type'      => 'attachment',
       'post_parent'    => $post->ID,
       'post_mime_type' => 'image',
       'numberposts'    => -1,
       'orderby' => 'menu_order',
   );

   $attachments = get_posts($args);  
   $count = 0;

                               
?>



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
							<h2 class="slideshow-heading">We love what we do because photography allows us to show others how we see the world</h2>
							<p>
								<a href="#" target="_blank" class="btn btn-dark">Work</a><a href="#" target="_blank" class="btn btn-dark">Book Us</a><a href="#" target="_blank" class="btn btn-dark">About</a>
							</p>
						</div>
				</div>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">

			  	<?php foreach ($attachments as $attachment) { $count++; $image_attributes = wp_get_attachment_image_src( $attachment->ID,'full'); ?>
			  		<div class="item <?php if ($count == 1) echo 'active'; ?>">
				      	<img class="img-responsive" src="<?php echo $image_attributes[0]; ?>">
				    </div>
               	<?php } ?>
			    
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>

		</div>
	</div>
</section>