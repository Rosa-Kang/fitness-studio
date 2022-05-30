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

<section class="services wrapper background-pre py-6">
  <div class="container service-wrapper has-text-centered">
    <h2 data-aos="fade-up" class="is-capitalized"><?php echo $services_title ?></h2>
    <div class="columns">
      <?php

      // Check rows exists.
      if (have_rows('services')) :

        // Loop through rows.
        $i = 0;
        foreach ($services as $service) :
          $icon = $service['service_icon'];
          $icon_url = $icon['url'];
          $icon_alt = $icon['alt'];
          $subtitle = $service['service_heading_title'];
          $info = $service['service_info'];
          $button_text = $service['service_button_text'];
          $button_link = $service['service_button_link'];
          $i++;
      ?>
      <div data-aos="fade-up" data-aos-delay="<?php echo $i * 200; ?>"
        class="column pt-6 is-flex-direction-column is-align-items-center">
        <figure class="image">
          <img id="services-icon" src="<?php echo $icon_url ?>" alt="<?php echo $icon_alt ?>">
        </figure>
        <h3 class="subtitle is-capitalized pb-4"><?php echo $subtitle ?></h3>
        <p class="services-info"><?php echo $info ?></p>
        <a href="<?php echo $button_link ?>"
          class="button is-primary is-uppercase py-1 px-2"><?php echo $button_text ?></a>
      </div>
      <?php
        // End loop.
        endforeach;

      // No value.
      else :
      // Do something...
      endif; ?>
    </div>
  </div>
</section><!-- .callout -->