<?php
  // Call Nav Walker
  require_once('wp-bootstrap-navwalker.php');

  function wpb_theme_setup() { // Theme Support
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

  add_action('after_setup_theme', 'wpb_theme_setup');
 ?>
