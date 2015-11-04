<?php global $tpb_options; ?>
<?php $twitter = $tpb_options['twitter_url']; ?>
<?php $facebook = $tpb_options['facebook_url']; ?>
<?php $pinterest = $tpb_options['pinterest_url']; ?>
<?php $instagram = $tpb_options['instagram_url']; ?>

	<footer id="footer" class="clearfix">
	  <div id="footer-widgets">

		<div class="container">

		<div id="footer-wrapper">

		  <div class="row">
			<div class="col-sm-6 col-md-3">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
			  <?php endif; ?>
			</div> <!-- end widget1 -->

			<div class="col-sm-6 col-md-3">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
			  <?php endif; ?>
			</div> <!-- end widget1 -->

			<div class="col-sm-6 col-md-3">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
			  <?php endif; ?>
			</div> <!-- end widget1 -->

			<div class="col-sm-6 col-md-3">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
			  <?php endif; ?>
			</div> <!-- end widget1 -->

		  </div> <!-- end .row -->

		</div> <!-- end #footer-wrapper -->

		</div> <!-- end .container -->
	  </div> <!-- end #footer-widgets -->

	  <div id="sub-floor">
		<div class="container">
		  <div class="row">
		  <!-- adding the social icons here -->
			  <div class="social-menu text-center social-footer">
			  	<ul id="menu-secondary-na" class="list-inline">
					<li><a href="<?php echo $twitter; ?>"><span class="fa fa-twitter"></span></a></li>
					<li><a href="<?php echo $facebook; ?>"><span class="fa fa-facebook"></span></a></li>
					<li><a href="<?php echo $pinterest; ?>"><span class="fa fa-pinterest"></span></a></li>
					<li><a href="<?php echo $instagram; ?>"><span class="fa fa-instagram"></span></a></li>
				</ul>
			</div>
			<div class="col-md-4 copyright">
			  &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.
			</div>
		  </div> <!-- end .row -->
		</div>
	  </div>

	</footer> <!-- end footer -->

<!-- Modal -->
<?php if ( is_front_page() || is_home() ) { ?>
	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="CompassionArt Video" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<a href="#" class="close btn btn-default btn-xs pull-right" data-dismiss="modal" aria-hidden="true">X</a>
					<h4 class="modal-title" id="myModalLabel">Get to know us better</h4>
				</div><!--/.modal-header-->
				<div class="modal-body">
					<div class="video-container">
					<iframe src="//player.vimeo.com/video/104082937?title=0&amp;byline=0&amp;portrait=0" width="853" height="479" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>					</div>
				</div>
			</div><!--/.modal-content-->
		</div>
	</div><!--/.modal-->
<?php };?>

	<!-- all js scripts are loaded in library/bones.php -->
	<?php wp_footer(); ?>
	<!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->

  </body>

</html> <!-- end page. what a ride! -->
