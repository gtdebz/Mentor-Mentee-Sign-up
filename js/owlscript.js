// Owl script for index
	$(document).ready(function(){
 $('.#logo').owlCarousel({
	  loop:true,
	  margin:10,
	  nav:true,
	  dots:true,
	  autoplay:true,
	  responsive:{
		  0:{
			  items:1
		  },
		  600:{
			  items:3
		  },
		  1000:{
			  items:7
		  }
	  }
	})

	});