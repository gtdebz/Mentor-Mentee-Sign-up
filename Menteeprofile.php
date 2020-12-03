
<?php //ob_start();?>
<?php// session_start();  ?>
<?php include "admin_navigationmentee.php"; ?>


<?php //include 'db.php'; ?> 




 
   <!-- datatables local links-->
   
 <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/fixedHeader.bootstrap.min.css"/>
<link rel="stylesheet" href="css/responsive.bootstrap.min.css">
 


<!--sb-admin's 
 <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page but remove to remove right dark nav  -->
    <link href="css/sb-admin.css" rel="stylesheet">

<!--end sb-admin's-->

 <link  href="../backtotop.css" rel="stylesheet" >


<style>

@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

body {
    font-family: 'Source Sans Pro', sans-serif;
    line-height: 1.5;
    color: #323232;
    font-size: 15px;
    font-weight: 400;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}


/* CSS Document for back to top */

	
		
		   /* Old Back to top new css */
	#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 15px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color:#f15025;; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 8px 10px; /* Some padding */
    border-radius: 3px; /* Rounded corners */
    font-size: 13px; /* Increase font size */
	
}

 #myBtn:hover {
    background-color:#F15025; /* Add a dark-grey background on hover */
	opacity:0.5;
	color:white;
	-webkit-transform: scale(1.3)
}
/*end of old back to top*/

</style>




	<body>
	

     <?php //include 'db.php';  ?>
	  <?php  
	        $id="";
		    $username="";
			$password="";
			$name="";
		    $email="";
		    $role="";
			
			
		 if (isset($_SESSION['username'])){         //get the key to execute the edit function
	
			  
			$username= $_SESSION['username'];              //assign the key to a variable $post_id in order to use it more effectively
			   
		
			$query_user_select="SELECT * FROM mentees WHERE username = '{$username}'";
			$select_user_profile_query= mysqli_query($connection, $query_user_select);
			// if(!$select_user_profile_query){              //if query to fetch userss fails echo fetch query cannot run else execute fetch function next
				// echo "Fetch Query Cannot Run";
				// }else{                                    //if query to fetch userss succeeds go ahead and fetch query next
					while($row=mysqli_fetch_array($select_user_profile_query)){

				
			$id=$row['id'];
            $username=$row['username'];
			//$password=$row['password'];
			$name=$row['name'];
		    $email=$row['email'];
			$role=$row['user_role'];
		
			//$user_image=$row['user_image'];
            //$user_image = $_FILES['user_image']['name'];
			//$temp_user_image = $_FILES['user_image']['tmp_name'];
			//move_uploaded_file($temp_user_image, "imgelectro/$user_image");
				
				//validate that user image is available in database
				//if(isset($_POST['user_image'])){
				//	$queryimage ="SELECT * FROM users WHERE username = $username";
				//$queryimageres = mysqli_query($connection, $queryimage);
				//	if(!$queryimageres){ echo "image not found please try again";
					//}else{
					//while($row=mysqli_fetch_assoc($queryimageres)){
					//$user_id = $row['user_id'];
					//	$user_image=$row['user_image'];
						
					//}
					//$user_image = $_POST['user_image'];
					
					//} 
					
					
					}
		 }
		  ?>
		  
		 <?php
			//to update mentee
			if(isset($_POST['update_user'])){

				$email = $_POST['email'];
				$role = $_POST['user_role'];
                $name = $_POST['name'];
				$username = $_POST['username'];
				

					$query = "UPDATE mentees SET ";
					$query .="email= '{$email}', ";
					$query .="user_role= '{$role}', ";
					$query .="name= '{$name}', "; 
					$query .="username= '{$username}' ";
				    $query .="WHERE username = '{$username}' "; 
					$update_user = mysqli_query($connection, $query); 
					if(!$update_user){ echo "<h3 class='text-primary text-center'>Cannot update user details kindly try again</h3>";}else{
					 echo "<h4 class='text-primary text-center'>User details have been updated successfuly!!</h4>";	
					}	
				
			}  
					?>		
			  
		  
		  
		  
	  
	  
	  
		  
	  
	  
	  
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-left:-3.6%;">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase">Our Mentors </h3>
                            <p class="p-top-30 half-txt">Hi there contact us for a well informative mentoring session. </p>
                        </div>
                        <div class="col-lg-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hi There !</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Martin Smith</h5>
                                <span>founder & ceo</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://image.freepik.com/free-photo/elegant-man-with-thumbs-up_1149-1595.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hello</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
										<button class="btn btn-success btn-med text-center mt-5" data-toggle="modal" data-target="#verify5">Contact me</button><br>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Franklin Harbet</h5>
                                <span>HR Manager</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>I love to design</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Linda Anderson</h5>
                                <span>Marketing Manager</span>
                            </div>
                        </div>

                    </div>

                </div> 
		  </div>
	
	  
	  
	  
	  
