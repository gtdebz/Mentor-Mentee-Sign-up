<?php ob_start(); ?>


<?php 
include "db.php";

?>

<?php
session_start();


?>

<?php

//$connection=mysqli_connect("localhost", "root", "", "cms")or die('Could not connect to database' . mysqli_error($connection));
$username="";
//$role="";
//$email="";
//$name="";

 if (isset($_SESSION['username'])){         //get the key to execute the edit function
	
			  
			$username= $_SESSION['username'];              //assign the key to a variable $post_id in order to use it more effectively
			   
			
			$query_user_select="SELECT * FROM mentors WHERE username = '$username'";
			$select_user_profile_query= mysqli_query($connection, $query_user_select);
			 if(!$select_user_profile_query){              //if query to fetch userss fails echo fetch query cannot run else execute fetch function next
				 echo "Fetch Query Cannot Run";
				 }else{                                    //if query to fetch userss succeeds go ahead and fetch query next
					while($row=mysqli_fetch_array($select_user_profile_query)){

				
			 $id=$row['id'];

			$username=$row['username'];
			//$password=$row['password'];
			$name=$row['name'];
			$role=$row['user_role'];
	        $email=$row['email'];
			//$user_role=$row['user_role']; 
			//$user_image=$row['user_image'];
            //$user_image = $_FILES['user_image']['name'];
			//$temp_user_image = $_FILES['user_image']['tmp_name'];
			//move_uploaded_file($temp_user_image, "imgelectro/$user_image");
				
				//validate that user image is available in database
				//if(isset($_POST['user_image'])){
				//	$queryimage ="SELECT * FROM users WHERE username = $username";
				//$queryimageres = mysqli_query($connection, $queryimage);
				//	if(!$queryimageres){ echo "image not found please try again";
				//	}else{
				//	while($row=mysqli_fetch_assoc($queryimageres)){
					//$user_id = $row['user_id'];
					//	$user_image=$row['user_image'];
						
					//}
					//$user_image = $_POST['user_image'];
					
					//} 
					
					
					//}
		 }} }
		  ?>

		   
		  
		  <?php
			//to update mentor
			if(isset($_POST['update_user'])){
				
				$name = $_POST['name'];
				$role = $_POST['user_role'];
				$username = $_POST['username'];
				$email = $_POST['email'];

					$query = "UPDATE mentors SET ";
					$query .="email= $email, ";
					$query .="user_role= $role, ";
					$query .="name= $name, "; 
					$query .="username= $username, ";
				   $query .="WHERE username = '$username' "; 
					$update_user = mysqli_query($connection, $query); 
					if(!$update_user){ echo "<h3 class='text-primary text-center'>Cannot update user details kindly try again</h3>";}else{
					 echo "<h4 class='text-primary text-center'>User details have been updated successfuly</h4>";	
					}	
				
			}  
					?>		
			  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trainers | Dashboard</title>
  <!-- Favicons -->
 <link rel="icon" type="images/x-icon" href="/alegegroup/images/trfav.png"/>
 <!--<link href="/alegegroup/images/alg.png" rel="icon">
 <link href="/alegegroup/images/alg.png" rel="apple-touch-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		 <link  href="../backtotop.css" rel="stylesheet" >
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="margin-top:-3.7%;">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>RN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Mentor</b>&nbsp; Profile</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome gadjet?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="images/b1.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Alege Technical Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>From where?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Alege</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			 
        <i class="glyphicon glyphicon-log-out"></i> <span class="hidden-xs">Sign Out</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../imgelectro/<?php echo $user_image; ?>" class="img-circle" alt="User Image">

                <p>
                 <?php echo $username;  ?> - Admin (Mentor)
                  <small>Authorized Member</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="Mentorform.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../imgelectro/<?php echo $user_image; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username;  ?> Admin</p>
         
		  <!--for glowing circle -->
		   <?php if (isset($_SESSION['username'])) {echo  "<i class='fa fa-circle text-success text-sm' style='color:#0f0;'></i>&nbsp; Online";}
		   else{ echo "<i class='fa fa-circle text-success' style='color:#063'></i>&nbsp;offline";}   ?>
		   <br><br>
        </div><br><br>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!--<li class="treeview menu">-->
		<li class="">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Admin Dashboard</span>
          <!--  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>-->
          </a>
          <!--  <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-users"></i>General Users' Dashboard</a></li>
            <li><a href="dashboard.php"><i class="fa fa-user-plus"></i>Admin User's Dashboard</a></li>
          </ul>-->
        </li>
       

	   <li>
          <a href="#">
            <i class="fa fa-user-plus"></i><span>User Profile</span>
           
            <!--<span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>-->
			 <!--<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">--
            <li><a href="profile.php"><i class="fa fa-user-circle"></i> Admin</a></li>
            <li><a href="profile.php"><i class="fa fa-user-circle"></i> Subscriber</a></li>
            <!--<li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>--
          </ul>-->
		    </a>
        </li>
		
		
		
		<li>
          <a href="#">
            <i class="fa fa-commenting"></i> <span>Blog</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
		
		
		
	<!--	<li class="treeview menu">
          <a href="../ladenur.php">
            <i class="fa fa-commenting-o"></i> <span>Ladenur Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="posts.php?"><i class="fa fa-search"></i>View all Posts</a></li>
            <li><a href="posts.php?source=add_post"><i class="fa fa-commenting-o"></i>Add Posts </a></li>
          </ul>
        </li>-->
		
		
		
		
		<li>
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Blog Categories</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
		
		
		
		
		<li class="treeview menu">
          <a href="#">
            <i class="fa fa-commenting-o"></i> <span>Blog Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  <li><a href="#"><i class="fa fa-commenting"></i>View Blog</a></li>
            <li><a href="posts.php?source=add_post"><i class="fa fa-commenting-o"></i>Add Posts </a></li>
			 <li><a href="posts.php?"><i class="fa fa-search"></i>View all Posts</a></li>
          </ul>
        </li>
		
		
		
		<!--<li>
          <a href="posts.php">
            <i class="fa fa-envelope"></i> <span>Posts</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>-->
		
		
		<!--<li>
          <a href="comments.php">
            <i class="fa fa-commenting"></i> <span>Comments</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>-->
		
		
		
		<li class="treeview menu">
          <a href="#">
            <i class="fa fa-comments"></i> <span>Blog Comments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		   <li><a href="#"><i class="fa fa-comments-o"></i>Add Comments </a></li>
            <li><a href="comments.php?"><i class="fa fa-search"></i>View all Comments</a></li>
          </ul>
        </li>
		
		
	
		
		<li class="treeview menu">
          <a href="#">
            <i class="fa fa-users"></i> <span>Blog Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-user"></i>Add Users </a></li>
			 <li><a href="users.php?"><i class="fa fa-search"></i>View all Users</a></li>
          </ul>
        </li>
		
		
		<li class="treeview menu">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Trainings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./add_product.php"><i class="fa fa-cart-plus"></i>Add trainings</a></li>
            <li><a href="view_all_products.php"><i class="fa fa-search"></i>View Trainings</a></li>
			<!--<li><a href="./Quotealimig.php?"><i class="fa fa-user"></i>Alimig Quotes </a></li>
			<li><a href="./Quoteladenur.php?"><i class="fa fa-user"></i>Ladenur Quotes </a></li>-->
          </ul>
		  
        </li>
		
		
		
		
		<li class="treeview menu">
          <a href="#">
            <i class="fa fa-photo"></i> <span>Catalogues</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-binoculars"></i>Alege Scientific Catalogue</a></li>
            <li><a href="#"><i class="fa fa-cogs"></i>Alege Technical Catalogue</a></li>
			<!-- <li><a href="../alimigcatalogue.php"><i class="fa fa-wrench"></i>AlimiG Global Catalogue</a></li>
			 <li><a href="../alegerbizcatalogue.php"><i class="fa fa-briefcase"></i>Alege Business Catalogue</a></li>
			<!--<li><a href="./Quotealimig.php?"><i class="fa fa-user"></i>Alimig Quotes </a></li>
			<li><a href="./Quoteladenur.php?"><i class="fa fa-user"></i>Ladenur Quotes </a></li>-->
          </ul>
		  
        </li>
		
		
		
		
		
		
		
		
		<li class="treeview menu">
          <a href="#">
            <i class="fa fa-quote-left"></i> <span>Science Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-binoculars"></i>Science</a></li>
            <li><a href="#"><i class="fa fa-cogs"></i>Engineering </a></li>
			<li><a href="#"><i class="fa fa-wrench"></i>Technology </a></li>
			<!--<li><a href="./Quotebiz.php"><i class="fa fa-commenting"></i>Ladenur Quotes </a></li>-->
          </ul>
		  
        </li>
		
		
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mentor
 <small>Control panel</small>		
       <!-- <small> <iframe src="http://free.timeanddate.com/clock/i6uuo797/n125/tt1/tw0" frameborder="0" width="131" height="19"></iframe>
<b><iframe src="http://free.timeanddate.com/clock/i6uuoaz4/n125/ts1" frameborder="0" width="95" height="19"></iframe>
</b></small>-->
<?php echo "<small>"; echo date("d M, Y, h:i a"); echo "</small>";  ?>

      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section><br>

	
     <p style="margin-left:43%;">
	 
<iframe src="http://free.timeanddate.com/clock/i6uuonhv/n125/szw110/szh110/hoc000/hbw0/hfc09f/cf100/hnc07c/hwc000/facfff/fnu2/fdi76/mqcfff/mqs4/mql18/mqw4/mqd60/mhcfff/mhs4/mhl5/mhw4/mhd62/mmv0/hhcfff/hhs1/hhb10/hmcfff/hms1/hmb10/hscfff/hsw3" frameborder="0" width="110" height="110"></iframe>

	</p>
	
    <section class="content">
     

<button onClick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button>








<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


  <!--Scroll to top script-->
   <script src="../js/scrolltop.js"></script>


</body>
</html>
