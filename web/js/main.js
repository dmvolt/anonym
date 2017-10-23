$(document).ready(function() {

    // Full Page Scroll
    $('#fullPage').pagepiling({
        sectionsColor: [],
        navigation: {
            'position': 'left',
            'textColor': '#e7ebf2',
            'bulletsColor': '#e7ebf2',
            'tooltips': ['Screen 1', 'Screen 2', 'Screen 3', 'Screen 4', 'Screen 5', 'Screen 6', 'Screen 7', 'Screen 8', 'Screen 9']
        }
    });

    // Change Menu Color
    var iconShare = $('.icon-share'),
        iconStep = $('.icon-step');

    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(1) a,\
                #pp-nav li:nth-child(7) a').hasClass('active') ) {
            $('.fixed-top__menu').removeClass('black');
        } else {
            $('.fixed-top__menu').addClass('black');
        };
    });

    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(5) a,\
                #pp-nav li:nth-child(6) a,\
                #pp-nav li:nth-child(8) a,\
                #pp-nav li:nth-child(9) a').hasClass('active') ) {
            $('.logo-main').addClass('active');
        } else {
            $('.logo-main').removeClass('active');
        };
    });

    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(5) a,\
                #pp-nav li:nth-child(6) a,\
                #pp-nav li:nth-child(8) a').hasClass('active') ) {
            $('.btn-lang').addClass('active');
        } else {
            $('.btn-lang').removeClass('active');
        };
    });

    $(window).on('mousemove', function() {
        if ( $('#pp-nav li:nth-child(2) a,\
                #pp-nav li:nth-child(6) a,\
                #pp-nav li:nth-child(8) a').hasClass('active') ) {
            iconShare.addClass('active');
            iconStep.addClass('active');
        } else {
            iconShare.removeClass('active');
            iconStep.removeClass('active');
        };
    });

    // Parallax Screen
    const boxer = boxercontainer.querySelector("img"),
    maxMove = boxercontainer.offsetWidth / 30,
    boxerCenterX = boxer.offsetLeft + (boxer.offsetWidth / 2),
    boxerCenterY = boxer.offsetTop + (boxer.offsetHeight / 2),
    fluidboxer = window.matchMedia("(min-width: 726px)");

    function getMousePos(xRef, yRef) {
      
      let panelRect = boxercontainer.getBoundingClientRect();
      return {
          x: Math.floor(xRef - panelRect.left) /(panelRect.right-panelRect.left)*boxercontainer.offsetWidth,
          y: Math.floor(yRef - panelRect.top) / (panelRect.bottom -panelRect.top) * boxercontainer.offsetHeight
        };
    }

    document.body.addEventListener("mousemove", function(e) {
      let mousePos = getMousePos(e.clientX, e.clientY),
      distX = mousePos.x - boxerCenterX,
      distY = mousePos.y - boxerCenterY;
      if (Math.abs(distX) < 500 && distY < 200 && fluidboxer.matches) {
      boxer.style.transform = "translate("+(-1*distX)/12+"px,"+(-1*distY)/12+"px)";
        boxercontainer.style.backgroundPosition = `calc(50% + ${distX/50}px) calc(50% + ${distY/50}px)`;
      }
    });

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