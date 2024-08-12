(function ($) {
  "use strict";

  // Navbar on scrolling
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".navbar").fadeIn("slow").css("display", "flex");
    } else {
      $(".navbar").fadeOut("slow").css("display", "none");
    }
  });

  // Smooth scrolling on the navbar links
  $(".navbar-nav a").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      $("html, body").animate(
        {
          scrollTop: $(this.hash).offset().top - 45,
        },
        1500,
        "easeInOutExpo"
      );

      if ($(this).parents(".navbar-nav").length) {
        $(".navbar-nav .active").removeClass("active");
        $(this).closest("a").addClass("active");
      }
    }
  });

  // General Smooth scrolling animation
  $(".smoothScroll").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      $("html, body").animate(
        {
          scrollTop: $(this.hash).offset().top - 45,
        },
        1500,
        "easeInOutExpo"
      );
    }
  });

  // Typed words
  if ($(".typed-text-output").length == 1) {
    var typed_strings = $(".typed-text").text();
    var typed = new Typed(".typed-text-output", {
      strings: typed_strings.split(", "),
      typeSpeed: 100,
      backSpeed: 20,
      smartBackspace: false,
      loop: true,
    });
  }

  // Custom Scrolls
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".scroll-to-bottom-1").fadeOut("slow");
    } else {
      $(".scroll-to-bottom-1").fadeIn("slow");
    }
  });

  $("#section-scroll").click(function () {
    $("html, body").animate({ scrollTop: $("#about").offset().top }, 700);
  });

  $("#scroll-qualification").click(function () {
    $("html, body").animate(
      { scrollTop: $("#qualification").offset().top },
      700
    );
  });

  $("#contact-nav, #contact-hero").click(function () {
    $("html, body").animate(
      {
        scrollTop: $("#contact").offset().top - 45,
      },
      1500,
      "easeInOutExpo"
    );
  });

  // Back to top button code
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });

  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });
})(jQuery);
