<?php

/*
 * Plugin Name: CustomPostTypes
 * Version: 1.0
 * Description: Creates custom post types 
*/

// "WORK" post type
function create_WORK_posttype(){

  //Labels for CMS admin interface
  $labels = array(
    'name'                  => 'Works',
    'singular_name'         => 'Work',
    'add_new'               => 'Add New Work',
    'add_new_item'          => 'Add New Work',
    'edit_item'             => 'Edit Work',
    'new_item'              => 'New Work',
    'view_item'             => 'View Work',
    'view_items'            => 'View Work',
    'search_items'          => 'Search Work',
    'not_found'             => 'No Work Found',
    'not_found_in_trash'    => 'No Work Found in Trash',
    'all_items'             => 'All Work',
    'archives'              => 'Issue Archives',
    'attributes'            => 'Issue Attributes',
    'insert_into_item'      => 'Insert into Issue',
    'uploaded_to_this_item' => 'Uploaded to this Issue',
    'item_published'        => 'Issue Published',
    'item_published_privately' => 'Issue published privately',
    'item_reverted_to_draft'   => 'Issue reverted to draft',
    'item_updated'          => 'Update Issue'
  );

  $args = array(
    'labels'              => $labels,
    'description'         => 'Work',
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 7,
    'menu_icon'			      => 'dashicons-media-default',
    'hierarchical'        => false,
    'supports'            => array( 
                              'title', 
                              'thumbnail', 
                              'custom-fields'),
    'can_export'          => true,
    'capability_type'     => 'post',
    'taxonomies'          => array( 'category' ),
    'has_archive'         => false,
    'rewrite'             => array('slug' => 'issue'),
    'query_var'           => true,
    'show_in_rest'        => true
);

  register_post_type('issues', $args);
}

add_action('init', 'create_WORK_posttype');

//flush rewrite rules to regenerate permalinks on plugin activation/deactivation
function work_rewrite_flush() {
    create_WORK_posttype();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'work_rewrite_flush' );


//remove standard blog posts
function post_remove (){ 
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove');   //adding action for triggering function call

?>