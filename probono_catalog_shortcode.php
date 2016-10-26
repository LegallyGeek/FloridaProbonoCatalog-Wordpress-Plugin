<?php

/*
Plugin Name: Florida Probono Catalog Shortcode
Plugin URI: https://storefront.wiedza.works
Description: A plugin that provides a shortcode that can insert the catalog in any page or post.
Version: 0.1 BETA
Author: Wiedza Creations LLC
Author URI: http://wiedza.works
*/

// Add Shortcode
function probono_catalog_func() {

	// Return custom embed code
	return  '<script src="https://storefront.wiedza.works/webcomponents-lite.min.js"></script>' . 
					"\n" .
					'<link rel="import" href="https://storefront.wiedza.works/probono-catalog.html">' . 
					"\n" .
					'<probono-catalog></probono-catalog>';

}

add_shortcode( 'probono_catalog', 'probono_catalog_func' );

?>