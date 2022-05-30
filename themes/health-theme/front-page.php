<?php

/**
 * The main template file.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?>


<?php get_template_part('template-parts/hero/hero'); ?>
<?php get_template_part('template-parts/intro/intro'); ?>
<?php get_template_part('template-parts/services/services'); ?>
<?php get_template_part('template-parts/team-members/team-members'); ?>
<?php get_template_part('template-parts/callout/callout-right'); ?>
<?php get_template_part('template-parts/section/recentBlog'); ?>


<?php get_footer(); ?>