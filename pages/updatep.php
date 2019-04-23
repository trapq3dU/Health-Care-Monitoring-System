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

	$update2 = $_SESSION['update'];
	if($update2==true)
	{
		$uquery = "SELECT * FROM patients WHERE pid='$update2'";
		$udata = mysqli_query($conn,$uquery);
		$uresult = mysqli_fetch_assoc($udata);
		$a = $uresult["pid"];
		$b = $uresult["uid"];
		$c = $uresult["pfname"];
		$d = $uresult["pmname"];
		$e = $uresult["plname"];
		$f = $uresult["dob"];
		$g = $uresult["gender"];
		$h = $uresult["age"];
		$i = $uresult["poccupation"];
		$j = $uresult["din"];
		$l = $uresult["dout"];
		$n = $uresult["under"];
		$o = $uresult["disease"];
		$p = $uresult["mdcn1"];
		
	}
	else
	{
		header("location:login.php");
	}
	
?>


<?php

	$update3=$_SESSION['update'];

	if(isset($_POST['update1']))
	{
		
		$bb = $_POST['uid'];
		$cc = $_POST['fname'];
		$dd = $_POST['mname'];
		$ee = $_POST['lname'];
		$ff = $_POST['dob'];
		$gg = $_POST['gender'];
		$hh = $_POST['age'];
		$ii = $_POST['poccu'];
		$jj = $_POST['din'];
		$kk = $_POST['tin'];
		$ll = $_POST['dout'];
		$mm = $_POST['tout'];
		$nn = $_POST['undr'];
		$oo = $_POST['dss'];
		$pp = $_POST['mdcn'];


		$uquery2 = "UPDATE  patients SET uid='$bb',pfname='$cc',pmname='$dd',plname='$ee',dob='$ff',gender='$gg',age='$hh',poccupation='$ii',din='$jj',dout='$ll',under='$nn',disease='$oo',mdcn1='$pp' WHERE pid='$update2'";

		mysqli_query($conn,$uquery2);

		header("location:welcomea.php?submit=success");

	}
	

 ?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  


    <title>LLHC : update</title>
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


    
	
	<!-- Section: intro -->
	<section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">				
					<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">						
							<div class="panel panel-skin">								
								<div class="panel-body">
									<form action="updatep.php" method="POST">							
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Patient ID</label>
													<input type="hidden" name="pid" value="<?php echo ($a); ?>" placeholder="Firstname" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>User ID</label>
													<input type="email" name="uid" placeholder="User ID" value="<?php echo ($b); ?>" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="fname" placeholder="First Name" value="<?php echo ($c); ?>" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Middle Name</label>
													<input type="text" name="mname" placeholder="Middle Name" value="<?php echo ($d); ?>" id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Last Nmae</label>
													<input type="text" name="lname" placeholder="Last Name" value="<?php echo ($e); ?>" required title=""id="address" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Date of Birth</label>
													<input type="date" name="dob" placeholder="Date of Birth" value="<?php echo ($f); ?>" required title="Without country code" id="phonenumber" class="form-control input-md">
												</div>
											</div>																					
										</div>


										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Gender</label>
													<input type="text" name="gender" placeholder="Gender" value="<?php echo ($g); ?>" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Age</label>
													<input type="number" name="age" placeholder="Age" value="<?php echo ($h); ?>" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Occupation</label>
													<input type="text" name="poccu" placeholder="Occupation" value="<?php echo ($i); ?>" required title=""id="address" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Date (in)</label>
													<input type="date" name="din" placeholder="Date In" value="<?php echo ($j); ?>" required title="Without country code" id="phonenumber" class="form-control input-md">
												</div>
											</div>										
											
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Date (out)</label>
													<input type="date" name="dout" placeholder="Date Out" value="<?php echo ($l); ?>" required id="password" class="form-control input-md">
												</div>
											</div>											
										


										
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Under</label>
													<input type="text" name="undr" placeholder="Under" value="<?php echo ($n); ?>" required id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Disease</label>
													<input type="text" name="dss" placeholder="Disease" value="<?php echo ($o); ?>" required title=""id="address" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2">
												<div class="form-group">
													<label>Medicines</label>
													<input type="text" name="mdcn" placeholder="Medicines" value="<?php echo ($p); ?>" required title="Without country code" id="phonenumber"  class="form-control input-md">
												</div>
											</div>																				
										</div>
										<div class="row">
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group">
													<input type="submit" name="update1" value="Update" class="btn btn-skin btn-block btn-lg">
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