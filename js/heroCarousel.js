// swiper js carousel

const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    effect: 'fade',  
});


// testimonial swiper
const tSwiper = new Swiper('.t_swiper', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slidesPerView: 3,
    spaceBetween: 20,
});
  

// login swiper
const loginSwiper = new Swiper('.lg_swiper', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slidesPerView: 1,
    effect: 'fade',
    
});