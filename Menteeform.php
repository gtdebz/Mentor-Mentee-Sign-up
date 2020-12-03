<?php include "db.php"; ?>
<?php //include "Server2.php";  ?>




<html>
  <head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mentee Signup</title>
	<link rel="icon" type="images/x-icon" href="/alegegroup/images/trfav.png"/>
      <!-- Latest compiled and minified CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
   
    
    
		<!-- font awesome -->
		<link rel="stylesheet" href="css/font-awesome.css">   <!--Working font awesome-->
        
 
<!-- Optional theme--> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



  
    <!-- Latest compiled and minified JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    








<!--parallax scroll link-->
<script src="js/jquery-1.9.1.min.js"></script>

<script src="formslide.js"></script>




</head>





<style>
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

#box{
	
	height:200px;
	width:1000px;
	opacity: 0.9;                          /*green box holding login signup form*/
	border-radius:5px;
	position:absolute;
	top:40%;
	left:13%;
	right:10%;
	bottom:50%;
	transform:translateX(-50%,-50%);
	
	}

#Contact{                                 /*green box with shadow holding login signup form*/                    
	height:400px;
	width:400px;
	background-color:#066;
	opacity:0.5;
	border-radius:5px;
	position:absolute;
	top:-53%;
	bottom:30%
	right:30%;
	left:29%;
	transform:translateX(-50%,-50%);
	z-index:99;
	box-shadow: 0px 0px 10px 7px rgba(0,0,0,0.30);       /*Green box shadow*/
	}

#loginform,#signupform{
	position:absolute;
	top:50%;
	left:49%;
	transform:translate(-50%,-50%);
	z-index:999;
	
	}
	
	
/*#loginform{
	top:50%;
	left:62.5%;
	visibility:hidden;
	}	*/
	
	
	
#signupform{
	top:50%;
	/*left:62.5%;*/
	left:47%;                                /*static hidden signup form that slides to the right when sign up is clicked*/
	visibility:hidden;
	}



#loginform h1,#signupform h1{                /*header title login and Sign Up text*/
	font-family:arial;
	font-size:20px;
	color:#F30;
	letter-spacing:3px;
	}
#loginform input,#signupform input{
	height:40%;
	width:300px;
	border:none;
	outline:none;
	border-bottom:0.1px solid #ccc;
	margin:5px;
	background-color:transparent;
	opacity:0.8;                    /*sharpness or dullness of text input bottom lines*/                    
	color:#fff;                    /*color of text input*/
	}

#loginform button,#signupform button{     /*red lgoin and signup button*/
	height:40px;
	width:130px;
	background-color:#f30;
	font-family:monospace;
	font-size:17px;
	border:none;
	outline:none;
	border-radius:5px;
	margin-top:30px;
	margin-left:175px;
}



#loginform button:hover,#signupform button:hover{    /*red login and signup button hover*/     
	background-color:#099;
	cursor:pointer;
	color:#000;
	
	}	
#login_btn,#signup_btn{
	height:35px;
	width:120px;
	background-color:#066;
	color:white;
	border:1px solid white;
	border-radius:5px;
	outline:none;
	position:absolute;
	left:72%;
	top:40%;
	transform:translate(50%,50%);
	transition:all .5s;
	}
	
#signup_btn{
	left:3%;
	}	
	
#login_btn:hover,#signup_btn:hover{
	background-color:white;
	cursor:pointer;
	color:#066;
	border:1px solid #066;
	
	}	
	
#login_msg{                   /*Do u have an acct login text */                          
	
	font-family:arial;
	font-size:18px;
	color:white;
	position:absolute;
	top:35%;
	left:84%;
	transform:translate(-50%,-50%);
	z-index:1;
	}	
	
#signup_msg{					/*Don't have an acct signup text */ 
	font-family:arial;
	font-size:18px;
	color:white;
	position:absolute;
	top:35%;
	left:15%;
	transform:translate(-50%,-50%);
	z-index:1;
	
	}	
	
	
		
	/* New search form trial*/
.search-my{                             /*div holding search form sitting in nav-bar*/
	float:right;
	border:1px solid #999;
	margin-top:10px;
    margin-right:-3%;
	font-size:15px;
	height:27px;
	}	
	
.search1{                                /*search button that is clicked to go to search query*/
	width:140px;
	border:none;
	background-color:none;
	background-color:transparent;
	
	}	
	
	
.button1{								/* font-awesome icon within the search button that the user clicks*/
	color:#999;
	border: 1px solid #999;
	border-top: none;
	border-bottom: none;
	border-right: none;
	height:25px;
	width:30px;
	background-color:rgba(0,0,0,.1);
	}
	
.button1:hover{
	background-color:rgba(0,0,0,.4);
	color:#FFF;	
	}	
	
#cop h5{                /*copyright*/
	color:#fff;
	font-size:15px;
	margin-top:-0.2%;
	}	
	



	
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



	
	
	
	
@media(max-width: 768px) {
#box{
	display:block;
	max-width:100%;
	height:40%;
	margin-left:-12.5%;
	margin-top:-14%;
	}
	
#Contact{                             /*green login nd sign up box*/
	display:block;
	overflow:inherit;
	top:-17%;
	width:52%;
	overflow:visible;
	height:160%;
	margin-left:-6.10%;
	padding:9px;
	
	
	}	
	
