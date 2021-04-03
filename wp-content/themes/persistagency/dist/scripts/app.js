(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/scripts/app"],{

/***/ "./resources/assets/scripts/app.js":
/*!*****************************************!*\
  !*** ./resources/assets/scripts/app.js ***!
  \*****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! alpinejs */ "./node_modules/alpinejs/dist/alpine.js");
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(alpinejs__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _smooth_scroll__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./smooth-scroll */ "./resources/assets/scripts/smooth-scroll.js");
/* harmony import */ var _navigation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./navigation */ "./resources/assets/scripts/navigation.js");
/* harmony import */ var _mobile_menu__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./mobile-menu */ "./resources/assets/scripts/mobile-menu.js");
/* harmony import */ var _work_slider__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./work-slider */ "./resources/assets/scripts/work-slider.js");





Object(_smooth_scroll__WEBPACK_IMPORTED_MODULE_1__["default"])();
Object(_navigation__WEBPACK_IMPORTED_MODULE_2__["default"])();
Object(_mobile_menu__WEBPACK_IMPORTED_MODULE_3__["default"])();
Object(_work_slider__WEBPACK_IMPORTED_MODULE_4__["default"])();

/***/ }),

/***/ "./resources/assets/scripts/mobile-menu.js":
/*!*************************************************!*\
  !*** ./resources/assets/scripts/mobile-menu.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* harmony default export */ __webpack_exports__["default"] = (function () {
  jQuery(document).ready(function ($) {
    // toggle
    $('.mobile-menu__toggle').click(function () {
      $('.mobile-menu').toggleClass('translate-x-full');
    }); // show and hide sub-menu

    $('.menu-item-has-children').click(function () {
      $(this).toggleClass('open');
    });
  });
});

/***/ }),

/***/ "./resources/assets/scripts/navigation.js":
/*!************************************************!*\
  !*** ./resources/assets/scripts/navigation.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* harmony default export */ __webpack_exports__["default"] = (function () {
  jQuery(document).ready(function ($) {
    $('.navigation__has-submenu').hover(function () {
      $(this).find('.navigation__submenu').show().removeClass('-translate-y-3 scale-95 opacity-0').addClass('translate-y-0 scale-100 opacity-100');
      $(this).find('.navigation__arrow').addClass('rotate-180');
    }, function () {
      $(this).find('.navigation__submenu').hide().removeClass('translate-y-0 scale-100 opacity-100').addClass('-translate-y-3 scale-95 opacity-0');
    });
  });
});

/***/ }),

/***/ "./resources/assets/scripts/smooth-scroll.js":
/*!***************************************************!*\
  !*** ./resources/assets/scripts/smooth-scroll.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! smooth-scroll */ "./node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js");
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(smooth_scroll__WEBPACK_IMPORTED_MODULE_0__);

/* harmony default export */ __webpack_exports__["default"] = (function () {
  // smooth scroll
  // https://github.com/cferdinandi/smooth-scroll
  new smooth_scroll__WEBPACK_IMPORTED_MODULE_0___default.a('a[href*="#"]');
});

/***/ }),

/***/ "./resources/assets/scripts/work-slider.js":
/*!*************************************************!*\
  !*** ./resources/assets/scripts/work-slider.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var slick_carousel_slick_slick_min__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! slick-carousel/slick/slick.min */ "./node_modules/slick-carousel/slick/slick.min.js");
/* harmony import */ var slick_carousel_slick_slick_min__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(slick_carousel_slick_slick_min__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var slick_carousel_slick_slick_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! slick-carousel/slick/slick.css */ "./node_modules/slick-carousel/slick/slick.css");
/* harmony import */ var slick_carousel_slick_slick_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(slick_carousel_slick_slick_css__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var slick_carousel_slick_slick_theme_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! slick-carousel/slick/slick-theme.css */ "./node_modules/slick-carousel/slick/slick-theme.css");
/* harmony import */ var slick_carousel_slick_slick_theme_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(slick_carousel_slick_slick_theme_css__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_3__);




/* harmony default export */ __webpack_exports__["default"] = (function () {
  jQuery(document).ready(function ($) {
    // http://kenwheeler.github.io/slick/
    var runSlick = function runSlick() {
      $('.work-slider__slider').slick({
        autoplay: 0,
        dots: true,
        arrows: false,
        infinite: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    };

    runSlick();
  });
});

/***/ }),

/***/ "./resources/assets/styles/app.css":
/*!*****************************************!*\
  !*** ./resources/assets/styles/app.css ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/styles/editor.css":
/*!********************************************!*\
  !*** ./resources/assets/styles/editor.css ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**********************************************************************************************************************!*\
  !*** multi ./resources/assets/scripts/app.js ./resources/assets/styles/editor.css ./resources/assets/styles/app.css ***!
  \**********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/assets/scripts/app.js */"./resources/assets/scripts/app.js");
__webpack_require__(/*! /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/assets/styles/editor.css */"./resources/assets/styles/editor.css");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/assets/styles/app.css */"./resources/assets/styles/app.css");


/***/ }),

/***/ "jquery":
/*!**********************************!*\
  !*** external {"this":"jQuery"} ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["jQuery"]; }());

/***/ })

},[[0,"/scripts/manifest","/scripts/vendor"]]]);
//# sourceMappingURL=app.js.map