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
<?php get_template_part('template-parts/instructors/instructors'); ?>
<?php get_template_part('template-parts/symmetric/symmetric'); ?>
<?php get_template_part('template-parts/section/recentBlog'); ?>


<?php get_footer(); ?>