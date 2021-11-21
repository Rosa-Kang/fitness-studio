/**
 * File: custom.js
 *
 * Templates: All
 *
 */
(function ($) {
  $(function () {
    // Start of Auto Add Rel to External Links -------------------
    addTargetBlankToExternalLinks();

    function addTargetBlankToExternalLinks() {
      $('a[href^="http"]')
        .not('a[href*="' + location.hostname + '"]')
        .attr({ target: '_blank', rel: 'noopener noreferrer' });
    }

    // Open all pdfs in a new tab
    $('a[target!="_blank"][href$=".pdf"]').attr({
      target: '_blank',
      title: 'Opens in a new window',
      rel: 'noopener noreferrer',
    });
    // End of Auto Add Rel to External Links ----------------

    // Start of FAQ Accordion --------------------
    $('.schema-faq-answer').css('display', 'none');
    $('.schema-faq-question').addClass('faq-closed');

    $('.schema-faq-question').click(function () {
      if ($(this).next().is(':visible')) {
        $(this).next().slideUp();
        $(this).removeClass('faq-opened');
        $(this).addClass('faq-closed');
      } else {
        $('.schema-faq-answer').slideUp();
        $(this).removeClass('faq-closed');
        $(this).next().slideDown();
        $(this).addClass('faq-opened');
      }
    }); // End of FAQ Accordion ----------------
  }); // End of Doc Ready -------------------

  // Start of Show More Button (Resources Page) -------------------
  $('.blog article').hide().slice(0, 4).show();

  $('.page-template-page-updates article').hide().slice(0, 3).show();

  $('#loadMore').click(function (e) {
    e.preventDefault();
    $('article:hidden').slice(0, 4).show();
    if ($('article:hidden').length === 0) {
      $('#loadMore').replaceWith("<p class='is-uppercase'>no more</p>");
    }
  });

  $('.bulletins li').hide().slice(0, 4).show();

  $('.bulletins #loadMore').click(function (e) {
    e.preventDefault();
    $('.bulletins li:hidden').slice(0, 4).show();
    if ($('.bulletins li:hidden').length === 0) {
      $('#loadMore').replaceWith("<p class='text-btn'>no more</p>");
    }
  });
})(jQuery);
