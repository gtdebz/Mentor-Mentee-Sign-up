<? ob_start();  ?>


<?php //include_once ('server.php');

//$email="";
//$fullname="";
//$username="";
//$password="";
//$servername='localhost';
//$dbuser='root';
//$dbpassword='';
//$dbname='cms';
?>



<?php include 'db.php';  ?>


<?php 
session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="/alegegroup/imagespato/alg.png">-->

  <!-- Favicons -->
  <link href="/alegegroup/images/trfav.png" rel="icon">
  <link href="/alegegroup/images/trfav.png" rel="apple-touch-icon">

    <title>Trainers | Register</title>

   
      <!-- Latest compiled and minified CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
   
		<!-- font awesome -->
		<link rel="stylesheet" href="css/font-awesome.css">   <!--Working font awesome-->
        
    
		<!-- font awesome -->
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.css">   <!--Working font awesome-->
        
          
        <link rel="stylesheet" href="css/responsive.css">
     
        
        
		<!-- wow js -->
		<link rel="stylesheet" href="css/animate.css">	
        		<!--Working animate.css-->
         <link rel="stylesheet" href="css/animate.min.css">       
	    <link href="css/lightbox.css" rel="stylesheet" />
    
        <!-- owl carousel 2-->
		<link rel="stylesheet" href="backtotop.css">
   
<!--Meriweaher Google fonts-->
         <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 



<!-- Magnific Popup core CSS file-->
<link rel="stylesheet" href="magnific-popup/magnific-popup.css">



    
   <!--animate css-->
   <link rel="stylesheet" href="animate.css">
   
    
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


  
    <!-- Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    



<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">





<!--Camera slider effect style

        <!-- Favicons -->
        <link rel="icon" type="" href="/alegegroup/images/trfav.png">

        <!-- Font Awesome Icon CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

        <!-- BootStrap CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <!-- Camera Slider CSS -->
        <link href="assets/css/camera.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Boilerplate CSS -->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/real.css">

        <!-- Customize CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/media.css"/>

        <!--HTML5shiv Js-->
        <script src="assets/js/modernizr-3.5.0.min.js"></script>

<!--end camera slider effect style-->





