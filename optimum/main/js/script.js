$(document).ready(function ($) {
  $('#client-carousel').owlCarousel({
    loop: false,
    margin: 50,
    responsiveClass: true,
    dots: true,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      700: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
  });

  $('.contactmodal').click(function () {
    $('.homemodal').fadeIn();
    $(window).scrollTop(0);
  })

  $('.homemodal .close').click(function () {
    $('.homemodal').fadeOut();
  })
  $(window).scroll(function () {
    var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
  $('#green-carousel').owlCarousel({
    loop: false,
    responsiveClass: true,
    dots: true,
    nav: false,
    responsive: {
      0: {
        items: 2
      },
      700: {
        items: 4
      },
      1000: {
        items: 5
      }
    }
  });

  $('.timer').each(function () {
    var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 15000,
      step: function (func) {
        $(this).text(parseFloat(func).toFixed(size));
      }
    });

    $(".hamburger").click(function () {
      $(this).toggleClass("is-active");
    });
  });
  var divHeightOne = $('#pro--col .img-head').height();
  $('.pro--col').css('min-height', divHeightOne + 'px');

  var divHeightTwo = $('.pr--list--right').height();
  $('.pr--list--left').css('min-height', divHeightTwo + 'px');

  var divHeightThree = $('.sec-col').height();
  $('.primry-col .pr--banenr').css('height', divHeightThree + 'px');
});


$(window).on('resize', function () {
  var divHeightOne = $('#pro--col .img-head').height();
  $('.pro--col').css('min-height', divHeightOne + 'px');
  var divHeightTwo = $('.pr--list--right').height();
  $('.pr--list--left').css('min-height', divHeightTwo + 'px');

  var divHeightThree = $('.sec-col').height();
  $('.primry-col .pr--banenr').css('height', divHeightThree + 'px');
}).trigger('resize');


$(window).on("load", function () {
  var divHeightOne = $('#pro--col .img-head').height();
  $('.pro--col').css('min-height', divHeightOne + 'px');
  var divHeightTwo = $('.pr--list--right').height();
  $('.pr--list--left').css('min-height', divHeightTwo + 'px');

  var divHeightThree = $('.sec-col').height();
  $('.primry-col .pr--banenr').css('height', divHeightThree + 'px');
})


  (function ($) {
    //Function to animate slider captions
    function doAnimations(elems) {
      //Cache the animationend event in a variable
      var animEndEv = "webkitAnimationEnd animationend";

      elems.each(function () {
        var $this = $(this),
          $animationType = $this.data("animation");
        $this.addClass($animationType).one(animEndEv, function () {
          $this.removeClass($animationType);
        });
      });
    }

    //Variables on page load
    var $myCarousel = $("#homeCarousel"),
      $firstAnimatingElems = $myCarousel
        .find(".carousel-item:first")
        .find("[data-animation ^= 'animated']");

    //Initialize carousel
    $myCarousel.carousel();

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);

    //Other slides to be animated on carousel slide event
    $myCarousel.on("slide.bs.carousel", function (e) {
      var $animatingElems = $(e.relatedTarget).find(
        "[data-animation ^= 'animated']"
      );
      doAnimations($animatingElems);
    });
  })(jQuery);

function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}