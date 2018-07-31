<?php
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
    'label'       => __('Button url', 'business'),
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

  // Boxes section
  $wp_customize -> add_section('boxes', array(
    'title'         => __('Boxes', 'business'),
    'description'   => sprintf(__('Options for homepage boxes', 'business')),
    'priority'      => 130
  ));

  // BOX 1
  // Box 1 heading setting
  $wp_customize->add_setting('box1_heading', array(
    'default'     => _x('Box 1 Heading', 'business'),
    'type'        => 'theme_mod'
  ));

  // Box 1 Heading control
  $wp_customize->add_control('box1_heading', array(
    'label'       => __('Box 1 Heading', 'business'),
    'section'     => 'boxes',
    'priority'    => 20
  ));

  // Box 1 Text setting
  $wp_customize->add_setting('box1_text', array(
    'default'     => _x('Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.',
    'business'),
    'type'        => 'theme_mod'
  ));

  // Box 1 text control
  $wp_customize->add_control('box1_text', array(
    'label'       => __('Box 1 Description', 'business'),
    'section'     => 'boxes',
    'priority'    => 20
  ));

  // Box 1 Icon setting
  $wp_customize->add_setting('box1_icon', array(
    'default' => _x('chart-pie', 'business'),
    'type' => 'theme_mod',
  ));

  // Box 1 Icon control
  $wp_customize->add_control('box1_icon', array(
    'label'   => __('Box 1 icon', 'business'),
    'default' => __('chart-pie', 'business'),
    'section' => 'boxes',
    'priority' => 20
  ));

  // BOX 2
  // Box 2 heading setting
  $wp_customize->add_setting('box2_heading', array(
    'default'     => _x('Box 2 Heading', 'business'),
    'type'        => 'theme_mod'
  ));

  // Box 2 Heading control
  $wp_customize->add_control('box2_heading', array(
    'label'       => __('Box 2 Heading', 'business'),
    'section'     => 'boxes',
    'priority'    => 20
  ));

  // Box 2 Text setting
  $wp_customize->add_setting('box2_text', array(
    'default'     => _x('Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.',
    'business'),
    'type'        => 'theme_mod'
  ));

  // Box 2 text control
  $wp_customize->add_control('box2_text', array(
    'label'       => __('Box 2 description', 'business'),
    'section'     => 'boxes',
    'priority'    => 20
  ));

  // Box 2 Icon setting
  $wp_customize->add_setting('box2_icon', array(
    'default' => _x('code', 'business'),
    'type' => 'theme_mod',
  ));

  // Box 2 Icon control
  $wp_customize->add_control('box2_icon', array(
    'label'   => __('Box 2 icon', 'business'),
    'default' => __('code', 'business'),
    'section' => 'boxes',
    'priority' => 20
  ));

  // BOX 3
  // Box 3 heading setting
  $wp_customize->add_setting('box3_heading', array(
    'default'     => _x('Box 3 Heading', 'business'),
    'type'        => 'theme_mod'
  ));

  // Box 3 Heading control
  $wp_customize->add_control('box3_heading', array(
    'label'       => __('Box 3 Heading', 'business'),
    'section'     => 'boxes',
    'priority'    => 20
  ));

  // Box 3 Text setting
  $wp_customize->add_setting('box3_text', array(
    'default'     => _x('Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.',
    'business'),
    'type'        => 'theme_mod'
  ));

  // Box 3 text control
  $wp_customize->add_control('box3_text', array(
    'label'       => __('Box 3 description ', 'business'),
    'section'     => 'boxes',
    'priority'    => 20
  ));

  // Box 3 Icon setting
  $wp_customize->add_setting('box3_icon', array(
    'default' => _x('desktop', 'business'),
    'type' => 'theme_mod',
  ));

  // Box 3 Icon control
  $wp_customize->add_control('box3_icon', array(
    'label'   => __('Box 3 icon', 'business'),
    'default' => __('desktop', 'business'),
    'section' => 'boxes',
    'priority' => 20
  ));
}

add_action('customize_register', 'business_customize_register');

 ?>
