$(document).ready(function(){
  $('.thumbnail-slider').slick({
  	  dots: true,
  	  swipe: true,
   	  infinite: true,
	  slidesToShow: 5,
	  slidesToScroll: 5,
	  responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	      	arrows: false,
	      	dots: false,
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	      	arrows: false,
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        dots: false
	      }
	    }
	  ]
  });
});