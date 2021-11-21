<?php

/**
 * Template part for displaying single posts.
 *
 * @package White_Canvas_Design_Theme
 */

?>
<?php
$date = get_the_date('F j, Y');
$image = wp_get_attachment_url(get_post_thumbnail_id(get_option('page')));
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('pt-5'); ?>>
  <figure class="image is-3by2 mx-0 my-0">
    <img class="blog-hero" src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
  </figure>
  <div class="container content-wrapper">
    <div class="container-sm">
      <div class="entry-meta has-text-centered">
        <h4 class="mb-3"><?php echo $date; ?></h4>
        <h2 class="blog-article mb-5"><?php the_title(); ?></h2>
      </div>
      <div class="entry-content">
        <?php the_content(); ?>
      </div><!-- .entry-content -->
    </div>
  </div>
</article><!-- #post-## -->