export default {
  init() {
    // JavaScript to be fired on the home page

    // home header slider
    $('.home-header__slider').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
    });
  },

  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
