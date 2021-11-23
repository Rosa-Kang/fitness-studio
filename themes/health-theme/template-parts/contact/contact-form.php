<?php

/**
 * Template part for displaying contact form.
 *
 * @package White_Canvas_Design_Theme
 */

?>


<?php
// TODO: add variables
$subtitle = get_field('contact_subtitle');
$title = get_field('contact_title');
$shortcode = get_field('contact_shortcode');
$background_color = get_field('background_color');
?>
<section class="wrapper contact-form pt-4 pb-1 px-5 mb-5 <?php echo $background_color; ?>">
  <div class="container-sm pt-3 pb-6 has-text-centered">
    <h4 class="is-uppercase mb-2"><?php echo $subtitle ?></h4>
    <h2 class="pb-3"><?php echo $title; ?></h2>
    <div><?php echo do_shortcode($shortcode) ?></div>
  </div>
</section>