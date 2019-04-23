<?php
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
	session_start();


	
	
		

	

 ?>
 <?php 

//This code is only for login admins
//by verifying the data from admins table
 /*if($adminprofile==true)
 {
 	$ch=1;
 }
 
 else if($userprofile==true)
 {
 	$ch=2;
 }
 else
 {
 	$ch=3;
 }
 switch ($ch)
 {
 	case '1':header("location:home.php");
		
		break;

	case '2':header("location:home.php");
		
 		break;

 		case '3': header("location:home.php");
 	
 	default: header("location:home.php");
 		# code...
 }*/

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Error : Purchage</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style-login.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/red.css" rel="stylesheet">
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
				<li><a href="signup.php">Signup</a></li>
				<li><a href="login.php">User Login</a></li>
				<li><a href="Admin.php">Admin Login</a></li>
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
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
						<h3 class="h-ultra">Sorry ! Due to technical issue we are unable to process your request. Please try again later or come to your nearest Life Line Health Care to buy the Health-Package</h3>
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
								<li><a href="#">Terms & conditions</a></li>
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
			</div>
		</div>
	</footer>
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

</body>
</html>
