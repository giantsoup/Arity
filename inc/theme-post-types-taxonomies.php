<?php
/**
 * Custom Post Types registered with Wordpress
 *
 * @package Arity
 */

// Register Custom Post Type
//function projects_custom_post_type() {
//
//	$labels = array(
//		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
//		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
//		'menu_name'             => __( 'Projects', 'text_domain' ),
//		'name_admin_bar'        => __( 'Project', 'text_domain' ),
//		'archives'              => __( 'Project Archives', 'text_domain' ),
//		'attributes'            => __( 'Project Attributes', 'text_domain' ),
//		'parent_item_colon'     => __( 'Parent Project:', 'text_domain' ),
//		'all_items'             => __( 'All Projects', 'text_domain' ),
//		'add_new_item'          => __( 'Add New Project', 'text_domain' ),
//		'add_new'               => __( 'Add New', 'text_domain' ),
//		'new_item'              => __( 'New Project', 'text_domain' ),
//		'edit_item'             => __( 'Edit Project', 'text_domain' ),
//		'update_item'           => __( 'Update Project', 'text_domain' ),
//		'view_item'             => __( 'View Project', 'text_domain' ),
//		'view_items'            => __( 'View Projects', 'text_domain' ),
//		'search_items'          => __( 'Search Project', 'text_domain' ),
//		'not_found'             => __( 'Not found', 'text_domain' ),
//		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
//		'featured_image'        => __( 'Featured Image', 'text_domain' ),
//		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
//		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
//		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
//		'insert_into_item'      => __( 'Insert into Project', 'text_domain' ),
//		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'text_domain' ),
//		'items_list'            => __( 'Projects list', 'text_domain' ),
//		'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
//		'filter_items_list'     => __( 'Filter Projects list', 'text_domain' ),
//	);
//	$args = array(
//		'label'                 => __( 'Project', 'text_domain' ),
//		'description'           => __( 'A list of past projects.', 'text_domain' ),
//		'labels'                => $labels,
//		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
//		'taxonomies'            => array(),
//		'hierarchical'          => false,
//		'public'                => true,
//		'show_ui'               => true,
//		'show_in_menu'          => true,
//		'menu_position'         => 26,
//		'menu_icon'             => 'dashicons-format-aside',
//		'show_in_admin_bar'     => true,
//		'show_in_nav_menus'     => true,
//		'can_export'            => true,
//		'has_archive'           => true,
//		'exclude_from_search'   => false,
//		'publicly_queryable'    => true,
//		'capability_type'       => 'page',
//		'show_in_rest'          => true,
//	);
//	register_post_type( 'projects', $args );
//
//}
//add_action( 'init', 'projects_custom_post_type', 0 );

// Register Custom Taxonomy
//function taxonomy_publication_categories() {
//
//	$labels = array(
//		'name'                       => _x( 'Publication Categories', 'Taxonomy General Name', 'text_domain' ),
//		'singular_name'              => _x( 'Publication Category', 'Taxonomy Singular Name', 'text_domain' ),
//		'menu_name'                  => __( 'Publication Categories', 'text_domain' ),
//		'all_items'                  => __( 'All Publication Categories', 'text_domain' ),
//		'parent_item'                => __( 'Parent Publication Category', 'text_domain' ),
//		'parent_item_colon'          => __( 'Parent Publication Category:', 'text_domain' ),
//		'new_item_name'              => __( 'New Publication Category Name', 'text_domain' ),
//		'add_new_item'               => __( 'Add New Publication Category', 'text_domain' ),
//		'edit_item'                  => __( 'Edit Publication Category', 'text_domain' ),
//		'update_item'                => __( 'Update Publication Category', 'text_domain' ),
//		'view_item'                  => __( 'View Publication Category', 'text_domain' ),
//		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
//		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
//		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
//		'popular_items'              => __( 'Popular Publication Categories', 'text_domain' ),
//		'search_items'               => __( 'Search Publication Categories', 'text_domain' ),
//		'not_found'                  => __( 'Not Found', 'text_domain' ),
//		'no_terms'                   => __( 'No items', 'text_domain' ),
//		'items_list'                 => __( 'Publication Categories list', 'text_domain' ),
//		'items_list_navigation'      => __( 'Publication Categories list navigation', 'text_domain' ),
//	);
//	$args = array(
//		'labels'                     => $labels,
//		'hierarchical'               => true,
//		'public'                     => true,
//		'show_ui'                    => true,
//		'show_admin_column'          => true,
//		'show_in_nav_menus'          => true,
//		'show_tagcloud'              => true,
//		'show_in_rest'               => true,
//	);
//	register_taxonomy( 'publication-categories', array( 'publications' ), $args );
//
//}
//add_action( 'init', 'taxonomy_publication_categories', 0 );