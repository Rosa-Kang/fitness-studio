<?php

/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer has-background-primary" role="contentinfo">
  <div class="columns">
    <div class="column is-full-mobile">
      <h3 class="pl-6 is-capitalized">Subscribe To Our Newsletter</h3>
      <form action="#">
      </form>
    </div>
    <div class="column is-full-mobile">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <?php wp_nav_menu(array('menu' => 'Left Footer Menu')); ?>
        </div>
        <div class="column is-4">
          <?php wp_nav_menu(array('menu' => 'Right Footer Menu')); ?>
          <div class="footer-contact-wrapper">
            <?php get_template_part('template-parts/icon/icons-social'); ?>
          </div>
        </div>
      </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>

</body>

</html>