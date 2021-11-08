<?php

/**
 * Template part for displaying callout with image.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$subtitle = get_field('callout_subtitle');
$title = get_field('callout_title');
$content = get_field('callout_content');
$button_link = get_field('callout_button_link');
$button_label = get_field('callout_button_label');
$background_color = get_field('background_color');
?>
<section class="callout py-6 px-6 <?php echo $background_color; ?>">
  <div class="container-sm callout-wrapper has-text-centered">
    <h3 class="is-uppercase"><?php echo $subtitle ?></h3>
    <h2><?php echo $title ?></h2>
    <p><?php echo $content ?></p>
    <a class="button is-uppercase" href="<?php echo $button_link ?>">
      <?php echo $button_label ?>
    </a>
  </div>
</section><!-- .callout -->