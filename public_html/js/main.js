







$(document).ready(function() {

    // Full Page Scroll
    $('#fullPage').pagepiling({
        sectionsColor: [],
        afterLoad: function(anchorLink, index){

                    $('.imit-click').removeClass('active-imit');
                    $('.imit-click[data-id='+index+']').addClass('active-imit');
             },
        onLeave: function (prev, next) {
            if(prev === 1) {
                setTimeout(function(){
                    $('.section-screen__1anime').addClass('classname-0');
                }, 1000);
            } else if(next === 1) {
                $('.section-screen__1anime').removeClass('classname-0');
            }
            // create a jQuery event
            e = $.Event('mousemove');

            // set coordinates
            e.pageX = 1000;
            e.pageY = 1000;

// trigger event - must trigger on document
			$(document).trigger(e);
            /*$('section').addClass('locked-scroll');
            setTimeout(function(){
                $('section').removeClass('locked-scroll');
            }, 1000);*/

        }, 
        scrollingSpeed: 300,
        navigation: {
            'position': 'left',
            'textColor': '#e7ebf2',
            'bulletsColor': '#e7ebf2',
            'tooltips': ['Home', 'УЧАСТВУЙТЕ В ICO', 'АНОНИМНАЯ АНТИСОЦИАЛЬНАЯ СЕТЬ', 'Что уже сделанно', 'Что планируется сделать?', 'ПРОЕКТ', 'ОТКРЫТАЯ ПРОДАЖА ТОКЕНОВ СЕТИ', 'ДОРОЖНАЯ КАРТА', 'КОМАНДА', 'СВЯЗАТЬСЯ С НАМИ'],
             
            
        }
    });



$.fn.pagepiling.moveTo('.section-screen__5');




 // Change Menu Color
    var iconShare = $('.icon-share'),
        iconStep = $('.icon-step');

    $(window).on('mousemove', function() {

        if ( $('#pp-nav li:nth-child(1) a,\
                #pp-nav li:nth-child(5) a,\
                #pp-nav li:nth-child(8) a'
                ).hasClass('active') ) {
            $('.fixed-top__menu').removeClass('black');
        } else {
            $('.fixed-top__menu').addClass('black');
        };
    });

    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(4) a,\
                #pp-nav li:nth-child(6) a,\
                #pp-nav li:nth-child(7) a,\
                #pp-nav li:nth-child(9) a,\
                #pp-nav li:nth-child(10) a').hasClass('active') ) {
            $('.logo-main').addClass('active');
        } else {
            $('.logo-main').removeClass('active');
        };
    });


    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(4) a,\
                #pp-nav li:nth-child(6) a,\
                #pp-nav li:nth-child(9) a,\
                #pp-nav li:nth-child(7) a').hasClass('active') ) {
            $('.btn-lang').addClass('active');
        } else {
            $('.btn-lang').removeClass('active');
        };
    });

    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(7) a,\
                #pp-nav li:nth-child(4) a,\
                #pp-nav li:nth-child(9) a,\
                #pp-nav li:nth-child(10) a')
            .hasClass('active') ) {
            iconShare.addClass('active');
            iconStep.addClass('active');
        } else {
            iconShare.removeClass('active');
            iconStep.removeClass('active');
        };
    });
    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(1) a,\
            #pp-nav li:nth-child(3) a,\
            #pp-nav li:nth-child(5) a,\
            #pp-nav li:nth-child(6) a,\
            #pp-nav li:nth-child(8) a,\
            #pp-nav li:nth-child(10) a')
            .hasClass('active') ) {
            iconShare.removeClass('active');
        } else {
            iconShare.addClass('active');
        };
    });

