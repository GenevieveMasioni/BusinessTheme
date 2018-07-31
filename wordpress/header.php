<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description') ?>">
  <meta name="author" content="<?php bloginfo('author'); ?>">
  <link rel="icon" href="../../../../favicon.ico">
  <title><?php bloginfo('name'); ?></title>
  <!-- <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
  .jumbotron {
    background-image: url(<?php echo get_theme_mod('banner_image',
    get_bloginfo('template_url').'/images/banner.jpg'); ?>);
  }
  </style>
</head>
<body <?php body_class(); ?>>
  <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white container" role="menubar">
    <?php if(has_custom_logo()) : ?>
      <?php the_custom_logo(); ?>
    <?php else: ?>
      <h5 class="my-0 mr-md-auto font-weight-normal"><?php bloginfo('name'); ?></h5>
    <?php endif; ?>
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'depth' => 2,
      'container' => false,
      'menu_class' => 'my-2 my-md-0 mr-md-3',
      'fallback' => 'wp_bootstrap_navwalker::fallback',
      'walker' => new wp_bootstrap_navwalker()
    ));
     ?>
  </header>
