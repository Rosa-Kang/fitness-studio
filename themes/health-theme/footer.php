<?php

/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer has-background-primary wrapper" role="contentinfo">
  <div class="container is-vcentered">
    <div class="column is-flex-tablet">
      <div class="column has-text-centered-mobile">
        <p class="footer-title is-capitalized">Subscribe To Our Newsletter</p>
        <form class="has-background-primary mt-4" action="#">
          <input class="placeholder mb-4" type="text" placeholder="Name">
          <input class="placeholder mb-5" type="email" placeholder="Email">
          <input class="mt-2 button is-success" type="submit" value="Subscribe">
        </form>
      </div>
      <div class="column is-flex">
        <div class="column is-0-mobile p-0"></div>
        <div class="column">
          <?php wp_nav_menu(array('menu' => 'Left Footer Menu')); ?>
        </div>
        <div class="column">
          <?php wp_nav_menu(array('menu' => 'Right Footer Menu')); ?>
          <div class="ml-4 footer-contact-wrapper">
            <?php get_template_part('template-parts/icon/icons-social'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="column copyright has-text-centered px-0">
      <p>Privacy policy</p>
      <p><a href="privacy-policy" target="_blank">© 2021 Jane’s Pharmacy. All rights reserved. Website designed by
          whitecanvasdesign.ca</a></p>
    </div>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>

</body>

</html>