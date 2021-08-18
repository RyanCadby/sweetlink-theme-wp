"use strict";

// jQuery(document).ready(function ($) {
jQuery(function ($) {
  $(window).on('load', function () {
    console.log('Sweet Link Scripts v1.0.1'); // Hero bg animation

    var slideOptions = ['slide', 'slide-alt'];
    $('.hero-svg-bg').each(function () {
      var rand2 = Math.floor(Math.random() * 1 + 0.5);
      var rand15 = Math.floor(Math.random() * 45 + 25);
      $(this).css({
        // 'animation': slideOptions[rand2] + rand15 + 's ' + ' linear infinite',
        'animation-duration': rand15 + 's',
        'animation-name': slideOptions[rand2],
        'aniamtion-delay': '0',
        'animation-timing-function': 'linear',
        'animation-iteration-count': 'infinite'
      });
    }); // append contact li

    var menuContactLink = '<li id="menu-item-contact" class="menu-item nav-item"><a id="contact-modal-show" href="#sl-contact"" class="nav-link">Contact</a></li>';
    $('#menu-primary-nav').append(menuContactLink); // contact link click

    $('#contact-modal-show, .contact-modal-show').on('click', function (e) {
      e.preventDefault();
      $('#contact-modal-section').fadeIn(300);
      $('html').css('overflow', 'hidden');
    });
    $('#contact-modal-close').on('click', function () {
      $('#contact-modal-section').fadeOut(300);
      $('html').css('overflow', 'auto');
      window.history.pushState({}, document.title, window.location.href.substr(0, window.location.href.lastIndexOf("/") + 1));
    }); // strike through variables

    var curr_scroll = $(window).scrollTop();
    var window_height = $(window).height();
    var bottom_of_screen = '';
    var bottom_of_target = '';
    var target_percentage_position = '';
    var target_height = '';
    var target_position = ''; /////////////////////////////
    // Home page functions
    ////////////////////////////

    if ($('body').hasClass('home')) {
      var target = $('.average-cont'); // sweet variables

      var sweet = $('.sweet-slide');
      var sweet_top_arr = [];
      var sweet_top = 0; // font size

      var sweet_font_size = '18';
      var sweet_font_size_suff = 'rem';
      var sweet_font_size_round;

      if ($('html').width() < 992) {
        sweet_font_size = '28';
        sweet_font_size_suff = 'vw';
      } // Sweet font sizes


      var sweet_counter = 1;
      sweet.each(function () {
        $('.p-sweet:nth-of-type(' + sweet_counter + ')').css('font-size', sweet_font_size + sweet_font_size_suff); // set position

        if (sweet_counter == 1) {
          sweet_top = 0;
        } else {
          sweet_top = $(this).position().top + 50 + sweet_top;
        }

        sweet_top_arr.push(sweet_top); // set font size

        sweet_font_size_round = Math.round((sweet_font_size - .2) * 10) / 10;
        sweet_font_size = sweet_font_size_round;
        ++sweet_counter;
      });
      console.log(sweet_top_arr); // fade in variables

      var dont_do_start = $('.col-average').offset().top + $('.col-average').outerHeight() + 100; // Text strike through animation

      $(document).scroll(function () {
        curr_scroll = $(window).scrollTop();
        target.each(function () {
          target_height = $(this).height();
          target_position = $(this).offset().top;
          bottom_of_screen = curr_scroll + window_height;
          bottom_of_target = target_position + target_height;
          target_percentage_position = (bottom_of_screen - bottom_of_target) / (window_height - window_height * .4) * 100;

          if ($(this).attr('data-animate') == 0) {
            if (bottom_of_screen >= bottom_of_target && target_percentage_position <= 100) {
              $(this).children('.average-strike').css('width', target_percentage_position + '%');
            } else if (target_percentage_position > 100) {
              $(this).children('.average-strike').css('width', 100 + '%');
              $(this).attr('data-animate', '1');
            } else {
              $(this).children('.average-strike').css('width', 0 + '%');
            }
          } else {
            $(this).children('.average-strike').css('width', 100 + '%');
          }
        }); // fade in don't do
        // var dont_do_end = 800;
        // if( curr_scroll > dont_do_start  && curr_scroll < (dont_do_start + dont_do_end) ){
        //     $('.row-dont-do').css('display', 'block');
        //     $('.row-dont-do').fadeIn(500, function(){
        //         $('.row-dont-do').css('opacity', '1');
        //     });
        // } else if(curr_scroll > (dont_do_start + dont_do_end) ){
        //     $('.row-dont-do').fadeOut(500, function(){
        //         $('.row-dont-do').css('opacity', '0');
        //     }); 
        // } else{
        //     $('.row-dont-do').fadeOut(500, function(){
        //         $('.row-dont-do').css('opacity', '0');
        //     });
        // }
        // sweet animation down screen

        var i = 0;
        sweet.each(function () {
          target_height = $(this).height();
          target_position = $(this).offset().top;
          bottom_of_target = target_position + target_height;
          bottom_of_screen = curr_scroll + window_height; // target_percentage_position = Math.floor(((bottom_of_screen - bottom_of_target)  / (window_height - (window_height * .6)) * 400));

          target_percentage_position = curr_scroll - $('.row-sweet').offset().top + window_height - 400;
          console.log(bottom_of_target);

          if (bottom_of_screen >= bottom_of_target && target_percentage_position <= sweet_top_arr[i] && target_percentage_position > 0) {
            // if we can see the div and if we have not scrolled past the item
            $(this).css('top', target_percentage_position + 'px');
          } else if (target_percentage_position > sweet_top_arr[i]) {
            // if we've scrolled past - set position top
            $(this).css('top', sweet_top_arr[i]);
          } else {
            $(this).css('top', 0);
          }

          i++;
        });
      });
    } /////////////////////////////////
    // services page functions
    /////////////////////////////////


    if ($('body').hasClass('page-template-template-services')) {
      // Services Image Positions
      var break_pos = $('#title-1').offset().top;
      var img_right = ($('body').width() - $('.container').innerWidth()) / 2;
      var services_offset_arr = [];
      var item_arr = [];
      $('.service-title').each(function (index, item) {
        services_offset_arr.push($(this).offset().top);
        $('#service-img-' + (index + 1)).attr('data-offset', $(this).offset().top); // $('#service-img-' + (index + 1) ).css('opacity', '0');
      });
      $(document).scroll(function () {
        curr_scroll = $(window).scrollTop();
        var service_pos;
        $(services_offset_arr).each(function (index, item) {
          if (curr_scroll >= item - 200) {
            if (item_arr.indexOf(item) == -1) {
              item_arr.push(item);
            }

            service_pos = item_arr.length; // $('.service-img-repeat-cont').fadeOut(500);
            // $('.service-img-repeat-cont').removeClass('d-none');

            if (service_pos >= 2) {
              $('#service-img-' + (service_pos - 1)).fadeOut(500);
            } // $('#service-img-' + service_pos).removeClass('d-none');


            $('#service-img-' + service_pos).fadeIn(200, function () {
              $('#service-img-' + service_pos).css('opacity', '1');
            });
          } else {
            if (item_arr.indexOf(item) > -1) {
              item_arr.splice(item_arr.indexOf(item), 1);
            }

            service_pos = item_arr.length;

            if (service_pos < 1) {
              $('[data-offset="' + services_offset_arr[0] + '"]').css('opacity', '1');
            } else {
              $('[data-offset="' + item + '"]').fadeOut(200, function () {
                $('[data-offset="' + item + '"]').css('opacity', '0');
              });
            }
          }
        });

        if (curr_scroll >= break_pos - 200) {
          $('.service-img-repeat-cont').css({
            position: 'fixed',
            top: '200px',
            right: img_right
          });
        } else {
          $('.service-img-repeat-cont').css({
            position: 'absolute',
            top: '0px',
            right: '0'
          });
        }
      });
    } /////////////////////////////////
    // about page functions
    /////////////////////////////////


    if ($('body').hasClass('page-template-template-about')) {
      // about page flourish positioning
      if ($('html').width() < 768) {
        console.log($(document).width());
        var about_hero_top = parseInt($('.section-about-hero').css('padding-top').slice(0, -2)) + $('.col-hero-text').outerHeight();
        $('.hero-right').css('top', about_hero_top);
      }
    } /////////////////////////////////
    // carousel functions
    /////////////////////////////////


    var item_height = 0;
    var carousel_height = 0;
    $('.carousel-item').each(function () {
      console.log($(this).outerHeight());
      carousel_height = item_height > $(this).outerHeight() ? item_height : $(this).outerHeight();
      item_height = $(this).outerHeight();
    });
    console.log(carousel_height);
    $('.carousel-inner').each(function () {
      $(this).css('height', carousel_height);
    });
  }); // end window ready

  $(document).on('click', function (e) {
    console.log(e.target);
  }); // open mobile menu

  $('#navbar-mobile').on("click", function () {
    if ($('.navbar').hasClass('active')) {
      $('.navbar-link-container').fadeOut('fast');
      $('.navbar').removeClass('active');
      $('.navbar .fa-times').addClass('d-none');
      $('.navbar .fa-bars').removeClass('d-none');
    } else {
      $('.navbar-link-container').css("display", "flex").hide().fadeIn('fast');
      $('.navbar').addClass('active');
      $('.navbar .fa-times').removeClass('d-none');
      $('.navbar .fa-bars').addClass('d-none');
    }
  });
}); // end jquery function