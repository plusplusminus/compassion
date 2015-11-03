<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon-152x152.png" />
	    <meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri(); ?>/library/images/smalltile.png" />
	    <meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/library/images/mediumtile.png" />
	    <meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/library/images/widetile.png" />
	    <meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri(); ?>/library/images/largetile.png" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php
		gravity_form_enqueue_scripts(2, true);
		?>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

	<header class="header">

		<nav role="navigation">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="col-lg-10 col-lg-offset-1">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<div class="row">
							<div class="col-md-6">
								<div class="navbar-header">
					  				<a class="navbar-brand" href="<?php bloginfo('url');?>" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo('name'); ?></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="social-menu">
									<ul id="menu-secondary-na" class="list-inline">
										<li><a href="https://twitter.com/Compassion_Art"><span class="fa fa-twitter"></span></a></li>
										<li><a href="https://www.facebook.com/pages/Compassion-Art/138330732904548?ref=hl"><span class="fa fa-facebook"></span></a></li>
										<li><a href="http://www.pinterest.com/compassionartph/"><span class="fa fa-pinterest"></span></a></li>
										<li><a href="http://instagram.com/compassionart"><span class="fa fa-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="navbar-collapse collapse navbar-responsive-collapse">
							<?php bones_main_nav(); ?>
						</div>
					</div>
				</div>
			</div> 
		</nav>

	</header> <?php // end header ?>
