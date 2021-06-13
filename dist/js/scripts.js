"use strict";

console.log('scripts js v1.0.1');
jQuery(document).ready(function ($) {
  var slideOptions = ['slide', 'slide-alt'];
  $('.hero-svg-bg').each(function () {
    var rand2 = Math.floor(Math.random() * 1 + 0.5);
    var rand15 = Math.floor(Math.random() * 22 + 10);
    $(this).css({
      // 'animation': slideOptions[rand2] + rand15 + 's ' + ' linear infinite',
      'animation-duration': rand15 + 's',
      'animation-name': slideOptions[rand2],
      'aniamtion-delay': '0',
      'animation-timing-function': 'linear',
      'animation-iteration-count': 'infinite'
    });
    console.log(rand15);
  });
});