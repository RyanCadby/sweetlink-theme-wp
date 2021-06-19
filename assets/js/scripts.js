// jQuery(document).ready(function ($) {
    jQuery(function ($) {
        $(window).on('load', function () {
    console.log('Sweet Link Scripts v1.0.1');

    // Hero bg animation
    var slideOptions = ['slide', 'slide-alt'];
    $('.hero-svg-bg').each(function(){
        var rand2 = Math.floor((Math.random() * 1) + 0.5);
        var rand15 = Math.floor((Math.random() * 45) + 25);
        $(this).css({
            // 'animation': slideOptions[rand2] + rand15 + 's ' + ' linear infinite',
            'animation-duration': rand15 + 's',
            'animation-name': slideOptions[rand2],
            'aniamtion-delay': '0',
            'animation-timing-function': 'linear',
            'animation-iteration-count': 'infinite',

        });
    });

    // append contact li
    var menuContactLink = '<li id="menu-item-contact" class="menu-item nav-item"><a id="contact-modal-show" href="#sl-contact"" class="nav-link">Contact</a></li>';
    $('#menu-primary-nav').append(menuContactLink);

    // contact link click
    $('#contact-modal-show').on('click', function(){
        $('#contact-modal-section').fadeIn(300);
        $('html').css('overflow', 'hidden');
    });


    // contact modal close
    // $('body').on('click', function(e){
    //     if(e.target.parentElement.id == 'contact-modal-close'){
    //         $('#contact-modal-section').fadeOut(300);
    //         $('html').css('overflow', 'auto');
    //     }
    // });

    $('#contact-modal-close').on('click', function(){
        $('#contact-modal-section').fadeOut(300);
        $('html').css('overflow', 'auto');
    });






});
});

