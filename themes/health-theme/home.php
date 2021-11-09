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

    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>

    <section class="blog-container">
      <div class="container content-wrapper">
        <h4><?php echo get_the_title(); ?></h4>
      </div>
    </section>
    <?php endwhile;

    else :
      echo '<p data-aos="fade-up">No content found</p>';

    endif;

    ?>
    <?php get_template_part('template-parts/content/content', 'none'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>