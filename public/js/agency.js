(function ($) {
  "use strict"; // Start of use strict
  var carouselId = '#homeCarousel';
  var carousel = $(carouselId)
  if (carousel != undefined) {
    carousel.carousel({
      interval: 900000,
      keyboard: false,
    });
  };

  $('[data-bg-url]').each((i, el) => {
    el.style.backgroundImage = "url('" + el.dataset["bgUrl"] + "')"
  })

  carousel.on('slide.bs.carousel', function (e) {
    $(carouselId + ' .carousel-progress-bar')[0].style.width = (100 / (e.isTrigger - 1) * e.to) + "%";

  })
  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function () {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };

  if (document.getElementsByTagName("body")[0].classList.contains("nav-collapse")) {
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
  }

})(jQuery); // End of use strict