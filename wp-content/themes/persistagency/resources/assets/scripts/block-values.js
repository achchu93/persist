import 'jquery';

export default function () {
  jQuery(document).ready(function ($) {
    $('.block-values__control').click(function () {
      $('.block-values__item').removeClass('block').addClass('hidden');
      const el = $(this).data('target');
      $(`#${el}`).removeClass('hidden').addClass('block');
    });
  });
}
