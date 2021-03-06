<?php 

//This code is only for database connection

	session_start();
	error_reporting(0);
	$dbServername="localhost";
	$dbUsername="root";
	$dbPassword="1234";
	$dbName="db_hc";

	$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


	if($conn)
	{
		echo "";
	}
	else
	{
		die("Connection failed because ".mysqli_connect_error());
	}

?>


<?php

//This code will help to prevent unauthorize access from visitors
//only loged in user will able to view this page

	$adminprofile = $_SESSION['admin_name'];
	if($adminprofile==true)
	{
		
	}
	else
	{
		header("location:admin.php");
	}

	$query = "SELECT * FROM admins WHERE Username='$adminprofile'";
	$data = mysqli_query($conn,$query);
	$result = mysqli_fetch_assoc($data);
	

?>


<?php

//This code is only for to pass PID entered by admin and pass
//the value to the next page (Updatep)

	if(isset($_POST['update']))
	{
		$update1 = $_POST['pid1'];
		$query1 = "SELECT * FROM patients WHERE pid='$update1'";
		$data1 = mysqli_query($conn,$query1);
		$total1 = mysqli_num_rows($data1);
		if($total1==1)
		{
			$_SESSION['update']=$update1;
			header("location:updatep.php");
		}
		else
		{
			header("location:error.php");
		}

	}
	

 ?>

 <?php

//This code is only for to pass PID entered by admin and pass
//the value to the next page (Updatep)

	if(isset($_POST['updatea']))
	{
		$value1 = $_POST['value1'];
		$value2 = $_POST['value2'];
		$update11 = $_POST['pid1'];
		$query11 = "UPDATE  appoinments SET Status='Confirmed' WHERE aid BETWEEN '$value1' AND '$value2'";
		$data11 = mysqli_query($conn,$query11);

		

	}
	

 ?>

 <?php

 //This code is only for to pass PID entered by admin and pass
