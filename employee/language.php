<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*5)-5;
}					
}else{
$page1 = 0;
$page = 1;	
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

<style>
	.autofit2 {
		height: 80px;
		width: 100px;
		object-fit: cover;
	}

	.dropbtn {
		background-color: transparent;
		color: white;
		border: none;
		size: 20px;
		padding: 0px, 15px, 0px, 14px;
		font-weight: bolder;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #454444ad;
		min-width: 120px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}


	.dropdown:hover .dropdown-content {
		display: block;
	}
</style>

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
								<a href="../job-list.php" style="text-transform:capitalize;">Job Lists</a>

							</li>

							<li>
								<a href="../employers.php" style="text-transform:capitalize;">Companies</a>
							</li>

							<li>
								<a href="../employees.php" style="text-transform:capitalize;">Interns</a>
							</li>
							<li class="dropdown">

								<button class="dropbtn">Practicum Documents</button>
								<div class="dropdown-content">
									<a
										href="https://drive.google.com/file/d/1k1nHePRmOaGn8ARcoqsOfmljoy7A42t8/view?usp=sharing">Acceptance
										Form</a>
									<a
										href="https://drive.google.com/file/d/1_wGV-1Q04oU4CPNM-4HXYVd9AWI4P6F7/view?usp=sharing">DOLE
										Form</a>
									<a
										href="https://drive.google.com/file/d/1WrrP2ffaaOSjHLkWVPZSpJ9OUPsmSEgE/view?usp=sharing">Endorsement
										Form</a>
									<a
										href="https://drive.google.com/file/d/1ex9RHzzbm5BfCRVAYSH1M_renfi1NhX7/view?usp=sharing">Request
										Form</a>
									<a
										href="https://drive.google.com/file/d/1yVukan-5HE5BcBmY2wqfR9AwEyEQGD-s/view?usp=sharing">Waiver</a>
								</div>

								</form>
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

			<div class="admin-container-wrapper">

				<div class="container">

					<div class="GridLex-gap-15-wrappper">

						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-3_sm-4_xs-12">

								<div class="admin-sidebar">

									<div class="admin-user-item">
										<div class="image">

											<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>


										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>

									</div>

									<div class="admin-user-action text-center">

										<a target="_blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">View
											my CV</a>

									</div>

									<ul class="admin-user-menu clearfix">
										<li>
											<a href="./"><i class="fa fa-user"></i> Profile</a>
										</li>

										<li>
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Educational Attainment</a>
										</li>
										<li class="active">
											<a href="language.php"><i class="fa fa-language"></i> Language
												Proficiency</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Training & Workshop</a>
										</li>
										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Referees</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Working
												Experience</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Weekly Learnings</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Applied Jobs</a>
										</li>
										<li class="">
											<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>

								</div>

							</div>

							<div class="GridLex-col-9_sm-8_xs-12">

								<div class="admin-content-wrapper">

									<div class="admin-section-title">

										<h2>Language Proficiency</h2>


									</div>

									<div class="resume-list-wrapper">
										<?php require 'constants/check_reply.php'; ?>
										<?php
									require '../constants/db_config.php';
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_language WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row)
                                    {
										?>
										<div class="resume-list-item">

											<div class="row">

												<div class="col-sm-12 col-md-10">

													<div class="content">

														<a>

															<div class="image">
																<?php 
										                    if ($myavatar == null) {
									                    	print '<center><img src="../images/default.jpg" title="'.$myfname.'" alt="image" width="100" height="100" /></center>';
										                    }else{
										                    echo '<center><img alt="image" title="'.$myfname.'" width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										                    }
										                      ?>
															</div>

															<h4><?php echo $row['language']; ?></h4>

															<div class="row">
																<div class="col-sm-12 col-md-12">
																	<i class="fa fa-user mr-5"></i> Speak - <strong
																		class="mr-10"><?php echo $row['speak']; ?></strong>
																	<i class="fa fa-book mr-5"></i> Read - <strong
																		class="mr-10"><?php echo $row['reading']; ?></strong>
																	<i class="fa fa-pencil mr-5"></i> Write - <strong
																		class="mr-10"><?php echo $row['writing']; ?></strong>
																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-sm-12 col-md-2">

													<div class="resume-list-btn">

														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>"
															class="btn btn-primary btn-sm mb-5 mb-0-sm">Edit</a>
														<a href="app/drop-language.php?id=<?php echo $row['id']; ?>"
															onclick="return confirm('Are you sure you want to delete this language ?')"
															class="btn btn-primary btn-sm btn-inverse">Delete</a>

														<div id="edit<?php echo $row['id']; ?>"
															class="modal fade login-box-wrapper" tabindex="-1"
															data-width="550" style="display: none;"
															data-backdrop="static" data-keyboard="false"
															data-replace="true">

															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-hidden="true">&times;</button>
																<h4 class="modal-title text-center">Edit -
																	<?php echo $row['language']; ?></h4>
															</div>

															<div class="modal-body">
																<form action="app/update-language.php" method="POST"
																	autocomplete="off" enctype="multipart/form-data">
																	<div class="row gap-20">
																		<div class="col-sm-12 col-md-12">

														<div class="form-group">
															<label>Language</label>
															<select name="language" required class="selectpicker show-tick form-control" data-live-search="false">
																<option value="" selected disabled>- Choose a Langauge -</option>
																<option value="Abkhazian">Abkhazian</option>
																<option value="Afar">Afar</option>
																<option value="Afrikaans">Afrikaans</option>
																<option value="Algonquin">Algonquin</option>
																<option value="Albanian">Albanian</option>
																<option value="Amharic">Amharic</option>
																<option value="Apache">Apache</option>
																<option value="Arabic">Arabic</option>
																<option value="Aragonese">Aragonese</option>
																<option value="Aramaic">Aramaic</option>
																<option value="Armenian">Armenian</option>
																<option value="Azerbaijani">Azerbaijani</option>
																<option value="Balinese">Balinese</option>
																<option value="Bambara">Bambara</option>
																<option value="Baluchi">Baluchi</option>
																<option value="Basque">Basque</option>
																<option value="Berber">Berber</option>
																<option value="Bashkir">Bashkir</option>
																<option value="Belarusian">Belarusian</option>
																<option value="Bengali">Bengali</option>
																<option value="Bhojpuri">Bhojpuri</option>
																<option value="Breton">Breton</option>
																<option value="Bosnian">Bosnian</option>
																<option value="Bulgarian">Bulgarian</option>
																<option value="Burmese">Burmese</option>
																<option value="Cantonese">Cantonese</option>
																<option value="Catalan">Catalan</option>
																<option value="Cebuano">Cebuano</option>
																<option value="Cherokee">Cherokee</option>
																<option value="Chechen">Chechen</option>
																<option value="Chinese">Chinese</option>
																<option value="Corsican">Corsican</option>
																<option value="Cornish">Cornish</option>
																<option value="Croatian">Croatian</option>
																<option value="Czech">Czech</option>
																<option value="Danish">Danish</option>
																<option value="Dakota">Dakota</option>
																<option value="Dothraki">Dothraki</option>
																<option value="Dinka">Dinka</option>
																<option value="Dutch">Dutch</option>
																<option value="Edo">Edo</option>
																<option value="Esperanto">Esperanto</option>
																<option value="Estonian">Estonian</option>
																<option value="Faroese">Faroese</option>
																<option value="Farsi">Farsi</option>
																<option value="Fijian">Fijian</option>
																<option value="Finnish">Finnish</option>
																<option value="Frisian">Frisian</option>
																<option value="French">French</option>
																<option value="Filipino">Filipino</option>
																<option value="Galician">Galician</option>
																<option value="Georgian">Georgian</option>
																<option value="German">German</option>
																<option value="Greek">Greek</option>
																<option value="Greenlandic">Greenlandic</option>
																<option value="Guarani">Guarani</option>
																<option value="Gujarati">Gujarati</option>
																<option value="Haitian">Haitian</option>
																<option value="Hakka">Hakka</option>
																<option value="Hawaiian">Hawaiian</option>
																<option value="Hausa">Hausa</option>
																<option value="Hebrew">Hebrew</option>
																<option value="Hindi">Hindi</option>
																<option value="Hmong">Hmong</option>
																<option value="Hungarian">Hungarian</option>
																<option value="Icelandic">Icelandic</option>
																<option value="Igbo">Igbo</option>
																<option value="Ilocano">Ilocano</option>
																<option value="Indonesian">Indonesian</option>
																<option value="Interlingua">Interlingua</option>
																<option value="Inuit">Inuit</option>
																<option value="Irish">Irish</option>
																<option value="Italian">Italian</option>
																<option value="Javanese">Javanese</option>
																<option value="Japanese">Japanese</option>
																<option value="Kannada">Kannada</option>
																<option value="Kazakh">Kazakh</option>
																<option value="Kashmiri">Kashmiri</option>
																<option value="Khmer">Khmer</option>
																<option value="Kinyarwanda">Kinyarwanda</option>
																<option value="Klingon">Klingon</option>
																<option value="Kirundi">Kirundi</option>
																<option value="Kongo">Kongo</option>
																<option value="Korean">Korean</option>
																<option value="Kurdish">Kurdish</option>
																<option value="Kyrgyz">Kyrgyz</option>
																<option value="Lao">Lao</option>
																<option value="Lingala">Lingala</option>
																<option value="Latin">Latin</option>
																<option value="Latvian">Latvian</option>
																<option value="Lithuanian">Lithuanian</option>
																<option value="Luxembourgish">Luxembourgish</option>
																<option value="Maasai">Maasai</option>
																<option value="Macedonian">Macedonian</option>
																<option value="Maithili">Maithili</option>
																<option value="Malagasy">Malagasy</option>
																<option value="Malay">Malay</option>
																<option value="Maltese">Maltese</option>
																<option value="Malayalam">Malayalam</option>
																<option value="Manx">Manx</option>
																<option value="Maori">Maori</option>
																<option value="Marathi">Marathi</option>
																<option value="Marwari">Marwari</option>
																<option value="Mongolian">Mongolian</option>
																<option value="Navajo">Navajo</option>
																<option value="Nauruan">Nauruan</option>
																<option value="Navi">Navi</option>
																<option value="Nepali">Nepali</option>
																<option value="Norwegian">Norwegian</option>
																<option value="Nynorsk">Nynorsk</option>
																<option value="Occitan">Occitan</option>
																<option value="Oromo">Oromo</option>
																<option value="Oriya">Oriya</option>
																<option value="Pashto">Pashto</option>
																<option value="Provencal">Provencal</option>
																<option value="Polish">Polish</option>
																<option value="Portuguese">Portuguese</option>
																<option value="Punjabi">Punjabi</option>
																<option value="Quechua">Quechua</option>
																<option value="Romanian">Romanian</option>
																<option value="Russian">Russian</option>
																<option value="Sami">Sami</option>
																<option value="Samoan">Samoan</option>
																<option value="Sanskrit">Sanskrit</option>
																<option value="Scots Gaelic">Scots Gaelic</option>
																<option value="Sardianian">Sardianian</option>
																<option value="Sesotho">Sesotho</option>
																<option value="Sinhalese">Sinhalese</option>
																<option value="Sindhi">Sindhi</option>
																<option value="Siswati">Siswati</option>
																<option value="Slovenian">Slovenian</option>
																<option value="Syriac">Syriac</option>
																<option value="Sudanese">Sudanese</option>
																<option value="Shona">Shona</option>
																<option value="Serbian">Serbian</option>
																<option value="Slovak">Slovak</option>
																<option value="Somali">Somali</option>
																<option value="Spanish">Spanish</option>
																<option value="Swalhili">Swalhili</option>
																<option value="Swedish">Swedish</option>
																<option value="Tahitian">Tahitian</option>
																<option value="Tajik">Tajik</option>
																<option value="Tsonga">Tsonga</option>
																<option value="Tatar">Tatar</option>
																<option value="Tagalog">Tagalog</option>
																<option value="Tswana">Tswana</option>
																<option value="Turkmen">Turkmen</option>
																<option value="Tamil">Tamil</option>
																<option value="Telugu">Telugu</option>
																<option value="Thai">Thai</option>
																<option value="Tibetan">Tibetan</option>
																<option value="Turkish">Turkish</option>
																<option value="Ukrainian">Ukrainian</option>
																<option value="Uyghur">Uyghur</option>
																<option value="Urdu">Urdu</option>
																<option value="Uzbek">Uzbek</option>
																<option value="Vietnamese">Vietnamese</option>
																<option value="Volapuk">Volapuk</option>
																<option value="Welsh">Welsh</option>
																<option value="Wolof">Wolof</option>
																<option value="Wu">Wu</option>
																<option value="Xhosa">Xhosa</option>
																<option value="Yiddish">Yiddish</option>
																<option value="Yoruba">Yoruba</option>
																<option value="Zhuang">Zhuang</option>
																<option value="Zulu">Zulu</option>
															</select>
														</div>


																		</div>


																		<div class="col-sm-12 col-md-12">

																			<div class="form-group">
																				<label>Speak</label>
																				<select name="speak" required
																					class="selectpicker show-tick form-control"
																					data-live-search="false">
																					<option
																						<?php if ($row ['speak'] == "Fair") { print ' selected '; } ?>
																						value="Fair">Fair</option>
																					<option
																						<?php if ($row ['speak'] == "Good") { print ' selected '; } ?>
																						value="Good">Good</option>
																					<option
																						<?php if ($row ['speak'] == "Very Good") { print ' selected '; } ?>
																						value="Very Good">Very Good
																					</option>
																				</select>
																			</div>

																		</div>

																		<div class="col-sm-12 col-md-12">

																			<div class="form-group">
																				<label>Read</label>
																				<select name="read" required
																					class="selectpicker show-tick form-control"
																					data-live-search="false">
																					<option
																						<?php if ($row ['reading'] == "Fair") { print ' selected '; } ?>
																						value="Fair">Fair</option>
																					<option
																						<?php if ($row ['reading'] == "Good") { print ' selected '; } ?>
																						value="Good">Good</option>
																					<option
																						<?php if ($row ['reading'] == "Very Good") { print ' selected '; } ?>
																						value="Very Good">Very Good
																					</option>
																				</select>
																			</div>

																		</div>

																		<div class="col-sm-12 col-md-12">

																			<div class="form-group">
																				<label>Write</label>
																				<select name="write" required
																					class="selectpicker show-tick form-control"
																					data-live-search="false">
																					<option
																						<?php if ($row ['writing'] == "Fair") { print ' selected '; } ?>
																						value="Fair">Fair</option>
																					<option
																						<?php if ($row ['writing'] == "Good") { print ' selected '; } ?>
																						value="Good">Good</option>
																					<option
																						<?php if ($row ['writing'] == "Very Good") { print ' selected '; } ?>
																						value="Very Good">Very Good
																					</option>
																				</select>
																			</div>

																		</div>

																	</div>
															</div>
															<input type="hidden" name="langid"
																value="<?php echo $row['id']; ?>">
															<div class="modal-footer text-center">
																<button type="submit"
																	class="btn btn-primary">Update</button>
																<button type="button" data-dismiss="modal"
																	class="btn btn-primary btn-inverse">Close</button>
															</div>
															</form>
														</div>

													</div>

												</div>

											</div>

										</div>
										<?php

	                                }
                                    }catch(PDOException $e)
                                    {
                             
                                    }
                                       ?>

										<div class="pager-wrapper">

											<ul class="pager-list">
												<?php
								$total_records = 0;
									require '../constants/db_config.php';
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_language WHERE member_no = '$myid' ORDER BY id");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row)
                                    {
										$total_records++;
										
									}

                                    }catch(PDOException $e)
                                    {
     
                                    }
								$records = $total_records/5;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="language.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li class="paging-nav"><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?>
														href="language.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a>
												</li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="language.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

											</ul>

										</div>




									</div>

									<div class="mt-30">

										<a data-toggle="modal" href="#QualifModal" class="btn btn-primary btn-lg">Add
											new</a>

									</div>
									<div id="QualifModal" class="modal fade login-box-wrapper" tabindex="-1"
										data-width="550" style="display: none;" data-backdrop="static"
										data-keyboard="false" data-replace="true">

										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"
												aria-hidden="true">&times;</button>
											<h4 class="modal-title text-center">Add languages</h4>
										</div>

										<div class="modal-body">
											<form action="app/add-language.php" method="POST" autocomplete="off"
												enctype="multipart/form-data">
												<div class="row gap-20">
													<div class="col-sm-12 col-md-12">

														<div class="form-group">
															<label>Language</label>
															<select name="language" required class="selectpicker show-tick form-control" data-live-search="false">
																<option value="" selected disabled>- Choose a Langauge -</option>
																<option value="Abkhazian">Abkhazian</option>
																<option value="Afar">Afar</option>
																<option value="Afrikaans">Afrikaans</option>
																<option value="Algonquin">Algonquin</option>
																<option value="Albanian">Albanian</option>
																<option value="Amharic">Amharic</option>
																<option value="Apache">Apache</option>
																<option value="Arabic">Arabic</option>
																<option value="Aragonese">Aragonese</option>
																<option value="Aramaic">Aramaic</option>
																<option value="Armenian">Armenian</option>
																<option value="Azerbaijani">Azerbaijani</option>
																<option value="Balinese">Balinese</option>
																<option value="Bambara">Bambara</option>
																<option value="Baluchi">Baluchi</option>
																<option value="Basque">Basque</option>
																<option value="Berber">Berber</option>
																<option value="Bashkir">Bashkir</option>
																<option value="Belarusian">Belarusian</option>
																<option value="Bengali">Bengali</option>
																<option value="Bhojpuri">Bhojpuri</option>
																<option value="Breton">Breton</option>
																<option value="Bosnian">Bosnian</option>
																<option value="Bulgarian">Bulgarian</option>
																<option value="Burmese">Burmese</option>
																<option value="Cantonese">Cantonese</option>
																<option value="Catalan">Catalan</option>
																<option value="Cebuano">Cebuano</option>
																<option value="Cherokee">Cherokee</option>
																<option value="Chechen">Chechen</option>
																<option value="Chinese">Chinese</option>
																<option value="Corsican">Corsican</option>
																<option value="Cornish">Cornish</option>
																<option value="Croatian">Croatian</option>
																<option value="Czech">Czech</option>
																<option value="Danish">Danish</option>
																<option value="Dakota">Dakota</option>
																<option value="Dothraki">Dothraki</option>
																<option value="Dinka">Dinka</option>
																<option value="Dutch">Dutch</option>
																<option value="Edo">Edo</option>
																<option value="Esperanto">Esperanto</option>
																<option value="Estonian">Estonian</option>
																<option value="Faroese">Faroese</option>
																<option value="Farsi">Farsi</option>
																<option value="Fijian">Fijian</option>
																<option value="Finnish">Finnish</option>
																<option value="Frisian">Frisian</option>
																<option value="French">French</option>
																<option value="Filipino">Filipino</option>
																<option value="Galician">Galician</option>
																<option value="Georgian">Georgian</option>
																<option value="German">German</option>
																<option value="Greek">Greek</option>
																<option value="Greenlandic">Greenlandic</option>
																<option value="Guarani">Guarani</option>
																<option value="Gujarati">Gujarati</option>
																<option value="Haitian">Haitian</option>
																<option value="Hakka">Hakka</option>
																<option value="Hawaiian">Hawaiian</option>
																<option value="Hausa">Hausa</option>
																<option value="Hebrew">Hebrew</option>
																<option value="Hindi">Hindi</option>
																<option value="Hmong">Hmong</option>
																<option value="Hungarian">Hungarian</option>
																<option value="Icelandic">Icelandic</option>
																<option value="Igbo">Igbo</option>
																<option value="Ilocano">Ilocano</option>
																<option value="Indonesian">Indonesian</option>
																<option value="Interlingua">Interlingua</option>
																<option value="Inuit">Inuit</option>
																<option value="Irish">Irish</option>
																<option value="Italian">Italian</option>
																<option value="Javanese">Javanese</option>
																<option value="Japanese">Japanese</option>
																<option value="Kannada">Kannada</option>
																<option value="Kazakh">Kazakh</option>
																<option value="Kashmiri">Kashmiri</option>
																<option value="Khmer">Khmer</option>
																<option value="Kinyarwanda">Kinyarwanda</option>
																<option value="Klingon">Klingon</option>
																<option value="Kirundi">Kirundi</option>
																<option value="Kongo">Kongo</option>
																<option value="Korean">Korean</option>
																<option value="Kurdish">Kurdish</option>
																<option value="Kyrgyz">Kyrgyz</option>
																<option value="Lao">Lao</option>
																<option value="Lingala">Lingala</option>
																<option value="Latin">Latin</option>
																<option value="Latvian">Latvian</option>
																<option value="Lithuanian">Lithuanian</option>
																<option value="Luxembourgish">Luxembourgish</option>
																<option value="Maasai">Maasai</option>
																<option value="Macedonian">Macedonian</option>
																<option value="Maithili">Maithili</option>
																<option value="Malagasy">Malagasy</option>
																<option value="Malay">Malay</option>
																<option value="Maltese">Maltese</option>
																<option value="Malayalam">Malayalam</option>
																<option value="Manx">Manx</option>
																<option value="Maori">Maori</option>
																<option value="Marathi">Marathi</option>
																<option value="Marwari">Marwari</option>
																<option value="Mongolian">Mongolian</option>
																<option value="Navajo">Navajo</option>
																<option value="Nauruan">Nauruan</option>
																<option value="Navi">Navi</option>
																<option value="Nepali">Nepali</option>
																<option value="Norwegian">Norwegian</option>
																<option value="Nynorsk">Nynorsk</option>
																<option value="Occitan">Occitan</option>
																<option value="Oromo">Oromo</option>
																<option value="Oriya">Oriya</option>
																<option value="Pashto">Pashto</option>
																<option value="Provencal">Provencal</option>
																<option value="Polish">Polish</option>
																<option value="Portuguese">Portuguese</option>
																<option value="Punjabi">Punjabi</option>
																<option value="Quechua">Quechua</option>
																<option value="Romanian">Romanian</option>
																<option value="Russian">Russian</option>
																<option value="Sami">Sami</option>
																<option value="Samoan">Samoan</option>
																<option value="Sanskrit">Sanskrit</option>
																<option value="Scots Gaelic">Scots Gaelic</option>
																<option value="Sardianian">Sardianian</option>
																<option value="Sesotho">Sesotho</option>
																<option value="Sinhalese">Sinhalese</option>
																<option value="Sindhi">Sindhi</option>
																<option value="Siswati">Siswati</option>
																<option value="Slovenian">Slovenian</option>
																<option value="Syriac">Syriac</option>
																<option value="Sudanese">Sudanese</option>
																<option value="Shona">Shona</option>
																<option value="Serbian">Serbian</option>
																<option value="Slovak">Slovak</option>
																<option value="Somali">Somali</option>
																<option value="Spanish">Spanish</option>
																<option value="Swalhili">Swalhili</option>
																<option value="Swedish">Swedish</option>
																<option value="Tahitian">Tahitian</option>
																<option value="Tajik">Tajik</option>
																<option value="Tsonga">Tsonga</option>
																<option value="Tatar">Tatar</option>
																<option value="Tagalog">Tagalog</option>
																<option value="Tswana">Tswana</option>
																<option value="Turkmen">Turkmen</option>
																<option value="Tamil">Tamil</option>
																<option value="Telugu">Telugu</option>
																<option value="Thai">Thai</option>
																<option value="Tibetan">Tibetan</option>
																<option value="Turkish">Turkish</option>
																<option value="Ukrainian">Ukrainian</option>
																<option value="Uyghur">Uyghur</option>
																<option value="Urdu">Urdu</option>
																<option value="Uzbek">Uzbek</option>
																<option value="Vietnamese">Vietnamese</option>
																<option value="Volapuk">Volapuk</option>
																<option value="Welsh">Welsh</option>
																<option value="Wolof">Wolof</option>
																<option value="Wu">Wu</option>
																<option value="Xhosa">Xhosa</option>
																<option value="Yiddish">Yiddish</option>
																<option value="Yoruba">Yoruba</option>
																<option value="Zhuang">Zhuang</option>
																<option value="Zulu">Zulu</option>
															</select>
														</div>


													</div>


													<div class="col-sm-12 col-md-12">

														<div class="form-group">
															<label>Speak</label>
															<select name="speak" required
																class="selectpicker show-tick form-control"
																data-live-search="false">
																<option value="Fair">Fair</option>
																<option value="Good">Good</option>
																<option value="Very Good">Very Good</option>
															</select>
														</div>

													</div>

													<div class="col-sm-12 col-md-12">

														<div class="form-group">
															<label>Read</label>
															<select name="read" required
																class="selectpicker show-tick form-control"
																data-live-search="false">
																<option value="Fair">Fair</option>
																<option value="Good">Good</option>
																<option value="Very Good">Very Good</option>
															</select>
														</div>

													</div>

													<div class="col-sm-12 col-md-12">

														<div class="form-group">
															<label>Write</label>
															<select name="write" required
																class="selectpicker show-tick form-control"
																data-live-search="false">
																<option value="Fair">Fair</option>
																<option value="Good">Good</option>
																<option value="Very Good">Very Good</option>
															</select>
														</div>

													</div>

												</div>
										</div>

										<div class="modal-footer text-center">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="button" data-dismiss="modal"
												class="btn btn-primary btn-inverse">Close</button>
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


</body>


</html>