<style>


	
	/*Merriweather font  
	font-family: 'Merriweather', serif; */
	
	/*Concertone Google fonts
	font-family: 'Concert One', cursive;*/
	
	/*Karla Google fonts
	font-family: 'Karla', sans-serif;
	
	
	/*Source sans Google fonts
	font-family: 'Source Sans Pro', sans-serif;
	
	/*Roboto Google fonts
	font-family: 'Roboto', sans-serif;
	
	/*Archivo Google fonts
	font-family: 'Archivo', sans-serif;
	
	/*Lora Google fonts
	font-family: 'Lora', serif;
	
	/*Montserrat Google fonts
	font-family: 'Montserrat', sans-serif;
	
	/*navy blue: #203142
	/* grey: #ced0ce
	/* dark smoke:#353531
	/*banner starts here*/
	/*navbar
	
.animate {
    -webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.navbar-bootsnipp {
    background-color: rgb(255, 255, 255);
	border-color: rgb(95, 176, 228);
	border-radius: 0px;
	margin-bottom: 0px;
	z-index: 100;
}
.navbar-bootsnipp:nth-of-type(2) {
	border-top-width: 1px;
	z-index: 50
}

.navbar-bootsnipp.affix-top {
	position: absolute;
	top: 0px;
	width: 100%;
}
.navbar-bootsnipp.affix {
	top: 0px;
	width: 100%;
}
.navbar-bootsnipp .navbar-toggle .icon-bar {
	background-color: rgb(95, 176, 228);
	
}

.navbar-bootsnipp .navbar-brand {
	color: rgb(95, 176, 228);
	font-weight: 900;
	letter-spacing: 2px;
}

.navbar-bootsnipp .navbar-nav > li > a {
	border: 0px solid rgb(95, 176, 228);
	color: rgb(120, 120, 120);
	padding: 18px 15px;
}

.navbar-bootsnipp .navbar-nav > li > form > .input-group > input,
.navbar-bootsnipp .navbar-nav > li > form > .input-group > .input-group-btn > .btn {
	border-radius: 0px;
}

.navbar-bootsnipp .navbar-nav > li:not(.disabled).open > a,
.navbar-bootsnipp .navbar-nav > li:not(.disabled).active > a,
.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:hover, 
.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:focus {
	border-left-width: 5px;
	color: rgb(95, 176, 228);
	padding-left: 10px;
}
.navbar-bootsnipp .navbar-nav > li.disabled > a {
	color: rgb(200, 200, 200);
}

.navbar-bootsnipp .navbar-nav > li > .dropdown-menu {
	border-radius: 0;
	margin-right: -1px;
	min-width: 220px;
	padding: 0px;
}
.navbar-bootsnipp .navbar-nav > li:not(.dropdown-right) > .dropdown-menu {
	left: 0px;
	margin-left: -1px;
	right: auto;
}
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a {
	border-left: 0px solid rgb(95, 176, 228);
	color: rgb(120, 120, 120);
	font-size: 16px;
	font-weight: 400;
	padding: 10px 20px;
	white-space: nowrap;
}
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li.active > a, 
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a:hover, 
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a:focus {
	background-color: rgb(245, 245, 245);
	border-left-width: 5px;
	padding-left: 15px;
}

.navbar .bootsnipp-profile > a {
	padding-bottom: 9px; 
	padding-top: 9px; 
}
.navbar .bootsnipp-profile > a > img {
	border-radius: 50%;
	width: 32px;
}
.navbar .bootsnipp-profile > .dropdown-menu {
	width: 320px;
}
.navbar .bootsnipp-profile > .dropdown-menu > li > .row {
	padding: 5px 15px;
}
.navbar .bootsnipp-profile > .dropdown-menu > li > .row img {
	width: 100%;
}

.navbar-bootsnipp .bootsnipp-search {
	display: none;
}
.navbar-bootsnipp .bootsnipp-search .form-control {
	background-color: rgb(235, 235, 235);
	border-radius: 0px;
	border-width: 0px;
	font-size: 24px;
	padding: 30px 0px;
}
.navbar-bootsnipp .bootsnipp-search .form-control {
	background-color: rgb(235, 235, 235);
	border-radius: 0px;
	border-width: 0px;
	font-size: 24px;
	padding: 25px 0px;
}
.navbar-bootsnipp .bootsnipp-search .form-control:focus {
	border-color: transparent;
	outline: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn {
	padding: 14px 16px;
	border-radius: 0px;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn.active,
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:hover,
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:focus {
	padding: 14px 16px 14px 15px;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn-default {
	background-color: rgb(245, 245, 245);
}
.nav-padding {
	padding-top: 61px;
}

@media screen and (min-width: 768px) {
    .navbar-bootsnipp .navbar-brand {
    	font-size: 20px;
		height: auto;
		padding: 15px 5px;
	}
	.navbar-bootsnipp .navbar-nav > li > a {
		font-size: 16px;
		letter-spacing: 1px;
	}
	.navbar-bootsnipp .navbar-nav > li:not(.disabled).open > a,
	.navbar-bootsnipp .navbar-nav > li:not(.disabled).active > a,
	.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:hover, 
	.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:focus {
		border-bottom-width: 5px;
		border-left-width: 0px;
		padding-bottom: 10px;
		padding-left: 14px;
	}

	.navbar-bootsnipp .navbar-nav > li.disabled > a {
		padding-left: 10px;
		padding-right: 10px;
	}


	.navbar-bootsnipp .bootsnipp-search {
		background-color: rgb(235, 235, 235);
		display: block;
		position: absolute;
		top: 100%;
		width: 100%;
		-webkit-transform: rotateX(-90deg);
		-moz-transform: rotateX(-90deg);
		-o-transform: rotateX(-90deg);
		-ms-transform: rotateX(-90deg);
		transform: rotateX(-90deg);
		-webkit-transform-origin: 0 0 0;
		-moz-transform-origin: 0 0 0;
		-o-transform-origin: 0 0 0;
		-ms-transform-origin: 0 0 0;
		transform-origin: 0 0 0;
		visibility: hidden;
	}
	.navbar-bootsnipp .bootsnipp-search.open {
		-webkit-transform: rotateX(0deg);
		-moz-transform: rotateX(0deg);
		-o-transform: rotateX(0deg);
		-ms-transform: rotateX(0deg);
		transform: rotateX(0deg);
		visibility: visible;	
	}
	.navbar-bootsnipp .bootsnipp-search > .container {
		padding: 0px;
	}    
}


*/


