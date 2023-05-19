<?php

/**
 * Create the Posts topics taxonomy.
 */
add_action( 'init', 'create_post_type_posts_taxonomies' );
function create_post_type_posts_taxonomies() {
    $labels = array(
        'name'              => __('Position', 'os-theme'),
        'singular_name'     => __('Position', 'os-theme'),
        'search_items'      => __('Search Positions', 'os-theme'),
        'all_items'         => __('All Positions', 'os-theme'),
        'parent_item'       => __('Parent Position', 'os-theme'),
        'parent_item_colon' => __('Parent Position:', 'os-theme'),
        'edit_item'         => __('Edit Position', 'os-theme'),
        'update_item'       => __('Update Position', 'os-theme'),
        'add_new_item'      => __('Add New Position', 'os-theme'),
        'new_item_name'     => __('New Position Name','os-theme'),
        'menu_name'         => __('Positions', 'os-theme')
    );

    register_taxonomy( 'position', array('members'),//Position ve Member olarak değişitirlidi.
        array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'position'),
        )
    );
}