<?php

/*
Plugin Name: SavvySuit Pro Bono Catalog Shortcode
Plugin URI: https://probono.savvysuit.com
Description: A plugin that provides a shortcode that can insert the catalog in any page or post.
Version: 0.4 BETA
Author: Wiedza Creations LLC
Author URI: https://savvysuit.com
*/

// Add Shortcode
function probono_catalog_func( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
      'partner_id' => '-1',
      'cohort_id' => '0',
      'dark_mode' => 'false',
		),
		$atts,
		'probono_catalog'
	);

	// Return custom embed code
	return  '<probono-catalog cohort-id="' . $atts['cohort_id'] . '" partner-id="' . $atts['partner_id'] . '" dark-mode="' . $atts['dark_mode'] . '"></probono-catalog>' . 
					"\n" .
					'<script src="https://probono.savvysuit.com/cdn-origin/current/webcomponents-loader.js"></script>' . 
          "\n" .
          '<script type="module" src="https://probono.savvysuit.com/cdn-origin/current/probono-catalog.js"></script>' . 
					"\n" .
					'<script nomodule src="https://probono.savvysuit.com/cdn-origin/current/probono-catalog-nomodule.js"></script>';
}

add_shortcode( 'probono_catalog', 'probono_catalog_func' );

?>