/******* IMPORTANT LOOK HERE
CREATE NAVBAR FROM BELOW SITE **************
https://work.smarchal.com/twbscolor/css/e74c3cc0392becf0f1ffbbbc0
CSS for simple navbar


.navbar navbar-expand-lg{
  background-color: transparent;
  border-color: #C60;
}
.navbar-expand-lg .navbar-brand {
  color: #6C3;
  font-size:30px;
}
.navbar-expand-lg .navbar-brand:hover,
.navbar-expand-lg .navbar-brand:focus {
  color: #000000;
}
.navbar-expand-lg .navbar-text {
  color: #C60;
}
.navbar-expand-lg .navbar-nav > li > a {
  color: #C60;
}
.navbar-expand-lg .navbar-nav > li > a:hover,
.navbar-expand-lg .navbar-nav > li > a:focus {
  color: #000000;
}
.navbar-expand-lg .navbar-nav > .active > a,
.navbar-expand-lg .navbar-nav > .active > a:hover,
.navbar-expand-lg .navbar-nav > .active > a:focus {
  color: #000000;
  background-color: #C90;
}
.navbar-expand-lg .navbar-nav > .open > a,
.navbar-expand-lg .navbar-nav > .open > a:hover,
.navbar-expand-lg .navbar-nav > .open > a:focus {
  color: #000000;
  background-color: #4d8fc8;
}
.navbar-expand-lg .navbar-toggle {
  border-color: #000;
   background-color: #transparent;
}
.navbar-expand-lg .navbar-toggle:hover,
.navbar-expand-lg .navbar-toggle:focus {
  background-color: #4d8fc8;
}
.navbar-expand-lg .navbar-toggle .icon-bar {
  background-color: #033;
}
.navbar-expand-lg .navbar-collapse,
.navbar-expand-lg .navbar-form {
  border-color: #ffffff;
}
.navbar-expand-lg .navbar-link {
  color: #ffffff;
}
.navbar-expand-lg .navbar-link:hover {
  color: #000000;
}

@media (max-width: 767px) {
  .navbar-expand-lg .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  .navbar-expand-lg .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-expand-lg .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #000000;
  }
  .navbar-expand-lg .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-expand-lg .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-expand-lg .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #000000;
    background-color: #4d8fc8;
  }
}


end css for simple navbar  */

/*start css for stylish navbar*/
/*scroll effect*/

.navbar-default                               /*COMPLETE default navbar of navbar trans*/
    {
      background-image: none;  
      /*background-color:#122!important; */
     background-color:transparent;
    }

/*.navbar-default.navbar-trans.afterscroll{
	color:#C30!important;
	background-color:#033!important;
	opacity:0.9;
	
	} 
*/


.navbar-brand {
  font-size:30px;
  font-weight:bold;
}

.navbar-trans {											/*complete border for background of entire navbar b4 trans*/
  /*background-color: #033!important;*/
  background-color:none;
  border: none;
  transition: top 1s ease;
  
}
 .navbar a{                          /*color of navbar brand*/
    color:#88c425;
}
.navbar a:hover{
    text-decoration:none;
    color:#519548;
	
}
 .navbar .btn{
	 background-color:#033;
	 color:#FFF;
	 border:2px solid #033;
	 
	 }
 
 .navbar .btn drop-down toggle{
	  background-color:#900;
	 color:#FFF;
	 border:2px solid #033;
	 
	 }
 
 
.navbar{
	background:none;
	
	}




.navbar-brand a{
	 color: #6c3;
	font-weight:bold;
	/*color: rgb(95, 176, 228);*/
	list-style:none;
	text-decoration:none;
	}



.navbar-brand a:hover{
	color:#F63;
	
	}
 
 
 
