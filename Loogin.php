


<?php include_once('Server2.php'); ?>
 
<?php include "headerlad1.php"  ?>



   
   
    <!--Main css style-->
   		<link rel="stylesheet" href="Main.css">
       
    <!--Main css style--
   		<link rel="stylesheet" href="MainLogin.css">
        
    
   <!--animate .css for wow slide fadeInLeft in animations-->

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">




   <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
       <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

   <!--font-awesome icon-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   
   <!--animate .css for wow slide fadeInLeft in animations-->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">



   <!--scroll reveal-->
      <script src="js/scrollreveal.min.js"></script>


   <!--staggered waypoint animation script-->
      <link rel="stylesheet" type="text/css" href="css/animate.css">
	  
   <!--<link rel="stylesheet" type="text/css" href"css/waypoints.css">-->
      <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
      <script src="js/waypoints.js"></script>
    

              <script src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous">
			  </script>

   <!-- jquery in head section necessary for navbar toggle dropdown to function when clicked and also Magnific popup-->
       <script src="js/jquery-2.1.1.min.js"></script> 


<script src="transparent.js"></script>


<style type="text/css">
/*{
	box-sizing:border-box;
	margin:0px;
	padding:0px	
	
	}
	body{
	margin:0px;
	padding:0px;
	background-image:url(images/homeimg.png);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover;
	top:15%;
	color:#fff;
	}
		
		
.animate {
    -webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}*/




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


/*start css for stylish navbar*/
/*scroll effect*/
.navbar-trans {
  background-color: transparent;
  border: none;
  transition: top 1s ease;
}
 
/*double row*/
.navbar-doublerow > .navbar{
	display: block;	
	padding: 0px auto;
	margin: 0px auto;
	min-height: 25px;
}
.navbar-doublerow .nav{
	padding: 0px auto;
}
/*old one.navbar-doublerow .dividline{
  margin: 5px 100px;
  padding-top: 1px;
  background-color: #333;
}*/
.navbar-doublerow .dividline{
  margin: 5px 100px;
  padding-top: 1px;
  background-color: none;
   margin: 5px 100px;

  color:#B5B5B5;
  opacity:0.4;
}
/*top nav*/
.navbar-doublerow .navbar-top ul>li>a {
	padding: 10px auto;
	font-size: 12px;
	
} 
/*down nav*/
.navbar-doublerow .navbar-down .navbar-brand {
	padding: 0px auto;
	float: left;
	color: #fff!important;
	font-size: 32px;
}
.navbar-doublerow .navbar-down ul>li>a{                 /*navbar bottom ul a*/
	font-size: 16px;
	color: #fff;
	transition: border-bottom .2s ease-in , transform .2s ease-in-out;
}
.navbar-doublerow .navbar-down ul>li>a:hover{
	border-bottom: 1px solid #F15025;
	color:#F15025!important;
}
.navbar-doublerow .navbar-down .dropdown{
    padding: 5px;
    color: #000;
}
.navbar-doublerow .navbar-down .dropdown ul>li>a,
.navbar-doublerow .navbar-down .dropdown ul>li>a:hover{
  color: #000;
  border-bottom: none;
}
.navbar-doublerow.navbar-trans.afterscroll {
}	
.navbar-doublerow.navbar-trans.afterscroll {		/*margin by which navbar disappears to the top after scroll 50% of the navbar*/

   top:-100px;
}	

