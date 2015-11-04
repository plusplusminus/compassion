<?php global $tpb_options; ?>
<?php $title = $tpb_options['book_heading']; ?>
<?php $subtitle = $tpb_options['book_sub_heading']; ?>
<?php $content = $tpb_options['book_content']; ?>

<a name="bookus"></a> 
<section id="book-us">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-md-4" style="padding-top: 17px;">
						
						<h2 class="section-title"><?php echo $title; ?></h2>
						<?php if (( '' != $subtitle)) { ?>
							<p><strong><?php echo $subtitle; ?></strong></p>
						<?php } ?>
							<p><?php echo $content; ?></p>
					</div>
				
					<div class="col-md-8">
						<div class="contact-form">
							<?php gravity_form(1, false, false, false, '', true, 12); ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section><!--/#section-->