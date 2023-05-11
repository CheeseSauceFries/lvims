<!doctype html>
<html lang="en">

<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employer") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>IMS-LVCC</title>
	<meta name="description" content="Internship Management System" />
	<meta name="keywords"
		content="online intership, management system, intern, job portal, job, lvcc,ims, la verdad, information system, infosys" />
	<meta name="author" content="Aljon">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.png" />
	<meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.png" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="500" />
	<meta property="og:image:height" content="300" />
	<meta property="og:image:alt" content="IMS-LVCC" />
	<meta property="og:description" content="Internship Management System" />

	<link rel="shortcut icon" href="images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	

	
	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">

	<link href="../css/style.css" rel="stylesheet">

	
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="../"><img src="../images/imslogo.png" alt="Logo" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">

						<ul class="nav navbar-nav" id="responsive-menu">

							<li>

								<a href="./" style="text-transform:capitalize;">Home</a>

							</li>

							<li>
								<a href="../job-list.php" style="text-transform:capitalize;">Programs</a>

							</li>

							<li>
								<a href="../employers.php" style="text-transform:capitalize;">Companies</a>
							</li>

							<li>
								<a href="../employees.php" style="text-transform:capitalize;">Interns</a>
							</li>
							<li>
								<a
									href="https://docs.google.com/document/d/1COZVBqXLOQW9DXWsH3aj5vQX_ENodz3H/edit?fbclid=IwAR0TK3tohSsZLD5H1RiNZq9iWqxOsVwHwEczj9WjdweTfLVXMQnVVkah_t8"
									style="text-transform:capitalize;">Evaluation
									form</a>
							</li>
							<li>
								<a href="../contact.php" style="text-transform:capitalize;">Contact Us</a>
							</li>

						</ul>

					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a href="../logout.php">logout</a></li>
							<li><a href="./">Profile</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>

		<div class="main-wrapper">
			
			<div class="section sm">
			
				<div class="container">
				
					<div class="row">
						
							<div class="col-sm-5 col-md-4">
							
								<div class="company-detail-sidebar">
									
									<div class="image">
										<?php 
										if ($logo == null) {
										print '<center>Company Logo Here</center>';
										}else{
										echo '<center><img alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($logo).'"/></center>';	
										}
										?>
									</div>
									
									<h2 class="heading mb-15"><h4><?php echo "$compname"; ?></h4>
								
									<p class="location"><i class="fa fa-map-marker"></i> <?php echo "$zip"; ?> <?php echo "$city"; ?>. <?php echo "$street"; ?>, <?php echo "$country"; ?> <span class="block"> <i class="fa fa-phone"></i> <?php echo "$myphone"; ?></span></p>
									
									<ul class="meta-list clearfix">
										<li>
											<h4 class="heading">Established In:</h4>
											<?php echo "$esta"; ?>
										</li>
										<li>
											<h4 class="heading">Type:</h4>
											<?php echo "$mytitle"; ?>
										</li>
										<li>
											<h4 class="heading">People:</h4>
											<?php echo "$mypeople"; ?>
										</li>
										<li>
											<h4 class="heading">Website: </h4>
											<a target="_blank" href="https://<?php echo "$myweb"; ?>"><?php echo "$myweb"; ?></a>
										</li>
										<li>
											<h4 class="heading">Email: </h4>
											<?php echo "$mymail"; ?>
										</li>

									</ul>
									
									
									<a href="./" class="btn btn-primary mt-5"><i class="fa fa-pencil-square-o mr-5"></i>Edit</a>
									
								</div>
					
					
							</div>
							
							<div class="col-sm-7 col-md-8">
							
								<div class="company-detail-wrapper">

									<div class="company-detail-company-overview  mt-0 clearfix">
										
										<div class="section-title-02">
											<h3 class="text-left">Post a Job</h3>
										</div>

										<form class="post-form-wrapper" action="app/post-job.php" method="POST" autocomplete="off">
								
											<div class="row gap-20">
											<?php require 'constants/check_reply.php'; ?>
										
												<div class="col-sm-8 col-md-8">
												
													<div class="form-group">
														<label>Job Title</label>
														<input name="title" required type="text" class="form-control" placeholder="Enter job title">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-4 col-md-4">
												
													<div class="form-group">
														<label>City</label>
														<input name="city" required type="text" class="form-control" placeholder="Enter city">
													</div>
													
												</div>
												
												<div class="col-sm-4 col-md-4">
												
													<div class="form-group">
														<label>Region</label>
														<select name="country" required class="selectpicker show-tick form-control" data-live-search="true">
															<option disabled value="">Select</option>
						                                   <?php
														   require '../constants/db_config.php';
														   try {
                                                           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                                           $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                                           $stmt->execute();
                                                           $result = $stmt->fetchAll();
  
                                                           foreach($result as $row)
                                                           {
		                                                    ?> <option <?php if ($country == $row['country_name']) { print ' selected '; } ?> value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option> <?php
	 
	                                                        }

					  
	                                                       }catch(PDOException $e)
                                                           {

                                                           }
	
														   ?>
														</select>
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-4 col-md-4">
												
													<div class="form-group">
														<label>Job Category</label>
															<select name="category" required class="selectpicker show-tick form-control" data-live-search="true">
															<option disabled value="">Select</option>
						                                   <?php
														   require '../constants/db_config.php';
														   try {
                                                           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                                           $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                                           $stmt->execute();
                                                           $result = $stmt->fetchAll();
  
                                                           foreach($result as $row)
                                                           {
		                                                    ?> <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option> <?php
	 
	                                                        }

					  
	                                                       }catch(PDOException $e)
                                                           {

                                                           }
	
														   ?>
														</select>
											
														
													</div>
													
												</div>
											    <!-- <div class="col-sm-4 col-md-4">
												
													<div class="form-group">
														<label>Closing Date</label>
														<input name="deadline" required type="date" class="form-control" placeholder="Eg: 30/12/2022">
													</div>
													
												</div> -->
												
												
												<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
												
													<div class="form-group mb-20">
														<label>Job Type:</label>
														<select name="jobtype" required class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All">
															<option value="Full-time" data-content="<span class='label label-warning'>Full-time</span>">Full-time</option>
															<option value="Part-time" data-content="<span class='label label-danger'>Part-time</span>">Part-time</option>
															<option value="Internship" data-content="<span class='label label-success'>Internship</span>" selected>Internship</option>
														</select>
													</div>
													
												</div>
												<div class="clear"></div>
												<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
												
													<div class="form-group mb-20">
														<label>Experience:</label>
														<select name="experience" required class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All">
															<option value="No Job Experience" selected>No Job Experience</option>
															<option value="1 Year">1 Year</option>
															<option value="2 Years">2 Years</option>
															<option value="3 Years">3 Years</option>
															<option value="Expert">Expert</option>
														</select>
													</div>
													
													
												</div>

												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label>Job Description</label>
														<textarea class="form-control bootstrap3-wysihtml5" name="description" required placeholder="Enter description ..." style="height: 200px;"></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label>Job Responsibilies</label>
														<textarea name="responsiblities" required class="form-control bootstrap3-wysihtml5" placeholder="Enter responsiblities..." style="height: 200px;"></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label>Requirements</label>
														<textarea name="requirements" required class="form-control bootstrap3-wysihtml5" placeholder="Enter requirements..." style="height: 200px;"></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>
												

												
												<div class="clear"></div>
												

												
												<div class="clear mb-10"></div>

												
												<div class="clear mb-15"></div>

												
												<div class="clear"></div>
												
												<div class="col-sm-6 mt-30">
													<button type="submit"  onclick = "validate(this)" class="btn btn-primary btn-lg">Post Your Job</button>
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

			<footer class="footer-wrapper">

				<div class="main-footer">

					<div class="container">

						<div class="row">

							<div class="col-sm-12 col-md-9">

								<div class="row">

									<div class="col-sm-6 col-md-6">

										<div class="footer-about-us">
											<h5 class="footer-title">About LVIMS</h5>
											<p align="justify">LVIMS is an internship portal for the BSIS 4th year students of La Verdad
												Christian College, Apalit
												Pampanga. his is entrusted to our obligation to consult with our school
												administration and clients in
												terms of understanding various data needs and restructuring our delivery of
												services to effectively
												satisfy these needs.</p>

										</div>

									</div>

									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="../">Home</a></li>
											<li><a href="../job-list.php">Job Lists</a></li>
											<li><a href="../employers.php">Companies</a></li>
											<li><a href="../employees.php">Interns</a></li>
											<li><a href="../contact.php">Contact Us</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="col-sm-12 col-md-3 mt-30-sm">

								<h5 class="footer-title">LVCC Contact</h5>

								<p>Address : McArthur Highway 2009
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Apalit,
									Philippines
								</p>
								<p>Email : <a href="mailto:info@laverdad.edu.ph">info@laverdad.edu.ph</a></p>
								<p>Telephone : <a href="tel:(045) 436 1487">(045) 436 1487</a></p>


							</div>


						</div>

					</div>

				</div>

				<div class="bottom-footer">

					<div class="container">

						<div class="row">

							<div class="col-sm-4 col-md-4">

								<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> LVIMS</p>

							</div>


							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip"
												data-placement="top" title="twitter"></i></a></li>
									<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip"
												data-placement="top" title="facebook"></i></a></li>
									<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip"
												data-placement="top" title="instagram"></i></a></li>
								</ul>
							</div>

						</div>

					</div>

				</div>

			</footer>
	</div>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>


<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>


<script type="text/javascript" src="../js/fileinput.min.js"></script>
<script type="text/javascript" src="../js/customs-fileinput.js"></script>




<script type="text/javascript" src="../js/jquery.sheepItPlugin.js"></script>
<script type="text/javascript" src="../js/customs-sheepItPlugin.js"></script>

</body>

</html>