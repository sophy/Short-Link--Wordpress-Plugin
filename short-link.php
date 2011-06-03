<?php
/*
Plugin Name: Short Link
Plugin URI: http://kooms.info/2011/wordpress-plugins-short-link/
Description:  Generat link auto from BBCode  like[link href="http://kooms.info"]Kooms[/link]  to <a href="http://kooms.info">Kooms</a>
Version: 1.0
Author: Prak Sophy
Author URI: http://kooms.info/
License: GPLv2 or later
*/

/**
 * Short code function
 */

function shortLink($atts, $content = null){
	extract(shortcode_atts(array(
		'href' => 'http://kooms.info',
		'title' => 'Kooms.info'
	), $atts));
	return '<a href="'.$href.'" title="'.$title.'">'. $content . '</a>';
}

add_shortcode('link', 'shortLink');
?>