<?php

/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer has-background-primary py-6 px-0" role="contentinfo">
  <div class="columns is-full-mobile">
    <div class="column is-flex-tablet">
      <div class="column has-text-centered-mobile">
        <h3 class="is-capitalized">Subscribe To Our Newsletter</h3>
        <form class="has-background-primary py-5" action="#">
          <input class="mt-2 mb-2" type="text" placeholder="Name">
          <input class="mt-2 mb-2" type="email" placeholder="Email">
          <input class="mt-2 button is-success" type="Submit" name="Subscribe">
        </form>
      </div>
      <div class="column is-flex">
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
          whitecanvasdesign.ca and positec.com</a></p>
    </div>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>

</body>

</html>