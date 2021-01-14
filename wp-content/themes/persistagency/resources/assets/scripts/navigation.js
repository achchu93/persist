import 'jquery';
export default function() {
  jQuery(document).ready(function($) {
    $('.navigation__has-submenu').hover(
      function() {
        $(this)
          .find('.navigation__submenu')
          .show()
          .removeClass('-translate-y-3 scale-95 opacity-0')
          .addClass('translate-y-0 scale-100 opacity-100');
        $(this)
          .find('.navigation__arrow')
          .addClass('rotate-180');
      },
      function() {
        $(this)
          .find('.navigation__submenu')
          .hide()
          .removeClass('translate-y-0 scale-100 opacity-100')
          .addClass('-translate-y-3 scale-95 opacity-0');
      }
    );
  });
}
