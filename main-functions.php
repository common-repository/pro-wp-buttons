<?php 
/*
Plugin Name: Pro buttons
Plugin URI: http://sohel.prowpexpert.com/
Description: This plugin add some Pro buttons in your wordpress. You can add buttons via post editor with shortcode. You can use buttons in your widgets or your theme's php files as well.
Author: Md Sohel
Author URI: http://sohel.prowpexpert.com/
Version: 1.0
*/



function Pro_buttond_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'color' => 'primary',
		'link' => '#',
		'text' => 'Your Text',
	), $atts ) );

	return '
         <a href="'.$link.'" class="button '.$color.'">'.$text.'</a>
    ';
}	
add_shortcode('btn', 'Pro_buttond_shortcode');



function Pro_button_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'color' => 'primary',
		'link' => '#',
		'text' => 'Your Text',
	), $atts ) );

	return '
	
              <a href="'.$link.'" class="button rounded '.$color.'">'.$text.'</a>
	';
}	
add_shortcode('btn_rounded', 'Pro_button_shortcode');



/*Some Set-up*/
define('PRO_BUTTONS_WP', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


/* Including all files */
function pro_buttons_wp_files() {
	// wp_enqueue_script('lazy-p-lightbox-main-js', P_WP_LIGBTBOX_FREE.'js/litebox.min.js', array('jquery'), 1.0, true);
	wp_enqueue_style('pro-buttons-main-css', PRO_BUTTONS_WP.'css/buttons.css');
}
add_action( 'wp_enqueue_scripts', 'pro_buttons_wp_files' );






?>