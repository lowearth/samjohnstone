<?php
/*
Plugin Name: Sam Portfolio
Plugin URI: http://samjohnstone.co
Description: Declares a plugin that will create a custom post type displaying my portfolio posts.
Version: 1.0
Author: Sam Johnstone
Author URI: http://samjohnstone.co
License: GPLv2
*/

// Register custom function   
  add_action( 'init', 'portfolio', 0 );
    
// Create custom post-types 
  function portfolio() {
      register_post_type( 'portfolio',
        array(
           'labels' => array(
            'show_option_all' => 'Show All Categories',
            'name'               => 'Portfolio',
            'singular_name'      => 'Portfolio',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Post',
            'edit'               => 'Edit',
            'edit_item'          => 'Edit Post',
            'new_item'           => 'New Post',
            'view'               => 'View',
            'view_item'          => 'View posts',
            'search_items'       => 'Search Posts',
            'not_found'          => 'Your Portfolio is Empty',
            'not_found_in_trash' => 'No Posts found in Trash',
            'parent'             => 'Parent Post',
            ),
 
            'public'                 => true,
            'menu_position'          => 15,
            'supports'               => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields', 'taxonomy' ),
            'menu_icon'              => '',
            'has_archive'            => true,
            'query_var'         => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false
        )
    );
}

  add_action( 'init', 'portfolio_categories', 0 );

  function portfolio_categories() {
      register_taxonomy( 
          'portfolio_categories',
          'portfolio',
        array( 
          'hierarchical'        => true, 
          'label'               => 'Categories', 
          'query_var'           => true, 
          'rewrite'             => true,
          'show_admin_column'   => true,
        ) 
    );
  }

  add_action( 'init', 'portfolio_type', 0 );

  function portfolio_type() {
      register_taxonomy( 
            'portfolio_types',
            'portfolio',
       array(
            'labels'          => array(
            'name'            => 'Types',
            'add_new_item'    => 'Add New Portfolio Type',
            'new_item_name'   => "New Portfolio Type"
            ),
            'show_ui'         => true,
            'show_tagcloud'   => false,
            'hierarchical'    => true
        )
    );
  }

// Add the icon to custom post type
  function add_menu_icons_styles(){
?>
 
<style>
  #adminmenu .menu-icon-portfolio div.wp-menu-image:before {
      content: "\f540";
  }
</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );
?>
