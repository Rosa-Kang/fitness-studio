<?php

/**
 * The home template file.
 *
 * @package White_Canvas_Design_Theme
 */

get_header(); ?>

<?php
// TODO: Add variables
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php get_template_part('template-parts/hero/hero'); ?>

    <?php if (have_posts()) : ?>

    <section class="blog-container">
      <div class="container content-wrapper">

      </div>
    </section>

    <?php else : ?>

    <?php get_template_part('template-parts/content/content', 'none'); ?>

    <?php endif; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>