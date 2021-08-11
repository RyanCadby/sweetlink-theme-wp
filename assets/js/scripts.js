// jQuery(document).ready(function ($) {
jQuery(function ($) {
    $(window).on('load', function () {
    console.log('Sweet Link Scripts v1.0.1');

    // Hero bg animation
    var slideOptions = ['slide', 'slide-alt'];
    $('.hero-svg-bg').each(function(){
        var rand2 = Math.floor((Math.random() * 1) + 0.5);
        var rand15 = Math.floor((Math.random() * 45) + 25);
        $(this).css(
            {
                // 'animation': slideOptions[rand2] + rand15 + 's ' + ' linear infinite',
                'animation-duration': rand15 + 's',
                'animation-name': slideOptions[rand2],
                'aniamtion-delay': '0',
                'animation-timing-function': 'linear',
                'animation-iteration-count': 'infinite',
            }
        );
    });

    // append contact li
    var menuContactLink = '<li id="menu-item-contact" class="menu-item nav-item"><a id="contact-modal-show" href="#sl-contact"" class="nav-link">Contact</a></li>';
    $('#menu-primary-nav').append(menuContactLink);

    // contact link click
    $('#contact-modal-show').on('click', function(){
        $('#contact-modal-section').fadeIn(300);
        $('html').css('overflow', 'hidden');
    });

    $('#contact-modal-close').on('click', function(){
        $('#contact-modal-section').fadeOut(300);
        $('html').css('overflow', 'auto');
        window.history.pushState({}, document.title, window.location.href.substr(0, window.location.href.lastIndexOf("/") + 1));
    });




    // function sl_normal_animate(target){
    //     var curr_scroll = $(window).scrollTop();
    //     var window_height = $(window).height();
    //     var doc_height = $(document).height();
    //     var target_height = target.height();
    //     var target_width = target.width();
    //     var target_position = $(target).offset().top;

    //     console.log('curr_scroll: ' + curr_scroll);
    //     console.log('target_position: ' + target_position);
    // }

    // $(document).scroll( sl_normal_animate($('.average-cont')) );
    // $(document).scroll( function(){
    //     var target = $('.average-cont');
    //     var curr_scroll = $(window).scrollTop();
    //     var window_height = $(window).height();
    //     var doc_height = $(document).height();
    //     var target_height = target.height();
    //     var target_width = target.width();
    //     var target_position = $(target).offset().top;

    //     var bottom_of_screen = curr_scroll + window_height;
    //     var bottom_of_target = target_position + target_height;
    //     var target_percentage_position = ((bottom_of_screen - bottom_of_target)  / (window_height - (window_height * .4)) * 100);

    //     console.log('curr_scroll: ' + bottom_of_screen);
    //     console.log('target_position: ' + bottom_of_target);
    //     console.log('target_percentage: ' + target_percentage_position);
    //     console.log('start: ' + (bottom_of_screen - bottom_of_target) );
    //     console.log('percent: ' + ((bottom_of_screen - bottom_of_target))  / (window_height - (window_height * .4)) + '%');

        

    //     if( bottom_of_screen >= bottom_of_target && target_percentage_position <= 100 ){
    //         $('.average-strike').css('width', target_percentage_position + '%');
    //     } else if( target_percentage_position > 100){
    //         $('.average-strike').css('width', 100 + '%');
    //     } else{
    //         $('.average-strike').css('width', 0 + '%');
    //     }
    // });

    // strike through variables
    var target = $('.average-cont');
    var curr_scroll = $(window).scrollTop();
    var window_height = $(window).height();
    var bottom_of_screen = '';
    var bottom_of_target = '';
    var target_percentage_position = '';
    var target_height = '';
    var target_position = '';

    // sweet variables
    var sweet = $('.sweet-slide');
    var sweet_top_arr = [];
    var sweet_top = 0;
    // font size
    var sweet_font_size = '22';
    var sweet_font_size_suff = 'rem';
    var sweet_font_size_round;
    if( $('html').width() < 992){
        sweet_font_size = '28';
        sweet_font_size_suff = 'vw'
    }
    console.log($('html').width());
    
    


    // $('.p-sweet:first-of-type').css('font-size', sweet_font_size + 'vw');
    var sweet_counter = 1;
    sweet.each(function(){
        $('.p-sweet:nth-of-type(' + sweet_counter + ')').css('font-size', sweet_font_size + sweet_font_size_suff);
        // set position
        sweet_top = $(this).position().top + 50 + sweet_top;
        sweet_top_arr.push(sweet_top);
        // set font size
        sweet_font_size_round = Math.round((sweet_font_size - .2) * 10) / 10;
        sweet_font_size = sweet_font_size_round;
        ++sweet_counter;
    });

    // Text strike through animation
    $(document).scroll( function(){
        curr_scroll = $(window).scrollTop();

        target.each(function(){
            target_height = $(this).height();
            target_position = $(this).offset().top;

            bottom_of_screen = curr_scroll + window_height;
            bottom_of_target = target_position + target_height;
            target_percentage_position = ((bottom_of_screen - bottom_of_target)  / (window_height - (window_height * .4)) * 100);

            if( $(this).attr('data-animate') == 0 ){
                if( bottom_of_screen >= bottom_of_target && target_percentage_position <= 100 ){
                    $(this).children('.average-strike').css('width', target_percentage_position + '%');
                } else if( target_percentage_position > 100){
                    $(this).children('.average-strike').css('width', 100 + '%');
                    $(this).attr('data-animate', '1');
                } else{
                    $(this).children('.average-strike').css('width', 0 + '%');
                }
            } else{
                $(this).children('.average-strike').css('width', 100 + '%');
            }
        });

        var i = 0;
        sweet.each(function(){
            target_height = $(this).height();
            target_position = $(this).offset().top;

            bottom_of_screen = curr_scroll + window_height;
            bottom_of_target = target_position + target_height;
            target_percentage_position = Math.floor(((bottom_of_screen - bottom_of_target)  / (window_height - (window_height * .6)) * 400));

            // console.log('bottom of screen: ' + bottom_of_screen);
            // console.log('bottom of target: ' + bottom_of_target);
            // console.log('target percentage position: ' + target_percentage_position);
            if( bottom_of_screen >= bottom_of_target && target_percentage_position <= sweet_top_arr[i] ){
                $(this).css('top', target_percentage_position);
            } else if( target_percentage_position > sweet_top_arr[i]){
                $(this).css('top', sweet_top_arr[i]);
            } else{
                $(this).css('top', 0);
            }
            i++;
        });


    }); // end scroll function


    // about page flourish positioning
    if( $('html').width() < 768){
        console.log($(document).width())
        var about_hero_top = parseInt($('.section-about-hero').css('padding-top').slice(0, -2)) + $('.col-hero-text').outerHeight();
        $('.hero-right').css('top', about_hero_top);
    }
    



    }); // end window ready



    $(document).on('click', function(e){
        console.log(e.target);
    });
    // open mobile menu
    $('#navbar-mobile').on("click", function() {
        if( $('.navbar').hasClass('active') ){
            $('.navbar-link-container').fadeOut('fast');
            $('.navbar').removeClass('active');
            $('.navbar .fa-times').addClass('d-none');
            $('.navbar .fa-bars').removeClass('d-none');
        } else{
            $('.navbar-link-container').css("display", "flex").hide().fadeIn('fast');
            $('.navbar').addClass('active');
            $('.navbar .fa-times').removeClass('d-none');
            $('.navbar .fa-bars').addClass('d-none');
        }
    });
    

}); // end jquery function

