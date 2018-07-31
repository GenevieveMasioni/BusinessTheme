<?php

require_once('wp_bootstrap_navwalker.php');

// Theme support
function business_setup() {
  register_nav_menus(array(
    'primary'   => __('Primary menu')
  ));
}

add_action('after_setup_theme', 'business_setup');

// Widget locations

function init_widgets($id) {
  register_sidebar(array(
    'name'    => 'Content region 1',
    'id'      => 'content-region-1',
    'before_widget' => '<section class="row my-5 content-region-1 pt50 pb40">
          <div class="col-md-12">',
    'after_widget' => '</div></section>',
    'before-title' => '<h2>',
    'after_title' => '</h2>'
  ));

  register_sidebar(array(
    'name'    => 'Content region 2',
    'id'      => 'content-region-2',
    'before_widget' => '<section class="row my-5 content-region-2 pt40 pb40">',
    'after_widget' => '</section>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}

// Widget
add_action('widgets_init', 'init_widgets');

// Customizer
require get_template_directory().'/inc/customizer.php';

 ?>
