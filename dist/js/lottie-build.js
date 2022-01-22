"use strict";

var currHost = window.location.origin;

if (currHost.includes('local')) {
  currHost += '/sweetlink';
}

currHost += '/wp-content/themes/sweetlink/assets/lottie/';
var params = {
  container: document.getElementById('lottie-1'),
  path: currHost + 'build/data.json',
  renderer: 'svg',
  loop: true,
  autoplay: true // animationData: animationData

};
var anim;
anim = lottie.loadAnimation(params);