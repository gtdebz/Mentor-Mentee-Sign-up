<?php ob_start();  ?>

<?php
session_start();      //Start register and login session
$name="";              //define variable name
$username="";         			//define variable username
$email="";						//define variable email
$errors="";							//define errors variable
$password="";					//define variable password 1
$role="";					//define variable password 2
$db_userename="";                //define database username 
$db_password="";                 //define database password
$errors=array();				//define variable errors
$servername= 'localhost';		//define variable database servername
$dbuser='root';					//define variable database user
$dbpassword='';					//define variable database password
$dbname='cms';				//define variable database name


//connect to database
// first parameter resource
$connection = mysqli_connect('localhost', 'root', '', 'cms');


// if the register button is clicked pass user data through POST global
if(isset($_POST['register-submit'])){
$username=mysqli_real_escape_string($connection, $_POST['username']);	
$email=mysqli_real_escape_string($connection, $_POST['email']);	
$role=mysqli_real_escape_string($connection, $_POST['user_role']);	
$password=mysqli_real_escape_string($connection, $_POST['password']);	
$name=mysqli_real_escape_string($connection, $_POST['name']);		

//form field validation to ensure that form fields are filled properly
if (empty($name)){
	array_push($errors, "Name is required");}
	
if (empty($role)){
	array_push($errors, "User Role is required");}
	
if (empty($username)){
	array_push($errors, "Username is required");}
	
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	array_push($errors, "Please enter a valid email");}
	
	if (empty($password)){
	array_push($errors, "Password is required");}
	
	

	
//if there are no errors, save user to database
	if(count($errors)==0) {
		$password=md5($password); //encrypt password before storing in database (security)
		
$sql1="INSERT INTO mentors(name, username, email, user_role, password) VALUES('$name','$username','$email','$role','$password')"; // store user data in database
mysqli_query($connection, $sql1);
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Welcome $username you are now registered" ; 
		header ('location: Mentorsuccess.php'); //redirect to homepage
		}
	}
	
	
	
	
	
	//log user in from login page
	if (isset($_POST['login-submit'])){
		$username=mysqli_real_escape_string($connection, $_POST['username']);	
        $password=mysqli_real_escape_string($connection, $_POST['password']);		

//form field validation to ensure that form fields are filled properly
if (empty($username)){
	array_push($errors, "Username is required");
	}
	
if (empty($password)){
	array_push($errors, "Password is required");
	 }
	
	
	//if there are no errors, save user to database
	//if(count($errors)==0) {
		$password=md5($password); //encrypt password before storing in database (security)
		
		
		//Validate login data to make sure it matches database records
		
		$query="SELECT username, password from mentors where username ='$username' and password = '$password'";
		$select_query=mysqli_query($connection, $query);
		if(!$select_query){
			
			die ('Query failed' . mysqli_error($connection));
		}
		
		      //define new variables coming from database
			       $db_username="";
				   $db_password="";
				   
				   while($row=mysqli_fetch_array($select_query)){
					   
					  $db_username = $row['username'];
					  $db_password = $row['password'];
					   
					   }
			
              //validate user data as they try to login			
		
		      if ($db_username !== $username && $db_password !== $password || (empty($username) or empty($password))){
				  
				  echo "<script type='text/javascript'>alert('Invalid username or password');
				         document.location='Mentorform.php';</script>";
				  
				  
				  
			  }else{
				  
			     //if there are no validation errors set the data to sessions and insert into database  
			     $_SESSION['id']=$id;
		         $_SESSION['username'] = $username;
			     $_SESSION['password'] = $password; 
			
			
		
		$sql2="INSERT INTO mentorslogin(username, password)VALUES('$username', '$password')";     //store user data into database
	    mysqli_query($connection, $sql2);
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Welcome $username you are now logged in" ; 
		header ('location: Mentorprofile.php'); //redirect to homepage
		
		}
	
	}
	
	
	
	
	?>
	
	
