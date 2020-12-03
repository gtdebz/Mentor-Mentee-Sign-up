<?php ob_start();  ?>
<?php //include_once ('server.php');
//session_start();
$email="";
$fullname="";
$username="";
$password="";
$servername='localhost';
$dbuser='root';
$dbpassword='';
$dbname='cms';
?>

<?php include 'headerladregister.php' ?>


<?php  

   if(isset($_SESSION['username'])){
	   
	   $username = $_SESSION['username'];
	   
   }



?>

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
    




<script src="formslide.js"></script>




</head>
<style>
body{
	margin:0px;
	padding:0px;
	background-image:url("images/homeimg1.png");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover;
	top:15%;
	}

	
#Success h4{
	max-width:60%;
	color:#ccc;
	padding:60px;
	margin-top:10%;
	background-color:transparent;
	border: 1px solid #ccc;
	border-radius: 6px;
	font-size:24px;
	}
	
#Success button{
	
	margin-top:5%;
	
	
}	
	
	
#cop h5{
	color:#000;
	
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
.navbar-doublerow .dividline{
  margin: 5px 100px;
  padding-top: 1px;
  background-color: #033;
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
	color: #033;
	font-size: 32px;
}


 
/*navbar*/
	.navbar{                /*entire navbar*/
	border:0;
	padding:7px 4px;
	transition: all 1s ease-in-out;
	background:transparent;
	margin:0;
	padding:0;
	color:aliceblue;
	}
	.navbar li a{
		color:#fff!important;
	}

	.active a {
		background:none!important;
		color:#fff!important;
		}	
	.active a:hover {	
	
		color:#F90!important;
		}
	.navbar-brand{
		font-size:300px;
		font-style: Montserrat, italic;
		color:#
	   
		font-weight:bolder;
		}
		
		.navbar-brand:hover{
		font-size:20px;
		font-style: Montserrat, italic;
		color:#F15025!important;
	   border-bottom:none;
		}
	
	
	.active a {
		background:none!important;
		color:#fff!important;
		}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
.navbar-doublerow .navbar-down ul>li>a{
	font-size: 16px;
	color: #fff!important;
	transition: border-bottom .2s ease-in , transform .2s ease-in-out;
}
.navbar-doublerow .navbar-down ul>li>a:hover{
	border-bottom: 1px solid #f00;
	color: #F00;
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




			
@media(max-width:1200px){
	.navbar-nav li{
		font-size: 15px;
		}
}
	
@media(max-width:992px){
	.navbar-toggler{
		margin: 10px 0px 10px 30px;
		border-color:#ff4fa1;
		}
		
		
	.navbar-toggler:hover .navbar-toggler:focus{
		background-color: #fff;
		border-color:#ff4fa1;
		}
		.navbar-light{
		background-color:#fff;	
			}
		.navbar-nav li a{
		text-align:center;
		background-color:aliceblue;	
			}
		.navbar-nav li a:hover{
		background-color: #ff4fa1;
			}
		.services_grid{
		padding:10px 0px;	
			}
		
	.services p{
		padding:10px 50px 0px;
		
		}
	}
	
	@media(max-width:768px){
		#Success h4{
			display:block;
			text-align:center;
			margin-left:5px;
			margin-right:5px;
			}
	.about p{
		font-size: 15px;
		}
		
	.services p{
		padding:10px 10px 0px;
		
		}
	.services_gridi{
		margin:auto;	
			}
	.services_grid_right{
		border-right:2px solid #ff4fa1;	
		text-align:center;
			}	
.contact p{
	    font-size:9px;
		padding:10px 10px 0px;
		}
}	
	

	#cop{
		
		color:#fff;
	}
	

	



</style>
<body>

<!--end animated navbar-->

<br><br><br><br><br>


<!--start th div-->
	
    <section id="Success">
<div class="col-md-12">	
<div id="row">
<center><p><h4>Registration successful <?php echo $username; ?>!!...Welcome to Trainers Incorporated.</h4></p></center>
<center><a href="Mentorform.php"><button class="btn  text-center" style="margin-top:4%;"><i class="fa fa-long-arrow-right"></i> Log in to your profile...</button><a></a></center>
</div>


<!--end th div-->
</section>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<div id="cop">
<center><h5 style="color:#fff;">&copy; Copyright 2020 | Trainers Inc. | All rights reserved</h5></center>
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

	







