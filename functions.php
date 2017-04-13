<?php
  // Call Nav Walker
  require_once('wp-bootstrap-navwalker.php');

  function wpb_theme_setup() { // Theme Support
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    //Enabling image insert option
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt length control
  function set_excerpt_length() {
    return 50;
  }

  add_filter('excerpt_length', 'set_excerpt_length');

 ?>
