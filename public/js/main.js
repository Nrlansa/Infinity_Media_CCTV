(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
             $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
        // Script untuk mindahin class active pas di-scroll
  $(window).on('scroll', function () {
    var scrollPos = $(document).scrollTop();
    var sectionFound = false;

        $('.navbar-nav a.nav-link').each(function () {
            var currLink = $(this);
            var hrefValue = currLink.attr("href");

        if (hrefValue.indexOf("#") === 0 && hrefValue.length > 1) {
            var refElement = $(hrefValue);
            
                if (refElement.length) {
                    // Toleransi jarak 200px agar lebih responsif
                    if (refElement.position().top <= scrollPos + 200 && refElement.position().top + refElement.outerHeight() > scrollPos + 200) {
                        $('.navbar-nav a.nav-link').removeClass("active");
                        currLink.addClass("active");
                         sectionFound = true;
                    }
                }
            }
        });

    // Kalau di paling atas banget, paksa Home yang active
        if (scrollPos < 100) {
            $('.navbar-nav a.nav-link').removeClass("active");
            $('.navbar-nav a[href="#"]').addClass("active"); // 
        }
    });
    // Initiate the wowjs
    new WOW().init();
    
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $('.testimonial-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });


    
})(jQuery);

