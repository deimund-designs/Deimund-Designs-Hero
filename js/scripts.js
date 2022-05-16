jQuery.noConflict();
jQuery(document).ready(function ($) {

  jQuery(".footer-spacer").css({ 'height': (jQuery(".site-footer").height() + 20 + 'px') });
  jQuery(window).resize(function () {
    jQuery(".footer-spacer").css({ 'height': (jQuery(".site-footer").height() + 'px') });
  });


});