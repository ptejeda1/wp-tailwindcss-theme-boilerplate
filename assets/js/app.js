var $ = require( "jquery" );
window.jQuery = $; window.$ = $;
// import ModalVideo from 'modal-video';
// import { TimelineMax } from "gsap";
import slick from 'slick-carousel';

(function() {
  function elSlider() {
      $('.carousel').slick({
          dots : false,
          infinite: true,
          slidesToShow: 1,
          arrows: true,
          fade: true,
          prevArrow : '.control.prev',
          nextArrow : '.control.next',
          adaptiveHeight: true,
      });

      $('.slider').slick({
          dots : false,
          infinite: true,
          slidesToShow: 3,
          arrows: true,
          fade: false,
          prevArrow : '.control.prev',
          nextArrow : '.control.next',
          adaptiveHeight: true,
          responsive: [
	      		{
	      			breakpoint: 960,
	      			settings: {
	      				slidesToShow: 2
	      		}
          	},
          	{
	      			breakpoint: 767,
	      			settings: {
	      				slidesToShow: 1
	      		}
          	},
          ]
      });
  }
  elSlider();

  if ($('.carousel, .slider').length) {
		$('.carousel, .slider').on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
			var i = (currentSlide ? currentSlide : 0) + 1;
			$('.carousel-current').text( i + ' of ' + slick.slideCount); 
		});
	}

	/* Mobile menu */
	$('.menu-icon').click(function() {
	  $(this).toggleClass('on');
	  $('.mobile-menu').slideToggle();
	  $('body').toggleClass('overflow');
	}); 

	$('.mobile-menu').find('.icon-toggle').click(function() {
	  $(this).parent().toggleClass('on');
	  $(this).next('ul').slideToggle();  
	});

	$('.search.btn, .search-icon').click(function() {
		$('.modal').fadeIn(300);
	});
	$('.modal .close').click(function() {
		$('.modal').fadeOut(300);
	});

})();