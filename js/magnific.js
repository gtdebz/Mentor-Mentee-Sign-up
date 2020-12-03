//Multiple links for magnific popup//
$(document).ready(function(){
$('.container-fluid').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
    gallery:{
    enabled:true
  }
});
});
// Actual code for popup
//$(document).ready(function(){
//$('.parent-container').magnificPopup
//({delegate: 'a', //child item selector by clicking on it popup will open
//type: 'image'
//other option
//});
//});


//Gallery full code$('.gallery-item').magnificPopup({
  //type: 'image',
//  gallery:{
   // enabled:true
//  }
//});



//single link
//$('.test-popup-link').magnificPopup({
	//type:'image'
	//other program
//});


// for parent container alone
//$('.parent-container').magnificPopup({
 // delegate: 'a', // child items selector, by clicking on it popup will open
 // type: 'image'
  // other options
//});