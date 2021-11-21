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
          <h4 class="is-uppercase">Studio Location</h4>
          <h5 class="is-capitalized pt-5">Address</h5>
          <p><?php echo $address ?> <br> <?php echo $city . " " . $province . " " . $postal; ?></p>
          <h5 class="is-capitalized">Phone</h5>
          <p href="tel:<?php echo $phone; ?>">
            <?php echo $phone; ?>
          </p>
          <h5 class="is-capitalized">Email</h5>
          <a href="mailto:<?php echo $email; ?>" target="_blank" rel="noopener noreferrer"><?php echo $email; ?></a>
        </div>
        <div class="studio-info">
          <!-- Studio Hours -->
          <h4 class="h4-contact is-uppercase">Studio Hours</h4>
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