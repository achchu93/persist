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

    var scrolled = false;
    var previousScroll = 0;
    var header = $('#pageHeader');
    var headerOffset = header.offset().top + header.height();
    $(window).on('scroll', function () {
		  scrolled = true;
	  });

    setInterval(function() {
      if (scrolled) {
        var currentScroll = $(window).scrollTop();
        if( Math.abs( previousScroll - currentScroll ) <= 5 ){
          return;
        }
        console.log(currentScroll, headerOffset);
        if ((currentScroll > previousScroll && currentScroll > headerOffset) || (currentScroll < headerOffset)) {
          header.removeClass('sticked-menu');
        }else if (currentScroll + $(window).height() < $(document).height()) {
          header.addClass('sticked-menu');
        }

        previousScroll = currentScroll;
        scrolled = false;
      }
    }, 250);


  });
}