/*double row*/
.navbar-doublerow > .navbar{
	display: block;	
	padding: 0px auto;
	margin: 0px auto;
	min-height: 20px;
	
}
.navbar-doublerow .nav{
	padding: 0px auto;
	
}
.navbar-doublerow .dividline{
  margin: 5px 100px;
  padding-top: 1px;
  background-color: none;
   margin: 5px 100px;

  color:#B5B5B5;
  opacity:0.4;
}
/*top nav*/
.navbar-doublerow .navbar-top ul>li>a {			/*topmost text team and contact us*/
	padding: 10px auto;
	font-size: 15px;
	/*color:#fff!important;*/
	color:#fff;
	font-weight:normal;
} 











/*down nav*/

.navbar-doublerow .navbar-down .navbar-brand {       /*brand name*/
	padding: 0px auto;
	float: left;
	color: #fff;
	font-size: 32px;
}
.navbar-doublerow .navbar-down ul>li>a{				/*unordered list*/
	font-size: 16px;
	font-weight:light;
	color: #fff;                 /*color of navbar link menu after scrolling down the site*/
	transition: border-bottom .2s ease-in , transform .2s ease-in-out;
}
.navbar-doublerow .navbar-down ul>li>a:hover{
	/*border-bottom: 4px solid #3FF;*/
	border-bottom: 1px solid #F63;                            /*hover by the left side of nav menu ul*/
	/*color:#3FF;*/
	color:#F63;
	
}
.navbar-doublerow .navbar-down .dropdown{
    padding: 5px;
    color: #fff!important;
	opacity: 0.7;
}
.navbar-doublerow .navbar-down .dropdown ul>li>a,
.navbar-doublerow .navbar-down .dropdown ul>li>a:hover{
  color: #FFF;
  border-bottom: none;
  background-color:#f63!important;
  /*background-color:#033;*/                      /*hover over nav menu ul*/
}
.navbar-doublerow.navbar-trans.afterscroll {         /*on scroll down colour that navbar changes to and hide half of navbar margin*/
	/*color:#C30!important;*/
	color::#fff;
	background-color:#033!important;
	
	 top:-60px;
}	
/*.navbar-doublerow.navbar-trans.afterscroll {		/*margin by which navbar disappears to the top after scroll 50% of the navbar

   top:-100px;
}	*/

.flex-container {
    display: flex;
    justify-content: space-between;
}
.flex-item {
}
/*text*/
.text-white,.text-white-hover:hover{color:#fff!important}
/*fontcolor*/
.light-grey {color:#FFF!important;background-color:#e6e9ed!important}




/*old team section
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}**/
.team{
    padding:75px 0;
	background-color:#000F0F;
	color:#FFF;
	text-align:center;
}
h6.description{
	font-size:28px;
	font-weight: bold;
	letter-spacing: 2px;
	color: #999;
	border-bottom: 1px solid rgba(0, 0, 0,0.1);
	padding-bottom: 5px;
}
.profile{
	margin-top: 25px;
}
.profile h1{
	font-weight: normal;
	font-size: 20px;
	margin:10px 0 0 0;
}
.profile h2{
	font-size: 14px;
	font-weight: lighter;
	margin-top: 5px;
}
.profile .img-box{
	opacity: 1;
	display: block;
	position: relative;
}
.profile .img-box:after{
	content:"";
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
}
.img-box ul{
	position: absolute;
	z-index: 2;
	bottom: 50px;
	text-align: center;
	width: 100%;
	padding-left: 0px;
	height: 0px;
	margin:0px;
	opacity: 0;
}
.profile .img-box:after, .img-box ul, .img-box ul li{
	-webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.img-box ul i{
	font-size: 20px;
	letter-spacing: 10px;
}
.img-box ul li{
	width: 30px;
    height: 30px;
    text-align: center;
    border: 1px solid #88C425;
    margin: 2px;
    padding: 5px;
	display: inline-block;
}
.img-box a{
	color:#fff;
}
.img-box:hover:after{
	opacity: 1;
}
.img-box:hover ul{
	opacity: 1;
}
.img-box ul a{
	-webkit-transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}
.img-box a:hover li{
	border-color: #fff;
	color: #88C425;
}
a{
    color:#88c425;
}
a:hover{
    text-decoration:none;
    color:#519548;
}
i.red{
    color:#BC0213;
}


/*end old team section*/
/*end css for stylish navbar*/

/* Start Contact form*/
	#contact{}
		/*padding:40px 0;
		background-color:#203142!important;
		
		}*/
	
		#contact .container{	
		width:100%;
		/*background-color:#203142!important;*/
		background-color:#122!important;
		color:whitesmoke;
			
			}
			
	
	#contact .font-awesome-underline{
		width: 202px;
		border:3px solid #f15025;
		margin: 0 auto 20px auto;
		
			}	
			
		#contact .font-awesome-underline:after{
		content:"\f133";
		font-family:"FontAwesome";	
		font-size:18px;
		color:#f15025;
		position: relative;
		top: -8px;
		background:#203142;
		padding: 0 10px;
		}
		
		#contact button{
			color:#FFF;
			background-color:#f15025;
			border-color:#C30;
			}
		
		#contact button:hover {
			background-color:#F30;
			color:whitesmoke;
			
			}
			
			#contact .col-md-12 {
				margin-top:30px;
				}
				
			#contact .h1 p{
			margin-top: 20px;
			}	
			
			#contact form{
				margin-top: 20px;
				}	
				
			
		
				
			
			#contact .iframe{
			margin-top: 20px;
			}	
			
			#contact .btn-link{
			padding: 4px;
			border-radius:6px 6px 6px 6px;
			border-color:2px solid #f15025;
			width: 100px;
			font-size:20px;	
			text-decoration:none;
			margin-top: 20px;
				}
			
				
		/* end Contact form*/
		
		
		.home{
			margin-left:115%;
			margin-top:7.5%;
			width:100px;
			color:#fff;
			}
			
			.home a{
				color:#099;
				}
			
			.home a:hover{
				color:#FF8000;
				}
		