.flex-container {
    display: flex;
    justify-content: space-between;
}
.flex-item {
}
/*text*/
.text-white,.text-white-hover:hover{color:#fff!important}
/*fontcolor*/
.light-grey {color:#000!important;background-color:#E6E9ED!important}




/*end css for stylish navbar*/

	.form .a{
	text-decoration:none;
	color:#fff;
	transition:.5s ease;	
		
		}
	
	.form .a:hover{
	color:#179b77	
		}
	
	.form{
	padding:40px;
	max-width:600px;
	margin:80px auto;
	border-radius:4px;
	box-shadow:0 4px 10px 4px rgba(19, 35, 47, 0.3);
	transition:.5s ease;
		}
		
	.form:hover{
	box-shadow:0 0px 40px 16px rgba(18,18,18,1.00);
		}	
	.tab-group {
	list-style:none;
	padding:0;
	margin: 0 0 40px 0;	
	}
	
	.tab-group:after{
	content: "";
	display:table;
	clear:both;
		}
		
	.tab-group li a{
	display:block;
	text-decoration:none;
	padding:15px;
	background:#000;
	color:#fff;
	font-size:20px;
	float:left;
	width:50%;
	text-align:center;
	cursor:pointer;
	transition:.5s ease;	
		}
		
	.tab-group li a:hover{
	background:#179b77;	
	color:#ffffff;	
		
		}	
		
	.tab-group .active a{
	background:#1ab188;	
	color:#ffffff;
		}
	
			
	.tab-content > div:last-child{
	display:none;	
		}
		
	#signup h6,#login h6{
		text-align:center;
		color:#000;
		font-weight:300;
		margin: 0 0 40px;
		font-size:24px;
	}
	
	label{
	position:absolute;
	transform:translateY(6px);
	left:13px;
	color:rgba(255,255,255,0.7);
	transition:all 0.25s ease;
	pointer-events:none;
	font-size:22px;
	}
	
	label .req {
		margin:2px;
		color:red;
		
		}
		
	label.active{
	transform:translateY(50px);
	left:2px;
	font-size:14px;	
		}
		
	label.active .req{
		opacity:0;
		}
	
	label.highlight{
		color:#000;
		margin-top:-10px;
		
		}
	
	input{
	font-size:22px;	
	font-weight:light;
	display:block;
	width:100%;
	height:100%;
	padding:5px 10px;
	background:none;
	background-image:none;
	color:#333;
	boder:1px solid #fff;
	border-radius:0;
	transition: border-color .25s ease, box-shadow .25s ease;
		}
		
	input:focus{
	outline:0;
	border-color:#000;	
		}
	
	.field-wrap{
	position:relative;
	margin-bottom:40px;
		}
		
	.top-row:after{
		content: "";
		display:table;
		clear:both;
		}
		
	.top-row > div {
		float:left;
		width:48%;
		margin-right:4%;
		
		}
	
	.top-row > div:last-child {
	   margin:0;
	}
	
	.button{
	border:0;
	outline:none;
	border-radius:0;
	padding:15px 0;
	font-size:2rem;
	font-weight:600;
	text-transform:uppercase;
	letter-spacing:.1em;
	background:#1ab188;
	color:#ffffff;
	transition: all 0.5s ease;	
		}
	
	.button:hover, .button;focus{
		background: #179b77;
		}
	
	.button-block{
		display:block;
		width:100%;
		
		}
	
	.forgot{
	margin-top: -20px;
	text-align:right;
	margin-bottom:10px;
	font-size:18px;
	color:#f15025;
	}
	
	.forgot a{
	text-decoration:none;	
	color:#f15025;	
		}*/
		
		
	
	
		
	
	
body{
	background:url(images/29.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
	position:relative;
	background-attachment:fixed;	
	
		}	
	
	#banner .container{
		height:100%;
		padding-top: 70px;
		padding-bottom:80px;
		}

.panel-login {
	border-color: #666;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	/*box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);*/
	background:transparent;
	max-width:100%;
	border-radius:4px;
	box-shadow:0 4px 10px 4px rgba(19, 35, 47, 0.3);
	transition:.5s ease;
	padding:32px;
	color:#333;
	font-size:14px;
}
.panel-login>.panel-heading {
	color: #fff;
	/*background-color: transparent;*/
	border:none;
	border-radius:0;
	text-align:center;
	background:#1ab188;	
	max-width:94%;
	height:45px;
	margin:10px auto;
	padding:15px 0 15px 0;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
	
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
	background:#000;
	border-color:#006;
	border-radius:0;
	padding:12.5px;
	height:100%;
}
/*.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}*/
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	/*border: 1px solid #666;*/
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	/*transition: all 0.1s linear;*/
	background:transparent;
	
	border:1px solid #fff;
	border-radius:0;
	transition: border-color .25s ease, box-shadow .25s ease;
		}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}

.panel-login input{
	color:#fff!important;
	
	}






.btn-login {
	/*background-color: #59B2E0;*/
	background-color: #033;
	outline: none;
	color: #fff;
	font-size: 18px;
	height: auto;
	letter-spacing:0.2rem;
	font-weight: bold;
	padding: 14px 0;
	text-transform: uppercase;
	border: none;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #1ab881;
	cursor:pointer;
}
.forgot-password {
	text-decoration: none;
	color: #000;
	font-weight:bold;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #033;
}

.btn-register {
	background-color: #033;
	outline: none;
	color: #fff;
	font-size: 18px;
	height: auto;
	font-weight: bold;
	letter-spacing:0.2rem;
	padding: 14px 0;
	text-transform: uppercase;
	border:none;
	
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1ab881;
	cursor:pointer;
}


	
	.panel-login:hover{
	box-shadow:0 0px 40px 16px rgba(18,18,18,1.00);
		}	

