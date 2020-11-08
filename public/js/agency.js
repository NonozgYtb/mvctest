(function ($) {
  "use strict"; // Start of use strict

  if ($('#back-to-top').length == 1) {
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      $('#back-to-top').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });
    });
  }

  $("[id^='carousel-']").toArray().forEach(element => {
    var carousel = $(element);
    var iii = (a => {
      return ((parseInt(a, 10) == a) ? parseInt(a, 10) : 6000)
    })(carousel.attr("data-carousel-interval"));
    carousel.carousel({
      interval: iii,
      keyboard: false,
    });
    element.removeAttribute("data-carousel-interval");
    carousel.on('slide.bs.carousel', function (e) {
      e.target.getElementsByClassName("carousel-progress-bar")[0].style.width = (100 / (e.isTrigger - 1) * e.to) + "%";
    })
    carousel.carousel('cycle');
  });

  if (document.body.scrollHeight < window.outerHeight && document.getElementsByTagName("footer")[0] != undefined) {
    var stylerOfFooter = document.getElementsByTagName("footer")[0].style
    stylerOfFooter.position = "absolute";
    stylerOfFooter.bottom = 0
    stylerOfFooter.left = 0
    stylerOfFooter.right = 0

  }

  $('[data-bg-url]').each((i, el) => {
    $(el)
      .css('background-image', "url('" + el.dataset["bgUrl"] + "')");
  })

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

  function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
  }

  var __key = makeid(12);

  var __ = () => {
    console.clear()
    var color = (() => {
      var color = getComputedStyle(document.documentElement)
        .getPropertyValue('--primary').trim();
      if (color == "") {
        return ("#35495e")
      } else {
        return (color)
      };
    })();
    console.log(`%c BunkerFinal %c By NonozgYtb %c `,
      "background:#35495e ; padding: 1px; border-radius: 3px 0 0 3px;  color: #fff", `background: ${color}; padding: 1px; 
        border-radius: 0 3px 3px 0;  color: #fff`, "background:transparent");
    console.log(`%cN'écrit rien ici, c'est dangeureux... Vraiment je rigole pas ! %c`,
      `color: ${color}; padding: 10px; font-size: 20px`, "color: initial");
  };
  //__()
  //setTimeout(__, 2000)
  //setTimeout(__, 4000)
  //window["pp"+__key] = setInterval(__, 10000);
  $("iframe").toArray().forEach((el) => el.addEventListener('*', __()))

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