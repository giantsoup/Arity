<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Arity
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function arity_body_classes( $classes ) {

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}

add_filter( 'body_class', 'arity_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function arity_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}

add_action( 'wp_head', 'arity_pingback_header' );

// Append read more link to excerpt
function arity_excerpt_more( $more ) {
	global $post;

	return '... <a class="more-link" href="' . get_permalink( $post->ID ) . '">Read More &raquo;</a>';
}

add_filter( 'excerpt_more', 'arity_excerpt_more' );

// strip phone number of any extra characters and return only string of numbers
function strip_phone( $phone ) {
	return preg_replace( '/\D+/', '', $phone );
}

// take stripped down phone number and return a string to be used for the link
// e.g tel:+14897482098
function get_phone_link( $phone ) {
	if ( strlen( $phone ) == 11 ) {
		return 'tel:+' . $phone;
	}

	if ( strlen( $phone ) == 10 ) {
		return 'tel:+1' . $phone;
	}
}

// load this content through an ajax call
//function example_ajax_function()
//{
//	// set variables before loading template part
//	set_query_var( 'custom_var',  $_GET['custom_var']);
//	get_template_part( 'template-parts/content', 'ajax-content' );
//	exit();
//}
//
//// creating Ajax call for WordPress
//add_action('wp_ajax_nopriv_example_ajax_function', 'example_ajax_function');
//add_action('wp_ajax_example_ajax_function', 'example_ajax_function');