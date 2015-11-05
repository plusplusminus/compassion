<?php 
	global $post;
	global $tpb_options; 
	$entries = get_post_meta( get_the_ID(), 'btn_group', true );

	$slideshowheading = get_post_meta( get_the_ID(), '_ppm_slider_text', true );

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



<section id="slideshow">
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
							<h2 class="slideshow-heading"><?php echo $slideshowheading ?></h2>
							<p>
							<?php foreach ( (array) $entries as $key => $entry ) {
							    $btntitle = $btnlink = '';
							    if ( isset( $entry['btntitle'] ) )
							        $btntitle = esc_html( $entry['btntitle'] );
							    if ( isset( $entry['btnlink'] ) )
							        $btnlink = esc_html( $entry['btnlink'] );

							    	if ( isset( $entry['btntitle'] ) ) { ?>
							    		<a href="<?php echo $btnlink ?>" target="_blank" class="btn btn-dark"><?php echo $btntitle ?></a>
							    	<?php } ?>
							    <?php } ?>
							</p>
						</div>
				</div>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">

				<?php $sliderfiles = get_post_meta( $post->ID, '_ppm_slider_file_list', true ); ?>
				<?php if (!empty($sliderfiles)) : ?>
				      <?php foreach ($sliderfiles as $key => $image) :  $count++; ?>
				       		<?php $image_attributes_large = wp_get_attachment_image_src( $key,'full' ); ?>
						  	<div class="item <?php if ($count == 1) echo 'active'; ?>">
				      			<img class="img-responsive" src="<?php echo $image_attributes_large[0];?>">
				    		</div>
					<?php endforeach; ?> 
				<?php endif; ?>
			    
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