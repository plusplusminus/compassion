<?php global $tpb_options; ?>
<?php $title = $tpb_options['newsletter_heading']; ?>
<?php $subtitle = $tpb_options['newsletter_sub_heading']; ?>
<?php $content = $tpb_options['newsletter_content']; ?>

<a name="bookus"></a> 
	<section id="our-newsletter">
			<div class="container text-center">
				<h2 class="section-title"><?php echo $title; ?></h2>
					<div class="col-md-6 col-md-offset-3">
						<p><strong><?php echo $subtitle; ?></strong></p>
							<div class="newsletter-form-gravity">
								<?php gravity_form(2, false, false, false, '', true, 12); ?>
							</div>
					</div>
			</div>
	</section>