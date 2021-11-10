<?php

/**
 * Template part for displaying cards - team members.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
// TODO: add variables
$instructor_title = get_field('instructor_title');
$instructor_deco = get_field('instructor_deco');
?>

<section class="instructors py-6">
  <div class="instructor container content-wrapper has-text-centered">
    <img src="<?php echo $instructor_deco['url'] ?>" alt="<?php echo $instructor_deco['alt'] ?>">
    <h2 class="is-capitalized"><?php echo $instructor_title ?></h2>
    <div class="columns py-4">
      <?php
      // Check rows exists.
      if (have_rows('instructor_content')) :
        // Loop through rows.
        while (have_rows('instructor_content')) : the_row();
          // Load sub field value.
          $icon = get_sub_field('instructor_icon');
          $icon_url = $icon['url'];
          $icon_alt = $icon['alt'];
          $name = get_sub_field('instructor_name');
          // Do something...
      ?>
      <div class="column">
        <div class="image">
          <img class="is-rounded profile" src="<?php echo $icon_url ?>" alt="<?php echo $icon_alt ?>">
        </div>
        <p class="instructors-name mb-3"><?php echo $name ?></p>
        <ul class='m-0 specialties'>
          <?php
              // Check rows exists.
              if (have_rows('instructor_specialties')) :

                // Loop through rows.
                while (have_rows('instructor_specialties')) : the_row();

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
<!-- .instructors -->