<?php

/**
 * Template part for displaying hero - top.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$title = get_field('hero_title');
$image = get_field('hero_image');
$text = get_field('hero_text');

if (is_home()) {
  $page_id = get_queried_object_id();
  $title = get_field('hero_title', $page_id);
  $image = get_field('hero_image', $page_id);
  $text = get_field('hero_text', $page_id);
}

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}
?>

<div class="fixed-header"></div>
<section class="hero has-background-primary">
  <div class="hero-body p-0">
    <div class="columns is-gapless is-vcentered">
      <div class="column is-7-desktop is-6-widescreen">
        <div class="image-container" style="background:url(<?php echo $image_url; ?>) top center / cover no-repeat;"
          role="img" aria-label="<?php echo $image_alt; ?>"></div>
      </div>
      <div class="column is-5-desktop is-6-widescreen">
        <div class="text-container content-wrapper">
          <h1 class="mt-0"><?php echo $title; ?></h1>
          <p><?php echo $text; ?> </p>
          <!-- <div class="button-container mb-3 has-text-centered has-text-left-tablet">
            <a class="button is-success" href="<?php echo $button_label; ?>">
              <?php echo $button_label; ?>
            </a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section><!-- .hero -->