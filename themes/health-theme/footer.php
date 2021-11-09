<?php

/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer has-background-primary pt-5 pb-6" role="contentinfo">
  <div>
    <div class="columns">
      <div class="column is-full-mobile">
        <h3 class="pl-6 is-capitalized">Subscribe To Our Newsletter</h3>
        <form class="has-background-primary pl-6" action="#">
          <input class="mt-2 mb-2" type="text" placeholder="Name">
          <input class="mt-2 mb-2" type="email" placeholder="Email">
          <input class="mt-2 button is-success" type="Submit" name="Subscribe">
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
    </div>
    <div class="copyright has-text-centered">
      <p>Privacy policy</p>
      <p><a href="privacy-policy" target="_blank">© 2021 Jane’s Pharmacy. All rights reserved. Website designed by
          whitecanvasdesign.ca and positec.com</a></p>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>

</body>

</html>