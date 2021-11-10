<?php

/**
 * The home template file.
 *
 * @package White_Canvas_Design_Theme
 */

get_header(); ?>
<?php get_template_part('template-parts/hero/hero'); ?>


<?php
// TODO: Add variables
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="blog-container columns is-multiline p-6 is-flex is-justify-content-center">
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
      <div class="column is-5 p-5">
        <div><?php the_post_thumbnail(); ?></div>
        <h3 class="is-capitalized"><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <a class="button is-uppercase button is-primary" href="<?php the_permalink($post_item['ID']) ?>">Read More</a>
      </div>
      <?php endwhile;
      else :
        echo '<p data-aos="fade-up">No content found</p>';

      endif;

      ?>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>