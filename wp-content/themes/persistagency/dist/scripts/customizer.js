(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/scripts/customizer"],{

/***/ "./resources/assets/scripts/customizer.js":
/*!************************************************!*\
  !*** ./resources/assets/scripts/customizer.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * This file allows you to add functionality to the Theme Customizer
 * live preview. jQuery is readily available.
 *
 * {@link https://codex.wordpress.org/Theme_Customization_API}
 */

/**
 * Change the blog name value.
 *
 * @param {string} value
 */
wp.customize('blogname', function (value) {
  value.bind(function (to) {
    return $('.brand').text(to);
  });
});

/***/ }),

/***/ 1:
/*!******************************************************!*\
  !*** multi ./resources/assets/scripts/customizer.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\assets\scripts\customizer.js */"./resources/assets/scripts/customizer.js");


/***/ })

},[[1,"/scripts/manifest"]]]);
//# sourceMappingURL=customizer.js.map