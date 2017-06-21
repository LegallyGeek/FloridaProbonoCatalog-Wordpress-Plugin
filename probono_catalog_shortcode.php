<?php

/*
Plugin Name: Florida Probono Catalog Shortcode
Plugin URI: https://probono.savvysuit.com
Description: A plugin that provides a shortcode that can insert the catalog in any page or post.
Version: 0.3 BETA
Author: Wiedza Creations LLC
Author URI: https://savvysuit.com
*/

// Add Shortcode
function probono_catalog_func( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'partner_id' => '-1',
		),
		$atts,
		'probono_catalog'
	);

	// Return custom embed code
	return  '<script src="https://flpbsf-assets.azureedge.net/webcomponents-lite.min.js"></script>' . 
					"\n" .
					'<link rel="import" href="https://flpbsf-assets.azureedge.net/probono-catalog.html">' . 
					"\n" .
					'<probono-catalog partner-id="' . $atts['partner_id'] . '"></probono-catalog>';

}

add_shortcode( 'probono_catalog', 'probono_catalog_func' );

?>