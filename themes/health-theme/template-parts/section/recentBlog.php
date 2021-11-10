<h2 class="has-text-centered pt-6">Blog</h2>
<section class="blog-container columns is-multiline p-6 is-flex is-justify-content-center">
  <?php
  $recent_posts = wp_get_recent_posts(array(
    'numberposts' => 2, // Number of recent posts thumbnails to display
    'post_status' => 'publish' // Show only the published posts
  ));
  foreach ($recent_posts as $post_item) : ?>
  <div class="column is-5 p-5">
    <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
    <h3 class="is-capitalized subtitle"><?php echo $post_item['post_title'] ?></h3>
    <p><?php echo get_the_excerpt($post_item['ID'], 'full') ?></p>
    <a class="button is-uppercase button is-primary" href="<?php the_permalink($post_item['ID']) ?>">Read More</a>
  </div>
  <?php endforeach; ?>
</section>