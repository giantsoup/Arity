<?php
/**
 * Shortcodes that can be used anywhere on the site
 *
 * @package Arity
 */

function year_shortcode() {
	$year = date('Y');
	return $year;
}
add_shortcode('year', 'year_shortcode');