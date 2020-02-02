<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'updated_message'	=> __("Theme Settings Updated", 'acf'),
		'update_button'		=> __('Save Settings', 'acf'),
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
		'updated_message'	=> __("Header Settings Updated", 'acf'),
		'update_button'		=> __('Save Settings', 'acf'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
		'updated_message'	=> __("Footer Settings Updated", 'acf'),
		'update_button'		=> __('Save Settings', 'acf'),
	));
}

function my_acf_init() {
	$api_key = get_field('map_api_key', 'options');
	acf_update_setting('google_api_key', $api_key);
}
add_action('acf/init', 'my_acf_init');

//function my_register_blocks() {
//	// check function exists.
//	if( function_exists('acf_register_block_type') ) {
//
//		// register a large text block.
//		acf_register_block_type(array(
//			'name'              => 'large_text',
//			'title'             => __('Large Text'),
//			'description'       => __('A custom section with large text.'),
//			'render_template'   => 'template-parts/blocks/large-text/block-large-text.php',
//			'category'          => 'common',
//			'icon'              => 'editor-textcolor',
//			'keywords'          => array('image', 'img', 'picture', 'photo', 'photograph', 'text', 'paragraph'),
//			'align'             => 'full',
//			'supports'          => array(
//				'align' => false
//			)
//		));
//	}
//}
//add_action('acf/init', 'my_register_blocks');