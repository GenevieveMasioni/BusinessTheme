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

    <section class="row my-5 content-region-1 pt50 pb40">
      <div class="col-md-12">
        <h1>Clean bootStrap WordPress theme</h1>
        <p class="lead">Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes eius, a quo dissentias. quid enim me prohiberet Epicureum esse, si probarem, quae ille diceret? cum praesertim illa perdiscere ludus esset. Quam ob rem dissentientium inter se reprehensiones non sunt vituperandae, maledicta, contumeliae, tum iracundiae, contentiones concertationesque in disputando pertinaces indignae philosophia mihi videri solent.</p>
      </div>
    </section>

    <section class="row my-5 content-region-2 pt40 pb40">
      <div class="col-md-5">
        <img src="<?php bloginfo('template_url'); ?>/images/chatting.jpg" alt="People chatting">
      </div>
      <div class="col-md-7">
        <h3>Theme features</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <i class="fas fa-check" aria-hidden="true"></i>
            Clean code
          </li>
          <li class="list-group-item">
            <i class="fas fa-check" aria-hidden="true"></i>
            Custom showcase area
          </li>
          <li class="list-group-item">
            <i class="fas fa-check" aria-hidden="true"></i>
            BootStrap framework
          </li>
          <li class="list-group-item">
            <i class="fas fa-check" aria-hidden="true"></i>
            Multiple color choices
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
