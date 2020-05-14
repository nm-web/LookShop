let menuHeader = function () {
  $('.menu-header__title').on('click', (e) => {
    e.stopPropagation();
    e.preventDefault();
    $('.menu-header__title').removeClass('is-open');
    $(e.currentTarget).toggleClass('is-open');
  });

  $('.dropdown li a').on('click', (e) => {
    e.stopPropagation();
    $(e.currentTarget).closest('.menu-header__title').removeClass('is-open');
  });
};

let headerSliderHome = function () {
  $('.header-slider').slick({
    dots: true,
    prevArrow: `<div class="slider-arrows slider-arrows_prev">
                     <img src="static/images/content/arrowPrev.png" alt="arrow"> </div>`,
    nextArrow: `<div class="slider-arrows slider-arrows_next">
                      <img src="static/images/content/arrowNext.png" alt="arrow"> </div>`,
  });
};
let sliderProductsPage = function () {
  $('.slider-products').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    prevArrow: `<div class="slider-arrows slider-arrows_prev">
                     <img src="static/images/content/arrowPrev.png" alt="arrow"> </div>`,
    nextArrow: `<div class="slider-arrows slider-arrows_next">
                      <img src="static/images/content/arrowNext.png" alt="arrow"> </div>`,
  });
};

let tabsSliderFirst = function () {
  if ($(window).width() > 639) {
    $('.tab-slider-tab-1').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding: '32px',
      prevArrow: `<div class="products-arrows products-arrows_prev"><i ></i></div>`,
      nextArrow: `<div class="products-arrows products-arrows_next active-box-arrow">
                       <i class="active-arrow"></i></div>`,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 690,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }
};

let tabsSliderPage = function () {
  $('.tabs-nav__item').on('click', (e) => {
    let dataTab = $(e.currentTarget).attr('data-tab-name');
    if ($(window).width() < 639) {
      $('.tabs-nav__item:not(:first-child)').toggleClass('active_tabs');
    }
    $('.tabs-nav__item_active').removeClass('tabs-nav__item_active');
    $(e.currentTarget).addClass('tabs-nav__item_active');
    $('.tabs-content__item_active').removeClass('tabs-content__item_active');
    $('.' + dataTab).addClass('tabs-content__item_active');
    $('.products-arrows_next').addClass('active-box-arrow').children().addClass('active-arrow');
    let slider = $('.tab-slider-' + dataTab);
    if (!slider.hasClass('slick-initialized') && $(window).width() > 639) {
      $(slider).slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '32px',
        prevArrow: `<div class="products-arrows products-arrows_prev "><i></i></div>`,
        nextArrow: `<div class="products-arrows products-arrows_next active-box-arrow"><i class="active-arrow"></i></div>`,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 690,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }
  });
};

let tabsSliderArrows = function () {
  $('.products-arrows').on('click', (e) => {
    $('.active-box-arrow').removeClass('active-box-arrow');
    $('.active-arrow').removeClass('active-arrow');
    $(e.currentTarget).addClass('active-box-arrow');
    $(e.currentTarget).children().addClass('active-arrow');
  });
};

let productPageTabs = function () {
  $('.tabs-description__item').on('click', (e) => {
    $('.tabs-description__content').removeClass('tabs-description__content_active');
    $(e.currentTarget)
      .children('.tabs-description__content')
      .toggleClass('tabs-description__content_active');
  });
};

$(document).ready(function () {
  svg4everybody({});

  $('body').on('click', () => {
    if ($('.menu-header__title').hasClass('is-open')) {
      $('.menu-header__title').removeClass('is-open');
    }
  });

  $('.cart-box').on('mouseenter mouseleave', function () {
    $(this).children('.widget-basket').toggleClass('active');
  });

  $('.btn-search').on('click', function () {
    $(this).siblings('.text-input-box').toggleClass('search_active');
    $('.text-input__control').focus();
  });

  $('.mobile-menu').on('click', function () {
    $('.menu-header-wrapper').toggleClass('is-open-menu');
    $('.mobile-menu__line:first-child').toggleClass('cross_l');
    $('.mobile-menu__line:last-child').toggleClass('cross_r');
    $('.mobile-menu__line:odd').toggleClass('cross_m');
  });

  headerSliderHome();
  sliderProductsPage();
  tabsSliderFirst();
  tabsSliderPage();
  productPageTabs();
  tabsSliderArrows();
  menuHeader();
});

let tabsSlider = function (nameSlider) {
  let slider = $('.' + nameSlider);
  if ($(window).width() > 639 && !slider.hasClass('slick-initialized')) {
    tabsSliderPage();
    // $(slider).slick({
    //   slidesToShow: 4,
    //   slidesToScroll: 1,
    //   centerMode: true,
    //   centerPadding: '32px',
    //   prevArrow: `<div class="products-arrows products-arrows_prev "><i></i></div>`,
    //   nextArrow: `<div class="products-arrows products-arrows_next active-box-arrow"><i class="active-arrow"></i></div>`,
    //   responsive: [
    //     {
    //       breakpoint: 768,
    //       settings: {
    //         slidesToShow: 3,
    //         slidesToScroll: 1,
    //       },
    //     },
    //     {
    //       breakpoint: 690,
    //       settings: {
    //         slidesToShow: 2,
    //         slidesToScroll: 1,
    //       },
    //     },
    //   ],
    // });
  } else if ($(window).width() < 640 && slider.hasClass('slick-initialized')) {
    slider.slick('unslick');
  }
};

$(window).on('resize', function () {
  tabsSlider('tab-slider-tab-1');
  tabsSlider('tab-slider-tab-2');
  tabsSlider('tab-slider-tab-3');
  tabsSlider('tab-slider-tab-4');
  $('.menu-header-wrapper').removeClass('is-open-menu');
  $('.mobile-menu__line:first-child').removeClass('cross_l');
  $('.mobile-menu__line:last-child').removeClass('cross_r');
  $('.mobile-menu__line:odd').removeClass('cross_m');
  if ($(window).width() > 950 && !$('.slider-products').hasClass('slick-initialized')) {
    sliderProductsPage();
  } else if ($(window).width() < 950 && $('.slider-products').hasClass('slick-initialized')) {
    $('.slider-products').slick('unslick');
  }
});
