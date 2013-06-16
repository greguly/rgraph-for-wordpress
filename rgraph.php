<?php
/*
Plugin Name: RGraph for WordPress
Plugin URI: http://omniwp.com.br/plugins/
Description: RGraph for WordPress: Brings "RGraph - Free HTML5 and JavaScript charts" to WordPress, e.g. you can draw graphics with JavaScript :-)
Version: 2.0
Author: Gabriel Reguly,omniWP
Author URI: http://www.omniwp.com.br/
License: GPL2

Based on plugin http://wordpress.org/extend/plugins/rgraph/, thanks ramoonus!

*/

function rgraph_for_wordpress_init() {
	// core
	wp_deregister_script('RGraph.common.core'); // deregister
	wp_register_script('RGraph.common.core', plugins_url('/libraries/RGraph.common.core.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.common.core'); // load
	
	// common 
	wp_deregister_script('RGraph.common.adjusting'); // deregister
	wp_register_script('RGraph.common.adjusting', plugins_url('/libraries/RGraph.common.adjusting.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.common.adjusting'); // load
	
	wp_deregister_script('RGraph.common.annotate'); // deregister
	wp_register_script('RGraph.common.annotate', plugins_url('/libraries/RGraph.common.annotate.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.common.annotate'); // load

	wp_deregister_script('RGraph.common.context'); // deregister
	wp_register_script('RGraph.common.context', plugins_url('/libraries/RGraph.common.context.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.common.context'); // load
	
	wp_deregister_script('RGraph.common.resizing'); // deregister
	wp_register_script('RGraph.common.resizing', plugins_url('/libraries/RGraph.common.resizing.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.common.resizing'); // load
	
	wp_deregister_script('RGraph.common.tooltips'); // deregister
	wp_register_script('RGraph.common.tooltips', plugins_url('/libraries/RGraph.common.tooltips.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.common.tooltips'); // load
	
	wp_deregister_script('RGraph.common.zoom'); // deregister
	wp_register_script('RGraph.common.zoom', plugins_url('/libraries/RGraph.common.zoom.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.common.zoom'); // load		
	
	// plugins part 2
	wp_deregister_script('RGraph.bar'); // deregister
	wp_register_script('RGraph.bar', plugins_url('/libraries/RGraph.bar.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.bar'); // load	
	
	wp_deregister_script('RGraph.bipolar'); // deregister
	wp_register_script('RGraph.bipolar', plugins_url('/libraries/RGraph.bipolar.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.bipolar'); // load
	
	wp_deregister_script('RGraph.funnel'); // deregister
	wp_register_script('RGraph.funnel', plugins_url('/libraries/RGraph.funnel.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.funnel'); // load
	
			
	wp_deregister_script('RGraph.gantt'); // deregister
	wp_register_script('RGraph.gantt', plugins_url('/libraries/RGraph.gantt.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.gantt'); // load
	
			
	wp_deregister_script('RGraph.hbar'); // deregister
	wp_register_script('RGraph.hbar', plugins_url('/libraries/RGraph.hbar.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.hbar'); // load
	
			
	wp_deregister_script('RGraph.hprogress'); // deregister
	wp_register_script('RGraph.hprogress', plugins_url('/libraries/RGraph.hprogress.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.hprogress'); // load
	
			
	wp_deregister_script('RGraph.led'); // deregister
	wp_register_script('RGraph.led', plugins_url('/libraries/RGraph.led.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.led'); // load
	
			
	wp_deregister_script('RGraph.line'); // deregister
	wp_register_script('RGraph.line', plugins_url('/libraries/RGraph.line.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.line'); // load
	
			
	wp_deregister_script('RGraph.meter'); // deregister
	wp_register_script('RGraph.meter', plugins_url('/libraries/RGraph.meter.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.meter'); // load
	
			
	wp_deregister_script('RGraph.odo'); // deregister
	wp_register_script('RGraph.odo', plugins_url('/libraries/RGraph.odo.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.odo'); // load
	
			
	wp_deregister_script('RGraph.pie'); // deregister
	wp_register_script('RGraph.pie', plugins_url('/libraries/RGraph.pie.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.pie'); // load
					
	wp_deregister_script('RGraph.radar'); // deregister
	wp_register_script('RGraph.radar', plugins_url('/libraries/RGraph.radar.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.radar'); // load

	wp_deregister_script('RGraph.rose'); // deregister
	wp_register_script('RGraph.rose', plugins_url('/libraries/RGraph.rose.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.rose'); // load
	
			
	wp_deregister_script('RGraph.rscatter'); // deregister
	wp_register_script('RGraph.rscatter', plugins_url('/libraries/RGraph.rscatter.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.rscatter'); // load
	
			
	wp_deregister_script('RGraph.scatter'); // deregister
	wp_register_script('RGraph.scatter', plugins_url('/libraries/RGraph.scatter.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.scatter'); // load
	
			
	wp_deregister_script('RGraph.tradar'); // deregister
	wp_register_script('RGraph.tradar', plugins_url('/libraries/RGraph.tradar.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.tradar'); // load
	
			
	wp_deregister_script('RGraph.vprogress'); // deregister
	wp_register_script('RGraph.vprogress', plugins_url('/libraries/RGraph.vprogress.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.vprogress'); // load
	
	// part 3
	wp_deregister_script('RGraph.skeleton'); // deregister
	wp_register_script('RGraph.skeleton', plugins_url('/libraries/RGraph.skeleton.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.skeleton'); // load
	
	wp_deregister_script('RGraph.modaldialog'); // deregister
	wp_register_script('RGraph.modaldialog', plugins_url('/libraries/RGraph.modaldialog.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.modaldialog'); // load
	
	wp_deregister_script('RGraph.thermometer'); // deregister
	wp_register_script('RGraph.thermometer', plugins_url('/libraries/RGraph.thermometer.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.thermometer'); // load
	
	wp_deregister_script('RGraph.waterfall'); // deregister
	wp_register_script('RGraph.waterfall', plugins_url('/libraries/RGraph.waterfall.js', __FILE__), false, '1.5.5');
	wp_enqueue_script('RGraph.waterfall'); // load
}

add_action('init', 'rgraph_for_wordpress_init');

/* Shortcode */

function rgraph_for_wordpress_shortcode($attr, $content) {
	// support for attributes in the shortcode as you might want more than one graph on a post/page and different sizes
	// Patch by Jaco Theron from Starsites
	// @since 1.0
	extract( shortcode_atts( array(
		'id' => 'myCanvas',
		'width' => '600',
		'height' => '450'
		), $attr ) );
	// end of his work

	echo '<canvas id="'. $id .'" width="'. $width .'" height="'. $height .'">No canvas support</canvas>'; // Canvas, with the attributes

	echo '<script type="text/javascript">';
	
	//wordpress convert quotes to HTML entities when posting
	$html_entities = array( "&#8216;" , "&#8217;", "&#8242;" ); 
	//this is what the HTML entities should be	
	$entities = array( "'" , "'", "'" );                         
	//now replace the entities with the correct form
	$content = str_replace( $html_entities , $entities , $content ); 	
	$replacement = array( "<br />", "<br>", "<p>", "</p>" );

	echo str_replace( $replacement, '', $content ); // replace those trings to nothing
	
	echo '</script>';
}

add_shortcode( 'rgraph', 'rgraph_for_wordpress_shortcode' );
add_shortcode( 'RGraph', 'rgraph_for_wordpress_shortcode' ); // and RGraph (notice the caps)
?>