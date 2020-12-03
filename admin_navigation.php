<?php ob_start(); ?>

<?php
session_start();
//if (isset($_SESSION['admin'])){
	
	//header('location:./admin/dashboard.php');
	//exit();
	//}
//if(!isset($_SESSION['user_role'])){
	
	//header('location:admin_login.php');
//}

?>

<?php

//include "db.php";
$connection=mysqli_connect("localhost", "root", "", "cms")or die(mysqli_connect_error('Could not connect to database' . $connection));
$username="";
 if (isset($_SESSION['username'])){         //get the key to execute the edit function
	
			  
			$username= $_SESSION['username'];              //assign the key to a variable $post_id in order to use it more effectively
			   
			
			$query_user_select="SELECT * FROM mentors WHERE username = '{$username}'";
			$select_user_profile_query= mysqli_query($connection, $query_user_select);
			 if(!$select_user_profile_query){              //if query to fetch userss fails echo fetch query cannot run else execute fetch function next
				 echo "Fetch Query Cannot Run";
				 }else{                                    //if query to fetch userss succeeds go ahead and fetch query next
					while($row=mysqli_fetch_array($select_user_profile_query)){

				
			 $id=$row['id'];

			$username=$row['username'];
			$password=$row['password'];
			$name=$row['name'];
			
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
      <span class="logo-lg"><b>Dashboard</b>&nbsp; Admin</span>
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
              <img src="../imgelectro/<?php echo $user_image; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $username;  ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../imgelectro/<?php echo $user_image; ?>" class="img-circle" alt="User Image">

                <p>
                 <?php echo $username;  ?> - Admin (Alegegroup)
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
		   <?php if (isset($_SESSION['username'])) {echo  "<i class='fa fa-circle text-success text-sm' style='color:#0f0;'></i>&nbsp;Online";}
		   else{ echo "<i class='fa fa-circle text-success' style='color:#063'></i>&nbsp;offline";}   ?>
        </div>
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
		
		
		
		
		
		
		 <!-- <li>
          <a href="mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
		
		
		
      <!--  <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
       <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>-->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Alegegroup 
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

	
	
	
	
	
	<!--<iframe src="http://free.timeanddate.com/clock/i6uup0a5/n125/szw110/szh110/hoced1c24/hbw10/cf100/hgr0/fiv0/fas34/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hhs1/hms1/hsc000/hss1" frameborder="0" width="110" height="110"></iframe>-->
     <p style="margin-left:43%;">
	 
<iframe src="http://free.timeanddate.com/clock/i6uuonhv/n125/szw110/szh110/hoc000/hbw0/hfc09f/cf100/hnc07c/hwc000/facfff/fnu2/fdi76/mqcfff/mqs4/mql18/mqw4/mqd60/mhcfff/mhs4/mhl5/mhw4/mhd62/mmv0/hhcfff/hhs1/hhb10/hmcfff/hms1/hmb10/hscfff/hsw3" frameborder="0" width="110" height="110"></iframe>


<!--<iframe src="http://free.timeanddate.com/clock/i6uuoqea/n125/szw110/szh110/hocf00/hbw0/hfcc00/cf100/hnca32/fas20/facfff/fdi86/mqcfff/mqs2/mql3/mqw4/mqd70/mhcfff/mhs2/mhl3/mhw4/mhd70/mmv0/hhcfff/hhs2/hmcfff/hms2/hsv0" frameborder="0" width="110" height="110"></iframe>-->

	</p>
	<!--<iframe src="http://free.timeanddate.com/clock/i6uuoszg/n125/szw110/szh110/hoc009/hbw0/hfc9ff/cf100/hnc0f9/hwc000/fan2/fas16/fac555/fdi60/mqcf0f/mqs4/mql2/mqw4/mqd78/mhcf90/mhs4/mhl3/mhw4/mhd78/mmv0/hhc990/hhs2/hmc990/hms2/hscf09" frameborder="0" width="110" height="110"></iframe>

	
	<iframe src="http://free.timeanddate.com/clock/i6uuotwq/n125/szw110/szh110/cf100/hnce1ead6" frameborder="0" width="110" height="110"></iframe>

	<iframe src="http://free.timeanddate.com/clock/i6uuoulm/n125/szw110/szh110/hoc000/hbw2/hfceee/cf100/hncccc/fdi76/mqc000/mql10/mqw4/mqd98/mhc000/mhl10/mhw4/mhd98/mmc000/mml10/mmw1/mmd98" frameborder="0" width="110" height="110"></iframe>-->

	
	
    <!-- Main content Contains contents of dashboard. Use this to create a div around posts, users and comments table -->
    <section class="content">
      <!-- Info boxes --
	 <!-- Info boxes -->
      
	
	
	
      <!-- /.tab-pane --
    </div>--
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar
  <div class="control-sidebar-bg"></div>

<!--</div>
<!-- ./wrapper -->




 <!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
       <iframe src="http://free.timeanddate.com/clock/i6uuo797/n125/tt1/tw0" frameborder="0" width="131" height="19"></iframe>
<b><iframe src="http://free.timeanddate.com/clock/i6uuoaz4/n125/ts1" frameborder="0" width="95" height="19"></iframe>
</b>
    </div>
    <strong>Copyright &copy; 2019  <a href="index.php">Alegegroup Inc</a>.</strong> All rights
    reserved.
  </footer>-->







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
