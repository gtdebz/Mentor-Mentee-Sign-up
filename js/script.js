//General jquery engine for magnific popup, owl...
$(document).ready(function(){
	
//Multiple links for magnific popup//	
$('.img-container').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
    gallery:{
    enabled:true
  }
});	
});


// owl logo Script.js Document
	$(document).ready(function(){
 	$('#logo').owlCarousel({
	  loop:true,
	  margin:10,
	  nav:true,
	  responsive:{
		  0:{
			  items:1
		  },
		  600:{
			  items:3
		  },
		  1000:{
			  items:5
		  }
	  }
	 })
	});
	
// owl work Script.js Document	
	$(document).ready(function(){
	$('#owl-work').owlCarousel({	
		loop:true,
		margin: 10,
		smartspeed: 4000,
		nav:true,
		responsive: {
			0: {
			 item: 1
			},
			600: {
			 item: 3
			},
			1000: {
			 item: 3
			}
		   }	
	});
	});
	
	//navbar transition
	$(document).ready(function(){
	 $(window).scroll(function(){
		 var location = $(this).scrollTop();
		 if(location<70) {
			 $("nav").removeClass("transparent");
		 }
		 else {
			 $("nav").addClass("transparent");
		 }
	 });
	});