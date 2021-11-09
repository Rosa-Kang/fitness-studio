<?php

/**
 * The main template file.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?>


<?php get_template_part('template-parts/hero/hero'); ?>
<?php get_template_part('template-parts/callout/callout'); ?>
<?php get_template_part('template-parts/services/services'); ?>
<?php get_template_part('template-parts/card/cards-team-members'); ?>
<?php get_template_part('template-parts/section/symmetric'); ?>

<?php get_footer(); ?>