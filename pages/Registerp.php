
<?php
	session_start();


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
	
	$adminprofile = $_SESSION['admin_name'];
	if($adminprofile==true)
	{
		
	}
	else
	{
		header("location:admin.php");
	}	

?>

<?php

	if(isset($_POST['register']))
	{
		$uid = $_POST['ud'];
		$fn = $_POST['fn'];
		$mn = $_POST['mn'];
		$ln = $_POST['ln'];
		$dob = $_POST['dob'];
		$gndr = $_POST['gn'];
		$ag = $_POST['age'];
		$occu = $_POST['occu'];
		$dn = $_POST['di'];
		
		$ds = $_POST['ds'];
		
	
	
		$sql = "INSERT INTO patients (pid,uid,pfname,pmname,plname,dob,gender,age,poccupation,din,dout,under,disease,mdcn1)	VALUES (NULL,'$uid', '$fn','$mn','$ln','$dob','$gndr','$ag','$occu','$dn',NULL,NULL,'$ds',NULL);";
		mysqli_query($conn,$sql);

		header("location: registerp.php?submit=success");
	}


	

?>



<!DOCTYPE html>

<html lang="en">

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>LLHC : Register</title>
	
    <!--css -->
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
        				<li class="active"><a href="home.php">Home</a></li>
        				<li><a href="welcomea.php">Back</a></li>    
        			</ul>
    			</div>
            	<!-- /.navbar-collapse -->
			</div>
        	<!-- /.container -->
   		</nav>

		<section id="intro" class="intro">
			<div class="intro-content">
				<div class="container">				
					<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">						
							<div class="panel panel-skin">								
								<div class="panel-body">
									<form action="registerp.php" method="POST" role="form" class="lead">										
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>User ID</label>
													<input type="email" name="ud" placeholder="Enter UID" required id="first_name" pattern="[a-zA-Z0-9._-]*+@[a-zA-Z]*+.[A-Za-z]*" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="fn" placeholder="First Name" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Middle Name</label>
													<input type="text" name="mn" placeholder="Middle Name"  id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="ln" placeholder="Last Name" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Date of Birth</label>
													<input type="date" name="dob" placeholder="Date of Birth" required title=""id="address" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Gender</label>
													<input type="text" name="gn" placeholder="Gender" required maxlength="1" id="phonenumber" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Age</label>
													<input type="number" name="age" placeholder="Age" required title="Without country code" id="phonenumber" minlength="10" maxlength="10" class="form-control input-md">
												</div>
											</div>										
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Occupation</label>
													<input type="text" name="occu" placeholder="Occupation" required id="username" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Date In</label>
													<input type="date" name="di" placeholder="Admission Date" required id="password" class="form-control input-md">
												</div>
											</div>											
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Disease</label>
													<input type="text" name="ds" placeholder="Disease/Reason" required id="address" class="form-control input-md">
												</div>
											</div>																																	
										</div>
										<div class="row">
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group">
													<input type="submit" name="register" value="Submit" class="btn btn-skin btn-block btn-lg">
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group">
													<input type="reset" name="reset" value="Clear" class="btn btn-skin btn-block btn-lg">
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group">
													<a href="welcomea.php"  role="button" class="btn btn-info btn btn-skin btn-block btn-lg">Cancel</a>
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