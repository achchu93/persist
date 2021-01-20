import 'slick-carousel/slick/slick.min';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'jquery';

export default function () {
  jQuery(document).ready(function ($) {
    // http://kenwheeler.github.io/slick/
    const runSlick = () => {
      $('.work-slider__slider').slick({
        autoplay: 0,
        dots: true,
        arrows: false,
        infinite: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
    };

    runSlick();
  });
}
