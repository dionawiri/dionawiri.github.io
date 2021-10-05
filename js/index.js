$(window).scroll(function () {
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});
// efek scrol logo nav
$(document).ready(function () {
  var scroll_pos = 50;
  $(document).scroll(function () {
    scroll_pos = $(this).scrollTop();
    if (scroll_pos > 0) {
      $('nav').addClass('putih');
      $('nav img.hitam').show();
      $('nav img.putih').hide();
    } else {
      $('nav').removeClass('putih');
      $('nav img.hitam').hide();
      $('nav img.putih').show();
    }
  });
});
// ekstra
var swiper = new Swiper('.blog-slider', {
  spaceBetween: 30,
  effect: 'fade',
  loop: true,
  mousewheel: {
    invert: false,
  },
  // autoHeight: true,
  pagination: {
    el: '.blog-slider__pagination',
    clickable: true,
  },
});

// akhir ekstra
// galeri slider
