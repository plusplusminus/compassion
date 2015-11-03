<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>
	
	<div id="content-wrapper">
	
		<?php get_template_part('templates/home/section','slideshow'); ?>

		<?php get_template_part('templates/home/section','know'); ?>

		<?php get_template_part('templates/home/section','latest'); ?>

		<?php get_template_part('templates/section','book'); ?>

		<?php get_template_part('templates/section','newsletter'); ?>
	
		</div><!--content-wrapper-->

<?php get_footer(); ?>
