$(function () {
    $(".slider").slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      centerMode: true,
      centerPadding: "10%",
      dots: true,
      // fade: true,
      slidesToShow: 3,
      speed: 400,
      responsive: [
        {
          breakpoint: 1023, // 960〜1023px以下のサイズに適用
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 960, // 480〜960px以下のサイズに適用
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480, // 〜479px以下のサイズに適用
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
  });

const btn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');

btn.addEventListener('click', function(){
  btn.classList.toggle('close');
 menu.classList.toggle('is-active');
});



$('.menu_item a').on('click', function() {
  $('.menu').removeClass('is-active');
  $(btn).removeClass('close');
});


$(function () {
  $(window).scroll(function () {
    const windowHeight = $(window).height();
    const scroll = $(window).scrollTop();

    $('.fadeup').each(function () {
      const targetPosition = $(this).offset().top;
      if (scroll > targetPosition - windowHeight + 100) {
        $(this).addClass("is-fadein");
      }
    });
  });
});