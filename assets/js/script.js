$(document).ready(function(){
  $('.counter').counterUp({
      delay: 10,
      time: 1000
  });

  var owl = $('.owl-carousel');
  owl.owlCarousel({
    loop: true,
    margin: 10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
  });

  $('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
  });
  $('.customPrevBtn').click(function() {
    owl.trigger('prev.owl.carousel');
  });

  $('.page-scroll').on('click', function(e) {
    const tujuan = $(this).attr('href');
    const elemenTujuan = $(tujuan);

    $('html,body').animate({
        scrollTop: elemenTujuan.offset().top
    }, 1500, 'easeInOutExpo');

    e.preventDefault();
  });
});
