
var currHost = window.location.origin;
if(currHost.includes('local')){
    currHost += '/sweetlink';
}
currHost += '/wp-content/themes/sweetlink/assets/lottie/';

var params = {
    name: "design",
    container: document.getElementById('lottie-0'),
    path: currHost + 'design/sls-svg-outline.json',
    renderer: 'svg',
    loop: true,
    autoplay: true,
    // animationData: animationData0
};

var anim;
anim = lottie.loadAnimation(params);
anim.setDirection(-1);