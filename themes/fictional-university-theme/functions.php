<?php 

  //user defined function that loads a style sheet
  function university_files(){
    wp_enqueue_script('main-unversity-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
  }

  //add action that runs when at a certain time (i.e. when loading in header files)
  add_action('wp_enqueue_scripts', 'university_files');


  function university_features(){
    //add support for custom title tags
    add_theme_support('title-tag');

    //add custom wordpress menu that will appear in admin panel under Apperance -> Menus
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
  }

  //add an action to setup stuff after theme is loaded
  add_action('after_setup_theme', 'university_features');

?>