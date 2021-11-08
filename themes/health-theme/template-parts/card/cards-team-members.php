<?php

/**
 * Template part for displaying cards - team members.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
// TODO: add variables
$card_title = get_field('card_title');
$card_deco = get_field('card_deco');
?>

<section class="cards-team-members ">
  <div class="cards container content-wrapper has-text-centered">
    <img src="<?php echo $card_deco['url'] ?>" alt="<?php echo $card_deco['alt'] ?>">
    <h2 class="is-capitalized"><?php echo $card_title ?></h2>
    <div class="columns px-6">
      <?php
      // Check rows exists.
      if (have_rows('card_content')) :
        // Loop through rows.
        while (have_rows('card_content')) : the_row();
          // Load sub field value.
          $icon = get_sub_field('card_icon');
          $icon_url = $icon['url'];
          $icon_alt = $icon['alt'];
          $name = get_sub_field('card_name');
          // Do something...
      ?>
      <div class="column">
        <figure class="image">
          <img class="is-rounded" src="<?php echo $icon_url ?>" alt="<?php echo $icon_alt ?>">
        </figure>
        <p><?php echo $name ?></p>
        <ul>
          <?php
              // Check rows exists.
              if (have_rows('card_specialties')) :

                // Loop through rows.
                while (have_rows('card_specialties')) : the_row();

                  // Load sub field value.
                  $text = get_sub_field('specialties');
                  // Do something...
              ?>
          <li>
            <?php echo $text ?>
          </li>
          <?php
                // End loop.
                endwhile;
              // No value.
              else :
              // Do something...
              endif; ?>
        </ul>
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
</section>
<!-- .cards-team-members -->