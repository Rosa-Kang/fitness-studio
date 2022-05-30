<?php

/**
 * Template part for displaying cards - team members.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
$title = get_field('tm_title');
$deco = get_field('tm_deco');
$team_members = get_field('team_members');
?>

<section class="instructors wrapper py-6">
  <div data-aos="fade-in" class="instructor container has-text-centered">
    <?php if ($deco) : ?>
    <figure class="image m-0">
      <img class="tm-decoration" src="<?php echo $deco['url'] ?>" alt="<?php echo $deco['alt'] ?>">
    </figure>
    <?php endif; ?>
    <h2 class="is-capitalized"><?php echo $title ?></h2>
    <div class="columns py-4 is-flex is-multiline">
      <?php if ($team_members) : ?>
      <?php
        $i = 0;
        foreach ($team_members as $team_member) : setup_postdata($team_member);
          $icon = get_the_post_thumbnail($team_member->ID, $attr = 'profile is-rounded');
          $name = get_the_title($team_member->ID);
          $content = get_the_content($team_member->ID);
          $i++;
        ?>
      <div class="column py-6 px-5 is-6-mobile" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
        <figure class="image m-0">
          <?php echo $icon; ?>
        </figure>
        <p class="instructors-name mt-3 mb-4"><?php echo $name ?></p>
        <?php echo $content; ?>
        </ul>
      </div>
      <?php
        endforeach;
        wp_reset_postdata();
      else :
      endif; ?>
    </div>
  </div>
</section>
<!-- .instructors -->