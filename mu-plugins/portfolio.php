<?php 

function xenos_post_types(){
  // Event Post Types
   register_post_type('portfolio', array(
     'supports' => array('title', 'editor', 'excerpt'),
     'rewrite' => array('slug' => 'portfolios'),
     'has_archive' => true,
     'public' => true,
     'show_in_rest' => true,
     'labels' => array(
       'name' => 'Portfolios',
       'add_new_item' => 'Add New Portfolio',
       'edit_item' => 'Edit Portfolio',
       'all_items' => 'All Portfolios',
       'singular_name' => 'Portfolio'
     ),
     'menu_icon' => 'dashicons-grid-view'
   ));

}

add_action('init', 'xenos_post_types');

?>