<?php

require_once('wp_bootstrap_navwalker.php')

// Theme support
function business_setup() {
  register_nav_menus(array(
    'primary'   => __('Primary menu')
  ));
}

add_action('after_setup_theme', 'business_setup');

// Customizer
require get_template_directory().'/inc/customizer.php';

 ?>
