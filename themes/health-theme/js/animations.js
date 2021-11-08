/**
 * File animations.js.
 *
 * Settings for Animate on Scroll (aos) and Mobile Menu.
 * https://github.com/michalsnik/aos/tree/v2
 */

(function ($) {
  $(function () {
    // Start of Popout Menu -------------------------
    $('#menu-bars').click(function(){
      $(this).toggleClass('toggled');

      if ($(this).hasClass('toggled')){
        $(this).addClass('change');
        $('#popout').addClass('show');
      } else {
        $(this).removeClass('change');
        $('#popout').removeClass('show');
      }
    });
      
    // Detect click outside mobile menu
    $(document).mouseup(function (e) {
      var menu = $('.popout-menu');

      if (!menu.is(e.target) && menu.has(e.target).length === 0) {
        $('#popout').removeClass('show');
        $('#menu-bars').removeClass('change');
      }
    });
    // End of Popout Menu -----------------------

    // Start of Animate on Scroll ---------------------
    // Animations added to elements without data-aos attribute in html element
    $(
      '.intro p'
    ).attr({
      'data-aos': 'fade-zoom-in',
      'data-aos-easing': 'ease',
      'data-aos-offset': '0',
    });

    $('.accordion-header p, .accordion').removeAttr('data-aos');

    AOS.init({
      duration: 1300,
      once: false,
      mirror: true
    });

    $(window).on('load', function () {
      AOS.refresh();
    });
    // End of Animate on Scroll ----------------------
  }); // end of doc ready
})(jQuery);