#loginform input{
	max-width:80%;
	display:block;
	
	text-align:center;
	margin-left:10%;
	}	
	
#signupform input{	
	max-width:90%;
	display:block;
	
	text-align:center;
    margin-left:2%;
}
	
	
#login_btn{                  /*green login button*/
	max-width:65px;
	margin-left:-7.7%;
	margin-top:10%;
	font-size:10px;
	}	
	
#signup_btn	{				/*green signup button*/
	
	max-width:60px;
	margin-left:-12.6%;
	margin-top:10%;
	font-size:10px;
	
	}
	
	
#login_msg{                    /*account log in text*/
	display:block;
	font-size:10px;
	float:left;
	margin-left:3%;
	margin-top:10%;
	
	
	
	
	}	
	
#signup_msg{                       /*no acct sign up text*/
	display:block;
	font-size:10px;
	float:right;
	margin-left:-3.6%;
	margin-top:10%;
	
	
	}
		
 #loginform{
	 display:block;
	 max-width:48%;
	 min-height:30%;
	 color:#fff;
	 }	
 #signupform	{             /*input sign up groups with lines*/
	 display:block;
	max-width:39%;
	color:#fff;
	 }
	 
#loginform button{
	display:block;
	position:center;
	max-width:60px;
	font-size:12px;
	margin-left:28.9%;
	}	 
#signupform button{
	display:block;
	position:center;
	max-width:60px;
	font-size:12px;
	margin-left:23%;
	margin-top:-4%;
	padding:5px;
	}	 
#loginform h1{
	display:block;
	margin-left:29%;
	margin-top:20%;
	font-size:18px;
	}
#signupform h1	{
	display:block;
	margin-left:15%;
	font-size:18px;
	
	} 	
	}	
	
	
	</style>
	
	
	<!--start body-->
	
<body>

 
 <!--start animated navbar-->
  
<nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
    <div class="container">
      <!-- left nav top -->
      <ul class="nav navbar-nav pull-left">
        <li><a href="#"><span class="glyphicon glyphicon-thumbs-up text" style="color:#fff;"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-globe text" style="color:#fff;"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-pushpin text" style="color:#fff;"></span></a></li>
        <li><a href="#"><span class="text" style="color:#fff; font-weight:bold; letter-spacing:1px;">QUESTIONS? CALL : <b>+234-9084091211</b></span></a></li>
      </ul>
      <!-- right nav top -->
      <ul class="nav navbar-nav pull-right">
    
        <li><a href="https://www.gmail.com" class="text" style="color:#fff;">Email: trainers@gmail.com</a></li> 
      </ul>
    </div>
    <div class="dividline light-grey"></div>
  </nav>
  <!-- down nav -->
  <nav class="navbar navbar-down">
    <div class="container">
      <div class="flex-container">  
        <div class="navbar-header flex-item">
         
          <div class="navbar-brand" href="#"><a href="index.php">Trainers</a></div>
        </div>
        <ul class="nav navbar-nav flex-item hidden-xs">
          <li><a href="index.php">Homepage</a></li>
         
         
        </ul>
        <ul class="nav navbar-nav flex-item hidden-xs pull-right">
          <li><a href="resetpassword.php" class="">Forgot your Password?</a></li> 
  
        </ul>
        <!-- dropdown only moblie -->
          <div class="dropdown visible-xs pull-right">
            <button class="btn btn-default dropdown-toggle " type="button" id="dropdownmenu" data-toggle="dropdown">
             
           <i class="fa fa-bars"></i>			  
            </button>
            <ul class="dropdown-menu">
              <li><a href="index.php">Trainers</a></li>
             
        <li><a href="#"> Call: <b>+234-9084091211</b></a></li>
         <li><a href="#"> Email: <b>trainers@gmail.com</b></a></li>
             
              <li role="separator" class="divider"></li>
               <li><a href="resetpassword.php">Forgot Password</a></li> 
            </ul>
          </div>
        </div>  
      </div>
    </nav>
  </nav> 
   

<!--end animated navbar-->




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		

<!--Start Mentee Sign Up Form-->

<br><br><br><br><br>
<div id="box">
<div id="Contact"></div>


<form action="Menteeserver.php" method="post" >
<div id="loginform" >
<center><h1><b>LOGIN AS MENTEE</b></h1></center>

<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button class="btn" type="submit" name="login-submit" >LOGIN</button>
</div>
</form>

 <form action="Menteeserver.php" method="post" >
<div id="signupform">
<center><h1><b>SIGN UP AS MENTEE</b></h1></center>
<input type="text" name="name" placeholder="Full name" required><br>
<input type="email" name="email" placeholder="Email" required><br>
<input type="text" name="username" placeholder="Username" required><br>
<input type="text" name="user_role" placeholder="User Role" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button class="btn" type="submit" name="register-submit" >SIGN UP</button>
</div>
</form>



<div id="login_msg">Account?</div>
<div id="signup_msg">No Account?</div>

<button id="login_btn">LOGIN</button>
<button id="signup_btn">SIGN UP</button>

</div>
</form>
<br><br>
<div id="cop">
<center><h5>&copy; Copyright 2020 | Trainers Inc. | All rights reserved</h5></center>

</div>

    <!-- Bootstrap core JavaScript-
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>
    



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
