(function ($) {
  $(".slick-center").slick({
    centerMode: true,
    centerPadding: "60px",
    variableWidth: true,
    prevArrow: $('.prev-arrow'),
    nextArrow: $('.next-arrow'),
    responsive: [
      {
        breakpoint: 1041,
        settings: {
          variableWidth: true,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });
  
})(jQuery);