// JavaScript Document
$(document).ready(function(){
	
	
	// when login button is clicked
	$("#login_btn").click(function(){
	$("#Contact").animate({left:"75%"},400);			//animation of the white form box containing the form
	$("#Contact").animate({left:"29.5%"},500);
	$("#signupform").css("visibility","hidden");
	$("#signupform").animate({left:"49.6%"},500);			 //animation of the form when login button is clicked
	
	$("#loginform").animate({left:"93%"},400);
	$("#loginform").animate({left:"49.5%"},500);
	$("#loginform").css("visibility","visible");
	});

	
	// when sign up button ic clicked	
	$("#signup_btn").click(function(){
	$("#Contact").animate({left:"-12%"},400);		//animation of the white form box containing the form
	$("#Contact").animate({left:"29.5%"},500);
	$("#loginform").css("visibility","hidden");
	$("#loginform").animate({left:"49.5%"},400);    //animation of the form when signup button is clicked
	
	$("#signupform").animate({left:"9%"},400);   
	$("#signupform").animate({left:"49.6%"},500);
	$("#signupform").css("visibility","visible");
	
	});
	
});