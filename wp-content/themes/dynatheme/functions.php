<?php

/**
 *
 *Do Not add anything in here, put you customization under "Appearance > Dyantheme Options > Custom PHP"
 *
**/

if( file_exists( dirname( __FILE__ ) .'/framework/config/global-config.php')) {
	require_once( dirname( __FILE__ ) .'/framework/config/global-config.php');
}

// TEMP
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('oswald','https://fonts.googleapis.com/css?family=Oswald:400,500,600,700');
	wp_enqueue_style('open-sans','https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style('bulma',CMK::$cmk_url.'/css/bulma-0.7.2/css/bulma.min.css');
	wp_enqueue_style('lj',CMK::$cmk_url.'/css/lj-style.css');
	wp_enqueue_style('sass',CMK::$cmk_url.'/css/style.min.css');
});
