<?php
	class lkCustomPostTypes {

		public function __construct() {
			add_action( 'cmb2_init', array($this,'ppm_custom_meta'));
		}

		public function ppm_custom_meta() {
		    // Start with an underscore to hide fields from custom fields list
		    $prefix = '_ppm_';
		}

	}
	global $cpt; 
	$cpt = new lkCustomPostTypes(); 
?>