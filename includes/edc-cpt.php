<?php

// Create New Custom Post Types
add_action('init', 'edclp_create_post_types');

// register custom post types
function edclp_create_post_types() {

  // Set up Custom LPs
  $LPlabels = array(
    'name' => 'Landing Pages',
    'singular_name' => 'Landing Page',
    'add_new' => 'Add New Landing Page',
    'add_new_item' => 'Add New Landing Page',
    'edit_item' => 'Edit Landing Page',
    'new_item' => 'New Landing Page',
    'all_items' => 'All Landing Pages',
    'view_item' => 'View Landing Page',
    'search_items' => 'Search Landing Pages',
    'not_found' =>  'No Landing Pages Found',
    'not_found_in_trash' => 'No Landing Pages found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Landing Pages'
  );

  register_post_type('landingpage', array(
    'labels' => $LPlabels,
    'has_archive' => true,
    'public' => true,
    'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-networking',
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'lp')
    )
  );

}

?>
