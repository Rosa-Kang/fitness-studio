<?php

/**
 * Template part for displaying FAQ accordion.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$title = get_field('sm_title');
$image = get_field('sm_image');
$text = get_field('sm_text');
$button_label = get_field('sm_button_label');
$button_link = get_field('sm_button_link');
$illust = get_field('sm_illust');

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}

if ($illust) {
  $illustration_url = $illust['url'];
  $illustration_alt = $illust['alt'];
}

?>
<section class="symmetric">
  <div class="symmetric-body p-0">
    <div class="columns is-vcentered">
      <div class="column is-8-desktop pr-5">
        <div class="columns desc-container bg-light-bis content-wrapper">
          <div class="column is-4"></div>
          <div class="column is-8">
            <h1 class="mt-0"><?php echo $title; ?></h1>
            <p><?php echo $text; ?> </p>
            <div class="button-container mb-3 has-text-centered has-text-left-tablet">
              <a class="button is-primary" href="<?php echo $button_link; ?>">
                <?php echo $button_label; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-4-desktop">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
      </div>
      <div class="symmetric-illustration">
        <img src="<?php echo $illustration_url; ?>" alt="<?php echo $illustration_alt; ?>">
      </div>
    </div>
  </div>
</section><!-- .symmetric -->