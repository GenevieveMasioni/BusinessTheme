<?php

require_once('wp_bootstrap_navwalker.php');

// Theme support
function business_setup() {
  // Custom logo
  add_theme_support('custom-logo');
  // featured image
  add_theme_support('post-thumbnails');
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

  register_sidebar(array(
    'name'    => 'Footer widget 1',
    'id'      => 'footer-widget-1',
    'before_widget' => '<div class="col-6 col-md">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
  ));

  register_sidebar(array(
    'name'    => 'Footer widget 2',
    'id'      => 'footer-widget-2',
    'before_widget' => '<div class="col-6 col-md">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
  ));

  register_sidebar(array(
    'name'    => 'Footer widget 3',
    'id'      => 'footer-widget-3',
    'before_widget' => '<div class="col-6 col-md">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
  ));

  register_sidebar(array(
    'name'    => 'Footer widget 4',
    'id'      => 'footer-widget-4',
    'before_widget' => '<div class="col-6 col-md">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
  ));

  register_sidebar(array(
    'name'    => 'Sidebar',
    'id'      => 'sidebar',
    'before_widget' => '<div class="panel panel-default sidebar-widget">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="panel-heading"><h5 class="panel-title">',
    'after_title' => '</h5></div><div class="panel-body">'
  ));
}

// Widget
add_action('widgets_init', 'init_widgets');

// Customizer
require get_template_directory().'/inc/customizer.php';

 ?>
