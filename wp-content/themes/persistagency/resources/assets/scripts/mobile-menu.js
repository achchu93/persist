import 'jquery';
export default function() {
  jQuery(document).ready(function($) {
    $('.mobile-menu__open').click(function() {
      $('.mobile-menu')
        .removeClass('w-0')
        .addClass('w-full');
    });

    $('.mobile-menu__close').click(function() {
      $('.mobile-menu')
        .removeClass('w-full')
        .addClass('w-0');
    });
  });
}
