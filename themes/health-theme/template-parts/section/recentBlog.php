<section class="blog-container columns is-multiline is-vcentered my-4 py-6 px-2 has-text-centered">
  <div class="column blog-illust-section pt-6 is-6">
    <?php echo wp_get_attachment_image(425, array(68, 71), "", ["class" => "blog-illust", "alt" => "blog-illustration"]); ?>
    <h2 class="column">Blog</h2>
  </div>
  <div class="columns is-justify-content-center">
    <?php
    $recent_posts = wp_get_recent_posts(array(
      'numberposts' => 2, // Number of recent posts thumbnails to display
      'post_status' => 'publish' // Show only the published posts
    ));
    foreach ($recent_posts as $post_item) : ?>
    <div class="column is-5 has-text-centered p-6">
      <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
      <div class="blog-info  pt-5">
        <h3 class=" mb-0 is-capitalized subtitle"><?php echo $post_item['post_title'] ?></h3>
        <p class="  m-0 p-0 blog-excerpt"><?php echo get_the_excerpt($post_item['ID'], 'full') ?></p>
        <a class="button is-uppercase button is-primary" href="<?php the_permalink($post_item['ID']) ?>">Read More</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>