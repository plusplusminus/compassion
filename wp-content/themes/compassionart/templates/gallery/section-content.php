<?php global $tpb_options; ?>
<?php $title = $tpb_options['content_heading']; ?>
<?php $content = $tpb_options['content_content']; ?>


<a name="knowus"></a>
	<section id="know-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-md-6">
							<h2 class="section-title"><?php echo $title; ?></h2>
							<p><?php echo $content; ?></p>
							<p><?php echo $btn1title, $btn1url; ?></p>
							<p><?php echo $btn2title; ?></p>
						</div>
						<div class="col-md-6">
							<p><?php echo $video; ?></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#section-->