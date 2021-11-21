<?php

/**
 * Template part for displaying FAQ accordion.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$orientation = get_field('sm_orientation');
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
<section class="symmetric wrapper py-6">
  <div class="symmetric-body <?php echo $orientation; ?>">
    <div class="columns is-vcentered is-full-mobile has-text-centered is-flex">
      <div class="column is-5-tablet is-4-desktop
      <?php if ($orientation == 'right-oval') {
        echo 'order-two';
      } else {
        echo 'order-one';
      } ?>">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
      </div>
      <div class="column is-vcentered is-7-tablet is-8-desktop <?php if ($orientation == 'right-oval') {
                                                                  echo 'order-one';
                                                                } else {
                                                                  echo 'order-two';
                                                                } ?>">
        <div class="symmetric-higher columns desc-container bg-light-bis content-wrapper">
          <div class="symmetric-illustration">
            <img class="symmetric-illust" src="<?php echo $illustration_url; ?>" alt="<?php echo $illustration_alt; ?>">
          </div>
          <div class="column is-0-tablet is-4-desktop <?php if ($orientation == 'right-oval') {
                                                        echo 'order-one';
                                                      } else {
                                                        echo 'order-two';
                                                      } ?>"></div>
          <div class="column is-12-tablet is-8-desktop <?php if ($orientation == 'right-oval') {
                                                          echo 'order-two';
                                                        } else {
                                                          echo 'order-one';
                                                        } ?>">
            <h2 class="symmetric-headline mb-4"><?php echo $title; ?></h2>
            <p class="symmetric-p"><?php echo $text; ?> </p>
            <div class="button-container  has-text-centered has-text-left-tablet">
              <a class="button is-primary" href="<?php echo $button_link; ?>">
                <?php echo $button_label; ?>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- .symmetric -->