</style>






<body data-spy="scroll" data-target=".navbar" data-offset="10">

 <!--start animated navbar-->
  
<nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
    <div class="container">
      <!-- left nav top -->
      <ul class="nav navbar-nav pull-left">
        <li><a href="#"><span class="glyphicon glyphicon-thumbs-up text-white"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-globe text-white"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-pushpin text-white"></span></a></li>
        <li><a href="#"><span class="text-white">QUESTIONS? CALL: <b>+234-9084091211</b></span></a></li>
      </ul>
      <!-- right nav top -->
      <ul class="nav navbar-nav pull-right">
        
        <li><a href="https://www.gmail.com" class="text-white">Email: trainers@gmail.com</a></li> 
      </ul>
    </div>
    <div class="dividline light-grey"></div>
  </nav>
  <!-- down nav -->
  <nav class="navbar navbar-down">
    <div class="container">
      <div class="flex-container">  
        <div class="navbar-header flex-item">
        
          <div class="navbar-brand"><a href="index.php">Trainers</a></div>
          
 
          
        </div>
        
      
        
      
        
        <ul class="nav navbar-nav flex-item hidden-xs">
       

		   
       
		  <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Home</a></li>
		    <li><a href="#services">Services</a></li>
		
			   <li><a href="#goals">Goals</a></li>
			    
				  <li><a href="#work">Portfolio</a></li>
				 <li><a href="#clients">Clients</a></li>
			    <li><a href="#contact">Contact</a></li>
           
        </ul>
        <ul class="nav navbar-nav flex-item hidden-xs pull-right">
          <li><a href="#" class="">LOGIN</a></li> 
           <li><a href="#" class="">SIGN UP</a></li> 

        </ul>
        <!-- dropdown only moblie -->
          <div class="dropdown visible-xs pull-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownmenu" data-toggle="dropdown" style="background-color:#transparent; border-color:#066; border:2px solid #066">
             <!-- <span class="glyphicon glyphicon-align-justify"></span> -->
             <i class="fa fa-bars"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a href="index.php">HOME <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
               <li><a href="#services">SERVICES</a></li> 
               <li><a href="#goals">GOALS</a></li> 
                <li><a href="#work">PORTFOLIO</a></li>
                <li><a href="#clients">CLIENTS</a></li> 
                <li><a href="#contact">CONTACT</a></li> 
                <li><a href="Contactform.php">LOGIN</a></li> 
                <li><a href="Contactform.php">SIGN UP</a></li> 
               
            </ul>
          </div>
        </div>  
      </div>
    </nav>
  </nav> 
  
  
  
  
  
 
  

    <!-- Bootstrap core JavaScript- for navbar-trans
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
 
  <script>
