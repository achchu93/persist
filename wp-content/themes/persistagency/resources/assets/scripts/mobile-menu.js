import 'jquery';
export default function () {
  jQuery(document).ready(function ($) {

    // toggle
    $('.mobile-menu__toggle').click(function () {
      $('.mobile-menu').toggleClass('translate-x-full');
    });

    // show and hide sub-menu
    $('.menu-item-has-children').click(function () {
      $(this).toggleClass('open');
    });

  });
}
