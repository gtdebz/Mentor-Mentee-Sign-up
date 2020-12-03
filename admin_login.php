
<?php include "headerladadmin.php";?>

<?php include "db.php"; ?>

<?php// session_start(); 
$dbusername = "";
$dbpassword = "";
?>

<?php 
if(isset($_POST['login-submit'])){
	
	$username_unsafe = $_POST['username'];
	$password_unsafe = $_POST['user_password'];
	
$username=mysqli_real_escape_string($connection, $username_unsafe);	
//$email=mysqli_real_escape_string($db, $_POST['email']);	
$password=mysqli_real_escape_string($connection, $password_unsafe);	
//$password_2=mysqli_real_escape_string($db, $_POST['password_2']);		




	
//if there are no errors, save user to database
	if(count($errors)==0) {
		$password=md5($password); //encrypt password before storing in database (security)
		
	}

		$dbusername = "";
        $dbpassword = "";
		
$query = "SELECT * FROM users WHERE username = '{$username}' and user_password = '{$password}' ";
$select_user_query = mysqli_query($connection, $query);
if(!$select_user_query){
	
	die('Query failed' . mysqli_error($connection));
	//header ('location:/alegegroup/admin_login.php');
	
}
		while($row=mysqli_fetch_assoc($select_user_query)){
		
			
		    //$db_user_id = $row['id'];
			$dbusername = $row['username'];
			$dbpassword = $row['user_password'];
			
			//$db_user_password = $row['user_password'];
			//$db_user_firstname = $row['user_firstname'];
			//$db_user_lastname = $row['user_lastname'];
			//$db_user_role = $row['user_role'];
		//$_SESSION['username'] = $username;
		//$_SESSION['success'] = "Welcome $username you are now registered" ; 
		
		}
		if ($dbusername !== $username && $dbpassword !== $password || (empty($username) or empty($password))){
			echo "<script type='text/javascript'>alert('Invalid username or password');
			document.location='admin_login.php';</script>";
			
		}else if($dbusername == $username && $dbpassword == $password ){
			
		    $_SESSION['username'] = $username;
			$_SESSION['user_password'] = $password;
		
			//$_SESSION['firstname'] = $db_user_firstname;
			//$_SESSION['lastname'] = $db_user_lastname;
			//$_SESSION['user_role'] = $db_user_role;
			
					
$sql="INSERT INTO users(username, user_password) VALUES('$username','$password')"; // store user data in database
mysqli_query($connection, $sql);
		
			
			echo "<script type='text/javascript'>alert('Login successful');
			document.location='dashboard.php';</script>";
			
			
					
	}else{     
	echo "<script type='text/javascript'>;
	document.location='admin_login.php';</script>";
			
			
	
	}
  }
 
	 ?>






<!DOCTYPE html>
<html lang="en">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!--<link href="../css/bootstrap.css" rel="stylesheet">-->

<link href="../Main.css" rel="stylesheet">
<link href="backtotop.css" rel="stylesheet" type="text/css">




<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">



		<!-- font awesome -->
		<link rel="stylesheet" href="../css/font-awesome.css">   <!--Working font awesome-->
        
        




<!-- jquery in head section necessary for navbar toggle dropdown to function when clicked-->
<script src="../js/jquery-2.1.1.min.js"></script> 






<!--for mega-menu dropdown stability-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



   
     
</head>




<style type="text/css">




body {
	margin-top:2.7%;
	padding:0;
	background-image:url(/alegegroup/admin/images/adminnew.jpg);
	background-color: #CCC;
	background-size:cover;
	}
/*start second admin*/


		

		   /* Back to top new css */
	#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 15px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color:#033; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
   padding: 6px;  /* Some padding */
    border-radius: 3px; /* Rounded corners */
    font-size: 22px; /* Increase font size */
	
	width:40px;
}

 #myBtn:hover {
    background-color:#099; /* Add a dark-grey background on hover */
	color:white;
	-webkit-transform: scale(1.3)
}
/*end of old back to top*/

@media and(max-width: 768px){
	.panel-title a {
		font-size:12px;
		
	}
	
	
}
		
</style>
  






   

<body>
 
<!--header-->
<br /><br><br><br /><br><br /><br><br />

<div class="header text-center">
<i class="fa fa-user-plus fa-3x" style="color:#46ffff; margin-bottom:1px;"></i>
<h3 class="wow zoomIn slow delay-.2s" style="color:#f3f3f3; margin-bottom:1px;" ><strong>Admin User</strong></h3>

<section class="wow fadeInLeft slow delay-.3s"><p class="text-muted"><h4 style="color:#fff;">Log in to commence your session...</h4></p></section>
</div><br><br><br />
<!--close header-->


    <div class="container" style="padding:18px; margin-top:-6%;">    
        <div id="loginbox" style="margin-top:33px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default" style="border:none">
                    <div class="panel-heading" style="background:#122; color:#fff: border:none;">
                        <div class="panel-title" style="color:#fff;">LOG IN</div>
                        <div style="float:right; font-size: 170%; position: relative; top:-16px;"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px; background-color:aliceblue" class="panel-body">

                      <!--  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12" "admin_login.php"></div>-->
                            
                        <form id="loginform" class="form control" role="form" action="adlogin.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group" style="background:transparent;">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="username" class="form-control" name="username" onclick="return validateForm();" value="" placeholder="username"  style="background:transparent;" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="user_password" onclick="return validateForm();" placeholder="password"  style="background:transparent;" required>
                                    </div>
                                    

                                
                            <div class="input-group" style="margin-top:-4%";>
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:3px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                     <!-- <a href="loginpage.php" class="btn btn-success" name="login-submit" id="login-submit">Login  </a>
                                      <a href="http://www.facebook.com" class="btn btn-primary">Login with Facebook</a>

                                    </div>-->
                                    
                                    <button type="submit" class="btn btn-success" onclick="return validateForm();" name="login-submit" id="login-submit"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Log in</button>
                                <!--<a href="http://www.facebook.com" class="btn btn-primary">Login with Facebook</a>-->

                                    </div>     
                                    
                                    
                                </div>

                            </form>     



                        </div>                     
                    </div>  
        </div>
      

	

</div>
<center><p style="color:#FFF; font-size:150%;">&copy; 2020 Trainers Inc.</p></center>


<button onClick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button> 

 <!--  <button onClick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button> 


<!--end latest contact form-->




<!--javascript code for back to top button-->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn1").style.display = "block";
    } else {
        document.getElementById("myBtn1").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} </script>
    


<!--Jquery for owl carousel-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!--<script src="js/bootstrap.min.js"></script>















    <!-- Bootstrap core JavaScript--
    ================================================== --
    <!-- Placed at the end of the document so the pages load faster --
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  <!--lightbox script-->
   <script src="js/lightbox.min.js"></script>
 
    
   
   <!--Scroll to top script-->
   <script src="js/scrolltop.js"></script>
   
   
   

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
