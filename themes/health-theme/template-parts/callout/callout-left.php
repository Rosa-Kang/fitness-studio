<?php

/**
 * Template part for displaying Callout Left.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$orientation = get_field('cl_orientation');
$title = get_field('cl_title');
$image = get_field('cl_image');
$text = get_field('cl_text');
$button_label = get_field('cl_button_label');
$button_link = get_field('cl_button_link');
$deco = get_field('cl_decoration');

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}

if ($deco) {
  $decoration_url = $deco['url'];
  $decoration_alt = $deco['alt'];
}

?>
<section class="symmetric wrapper px-4 py-6 mb-5">
  <div class="symmetric-body <?php echo $orientation; ?>">
    <div class="columns is-vcentered is-full-mobile has-text-centered is-flex">
      <div data-aos="fade-right" class="column is-5-tablet is-4-desktop
      <?php if ($orientation == 'right-oval') {
        echo 'order-two';
      } else {
        echo 'order-one';
      } ?>">
        <?php if ($image) : ?>
        <figure class="m-0">
          <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </figure>
        <?php endif; ?>
      </div>
      <div data-aos="fade-left" class="column is-vcentered is-7-tablet is-8-desktop <?php if ($orientation == 'right-oval') {
                                                                                      echo 'order-one';
                                                                                    } else {
                                                                                      echo 'order-two';
                                                                                    } ?>">
        <div class="symmetric-higher columns desc-container bg-light-bis content-wrapper">
          <div class="symmetric-illustration">
            <?php if ($deco) : ?>
            <img class="symmetric-illust" src="<?php echo $decoration_url; ?>" alt="<?php echo $decoration_alt; ?>">
            <?php endif; ?>
          </div>
          <div class="column is-1-mobile is-1-tablet is-3-desktop <?php if ($orientation == 'right-oval') {
                                                                    echo 'order-one';
                                                                  } else {
                                                                    echo 'order-two';
                                                                  } ?>"></div>
          <div class="column is-11-tablet is-8-desktop <?php if ($orientation == 'right-oval') {
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