//the value to the next page (view1)

	if(isset($_POST['getpid']))
	{
		$ga = $_POST['pfn'];
		$gb = $_POST['pmn'];
		$gc = $_POST['pln'];
		$gd = $_POST['dob'];
		
			
		$_SESSION['abc']=$ga;
		$_SESSION['def']=$gb;
		$_SESSION['ghi']=$gc;
		$_SESSION['jkl']=$gd;
		header("location:view1.php");

	}
	

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome : Admin</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style-admin.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<!-- template skin -->
	<link id="t-colors" href="color/sand.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<p class="bold text-left">This Is Your Healthcare</p>
					</div>
					<div class="col-sm-6 col-md-6">
						<p class="bold text-right">Call us now +91 8016436125</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="home.php">
                    <img src="img/logo.png" alt="" width="200" height="55" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="Home.php">Home</a></li>
				<li><a href="logout.php">logout</a></li>				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
							<h2 class="h-ultra"><?php echo "Welcome"; ?></h2>
							<h2 class="h-ultra"><?php echo $result['FirstName']." ".$result['LastName']; ?></h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-wrapper">
							<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">						
								<div class="panel panel-skin">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>Operations</h3>
									</div>
									<div class="panel-body">


										<!--This form will show first 3 options-->

										<form action="php/signup.inc.php" method="POST" role="form" class="lead">
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">													
														<a href="appoinment.php" type="button" class="btn btn-info btn btn-skin btn-block btn-lg" role="button">View Appointments</a>
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">													
														<a href="patients.php" type="button" class="btn btn-info btn btn-skin btn-block btn-lg" role="button">View All Patients</a>
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">													
														<a href="registerp.php" type="button" class="btn btn-info btn btn-skin btn-block btn-lg" role="button">Register New Patient</a>
													</div>
												</div>												
											</div>											
										</form>
										<div class="row">
											<div class="divider-short"></div>
										</div>


										<!--This form will show update option-->
										
										<form name="View1" action="welcomea.php" method="POST">											
											<h6>Confirm Appoinments</h6>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
													<label>From</label>													
														<input type="number" name="value1" placeholder="Appointment ID" required title="" id="" class="form-control input-md">
													</div>
												</div>
												<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
													<label>To</label>													
														<input type="number" name="value2" placeholder="Appointment ID" required title="" id="" class="form-control input-md">
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<input type="submit" name="updatea" value="update" class="btn btn-skin btn-block btn-lg">
													</div>
												</div>
											</div>
											<div class="row">
											<div class="divider-short"></div>
										</div>
										</form>
										
									
										


										<form name="View2" action="welcomea.php" method="POST">											
											<h6>Update Patient</h6>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">													
														<input type="number" name="pid1" placeholder="Enter PID" required title="" id="username" class="form-control input-md">
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<input type="submit" name="update" value="update" class="btn btn-skin btn-block btn-lg">
													</div>
												</div>
											</div>
										</form>
										<div class="row">
											<div class="divider-short"></div>
										</div>


										<!--This form will show search option-->

										<form name="View3" action="welcomea.php" method="POST">											
											<h6>Search Patient</h6>
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-3">
													<div class="form-group">
													<label>Firtname</label>													
														<input type="text" name="pfn" placeholder="Firstname" required title="" id="username" class="form-control input-md">
													</div>
												</div>
												<div class="col-xs-z col-sm-3 col-md-3">
													<div class="form-group">
													<label>Middlename</label>													
														<input type="text" name="pmn" placeholder="Middlename"  title="" id="username" class="form-control input-md">
													</div>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3">
													<div class="form-group">
													<label>Lastname</label>													
														<input type="text" name="pln" placeholder="Lastname" required title="" id="username" class="form-control input-md">
													</div>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3">
													<div class="form-group">
													<label>Date of Birth</label>													
														<input type="date" name="dob" placeholder="Date of Birth" required title="" id="username" class="form-control input-md">
													</div>
												</div>												
											</div>
											<input type="submit" name="getpid" value="Search" class="btn btn-skin btn-block btn-lg">
										</form>																			
									</div>
								</div>					
							</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>					
    </section>
	
	<!-- /Section: intro -->

	
	<footer>	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
						<div class="widget">
							<h5>About Life Line</h5>
							<p>About our health care</p>
						</div>
					</div>
				<div class="wow fadeInDown" data-wow-delay="0.1s">
			<div class="widget">
				<h5>Information</h5>
				<ul>
				<li><a href="home.php">Home</a></li>
					<li><a href="#">Laboratory</a></li>
					<li><a href="#">Medical treatment</a></li>
					<li><a href="#">Terms & conditions</a>
				</li>
			</ul>
		</div>
	</div>
		</div>
			<div class="col-sm-6 col-md-4">
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Life Line Center</h5>
						<p>*Bangalore *Kolkata *Mumbai</p>
						<p>*Delhi *Chennai *Hydrabad</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> We are available 24x7
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +918016436125
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> tanmay_mukherjee@live.com
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>Salt Lake, Sector #5, Kolkata, 700 001, West Bengal</p>						
					</div>
				</div>
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
							<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
							<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
						<div class="text-left">
						<p>&copy;Copyright 2018 - Life Line Medical Group. All rights reserved.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://bootstraptaste.com/">Designed</a> by Tanmay</p>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
				</div>
			</div>
		</div>
	</footer>	
</div>


</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>


<!-- This code will make all the inputs first letter as capital-->
<!--but not working :)
	
    <script type="text/javascript">
    	jQuery.noConflict();
    	jQuery(document).ready(function($)
    	{
    		$('.name').keyup(function(event)
    		{
    			var textBox=event.target;
    			var start=textBox.selectionStart;
    			var end=textBox.selectionEnd;
    			textBox.value=textBox.value.charAt(0).toUpperCase + textBox.value.slice(1).toLowerCase();
    			textBox.setSelectionRange(start, end);
    		});
    	});
    </script>
-->


</body>
</html>


