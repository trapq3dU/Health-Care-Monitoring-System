<?php

//its working fine don't edit anything
	include_once 'php/dbh.inc.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LifeLineHealthCare : Home</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style-home.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
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
					<li class="active"><a href="#intro">Home</a></li>
					<li><a href="#service">Service</a></li>
					<li><a href="#doctor">Doctors</a></li>
					<li><a href="#facilities">Facilities</a></li>
					<li><a href="#pricing">Pricing</a></li>
					<li class="dropdown">
				  		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
				  		<ul class="dropdown-menu">
					
							<li><a href="signUp.php">Sign Up</a></li>
							<li><a href="login.php">User Login</a></li>
							<ul><a href="welcome.php">User Area</a></ul>
							<li><a href="admin.php">Admin Login</a></li>
							<ul><a href="welcomea.php">Admin Area</a></ul>					
				  		</ul>
					</li>
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
							<h2 class="h-ultra">Life Line Medical Group</h2>
						</div>
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
							<h4 class="h-light">The<span class="color"> Future of </span>Healthcare</h4>
						</div>
						<div class="well well-trans">
							<div class="wow fadeInRight" data-wow-delay="0.1s">
								<ul class="lead-list">
									<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>View your Patient's record</strong><br />Just log in to your account</span></li>
									<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />You choose your doctor from our well experienced Spaliciests</span></li>
									<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />We promise! you will feel like you are at home</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-wrapper">
							<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">						
								<div class="panel panel-skin">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appointment <small>(It's free!)</small></h3>
									</div>
									<div class="panel-body">
										<form action="php/appoinment.inc.php" method="POST" role="form" class="lead">
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" name="first_name" placeholder="Firstname" required id="first_name" class="form-control input-md">
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="last_name" placeholder="Lastname" required id="last_name" class="form-control input-md">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" placeholder="Email" required id="email" class="form-control input-md">
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<label>Phone number</label>
														<input type="number" name="phone" placeholder="Phone Number" required id="phone" maxlength="10" minlength="10" class="form-control input-md">
													</div>
												</div>
											</div>																			
											<input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">										
											<p class="lead-footer">* We'll contact you by phone & email later</p>									
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

	<!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">	
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Make an appointment</h4>
							<p>We make appointment method easier than ever. Experience our hassle-free Online appointment method</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Choose your package</h4>
							<p>You can buy our newly introduced Health Package for you and your beloved</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user-md fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Help by specialist</h4>
							<p>Get help from our Specialists at any time</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">							
							<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Get diagnostic report</h4>
							<p>Get diagnostic report within minutes</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: boxes -->
	
	
	<section id="callaction" class="home-section paddingtop-40">	
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="callaction bg-gray">
						<div class="row">
							<div class="col-md-8">
								<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
										<h3>In an emergency? Need help now?</h3>
										<p>We are always here to hear you</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="wow lightSpeedIn" data-wow-delay="0.1s">
									<div class="cta-btn">
										<a href="#intro" class="btn btn-skin btn-lg">Book an appointment</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
	</section>	
	

	<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">
		<div class="container">
        	<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
					</div>
            	</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
                		<div class="service-box">
							<div class="service-icon">
								<span class="fa fa-stethoscope fa-3x"></span> 
							</div>
							<div class="service-desc">
								<h5 class="h-light">Medical checkup</h5>
								<p>Book an Appointment from above for Medical checkup</p>
							</div>
                		</div>
					</div>				
					<div class="wow fadeInRight" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon">
								<span class="fa fa-wheelchair fa-3x"></span> 
							</div>
							<div class="service-desc">
								<h5 class="h-light">Nursing Services</h5>
								<p>We also provide Home Nursing</p>
							</div>
                		</div>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.3s">
						<div class="service-box">
							<div class="service-icon">
								<span class="fa fa-plus-square fa-3x"></span> 
							</div>
							<div class="service-desc">
								<h5 class="h-light">Pharmacy</h5>
								<p>Pharmacies are just opposite to our main gate</p>
							</div>
                		</div>
					</div>
            	</div>
				<div class="col-sm-3 col-md-3">				
					<div class="wow fadeInRight" data-wow-delay="0.1s">
                		<div class="service-box">
							<div class="service-icon">
								<span class="fa fa-h-square fa-3x"></span> 
							</div>
							<div class="service-desc">
								<h5 class="h-light">Gyn Care</h5>
								<p>Please have a look here <a href="#doctor">Click here</a></p>
							</div>
                		</div>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon">
								<span class="fa fa-filter fa-3x"></span> 
							</div>
							<div class="service-desc">
								<h5 class="h-light">Neurology</h5>
								<p>Please have a look here <a href="#doctor">Click here</a></p></p>
							</div>
						</div>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.3s">
						<div class="service-box">
							<div class="service-icon">
								<span class="fa fa-user-md fa-3x"></span> 
							</div>
							<div class="service-desc">
								<h5 class="h-light">Sleep Center</h5>
								<p>We have enough space where you can take rest</p>
							</div>
                		</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
						<div class="section-heading text-center">
							<h2 class="h-bold">Doctors</h2>
							<p>Meet Our Experienced Specialists</p>
						</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">				
            		<div id="filters-container" class="cbp-l-filters-alignLeft">
                		<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".neurologist" class="cbp-filter-item">Neurologist (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".Childspecialist" class="cbp-filter-item">Child Specialist (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".MedicalGeneticists" class="cbp-filter-item">Medical Geneticists (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".Nephrologists" class="cbp-filter-item">Nephrologists (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".EmergencyMedicineSpecialists" class="cbp-filter-item">Emergency Medicine Specialists (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".Endocrinologists" class="cbp-filter-item">Endocrinologists (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".ColonandRectalSurgeons" class="cbp-filter-item">Colon and Rectal Surgeons (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".Dermatologists" class="cbp-filter-item">Dermatologists (<div class="cbp-filter-counter"></div>)</div>
                		<div data-filter=".CriticalCareMedicineSpecialists" class="cbp-filter-item">Critical Care Medicine Specialists (<div class="cbp-filter-counter"></div>)</div>

            		</div>


            		<div id="grid-container" class="cbp-l-grid-team">
                		<ul>

                			<li class="cbp-item Dermatologists">
                        		<a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor1.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Smitha Warrier</a>
                        		<div class="cbp-l-grid-team-position">Dermatologists</div>                        
                    		</li>

                    		<li class="cbp-item cardiologist">
                        		<a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor2.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Prabhakar Koregal</a>
                        			<div class="cbp-l-grid-team-position">Cardiologist</div>
                    		</li>
                    		<li class="cbp-item Childspecialist">
                        		<a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor3.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Priya Shivalli</a>
                        		<div class="cbp-l-grid-team-position">Child Specialist</div>
                    		</li>

                    		<li class="cbp-item EmergencyMedicineSpecialists">
                        		<a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor4.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. V Arun</a>
                        		<div class="cbp-l-grid-team-position">Emergency Medicine Specialists</div>                        
                    		</li>

                    		<li class="cbp-item cardiologist">
                        		<a href="doctors/member5.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor5.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member5.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Somalaram Venkatesh</a>
                        			<div class="cbp-l-grid-team-position">Cardiologist</div>
                    		</li>

                    		<li class="cbp-item EmergencyMedicineSpecialists">
                        		<a href="doctors/member6.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor6.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member6.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Raghavendra R</a>
                        		<div class="cbp-l-grid-team-position">Emergency Medicine Specialists</div>                        
                    		</li>
                    		<li class="cbp-item cardiologist">
                        		<a href="doctors/member7.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor7.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member7.html" class="cbp-singlePage cbp-l-grid-team-name">Priya Mukherjee</a>
                        			<div class="cbp-l-grid-team-position">Cardiologist</div>
                    		</li>


                    		<li class="cbp-item psychiatrist">
                        		<a href="doctors/member8.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor8.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member8.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Sandip Deshpande</a>
                        		<div class="cbp-l-grid-team-position">Psychiatrist</div>
                    		</li>
                    		<li class="cbp-item psychiatrist">
                        		<a href="doctors/member9.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor9.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member9.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Ashlesha Bagadia</a>
                        		<div class="cbp-l-grid-team-position">Psychiatrist</div>
                    		</li>

                    		
                    		
                    		</li>
                    		<li class="cbp-item Childspecialist">
                        		<a href="doctors/member10.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor10.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member10.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Stalin Ramprakash</a>
                        		<div class="cbp-l-grid-team-position">Child Specialist</div>
                    		</li>


                    		

                    		<!-- Single doctor details-->

                    		
                    
                    		<!-- /Single doctor details-->

                    		<li class="cbp-item neurologist">
                        		<a href="doctors/member11.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor11.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member11.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Ashok Kumar Singhal</a>
                        		<div class="cbp-l-grid-team-position">Neurologist</div>                        
                    		</li>
                    		<li class="cbp-item neurologist">
                        		<a href="doctors/member12.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor12.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member12.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Archana</a>
                        		<div class="cbp-l-grid-team-position">Neurologist</div>                        
                    		</li>


                    		<li class="cbp-item MedicalGeneticists">
                        		<a href="doctors/member13.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor13.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member13.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Dhruv Kumar</a>
                        		<div class="cbp-l-grid-team-position">Medical Geneticists</div>                        
                    		</li>
                    		<li class="cbp-item MedicalGeneticists">
                        		<a href="doctors/member14.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor14.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member14.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Jyoti Sharma</a>
                        		<div class="cbp-l-grid-team-position">Medical Geneticists</div>                        
                    		</li>
                    		<li class="cbp-item MedicalGeneticists">
                        		<a href="doctors/member15.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor15.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member15.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Sushmita Das</a>
                        		<div class="cbp-l-grid-team-position">Medical Geneticists</div>                        
                    		</li>


                    		<li class="cbp-item CriticalCareMedicineSpecialists">
                        		<a href="doctors/member16.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor16.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member16.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Aklesh Tandekar</a>
                        		<div class="cbp-l-grid-team-position">Critical Care Medicine Specialists</div>                        
                    		</li>
                    		<li class="cbp-item CriticalCareMedicineSpecialists">
                        		<a href="doctors/member17.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor17.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member17.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Sharmili Sinha</a>
                        		<div class="cbp-l-grid-team-position">Critical Care Medicine Specialists</div>                        
                    		</li>
                    		<li class="cbp-item CriticalCareMedicineSpecialists">
                        		<a href="doctors/member18.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor18.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member18.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Anupama D S</a>
                        		<div class="cbp-l-grid-team-position">Critical Care Medicine Specialists</div>                        
                    		</li>
                    		<li class="cbp-item CriticalCareMedicineSpecialists">
                        		<a href="doctors/member19.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor19.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member19.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Banambar Ray</a>
                        		<div class="cbp-l-grid-team-position">Critical Care Medicine Specialists</div>                        
                    		</li>
                    		

                    		<li class="cbp-item Nephrologists">
                        		<a href="doctors/member20.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor20.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member20.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Basanth Kumar H S</a>
                        		<div class="cbp-l-grid-team-position">Nephrologists</div>                        
                    		</li>

                    		
                    		<li class="cbp-item EmergencyMedicineSpecialists">
                        		<a href="doctors/member21.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor21.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member21.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Chandrasekar C</a>
                        		<div class="cbp-l-grid-team-position">Emergency Medicine Specialists</div>                        
                    		</li>
                    		<li class="cbp-item EmergencyMedicineSpecialists">
                        		<a href="doctors/member22.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor22.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member22.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Basavaraj</a>
                        		<div class="cbp-l-grid-team-position">Emergency Medicine Specialists</div>                        
                    		</li>
                    		<li class="cbp-item EmergencyMedicineSpecialists">
                        		<a href="doctors/member23.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor23.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member23.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Supraja C</a>
                        		<div class="cbp-l-grid-team-position">Emergency Medicine Specialists</div>                        
                    		</li>


                    		<li class="cbp-item Endocrinologists">
                        		<a href="doctors/member24.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor24.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member24.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Mahesh.D.M</a>
                        		<div class="cbp-l-grid-team-position">Endocrinologists</div>                        
                    		</li>
                    		<li class="cbp-item Endocrinologists">
                        		<a href="doctors/member25.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor25.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member25.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. A Sharda</a>
                        		<div class="cbp-l-grid-team-position">Endocrinologists</div>                        
                    		</li>
                    		<li class="cbp-item ColonandRectalSurgeons">
                        		<a href="doctors/member26.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor26.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member26.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Ravi Sachidananda</a>
                        		<div class="cbp-l-grid-team-position">Colon and Rectal Surgeons</div>                        
                    		</li>

                    		<li class="cbp-item Dermatologists">
                        		<a href="doctors/member27.html" class="cbp-caption cbp-singlePage">
                            		<div class="cbp-caption-defaultWrap">
                                		<img src="img/doctors/doctor27.jpg" alt="" width="100%">
                            		</div>
                            		<div class="cbp-caption-activeWrap">
                                		<div class="cbp-l-caption-alignCenter">
                                    		<div class="cbp-l-caption-body">
                                        		<div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</a>
                        		<a href="doctors/member27.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Rohini K</a>
                        		<div class="cbp-l-grid-team-position">Dermatologists</div>                        
                    		</li>
                    		
                    		




                   		</ul>
            		</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: team -->

	
		
	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
						<div class="section-heading text-center">
							<h2 class="h-bold">Our facilities</h2>
							<p>Have a Look to Our Facilities</p>
						</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="img/facilities/1.jpg" title="Corridor" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/facilities/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="img/facilities/5.jpg" title="Ward" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/facilities/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/facilities/3.jpg" title="CT Scan Center" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/facilities/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/facilities/4.jpg" title="Operation Theater" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/facilities/4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/facilities/2.jpg" title="X-Ray Center" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/facilities/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/facilities/6.jpg" title="Tanmay" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/facilities/6.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->
	
	
	<!-- Section: testimonial -->
<section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                	    <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Good Environment</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>The environment of the center is awasome</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">					
								<img src="img/testimonials/1.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Tanmay</a>
								<span>Delhi</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">Well Experienced Doctors</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>I don't have any doubt on experience of the doctors</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel text-light">
				                <img src="img/testimonials/2.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Eti</a>
								<span>Hydrabad</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Friendly People</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
						        <p>I was there for a week but never felt that I'm not in my home</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/3.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Mamata</a>
								<span>Chennai</span>
							</div>
						</div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Birth control pills</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Comment</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Eti</a>
								<span>Mumbai</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">Radiology</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Comment</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/5.jpg" alt="" class="person img-circle" />
						        <a title="" href="#">Rana</a>
								<span>Kolkata</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Cervical Lesions</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
						        <p>Comment</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/6.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Dipu</a>
								<span>Bangalore</span>
							</div>
						</div>
                    </div>
                    
                   
                </div>
				
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
	</section>

	<!-- /Section: testimonial -->

	

	<!-- Section: pricing -->

	<section id="pricing" class="home-section bg-gray paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Health packages</h2>
					<p>Take charge of your health today with our specially designed health packages</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
           
		   <div class="container">
			
			<div class="row">

				<div class="col-sm-4 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.1s">
					<div class="pricing-content general">
						<h2>Basic Fit 1 Package</h2>
						<h3>Rs. 10<sup>,990</sup> <span>/ year</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li>Body Composition Analysis <i class="fa fa-times icon-danger"></i></li>
							<li>GR Assessment & Scoring <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="error1.php" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-sm-4 pricing-box featured-price">
					<div class="wow bounceInUp" data-wow-delay="0.3s">
					<div class="pricing-content featured">
						<h2>Golden Glow Package</h2>
						<h3>Rs. 15<sup>,990</sup> <span>/ year</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
							<li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="error1.php" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-sm-4 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.2s">
					<div class="pricing-content general last">
						<h2>Basic Fit 2 Package</h2>
						<h3>Rs. 12<sup>,990</sup> <span>/ year</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
							<li>GR Assessment & Scoring <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="error1.php" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

			</div>				
				
            </div>
	</section>

	<!-- /Section: pricing -->


	
	<section id="partner" class="home-section paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our partner</h2>
					<p>We have partnership with</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
           <div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
						</div>
					</div>
				</div>
            </div>
	</section>	

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Life Line</h5>
						<p>We just don't provide worldclass treatment but we also maintain that environment where our patients feel like they are at their home</p>
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
						<h5>Our location</h5>
						<p>Salt Lake, Sector #5, Kolkata, 700 001, West Bengal</p>
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
						<h5>We also in</h5>
						<p>*Bangalore *Kolkata *Mumbai *Delhi *Chennai *Hydrabad</p>		
						
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
						<p>Designed by <a href="http://bootstraptaste.com/">@trapq3dU</a> & <a href="http://bootstraptaste.com/">Dhruv Kumar</a></p>

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
