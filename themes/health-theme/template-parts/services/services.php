<?php

/**
 * Template part for displaying callout with image.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$services_title = get_field('services_title');
$services = get_field('services');
?>

<section class="service container py-6 px-6">
  <div class="service-wrapper has-text-centered">
    <h2 class="is-capitalized"><?php echo $services_title ?></h2>
    <div class="columns px-6">
      <?php

      // Check rows exists.
      if (have_rows('services')) :

        // Loop through rows.
        while (have_rows('services')) : the_row();

          // Load sub field value.
          $icon = get_sub_field('service_icon');
          $icon_url = $icon['url'];
          $icon_alt = $icon['alt'];
          $subtitle = get_sub_field('service_heading_title');
          $info = get_sub_field('service_info');
          $button_text = get_sub_field('service_button_text');
          $button_link = get_sub_field('service_button_link');
          // Do something...
      ?>
      <div class="column py-6 is-flex-direction-column is-align-items-center">
        <img src="<?php echo $icon_url ?>" alt="<?php echo $icon_alt ?>">
        <h3 class="is-capitalized pb-4"><?php echo $subtitle ?></h3>
        <p><?php echo $info ?></p>
        <a class="is-uppercase py-1 px-2"><?php echo $button_text ?></a>
      </div>
      <?php
        // End loop.
        endwhile;

      // No value.
      else :
      // Do something...
      endif; ?>
    </div>
  </div>
</section><!-- .callout -->