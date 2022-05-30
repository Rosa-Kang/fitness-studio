<?php

/**
 * The home template file.
 *
 * @package White_Canvas_Design_Theme
 */

get_header(); ?>
<?php get_template_part('template-parts/hero/hero'); ?>


<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="blog-container columns is-multiline p-6 is-flex is-justify-content-center">
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
      <article data-aos="fade-up" class="column is-5 p-5" id="post-<?php the_ID(); ?>">
        <div><?php the_post_thumbnail(); ?></div>
        <h2 class="subtitle is-capitalized"><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <a class="button is-uppercase button is-primary" href="<?php the_permalink($post_item['ID']) ?>">Read More</a>
      </article>
      <?php endwhile;
      else :
        echo '<p data-aos="fade-up">No content found</p>';

      endif;

      ?>
    </section>
    <?php get_template_part('template-parts/section/button-show-more'); ?>
  </main>
</div>

<?php get_footer(); ?>