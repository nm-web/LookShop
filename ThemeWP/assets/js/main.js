"use strict";

const headerSliderHome = function () {
  $('.header-slider').slick({
    dots: true,
    prevArrow: `<div class="slider-arrows slider-arrows_prev">
                     <img src="wp-content/themes/lookshop/assets/images/content/arrowPrev.png" alt="arrow"> </div>`,
    nextArrow: `<div class="slider-arrows slider-arrows_next">
                      <img src="wp-content/themes/lookshop/assets/images/content/arrowNext.png" alt="arrow"> </div>`,

  });
};




const tabsSliderTab = function () {
  $('.tabs-nav__item').on('click', (e) => {
    let dataTab = $(e.currentTarget).attr('data-tab-name');
    if ($(window).width() < 639) {
      $('.tabs-nav__item:not(:first-child)').toggleClass('active_tabs');
    }
    $('.tabs-nav__item_active').removeClass('tabs-nav__item_active');
    $(e.currentTarget).addClass('tabs-nav__item_active');
    $('.tabs-content__item_active').removeClass('tabs-content__item_active');
    $('.'+dataTab).addClass('tabs-content__item_active');
    $('.products-arrows_next').addClass('active-box-arrow').children().addClass('active-arrow');
  });
};

const tabsSliderArrows = function() {
  $('.products-arrows').on('click', (e) => {
    $('.active-box-arrow').removeClass('active-box-arrow');
    $('.active-arrow').removeClass('active-arrow');
    $(e.currentTarget).addClass('active-box-arrow');
    $(e.currentTarget).children().addClass('active-arrow');
  });
};

const menuHeader = function(){
  $('.menu-header .menu-item').on('click', (e) => {
    e.stopPropagation();
    e.preventDefault();
    $('.menu-header .menu-item').removeClass('is-open');
    $(e.currentTarget).toggleClass('is-open');

  });

  $('.sub-menu li a').on('click', (e)=> {
    e.stopPropagation();
    $(e.currentTarget).closest('.menu-header .menu-item').removeClass('is-open');
  });

};


$(document).ready(function () {
  svg4everybody({});
  const sliderProductsPage = function () {
    let slider = $('.slider-products');
    if ($(window).width() > 640 ) {
      slider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        prevArrow: `<div class="slider-arrows slider-arrows_prev">
                     <img src='../wp-content/themes/lookshop/assets/images/content/arrowPrev.png' alt="arrow"> </div>`,
        nextArrow: `<div class="slider-arrows slider-arrows_next">
                      <img src="../wp-content/themes/lookshop/assets/images/content/arrowNext.png" alt="arrow"> </div>`,
      });
    } else if ($(window).width() < 640 && slider.hasClass('slick-initialized')) {
      slider.slick('unslick');}
  };


  $('body').on('click',()=>{

    if ($('.menu-header .menu-item').hasClass('is-open')) {
      $('.menu-header .menu-item').removeClass('is-open');

    }
  });


  $('.cart-filling').on('click', function () {
    let url = $(location).attr('href');
    let arr = url.split('/');
    if (arr[arr.length-2] !== 'cart') {
      $(this).siblings('.widget-basket').toggleClass('active');
    }

  });

  $('.btn-search').on('click',function () {
    $(this).siblings('.text-input-box').toggleClass('search_active');
  });

  $('.product-categories .cat-parent').on('click', function() {
    $('.product-categories .children').removeClass(' active');
    $(this).children('.product-categories .children').addClass(' active');

  });

  $('.mobile-menu').on('click',function () {
    $(this).siblings().toggleClass('is-open-menu');
    $('.mobile-menu__line:first-child').toggleClass('cross_l');
    $('.mobile-menu__line:last-child').toggleClass('cross_r');
    $('.mobile-menu__line:odd').toggleClass('cross_m');
  });

  headerSliderHome();
  sliderProductsPage();
  tabsSliderTab();
  tabsSliderArrows();
  menuHeader();



});


const sliderProductsPageResize = function () {
  let slider = $('.slider-products');
  if ($(window).width() > 639 && !(slider.hasClass('slick-initialized'))) {
    slider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      prevArrow: `<div class="slider-arrows slider-arrows_prev">
                     <img src='../wp-content/themes/lookshop/assets/images/content/arrowPrev.png' alt="arrow"> </div>`,
      nextArrow: `<div class="slider-arrows slider-arrows_next">
                      <img src="../wp-content/themes/lookshop/assets/images/content/arrowNext.png" alt="arrow"> </div>`,
    });
  } else if ($(window).width() < 640 && slider.hasClass('slick-initialized')) {
    slider.slick('unslick');}
};

$(window).on('resize',function () {
  sliderProductsPageResize();
});
