"use strict";

var currHost = window.location.origin;

if (currHost.includes('local')) {
  currHost += '/sweetlink';
}

currHost += '/wp-content/themes/sweetlink/assets/lottie/';
var params = {
  container: document.getElementById('lottie-2'),
  path: currHost + 'deployment/data-phone-1.json',
  renderer: 'svg',
  loop: true,
  autoplay: true // animationData: animationData0

};
var anim;
anim = lottie.loadAnimation(params);