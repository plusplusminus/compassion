<?php 
global $tpb_options; 
global $post;
$shortcode = get_post_meta( get_the_ID(), '_ppm_category_select', true );

?>
<section id="gallery-children">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<?php
				$ancestor_id= 11;
				$descendants = get_pages(array('child_of' => $ancestor_id));
				$incl = "";

				foreach ($descendants as $page) {
				   if (($page->post_parent == $ancestor_id) ||
				       ($page->post_parent == $post->post_parent) ||
				       ($page->post_parent == $post->ID))
				   {
				      $incl .= $page->ID . ",";
				   }
				}?>

				<ul class="list-inline page-children">
				   <?php wp_list_pages(array("child_of" => $ancestor_id, "include" => $incl, "link_before" => "", "title_li" => "", "sort_column" => "menu_order"));?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<?php echo do_shortcode('['.$shortcode;.']'); ?>
			</div>
		</div>
	</div>
</section>