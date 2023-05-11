<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
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


	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">

	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">


</head>

<style>
	.autofit2 {
		height: 70px;
		width: 400px;
		object-fit: cover;
	}

	.autofit3 {
		height: 80px;
		width: 100px;
		object-fit: cover;
	}
	.slider-container {
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
		height: 100%;
		overflow: hidden;
		position: relative;
		width: 100%;
	}

	.slide {
		background-position: center center;
		background-size: cover;
		height: 100vh;
		/* left: -15vw; */
		opacity: 0;
		position: absolute;
		top: -15vh;	
		transition: all .4s ease;
		width: 100vw;
		z-index: 1;
	}

	.slide.active {
		opacity: 1;
	}
</style>

<body class="home">


	<div id="introLoader" class="introLoading"></div>

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">

					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img src="images/imslogo.png" alt="Logo" /></a>
						</div>
					</div>

					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">

						<ul class="nav navbar-nav" id="responsive-menu">

							<li>

								<a href="./" style="text-transform:capitalize;">Home</a>

							</li>

							<li>
								<a href="job-list.php" style="text-transform:capitalize;">Job Lists</a>

							</li>

							<li>
								<a href="employers.php" style="text-transform:capitalize;">Companies</a>
							</li>

							<li>
								<a href="employees.php" style="text-transform:capitalize;">Interns</a>
							</li>

							<li>
								<a href="contact.php" style="text-transform:capitalize;">Contact Us</a>
							</li>

						</ul>

					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<?php
						if ($user_online == true) {
						print '
						    <li><a href="logout.php">logout</a></li>
							<li><a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
							<li><a href="login.php">login</a></li>
							<li><a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						
						?>

						</ul>
					</div>

				</div>

				<div id="slicknav-mobile"></div>

			</nav>


			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;"
				data-backdrop="static" data-keyboard="false" data-replace="true">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create Account</h4>
				</div>

				<div class="modal-body">

					<div class="row gap-20">

						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as
								Company</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as
								Intern</a>
						</div>

					</div>

				</div>

				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>

			</div>


		</header>

		<div class="main-wrapper">

			<div class="hero slider-container">
				<!-- <div class="slider-container"> -->
					<div class="slide active"
						style="background-image:
						url('https://images.squarespace-cdn.com/content/v1/51c1983de4b0e0c8e6cf758c/1371651565440-VC2LYN69ZWRTN2CE4A10/software-training.jpg');">
				<div class="container">

					<h1 style="margin-top: 30%;">your bright future starts here now.</h1>
					<p>Finding your next job or career on our very own internship system.</p>

				</div>
					</div>
					<div class="slide"
						style="background-image:
						url('https://www.pewresearch.org/internet/wp-content/uploads/sites/9/2017/05/PI_2017.05.03_Future-of-Job-Skills_featured.png');">
						<div class="container">

							<h1 style="margin-top: 30%;">your bright future starts here now.</h1>
							<p>Finding your next job or career on our very own internship system.</p>

						</div>
					</div>
					<div class="slide"
						style="background-image:
						url('https://www.ignitetraining.com/wp-content/uploads/2019/09/training-programs-for-employees-to-achieve-success.jpg');">
						<div class="container">

							<h1 style="margin-top: 30%;">your bright future starts here now.</h1>
							<p>Finding your next job or career on our very own internship system.</p>

						</div>
					</div>
					<div class="slide"
						style="background-image:
						url('https://d2slcw3kip6qmk.cloudfront.net/marketing/blog/2018Q1/on-the-job-training/on-the-job-training-header.png');">
						<div class="container">

							<h1 style="margin-top: 30%;">your bright future starts here now.</h1>
							<p>Finding your next job or career on our very own internship system.</p>

						</div>
					</div>
					<div class="slide"
						style="background-image:
						url('https://images.pexels.com/photos/3961199/pexels-photo-3961199.png?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">
						<div class="container">

							<h1 style="margin-top: 30%;">your bright future starts here now.</h1>
							<p>Finding your next job or career on our very own internship system.</p>

						</div>
					</div>
				
				<div class="container">

					<h1>your bright future starts here now.</h1>
					<p>Finding your next job or career on our very own internship system.</p>

				</div>



			</div>


			<div class="post-hero bg-light">

				<div class="container">

					<div class="process-item-wrapper mt-20">

						<div class="row">

							<div class="col-sm-4">

								<div class="process-item clearfix">

									<div class="icon">
										<i class="flaticon-line-icon-set-magnification-lens"></i>
									</div>

									<div class="content">
										<h5>01 / Search for Internship Host</h5>
									</div>

								</div>

							</div>

							<div class="col-sm-4">

								<div class="process-item clearfix">

									<div class="icon">
										<i class="flaticon-line-icon-set-pencil"></i>
									</div>

									<div class="content">
										<h5>02 / Apply an Internship</h5>
									</div>

								</div>

							</div>

							<div class="col-sm-4">

								<div class="process-item clearfix">

									<div class="icon">
										<i class="flaticon-line-icon-set-calendar"></i>
									</div>

									<div class="content">
										<h5>03 / Start Training</h5>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>


			<div class="pt-0 pb-50">

				<div class="container">

					<div class="row">

						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

							<div class="section-title">

								<br>
								<h2 style="text-transform: capitalize;">Internship Hosts</h2>

							</div>

						</div>

					</div>

					<div class="row top-company-wrapper with-bg">


						<?php
					require 'constants/db_config.php';
					try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    foreach($result as $row) {
					$complogo = $row['avatar'];
					?>
						<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">

							<div class="top-company">
								<div class="image">
									<?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
								</div>
								<h6><?php echo $row['first_name'];?></h6>
								<a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View
									Company</a>
							</div>

						</div>
						<?php
					
                    {

	                }
					  
	                }}catch(PDOException $e)
                    {

                    }
	
					?>




					</div>

				</div>

			</div>

			<div class="bg-light pt-80 pb-80">

				<div class="container">

					<div class="row">

						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

							<div class="section-title">

								<h2 style="text-transform: capitalize;">Program Lists</h2>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-12">

							<div class="recent-job-wrapper alt-stripe mr-0">
								<?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							// $closingdate = $row['closing_date'];
							$company_id = $row['company'];
							// $post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            // $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            // $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
										   
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
								
							}
							
							if ($type == "Internship") {
							$sta = '<div class="job-label label label-success">
									Internship
									</div>';
											  
							}
							if ($type == "Part-time") {
							$sta = '<div class="job-label label label-danger">
									Part-time
									</div>';
											  
							}
							if ($type == "Full-time") {
							$sta = '<div class="job-label label label-warning">
									Full-time
									</div>';
											  
							}
							?>
								<a class="recent-job-item clearfix" target="_blank"
									href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
									<div class="GridLex-grid-middle">
										<div class="GridLex-col-5_xs-12">
											<div class="job-position">
												<div class="image">
													<?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
												</div>
												<div class="content">
													<h4><?php echo "$title"; ?></h4>
													<p><?php echo "$thecompname"; ?></p>
												</div>
											</div>
										</div>
										<div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
											<div class="job-location">
												<i class="fa fa-map-marker text-primary"></i>
												<?php echo "$jobcountry" ?></strong> - <?php echo "$jobcity" ?>
											</div>
										</div>
										<div class="GridLex-col-2_xs-4_xss-12">
											<?php echo "$sta"; ?>
											<!-- <span class="font12 block spacing1 font400 text-center">Due - -->
											<!-- <?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, -->
											<!-- <?php echo "$post_year"; ?></span> -->
										</div>
									</div>
								</a>

								<?php

                            }
	                        }catch(PDOException $e)
                            { 
                   
                             }
                             ?>





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
												terms of understanding various data needs and restructuring our delivery
												of services to effectively
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


	</div>

	<div id="back-to-top">
		<a href="#"><i class="ion-ios-arrow-up"></i></a>
	</div>

<script>
	const body = document.body;
	const slides = document.querySelectorAll('.slide');
	const leftBtn = document.getElementById('left');
	const rightBtn = document.getElementById('right');

	let activeSlide = 0;

	setInterval(() => {
	activeSlide++;

	if (activeSlide >= slides.length) activeSlide = 0;

	setBgToBody();
	setActiveSlide();
	}, 5000);

	function setBgToBody() {
	body.style.backgroundImage = slides[activeSlide].style.backgroundImage;
	}

	function setActiveSlide() {
	slides.forEach(slide => slide.classList.remove('active'));
	slides[activeSlide].classList.add('active');
	}

	setBgToBody();
</script>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
	<script type="text/javascript" src="js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
	<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.js"></script>
	<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
	<script type="text/javascript" src="js/handlebars.min.js"></script>
	<script type="text/javascript" src="js/jquery.countimator.js"></script>
	<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/easy-ticker.js"></script>
	<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
	<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
	<script type="text/javascript" src="js/customs.js"></script>


</body>


</html>