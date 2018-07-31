<?php get_header(); ?>
<section class="jumbotron text-center d-flex align-items-center">
  <div class="container">
    <h1 class="display-3"><?php echo get_theme_mod('banner_heading', 'Banner heading'); ?></h1>
    <p><?php echo get_theme_mod('banner_text', 'Welcome to the WordPress Business Theme. This is a template for a simple informational website. It includes a large callout called a jumbotron and a blog feature. Use it as a starting point to create something more unique.'); ?></p>
    <p><a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod('banner_btn_url', '#start'); ?>" role="button"><?php echo get_theme_mod('banner_btn_text', 'Learn more'); ?> &raquo;</a></p>
  </div>
</section>
<main class="container" role="main" id="start">
  <section class="row my-5">
    <div class="col-md-4 text-center">
      <i class="fas fa-<?php echo get_theme_mod('box1_icon', 'chart-pie') ?> fa-2x"></i>
      <h2 class="my-4 font-weight-normal"><?php echo get_theme_mod('box1_heading', 'Box 1 Heading') ?></h2>
      <p><?php echo get_theme_mod('box1_text', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.') ?></p>
    </div>
    <div class="col-md-4 text-center">
      <i class="fas fa-<?php echo get_theme_mod('box2_icon', 'code') ?> fa-2x"></i>
      <h2 class="my-4 font-weight-normal"><?php echo get_theme_mod('box2_heading', 'Box 2 Heading') ?></h2>
      <p><?php echo get_theme_mod('box2_text', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.') ?></p>
    </div>
    <div class="col-md-4 text-center">
      <i class="fas fa-<?php echo get_theme_mod('box3_icon', 'desktop') ?> fa-2x"></i>
      <h2 class="my-4 font-weight-normal"><?php echo get_theme_mod('box3_heading', 'Box 3 Heading') ?></h2>
      <p><?php echo get_theme_mod('box3_text', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.') ?></p>
    </div>
  </section>

  <?php if(is_active_sidebar('content-region-1')) : ?>
    <?php dynamic_sidebar('content-region-1') ?>
  <?php endif; ?>

  <?php if(is_active_sidebar('content-region-2')) : ?>
    <?php dynamic_sidebar('content-region-2') ?>
  <?php endif; ?>
  </main>

  <?php get_footer(); ?>
