
var currHost = window.location.origin;
if(currHost.includes('local')){
    currHost += '/sweetlink';
}
currHost += '/wp-content/themes/sweetlink/assets/lottie/';

var params = {
    container: document.getElementById('lottie-3'),
    path: currHost + 'qa/hand-stamp.json',
    renderer: 'svg',
    loop: true,
    autoplay: true,
    // animationData: animationData0
};

var anim;

anim = lottie.loadAnimation(params);