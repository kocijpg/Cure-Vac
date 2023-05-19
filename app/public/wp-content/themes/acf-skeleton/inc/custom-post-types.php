<?php
// Construct Custom Post Type Function
function add_post_type( $type_name, $type_singular, $type_plural, $menu_icon, $supports = array(), $position, $arguments = array() ) {
	$theme_name     = get_option( 'stylesheet' );
	$type_arguments = array(
		'label'               => __( $type_name, $theme_name ),
		'description'         => __( 'Holds our ' . $type_plural, $theme_name ),
		'menu_icon'           => $menu_icon,
		'capability_type'     => 'page',
		'publicly_queryable'  => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'hierarchical'        => false,
		'menu_position'       => $position,
		'supports'            => $supports,
		'rewrite'             => array(
			'slug'       => strtolower( $type_name ),
			'with_front' => false
		),
		'labels'              => array(
			'name'               => _x( $type_plural, 'Post Type General Name', $theme_name ),
			'singular_name'      => _x( $type_singular, 'Post Type Singular Name', $theme_name ),
			'menu_name'          => __( $type_name, $theme_name ),
			'parent_item_colon'  => __( 'Parent Item:' ),
			'all_items'          => __( 'All ' . $type_plural, $theme_name ),
			'view_item'          => __( 'View ' . $type_singular, $theme_name ),
			'add_new_item'       => __( 'Add ' . $type_singular, $theme_name ),
			'add_new'            => __( 'Add ' . $type_singular, $theme_name ),
			'edit_item'          => __( 'Edit ' . $type_singular, $theme_name ),
			'update_item'        => __( 'Update ' . $type_singular, $theme_name ),
			'search_items'       => __( 'Search ' . $type_singular, $theme_name ),
			'not_found'          => __( 'Not found', $theme_name ),
			'not_found_in_trash' => __( 'Not found in Trash', $theme_name ),
		),
	);
    register_post_type( strtolower( $type_name ), array_replace( $type_arguments, $arguments ) );

}

// Initialize Registered Custom Post Types
function os_theme_custom_post_types() {
	// Add Custom Post Types
	add_post_type( 'Members', 'Member', 'Members', 'dashicons-admin-users', array( 'title', 'editor', 'thumbnail' ), 27 );
}

// Check if function exists and hook it
if ( function_exists( 'os_theme_custom_post_types' ) ) add_action( 'init', 'os_theme_custom_post_types', 0 );