<!-- Content Wrapper. Contains page content        --
  <div class="content-wrapper">    remove this div to center profile page properly
    <!-- Content Header (Page header) -->
	
	
	
	
	
	
    <section class="content-header">
      <h1>
       <i class="fa fa-user"></i> &nbsp; <?php echo  $username;  ?>'s Profile 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Skills</a></li>
        <li><a href="#">About</a></li>
		
        <li class="active"><a href="edit_profile.php?edit_profile&user_id='$user_id'">Edit User profile</a></li>
      </ol>
    </section>


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	  
    <!-- Main content -->
    <section class="content">
	  
	   <div class="row">
	  
	  
	  
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
				
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
				 <img class="profile-user-img img-responsive img-circle" name="user_image" src="../imgelectro/<?php echo $user_image; ?>" alt="User profile picture">

				<h3 class="profile-username text-center"><?php echo $username; ?></h3>

				
			
				
              <p class="text-muted text-center">Education Expert</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
			  
				
			  
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
               Director Alegegroup
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Lagos, Nigeria</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">Education</span>
                <span class="label label-success">Human Resource</span>
                <span class="label label-info">Travels</span>
                <span class="label label-warning">Adverts</span>
                <span class="label label-primary">Postals</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Contact me on netlog, linkedin, facebook .</p>
            </div>
				
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
        </div>
		
		
		   <div class="col-lg-8">
		
		  
						<form action="" method="post" enctype="multipart/form-data">
				
				
				
			
				<div class="form-group">
				<label for="Id">ID</label>
				<input value="<?php echo $id;  ?>" type="text" class="form-control" name="id" id="" readonly>
				</div>
				
				
				
				
				
				<div class="form-group">
				<label for="First Name">Name</label>
				<input value="<?php echo $name;  ?>" type="text" class="form-control" name="name" id="">
				</div>
				
				
				
				
				<div class="form-group">
				
				<label for="Role">User Role</label>
				
				<input value="<?php echo $role;?>" type="text" class="form-control" name="user_role">
				</div>
				
				
				
				
				<div class="form-group">
				<label for="author">Username</label>
				<input value="<?php echo $username;?>" type="text" class="form-control" name="username">
				</div>
				
				<div class="form-group">
				<label for="author">Email</label>
				<input value="<?php echo $email;?>" type="text" class="form-control" name="email">
				</div>
				
			

			
				
				<div class="form-group">
				<input type="submit" class="btn btn-primary" name="update_user" value="Update User">
				</div>
				
				
				<?php //} ?>
					</form>
				

				<!--</div><!--close well--
				
		






                <!--</div>
            </div>
            <!-- /.row --
</div>
</div>

   <!-- /.container --
   
   
   </div>    <!--close col lg 12--
   </div>   <!--close row-->
   <br>
   </div>  <!--close container-->
<br><br><br><br>
   </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
    <div class="pull-left hidden-xs">
       <iframe src="http://free.timeanddate.com/clock/i6uuo797/n125/tt1/tw0" frameborder="0" width="131" height="19"></iframe>
<b><iframe src="http://free.timeanddate.com/clock/i6uuoaz4/n125/ts1" frameborder="0" width="95" height="19"></iframe>
</b>

    </div>
   <center> <strong>Copyright &copy; 2019  <a href="index.php">Alegegroup Inc</a>.</strong> All rights
    reserved.</center>
  </footer>
  </div>
  </div>
  
   <button onClick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button> 
   
   
   
 <!--<center><p>&copy; 2019 Alegegroup Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p></center>

  

<!--for datatables web links--

   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    
   <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>-->
   
   
    
   <script src="js/jquery.dataTables.min.js"></script>
   
   <script src="js/dataTables.bootstrap.min.js"></script>
    
   <script src="js/dataTables.fixedHeader.min.js"></script>
   
 
<script>$(document).ready(function() {
    var table = $('#myTable').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
 </script>
 
 
 <!--sb-admin's--
  <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
 
 <!--end sb-admin's datatable-->
 
 
 


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


<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>




<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>




 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  <!--Scroll to top script-->
   <script src="js/scrolltop.js"></script>
 
 
<script>

$(window).scroll(function(){
        var wscroll = $(this).scrollTop();
        if(wscroll > 50){
         $(".navbar").addClass("shrink-nav");
        }
        else{
          $(".navbar").removeClass("shrink-nav");
        }
      });

</script>



 
 
 
 
  </body>
</html>










