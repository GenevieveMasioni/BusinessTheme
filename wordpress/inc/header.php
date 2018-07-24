<!doctype html>
<html <?php language(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description') ?>">
  <meta name="author" content="<?php bloginfo('author'); ?>">
  <link rel="icon" href="../../../../favicon.ico">
  <title><?php bloginfo('name'); ?></title>
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white container" role="menubar">
    <h5 class="my-0 mr-md-auto font-weight-normal"><?php bloginfo('name'); ?></h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="index.html">Start</a>
      <a class="p-2 text-dark" href="about.html">About</a>
      <a class="p-2 text-dark" href="contact.html">Contact</a>
      <a class="p-2 text-dark" href="blog.html">Blog</a>
    </nav>
  </header>
