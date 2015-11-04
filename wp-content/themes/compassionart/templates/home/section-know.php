<?php global $tpb_options; ?>
<?php $title = $tpb_options['know_heading']; ?>
<?php $content = $tpb_options['know_content']; ?>
<?php $video = $tpb_options['know_video_thumb']['url']; ?>
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
							<div class="row">
								<div class="col-md-6">
									<a class="btn btn-block btn-default" href="<?php echo $btn1url; ?>"><?php echo $btn1title; ?></a>
								</div>
								<div class="col-md-6">
									<a class="btn btn-block btn-default" href="<?php echo $btn2url; ?>"><?php echo $btn2title; ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<a href="#" data-toggle="modal" data-target="#videoModal" class="video-play">
								<div class="vertical overlay">
									<span class="play"><i class="fa fa-play fa-4x text-light"></i></span>
								</div>
								<img class="img-responsive" src="<?php echo $video; ?>">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#section-->