</style>





</head>

<body data-spy="scroll" data-target=".navbar" data-offset="10">

 
<!--=======SHOWCASE====-->
<section id="show">              
<div class="header" id="header">
<br><br><br><br><br><br><br><br><br>

<div class="container">

<center><a href="index.php"><h4><strong>Homepage</strong></h4></a></center>

    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<!--<hr>-->
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								
                                <form id="login-form" action="Loogin.php" method="post" role="form" style="display: block;">
                               
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password"required>
									</div>
									<div class="form-group text-center">
										<button><input type="checkbox" tabindex="3" class="" name="remember" id="remember"><button>
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
                                               
													<a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
					
                                <form id="register-form" action="Loogin.php" method="post" role="form" style="display: none; class="form-control" name="frm">
                              
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" required>
									</div>
									<div class="form-group">
                                    
										<input type="password"  name="password_1" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                      
									</div>
									<div class="form-group">
										<input type="password" name="password_2" id="confirm_password"  tabindex="2" class="form-control" placeholder="Confirm Password" required>
                                         
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" name="register-submit" id="register-submit" tabindex="4" style="width:165px; font-size:16px; margin:18px 7px; padding:20px 10px; border-radius:3px; text-align:center; background-color:#033;" class="btn btn-center btn-register" value="Register" onclick="return val();">Register</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






</section>




<!--Footer  section-->
<section id="footer">
<div class="container-fluid text-center">


<!--contact-->
<div class="contact-details">
<h4 class="wow slideInLeft slow delay-.2s"><i class="fa fa-envelope">   Email: trainers@gmail.com  </i>  | <i class="fa fa-mobile">   Mobile #: (234)-01-65826158 </i>  |  <i class="fa fa-home">   Office Address: 4 Magodo, Phase III, Lekki, VI, USA.</i></h4>
</div>
<!--end of contact-->






<!--header-->
<div class="header text-center">
<h2 class="wow zoomIn slow delay-.2s"><strong>On Socialmedia</strong></h2>
<section class="wow zoomIn slow delay-.2s"><hr class="font-awesome-underline" style="width:150px;"></section>
</div>
<!--end of header underline-->

<div class="row">
<div class="col-xs-12">
<section class="wow zoomIn delay-.1s"><div class="footer-icons text-center">
<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
<a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a>
<a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
<a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
</div></section>
<!--end of footer icons-->


<br><br>

<!--copyright-->
<div class="copyright">
<h4 class="wow fadeInUp slow delay-.2s">&copy; Copyright 2020 | Trainers Inc. | All rights reserved</h4>
</div>
<!--end of copyright-->



</div>
<!--end of col div-->
</div>
<!--end of row div-->
</div>
<!--end of container div-->
</section>
<!--end of footer section-->



</div></div>



<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button> 


<!--end waypoints delayed animation
</section>-->



<!--Jquery for owl carousel-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!--<script src="js/bootstrap.min.js"></script>




<!-- jQuery library -
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <!-- Bootstrap core JavaScript--
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
 
   
   <!--Numscroller js-->
   <script src="js/jquery-1.10.2.min.js"></script>
    
 
      
    <!--wowjs script-->
     <script src="js/wow.min.js"></script>
     <script src="js/wow.js"></script>
   
   
    <!--Owl carosel js script-->
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="owlcarousel/owlscript.js">   <!--owl carousel script could also be called from a js file-->
  </script>
  
   <!--Scroll to top script-->
   <script src="js/scrolltop.js"></script>
   
  
 
       
   <!--start waypoints delayed for progress bar-->      
         

 
     <!--end waypoints for progress bar-->
         
 
 
 
 

 <Script>
 
  $(document).ready(function(){
 var progressbarDiv = $('.progressbar');

$(window).on('scroll', function(){
	var winT = $(window).scrollTop(),
  	winH = $(window).height(),
  	progressbarT = progressbarDiv.offset().top;
  if(winT + winH  > progressbarT){
  	$('.progressbar').each(function(){
      $(this).find('.progressbar-bar').animate({
        width:$(this).attr('data-percent')
      },6000);
    });
  }
});
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
 
 
<script>

function val(){
	
if(frm.password_2.value != frm.password_1.value){
alert("Oops! Owsh! The two passwords don't match, please enter matching passwords..");	
return false;
}
return true;
}	
	
	
	
	
	
	

</script>





  
  
  </body>
</html>



































