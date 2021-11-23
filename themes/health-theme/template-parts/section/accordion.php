<?php

/**
 * Template part for displaying FAQ accordion.
 *
 * @package White_Canvas_Design_Theme
 */

?>
<?php

// *Repeater
// accordion_repeater
// *Sub-Fields
// accordion_header
// accordion_content

?>

<section class="faq-accordion py-6">
  <?php
  // check if the repeater field has rows of data
  if (have_rows('accordion_repeater')) :


    // loop through the rows of data for the tab header
    while (have_rows('accordion_repeater')) : the_row();

      $header = get_sub_field('accordion_header');
      $content = get_sub_field('accordion_content');

  ?>

  <div class="container schema-faq wp-block-yoast-faq-block">
    <div class="schema-faq-section m-5" id="faq-question-1626813334424"><strong
        class="schema-faq-question"><?php echo $header; ?></strong>
      <p class="schema-faq-answer"><?php echo $content; ?></p>
    </div>

    <?php
    endwhile; //End the loop

  else :

    // no rows found
    echo 'Come back tomorrow';

  endif; ?>
</section>