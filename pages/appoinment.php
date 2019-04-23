<?php

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


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Appointment</title>
	
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
  
   


<style type="text/css">

  h1
  {
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 300;
    text-align: center;
    margin-bottom: 15px;
  }

  table
  {
    width:100%;
    table-layout: fixed;
  }
  .tbl-header
  {
    background-color: rgba(255,255,255,0.3);
  }
  .tbl-content
  {
    height:600px;
    overflow-x:scroll;
    margin-top: 10px;
    border: 10px solid rgba(255,255,255,0.3);
  }

  th
  {
    padding: 10px 10px;
    text-align: center;
    font-weight: 500;
    font-size: 12px;
    color: black;
    text-transform: uppercase;
  }

  td
  {
    padding: 10px 10px;
    text-align: center;
    vertical-align: middle;
    font-weight: 300;
    font-size: 12px;
    color: white;
    border-bottom: solid 1px rgba(255,255,255,0.1);
  }

  /* demo styles */
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

  body
  {
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
    font-family: 'Roboto', sans-serif;
  }

  section
  {
    padding-top: 150px;
    margin: 10px;
  }


  .made-with-love
  {
    margin-top: 40px;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 10px;
    font-family: arial;
    color: #fff;
  }

  .made-with-love i
  {
    font-style: ;
    color: #F50057;
    font-size: 14px;
    position: relative;
    top: 2px;
  }

  .made-with-love a
  {
	color: #fff;
    text-decoration: none;
  }

  .made-with-love a:hover
  {
    text-decoration: underline;
  }


  ::-webkit-scrollbar
  {
      width: 6px;
  } 
  ::-webkit-scrollbar-track
  {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  } 
  ::-webkit-scrollbar-thumb
  {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  }
</style>


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


<section>
  <!--for demo wrap-->
  <h1>Appoinments</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Status</th>
				</tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>

        <?php

					$sql = "SELECT * FROM appoinments";
					$result = $conn-> query($sql);

					if($result-> num_rows > 0)
					{
						while($row = $result-> fetch_assoc())
						{
							echo "<tr><td>".$row["aid"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Status"]."</td></tr>";
						}
						echo "</table>";
					}
					else
					{
						echo "No Records are there";
					}

				?>

			</tbody>
    </table>
  </div>
</section>

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

	<script type="text/javascript">
  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
	$(window).on("load resize ", function()
	{
  	var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  	$('.tbl-header').css({'padding-right':scrollWidth});
	}).resize();
	</script>



</body>
</html>






	