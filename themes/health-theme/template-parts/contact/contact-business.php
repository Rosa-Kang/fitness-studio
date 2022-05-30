<?php

/**
 * Template part for displaying the contact business.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$post_id = get_field('business_info_id', 'option');
$email = get_field('social_email', $post_id);
$address = get_field('street_address', $post_id);
$city = get_field('city', $post_id);
$province = get_field('province', $post_id);
$postal = get_field('postal_code', $post_id);
$phone = get_field('contact_phone_number', $post_id);
$email = get_field('contact_email', $post_id);
$map = get_field('google_maps_embed_link', $post_id);
?>

<section class="contact-section wrapper">
  <div class="container">
    <div class="info-map columns">
      <div class="studio-address column is-half">
        <div class="py-6">
          <!-- Studio Address -->
          <h2 class="h4-style is-uppercase">Studio Location</h2>
          <h3 class="h5-style is-capitalized pt-5">Address</h3>
          <a
            href="https://www.google.com/maps/search/123+Somewhere+Street+Vancouver+BC+A1A+A1A/@49.2663479,-123.2550318,10z/data=!3m1!4b1"><?php echo $address ?>
            <br> <?php echo $city . " " . $province . " " . $postal; ?></a>
          <h3 class="h5-style is-capitalized mt-3">Phone</h3>
          <a href="tel:<?php echo $phone; ?>">
            <?php echo $phone; ?>
          </a>
          <h3 class="h5-style is-capitalized mt-3">Email</h3>
          <a href="mailto:<?php echo $email; ?>" target="_blank" rel="noopener noreferrer"><?php echo $email; ?></a>
        </div>
        <div class="studio-info">
          <!-- Studio Hours -->
          <h2 class="h4-style h4-contact is-uppercase">Studio Hours</h2>
          <ul>
            <?php
            // Check rows exists.
            if (have_rows('store_hours', $post_id)) :

              // Loop through rows.
              while (have_rows('store_hours', $post_id)) : the_row();

                // Load sub field value.
                $day = get_sub_field('day_of_the_week');
                $open = get_sub_field('time_store_opens');
                $close = get_sub_field('time_store_closes');
                // Do something...
            ?>
            <li><span class="contact-day-width"><?php echo $day; ?></span><?php echo $open . " - " . $close ?></li>
            <?php
              // End loop.
              endwhile;
            // No value.
            else :
            // Do something...
            endif; ?>
          </ul>
        </div>
      </div>
      <div class="studio-map column is-half">
        <!-- Map -->
        <?php echo $map; ?>
      </div>
    </div>
  </div>
</section>