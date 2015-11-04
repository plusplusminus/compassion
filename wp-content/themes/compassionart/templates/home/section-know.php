<?php global $tpb_options; ?>
<?php $title = $tpb_options['know_heading']; ?>
<?php $content = $tpb_options['know_content']; ?>
<?php $video = $tpb_options['know_video_url']; ?>
<?php $btn1title = $tpb_options['know_btn1_text']; ?>
<?php $btn1url = $tpb_options['know_btn1_url']; ?>
<?php $btn2title = $tpb_options['know_btn2_text']; ?>
<?php $btn2url = $tpb_options['know_btn2_url']; ?>


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