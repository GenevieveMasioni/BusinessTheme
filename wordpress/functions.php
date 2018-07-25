<?php

require_once('wp_bootstrap_navwalker.php')

// Theme support
function business_setup() {
  register_nav_menus(array(
    'primary'   => __('Primary menu')
  ));
}

add_action('after_setup_theme', 'business_setup');


function business_customize_register($wp_customize) {
  // Banner section
  $wp_customize -> add_section('banner', array(
    'title'         => __('Banner', 'business'),
    'description'   => sprintf(__('Options for homepage banner', 'business')),
    'priority'      => 130
  ));

  // Heading setting
  $wp_customize->add_setting('banner_heading', array(
    'default'     => _x('Banner Heading', 'business'),
    'type'        => 'theme_mod'
  ));

  // Heading control
  $wp_customize->add_control('banner_heading', array(
    'label'       => __('Heading', 'business'),
    'section'     => 'banner',
    'priority'    => 20
  ));

  // Text setting
  $wp_customize->add_setting('banner_text', array(
    'default'     => _x('Welcome to the WordPress Business Theme.',
    'business'),
    'type'        => 'theme_mod'
  ));

  // Text control
  $wp_customize->add_control('banner_text', array(
    'label'       => __('Text', 'business'),
    'section'     => 'banner',
    'priority'    => 20
  ));

  // Button setting
  $wp_customize->add_setting('banner_btn_text', array(
    'default'     => _x('Sign Up',
    'business'),
    'type'        => 'theme_mod'
  ));

  // Button control
  $wp_customize->add_control('banner_btn_text', array(
    'label'       => __('Button text', 'business'),
    'section'     => 'banner',
    'priority'    => 20
  ));

  // Button URL setting
  $wp_customize->add_setting('banner_btn_url', array(
    'default'     => _x('http://example.com',
    'business'),
    'type'        => 'theme_mod'
  ));

  // Button URL control
  $wp_customize->add_control('banner_btn_url', array(
    'label'       => __('Button text', 'business'),
    'section'     => 'banner',
    'priority'    => 20
  ));

  // Backgroung image setting
  $wp_customize->add_setting('banner_image', array(
    'default'     => get_bloginfo('template_directory').'/images/banner.jpg',
    'type'        => 'theme_mod'
  ));

  // Backgroung image control
  $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'banner_image', array(
    'label' => __('background image', 'business'),
    'section' => 'banner',
    'settings' => 'banner_image'
  )));
}

add_action('customize_register', 'business_customize_register');


 ?>
