<?php

/**
 * Template part for displaying intro.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$subtitle = get_field('intro_subtitle');
$title = get_field('intro_title');
$content = get_field('intro_content');
$button_link = get_field('intro_button_link');
$button_label = get_field('intro_button_label');
$background_color = get_field('intro_background_color');
?>
<section class="callout wrapper is-vcentered py-6 <?php echo $background_color; ?>">
  <div data-aos="fade-in" class="container-sm p-4 has-text-centered">
    <h3 class="h4-style is-uppercase"><?php echo $subtitle ?></h3>
    <h2><?php echo $title ?></h2>
    <p><?php echo $content ?></p>
    <a class="button is-uppercase <?php if ($background_color == 'bg-light') {
                                    echo 'is-primary';
                                  } else {
                                    echo 'is-success';
                                  }; ?>" href="<?php echo $button_link ?>">
      <?php echo $button_label ?>
    </a>
  </div>
</section><!-- .intro -->