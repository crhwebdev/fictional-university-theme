<?php
//custom function to register custom post types
  function university_post_types(){
    
    //register event post type
    register_post_type('event', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array(
        'slug' => 'events'
      ),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => "All Events",
        'singluar_name' => 'Event'         
      ),
      'menu_icon' => 'dashicons-calendar'
    ));
  }

  add_action('init', 'university_post_types');

?>  