// toggle class scroll 
$(window).scroll(function() {
    if($(this).scrollTop() > 50)
    {
        $('.navbar-trans').addClass('afterscroll');
    } else
    {
        $('.navbar-trans').removeClass('afterscroll');
    }  

});
  
// demo only 
// open link in new tab without ugly target="_blank"
$("a[href^='http']").attr("target", "_blank");                           //don't remove this to make mobile dropdown toggle display on mobile view
</script> 
  
  <!--this ends query for navbartrans-->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<!--bg img  --
<header class="beauty">
   
</header>    

<!--end animated navbar-->













   
   
   <!--lightbox script-
   <script src="js/lightbox.min.js"></script>
   
  
  
 
    <!-- Magnific Popup core JS file 
<script src="magnific-popup/jquery.magnific-popup.js"></script>
  <!--Magnific Script to initialise img animation
 <script src="magnific-popup/magnific.js"></script> 

   <!--lightbox starts for magnific popup
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
			<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
                
     <!-- Magnific Popup core JS file
<script src="magnific-popup/jquery.magnific-popup.js"></script>

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   <!--Magnific Script to initialise img animation
 <script src="magnific-popup/magnific.js"></script> 
   
      
   <!--parallax
   <script src="text/javascript">
   $('.parallax').parallax({imageSrc: 'images/ewg.jpg'});
 </script>
 
 
 
 
 
 <!--Camera slider jquery-->
 
   <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-3.2.1.min.js"><\/script>')</script>
        <!--Camera JS with Required jQuery Easing Plugin-->
        <script src="assets/js/easing.min.js" type="text/javascript"></script>
        <script src="assets/js/camera.min.js" type="text/javascript"></script>
         <!-- Bootstrap Js --
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Custom JS -->
        <script src="assets/js/plugins.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID.
        <script>
            window.ga = function () {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        
  <!--end camera slider jquery-->
 
 
 
 
 		<!--script for carousel of testimonial that is sliding portfolio-->
         <script>
         $(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
	});

         </script>
         
   <!--dropdown hover function for simple navbar- --
 <script>
 $('.navbar .dropdown').hover(function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
		}, function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
		});
 
 </script>
 
     <!-- Bootstrap Dropdown Hover JS --
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    
    <!--end dropdown hover-->

<!--start scroll load for progress bar
 <script>
var skillsDiv = $('#skills');

$(window).on('scroll', function(){
	var winT = $(window).scrollTop(),
  	winH = $(window).height(),
  	skillsT = skillsDiv.offset().top;
  if(winT + winH  > skillsT){
  	$('.skillbar').each(function(){
      $(this).find('.skillbar-bar').animate({
        width:$(this).attr('data-percent')
      },6000);
    });
  }
});


</script>
<!--end scroll load for progress bar-->  



<!--navbar reveal on scroll down-->
 <script>
 $(document).ready(function(){
 $(window).scroll(function(){
 var location = $(this).scrollTop();
 if(location<70){
 $("nav").removeClass("transparent");
  }
  else{
  $("nav").addClass("transparent");
  }
});
});
 
 </script>
 
 <!--end navbar reveal on scroll-->
 
 
 <!--dropdown hover function--
 <script>

$(function() { 

    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
		event.preventDefault();
		$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
		$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
		$('a[href="#toggle-search"]').closest('li').toggleClass('active');

		if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
			setTimeout(function() { 
				$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
			}, 100);
		}			
	});

	$(document).on('keyup', function(event) {
		if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			$('a[href="#toggle-search"]').trigger('click');
		}
	});
    
});
</script>



<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>





<!--navbar javascript animation--> 
<script>
// toggle class scroll 
$(window).scroll(function() {
    if($(this).scrollTop() > 50)
    {
        $('.navbar-trans').addClass('afterscroll');
    } else
    {
        $('.navbar-trans').removeClass('afterscroll');
    }  

});
  
// demo only 
// open link in new tab without ugly target="_blank"
$("a[href^='http']").attr("target", "_blank");

</script>





   
  </body>
</html>