/*
const colors = function() {
    if ( $('#pp-nav li:nth-child(1) a,\
                #pp-nav li:nth-child(5) a,\
                #pp-nav li:nth-child(8) a'
                ).hasClass('active') ) {
            $('.fixed-top__menu').removeClass('black');
        } else {
            $('.fixed-top__menu').addClass('black');
        };
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(4) a,\
                #pp-nav li:nth-child(6) a,\
                #pp-nav li:nth-child(7) a,\
                #pp-nav li:nth-child(9) a,\
                #pp-nav li:nth-child(10) a').hasClass('active') ) {
            $('.logo-main').addClass('active');
        } else {
            $('.logo-main').removeClass('active');
        };
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(4) a,\
                #pp-nav li:nth-child(6) a,\
                #pp-nav li:nth-child(9) a,\
                #pp-nav li:nth-child(7) a').hasClass('active') ) {
            $('.btn-lang').addClass('active');
        } else {
            $('.btn-lang').removeClass('active');
        };
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(7) a,\
                #pp-nav li:nth-child(7) a').hasClass('active') ) {
            iconShare.addClass('active');
            iconStep.addClass('active');
        } else {
            iconShare.removeClass('active');
            iconStep.removeClass('active');
        };
}*/

   
    


    // if ( $('#pp-nav li a[data-tooltip="Page 1"]').hasClass('active') ) {
    //     $('.fixed-top__menu').addClass('black');
    // } else {
    //     $('.fixed-top__menu').removeClass('black');
    // }

    // Slider
    $('.slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        asNavFor: '.slider-mini',
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2
              }
            }
        ]
    });

    $('.slider-mini').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        asNavFor: '.slider',
        focusOnSelect: true
    });

    // Popup
    $(".fadeScreen, .popup-close").on('click', function() {
        $(".fadeScreen").fadeOut(300);
        $(".popup-box").fadeOut(300);
        return false;
    });
    $(".popup-open").click(function() {
        $('.popup-box.'+$(this).attr('data-open')).fadeIn(200);
        $(".fadeScreen").fadeIn(300);
        return false;
    });
     
    // Tabs Menu
    $(".tabs-menu").hide();
    $(".tabs-menu:first").show();   
       $(".tabs-content li:first").addClass("active").show(); 
       $(".tabs-content li").click(function() {
            $(".tabs-content li").removeClass("active"); 
            $(this).addClass("active");
            $(".tabs-menu").hide(); 
            var activeTab = $(this).find("a").attr("href"); 
            $(activeTab).fadeIn(); 
       return false;
    });

    // Accordion
    $('.accordion-open').click(function() {
        var wrap = $('.accordion-wrap'),
            text = $('.accordion-text'),
            textCurrent = $(this).closest(wrap).find(text),
            wrapCurrent = $(this).closest(wrap);
        wrap.not(wrapCurrent).find(text).slideUp();
        textCurrent.slideToggle();
        wrap.not(wrapCurrent).find('.accordion-close').hide();
        wrapCurrent.find('.accordion-close').toggle();
    });
    $('.accordion-close').click(function() {
        $(this).prev('.accordion-text').slideUp();
        $(this).hide();
    });

});





$(".dropdown span a").on('click', function() {
  $(".dropdown  ul").slideToggle('fast');
});

$(".dropdown  ul li a").on('click', function() {
  $(".dropdown  ul").hide();
});

function getSelectedValue(id) {
  return $("#" + id).find("span a span.value").html();
}

$(document).bind('click', function(e) {
  var $clicked = $(e.target);
  if (!$clicked.parents().hasClass("dropdown")) $(".dropdown  ul").hide();
});

$('.mutliSelect input[type="checkbox"]').on('click', function() {

  var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
    title = $(this).val() + ",";

  if ($(this).is(':checked')) {
    var html = '<span title="' + title + '">' + title + '</span>';
    $('.multiSel').append(html);
    $(".hida").hide();
  } else {
    $('span[title="' + title + '"]').remove();
    var ret = $(".hida");
    $('.dropdown span a').append(ret);

  }
});



$(document).ready(function () {

        $('.no-scroll-pagepiling').scroll(function (e) {
            chk_scroll(e, function (direction) {
                if (!direction)
                    $.fn.pagepiling.moveSectionUp();
                else
                    $.fn.pagepiling.moveSectionDown();
            });
        });

        function chk_scroll(e, callback) {
            var elem = $(e.currentTarget);
            if (elem[0].scrollHeight - elem.scrollTop() == elem.outerHeight()) {
                callback(1);
            }else if (elem.scrollTop() === 0){
               callback(0);
            }
        }

        $('.imit-click').click(function () {
            var it = Number($(this).data('id'));
            $.fn.pagepiling.moveTo(it);
        });

//        $('.no-scroll-pagepiling').hover(function () {
//            $.fn.pagepiling.setAllowScrolling(false);
//        }, function () {
//            $.fn.pagepiling.setAllowScrolling(true);
//        });
//
//        $('.no-scroll-pagepiling').scroll(function () {
//
//            console.log( $(this).scrollTop(), $(this).height() );
//            if ((Number($(this).prop("scrollHeight") - $(this).innerHeight()) == Number($(this).scrollTop())) || Number($(this).scrollTop()) == 0) {
//                $.fn.pagepiling.setAllowScrolling(true);
//            } else {
//                $.fn.pagepiling.setAllowScrolling(false);
//            }
//        });

        $('.icon-step').click(function () {
            $.fn.pagepiling.moveSectionDown();
        });

    });


    $("#bbt").click(function () {
        $("#bbt").toggleClass("activ-burg");
    });
    $("#lang").click(function () {
        $("#lang").toggleClass("activ-lang");
    });