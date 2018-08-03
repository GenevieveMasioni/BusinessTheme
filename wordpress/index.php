<?php get_header(); ?>
<main class="container" role="main">
  <section class="row my-5 title-bar">
    <div class="col-md-12">
      <h1><?php echo __('Blog'); ?></h1>
    </div>
  </section>

  <section class="row my-5 marketing">

    <?php if(is_active_sidebar('sidebar')) : ?>
      <div class="col-md-9">
      <?php else : ?>
        <div class="col-md-12">
        <?php endif; ?>
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <article class="post mb-5">
              <div class="thumbnail">
                <?php if(has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
              </div>
              <div class="content">
                <h3 class="my-3"><?php the_title(); ?></h3>
                <ul class="meta">
                  <li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?></a>
                  </li>
                  <li><?php the_time('F j, Y'); ?></li>
                  <li>in
                    <?php
                    $categories = get_the_category();
                    $separator = ", ";
                    $output = '';

                    if($categories) {
                      forEach($categories as $category) {
                        $output .= '<a href="'.get_category_link($category
                        ->term_id).'">'.$category->cat_name .'</a>'. $separator;
                      }
                    }
                    echo trim($output, $separator);
                    ?>
                  </li>
                </ul>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">
                  <?php echo __('Read More'); ?>
                </a>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <?php if(is_active_sidebar('sidebar')) : ?>
        <div class="col-md-3">
        <?php dynamic_sidebar('sidebar'); ?>
      </div>
      <?php endif; ?>
    </section>
  </main>

  <?php get_footer(); ?>
