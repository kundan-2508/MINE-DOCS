<?php
session_start();
define("name", "Mine Docs");
include_once "include/dbh.inc.php";
?>

<?php

if(!isset($_SESSION['u_email']) || !isset($_SESSION['u_pwd']))
{
	$_SESSION['msg'] = "Session expired...please Login first";
	header("location:index.php?loginagain");
	exit();
}

?>



<!doctype html>
<html lang = "en-us">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--bootstrap css starts here-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--bootstrap css ends here-->
	
	<!--font awesome starts here-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anon
	us">
	<!--font awesome starts here-->
	
	<!--jquery cdn starts here-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--jquery cdn starts here-->
	
	<!--bootstrap js starts here-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--bootstrap js starts here-->
  
	<!--title logo starts here-->
	<link rel="shortcut icon" href="img/logo.png" type="image/jpg" />
	<!--title logo ends here-->
	
	<!--title starts here-->
	<title> <?php echo name;?> - A place to save your Docs</title>
	<!--title endss here-->
	
	<!--custom css starts here-->
	
	<link rel = "stylesheet" href = "css/style.css" type = "text/css">
	<link rel = "stylesheet" href = "css/style1.css" type = "text/css">
	
	<!--custom css ends here-->
	
	<!--custom js starts here-->
	<script src="js/validate.js" type = "text/javascript"></script>
	<!--custom js ends here-->
	
	<!--SEO starts here-->
	
	<meta charset="utf-8">
	<meta name="language" content="en-us"/>  
	<meta http-equiv="Content-Type" content="text/html" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="distribution" content="Global" />
	<meta http-equiv="Cache-control" content="public">
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="7 days"/>
	<meta name="copyright" content="Mine Docs 2018"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<meta name="description" content="Welcome to Mine Docs. We provides a platform where you can save your valuable docs and access anytime anywhere.">
	<meta name="keywords" content="Mine Docs, Bit Sindri, Kundan Kumar, Docs, private profile, students, contact" />
	<meta name="author" content="Kundan Kumar">
	<meta name="email" content="kun123658@gmail.com">
	
	<meta property="og:type" content="website" /> 
	<meta property="og:title" content="Mine Docs - A place to save your docs" />
	<meta property="og:description" content="We provide a platform where you can save all your docs and can access anytime , anywhere" />
	<meta property="og:image" content="http://www.minedocs.online/img/logo.png" />
	<meta property="og:url" content="http://www.minedocs.online/minedocs" />
	<meta property="og:site_name" content="Mine Docs" />
	
	<meta name="twitter:card" content="website">
	<meta name="twitter:site" content="Mine Docs - A place to save your docs">
	<meta name="twitter:title" content="Mine Docs - A place to save your docs">
	<meta name="twitter:description" content="We provide a platform where you can save all your docs and can access anytime , anywhere">
	<meta name="twitter:image" content="http://www.minedocs.online/img/logo.png">
	
	<meta itemprop="name" content="mine Docs">
	<meta itemprop="description" content="We provide a platform where you can save all your docs and can access anytime , anywhere">
	<meta itemprop="image" content="http://www.minedocs.online/img/logo.png">
	
	
	<!--SEO ends here-->

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=160689777879642';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	
</head>


<body>

<!--

███╗   ███╗██╗███╗   ██╗███████╗    ██████╗  ██████╗  ██████╗███████╗
████╗ ████║██║████╗  ██║██╔════╝    ██╔══██╗██╔═══██╗██╔════╝██╔════╝
██╔████╔██║██║██╔██╗ ██║█████╗      ██║  ██║██║   ██║██║     ███████╗
██║╚██╔╝██║██║██║╚██╗██║██╔══╝      ██║  ██║██║   ██║██║     ╚════██║
██║ ╚═╝ ██║██║██║ ╚████║███████╗    ██████╔╝╚██████╔╝╚██████╗███████║
╚═╝     ╚═╝╚═╝╚═╝  ╚═══╝╚══════╝    ╚═════╝  ╚═════╝  ╚═════╝╚══════╝

-->

					<nav class = "navbar navbar-inverse">
						<div class = "container">
							<div class = "navbar-header">
							<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#mainNavBar" >
							<span class = "icon-bar"></span>
							<span class = "icon-bar"></span>
							<span class = "icon-bar"></span>
							</button>
								<!--LOGO-->
								<a href = "dashboard.php" class = "navbar-brand"><?php echo name;?></a>
							</div>
							<div class = "col-sm-1 col-md-1"></div>
							
							<div class = "collapse navbar-collapse" id = "mainNavBar">
								
								<ul class = "nav navbar-nav">
									<li><a href = "#about" class = "slide-section"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
									<li><a href = "#contact" class = "slide-section"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact us</a></li>
									<li><a href = "#faq" class = "slide-section"><i class="fa fa-question-circle" aria-hidden="true"></i> Faq's</a></li>
									<li><a href = "#help" class = "slide-section"><i class="fa fa-flag" aria-hidden="true"></i> Help</a></li>
								</ul>
								<form action = "include/logout.inc.php" method = "post">
								<ul class = "nav navbar-nav navbar-right">
									<li>
										
										<button type = "submit" class = "btn btn-success" name = "logout"  style = "margin-top:8px;border-radius:0;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
										
									</li>
								</ul>
								</form>
							</div>					
						</div>
					</nav>
<?php
if(isset($_SESSION['msg']))
{
	
	echo '
			<div class = "container">
				<div class = "row">
					
					<div class = "col-sm-12 col-md-12" style = "padding:0;margin:0;border:none;background:transparent;font-size:1.4em;">
						<div class = "alert alert-danger alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
							@$_SESSION['msg'].'
						</div>
					</div>
					
				</div>
			</div>';
	/*		
	$msg = $_SESSION['msg'];
	echo "<script>
			alert('$msg')
		</script>";
		*/
	unset($_SESSION['msg']);
	//session_destroy();
}
else
{
	//nothing will show
}
?>		
	
		<?php
			
			// fetching user_profile pic form data base
			$email = $_SESSION['u_email'];
			$sql_user_details = "SELECT *FROM user_details WHERE Email = '$email' ";
			$result_user_details = mysqli_query($conn,$sql_user_details);
			$row_user_details = mysqli_fetch_assoc($result_user_details);
			
			// fetching profile form data
			$email = $_SESSION['u_email'];
			$sql_profile = "SELECT *FROM profile_details WHERE Email = '$email' ";
			$result_profile = mysqli_query($conn,$sql_profile);
			$row_profile = mysqli_fetch_assoc($result_profile);
			
			// fetching profile form data
			$email = $_SESSION['u_email'];
			$sql_achievement = "SELECT *FROM achievement WHERE Email = '$email' ";
			$result_achievement = mysqli_query($conn,$sql_achievement);
			$row_achievement = mysqli_fetch_assoc($result_achievement);
			
			// fetching academic details
			$email = $_SESSION['u_email'];
			$sql_academic = "SELECT *FROM academics WHERE Email = '$email' ";
			$result_academic = mysqli_query($conn,$sql_academic);
			$row_academics = mysqli_fetch_assoc($result_academic);
			
			// fetching skills 
			$email = $_SESSION['u_email'];
			$sql_skills = "SELECT *FROM skills WHERE Email = '$email' ";
			$result_skills = mysqli_query($conn,$sql_skills);
			while($row_skills = mysqli_fetch_assoc($result_skills))
			{
				$skills = explode(',',$row_skills['Skills']);
			}
			
			// fetching secondary docs
			$email = $_SESSION['u_email'];
			$sql_secondary_docs = "SELECT *FROM secondary_docs WHERE Email = '$email' ";
			$result_secondary_docs = mysqli_query($conn,$sql_secondary_docs);
			$row_secondary_docs = mysqli_fetch_assoc($result_secondary_docs);
			
			// fetching higher secondary docs
			$email = $_SESSION['u_email'];
			$sql_higher_secondary_docs = "SELECT *FROM higher_secondary_docs WHERE Email = '$email' ";
			$result_higher_secondary_docs = mysqli_query($conn,$sql_higher_secondary_docs);
			$row_higher_secondary_docs = mysqli_fetch_assoc($result_higher_secondary_docs);
			
			// fetching internship docs
			$email = $_SESSION['u_email'];
			$sql_internship_docs = "SELECT *FROM internship_docs WHERE Email = '$email' ";
			$result_internship_docs = mysqli_query($conn,$sql_internship_docs);
			$row_internship_docs = mysqli_fetch_assoc($result_internship_docs);
			
			// fetching ekalyan docs
			$email = $_SESSION['u_email'];
			$sql_ekalyan_docs = "SELECT *FROM ekalyan_docs WHERE Email = '$email' ";
			$result_ekalyan_docs = mysqli_query($conn,$sql_ekalyan_docs);
			$row_ekalyan_docs = mysqli_fetch_assoc($result_ekalyan_docs);
			
			// fetching undergrad docs
			$email = $_SESSION['u_email'];
			$sql_undergrad_docs = "SELECT *FROM undergrad_docs WHERE Email = '$email' ";
			$result_undergrad_docs = mysqli_query($conn,$sql_undergrad_docs);
			$row_undergrad_docs = mysqli_fetch_assoc($result_undergrad_docs);

		?>	
				<div class = "container-fluid details">
					<div class = "container">	
						<div class = "row">
							<br><br>
							<div class = "col-sm-2 col-md-2 details-left-text">
								<form action = "include/profilePic.php" method = "POST" enctype='multipart/form-data'>
								<img src="<?php if($row_user_details['ProfilePic'] != ""){echo "img/users/".$row_user_details['ProfilePic'];}else{echo "img/users/user.png";} ?>" title = "<?php echo $row_profile['Name'] ?>" alt = "<?php echo $row_profile['Name'] ?>" id="profile-img-tag" class = "img-responsive img-rounded"  /><br>
								<input type="file" name="pic" id="profile-img" style = "display:none;">
								<button type = "button" id = "uppic" class = "btn btn-primary btn-lg btn-block form-group" style = "background:#032549;"><b><i class="fa fa-upload" aria-hidden="true"></i> Upload Pic</b></button>
								<input type="submit" name = "upload" class = "btn btn-primary btn-lg btn-block form-group" value='Save Pic' style = "background:#032549;display:none;" id = "save"/>
								</form>
								<h3><?php echo $row_profile['Name'] ?></h3>
								<p><?php if(!empty($row_profile['Bio'])){echo $row_profile['Bio'];}else{echo "Add a Bio";} ?></p>
								<hr>
								<p id = "details-left-text-bio"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;<?php if(!empty($row_profile['Location'])){echo $row_profile['Location'];}else{echo "Location";} ?></p>
								<p id = "details-left-text-bio"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;<?php echo @$_SESSION["u_email"] ?></p>
								<p id = "details-left-text-bio"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <?php if(!empty($row_profile['Url'])){echo $row_profile['Url'];}else {echo "Website";}?></p>
							</div>
							<div class = "col-sm-1 col-md-1"></div>
							<div class = "col-sm-6 col-md-6">
								<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
										<li><a data-toggle="tab" href="#account">Account</a></li>
										<li><a data-toggle="tab" href="#academics">Academics</a></li>
										<li><a data-toggle="tab" href="#docs">Docs</a></li>
										<li><a data-toggle="tab" href="#skills">Skills</a></li>
										<li><a data-toggle="tab" href="#achievement">Achievement</a></li>
								</ul>
									<div class="tab-content">
									<!--profile section starts here-->
										<div id="profile" class="tab-pane fade in active"><br>
											<form action = "include/profile.php" method = "POST">
												<div class="form-group">
													  <label for="Name">Name</label>
													  <input type="text" name = "name" value = "<?php echo $row_profile['Name'] ?>" class="form-control form-index"  placeholder="Your Name" required pattern="[a-zA-Z .]{1,30}" title="Only Alphabets and dots Allowed"/>
												</div>
												<div class="form-group">
													  <label for="dob">Date of Birth</label>
													  <input type="text" name = "dob" value = "<?php echo $row_profile['DOB'] ?>" class="form-control form-index"  placeholder="YYYY-MM-DD"  pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title = "Date of Birth"/>
												</div>
												<div class="form-group">
													  <label for="email">Email</label>
													  <input type="email" name = "email" value = "<?php echo $row_profile['Email'] ?>" readonly class="form-control form-index" placeholder="Your Email" required pattern = "^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" title = "Email" />
												</div>
												<div class="form-group">
													  <label for="phone">Mobile</label>
													  <input type="text" name = "mob" value = "<?php echo $row_profile['Mobile'] ?>" class="form-control form-index" placeholder="Mobile No" pattern="[7-9]{1}[0-9]{9}" title = "Enter valid mobile no"/>
												</div>
												<div class="form-group">
													  <label for="bio">Bio</label>
													  <textarea rows = "3" name = "bio" class="form-control form-index" placeholder="Tell us a little about yourself" ><?php echo $row_profile['Bio'] ?></textarea>
												</div>
												<div class="form-group">
													  <label for="board">Blood Group</label>
													<select name = "bloodGroup" class=" form-control form-index">
															<option value = "">Your Blood Group</option>
															<option value = "A" <?php if($row_profile['BloodGroup']=="A") echo 'selected="selected"'; ?>>A</option>
															<option value = "B" <?php if($row_profile['BloodGroup']=="B") echo 'selected="selected"'; ?>>B</option>
															<option value = "AB" <?php if($row_profile['BloodGroup']=="AB") echo 'selected="selected"'; ?>>AB</option>
															<option value = "O" <?php if($row_profile['BloodGroup']=="O") echo 'selected="selected"'; ?>>O </option>
															
													</select>
												</div>
												<div class="form-group">
													  <label for="url">URL</label>
													  <input type="text" name = "url" value = "<?php echo $row_profile['Url'] ?>" class="form-control form-index" placeholder="Your Website URL" />
												</div>
												<div class="form-group">
													  <label for="company">Company</label>
													  <input type="text" name = "company" value = "<?php echo $row_profile['Company'] ?>" class="form-control form-index" placeholder="Company" />
												</div>
												<div class="form-group">
													  <label for="location">Location</label>
													  <input type="text" name = "location" value = "<?php echo $row_profile['Location'] ?>" class="form-control form-index" placeholder="Location" />
												</div>
												<div class="form-group">
													  <input type="submit" name = "update_profile" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
												</div>
											</form>
										</div>
									<!--profile section ends here-->
									<!-- Account section starts here -->
										<div id="account" class="tab-pane fade">
											<h3 class = "details-right-sub-heading">Change Password</h3><hr>
											<form action = "include/changePassword.php" method = "POST" name = "dashboardPassword">
												<div class="form-group">
													  <label for="newpwd">New Password</label>
													  <input type="password" name = "newPass" class="form-control form-index"  placeholder="New Password" required onkeyup = "validateDashboardPassword();" />
												</div>
												<div class="form-group">
													  <label for="cnfpwd">Confirm Password</label>
													  <input type="password" name = "cnfPass"class="form-control form-index" placeholder="Confirm Password" required onkeyup = "validateDashboardPassword();"/><span id = "dyn"></span><br>
												</div>
												<div class="form-group">
													  <input type="submit" disabled name = "changePassword" class="btn btn-primary" value = "Update Password" style = "background:#032549;"/>
												</div>
												
											</form>
										</div>
									<!-- Account section ends here -->
									<!-- Academics section starts here -->
										<div id="academics" class="tab-pane fade">
											<h3 class = "details-right-sub-heading">Secondary Education</h3><hr>
											<form action = "include/academics.php" method = "POST">
												<div class="form-group">
													  <label for="school">School of Passing 10th</label>
													  <input type="text" name = "tenthSchool" value = "<?php echo $row_academics['TenthSchool'] ?>" class="form-control form-index"  placeholder="School of passing 10th" />
												</div>
												<div class="form-group">
													  <label for="board">Board of Passing 10th</label>
													<select name = "boardOfTen" class=" form-control form-index" value = "<?php echo $row_academics['TenthBoard'] ?>">
															<option value = "">Your Board</option>
															<option value = "CBSE" <?php if($row_academics['TenthBoard']=="CBSE") echo 'selected="selected"'; ?>>CBSE</option>
															<option value = "ICSE" <?php if($row_academics['TenthBoard']=="ICSE") echo 'selected="selected"'; ?>>ICSE</option>
															<option value = "JAC" <?php if($row_academics['TenthBoard']=="JAC") echo 'selected="selected"'; ?>>JAC</option>
															<option value = "BIHAR" <?php if($row_academics['TenthBoard']=="BIHAR") echo 'selected="selected"'; ?>>Bihar </option>
															<option value = "OTHER" <?php if($row_academics['TenthBoard']=="OTHER") echo 'selected="selected"'; ?>>Other</option>
													</select>
												</div>
												<div class="form-group">
													  <label for="roll">Roll No of 10th </label>
													  <input type="text" name = "tenthRoll" value = "<?php echo $row_academics['TenthRoll'] ?>" class="form-control form-index"  placeholder="Roll No of Class 10th" />
												</div>
												<div class="form-group">
													  <label for="yearOfTen">Passing Year</label>
													  <select name = "yearOfTen" class=" form-control form-index" value = "<?php echo $row_academics['TenthYear'] ?>">
															<option value = "">Passing Year</option>
															<option value = "2010" <?php if($row_academics['TenthYear']=="2010") echo 'selected="selected"'; ?>>2010</option>
															<option value = "2011" <?php if($row_academics['TenthYear']=="2011") echo 'selected="selected"'; ?>>2011</option>
															<option value = "2012" <?php if($row_academics['TenthYear']=="2012") echo 'selected="selected"'; ?>>2012</option>
															<option value = "2013" <?php if($row_academics['TenthYear']=="2013") echo 'selected="selected"'; ?>>2013</option>
															<option value = "2014" <?php if($row_academics['TenthYear']=="2014") echo 'selected="selected"'; ?>>2014</option>
															<option value = "2015" <?php if($row_academics['TenthYear']=="2015") echo 'selected="selected"'; ?>>2015</option>
													</select>
												</div>
												<div class="form-group">
													  <label for="marks">Aggregate CGPA/Percent</label>
													  <input type="text" value = "<?php echo $row_academics['TenthMarks'] ?>" name = "marksOfTen" class="form-control form-index" placeholder="Aggregate CGPA/Percent" />
												</div>
												<h3 class = "details-right-sub-heading">Higher Secondary Education</h3><hr>
												<div class="form-group">
													  <label for="school">School of Passing 12th</label>
													  <input type="text" value = "<?php echo $row_academics['TwelveSchool'] ?>" name = "schoolOfTwelve" class="form-control form-index"  placeholder="Your School" />
												</div>
												<div class="form-group">
													  <label for="board">Board of Passing 12th</label>
													  <select name = "boardOfTwelve" class=" form-control form-index" value = "<?php echo $row_academics['TwelveBoard'] ?>">
															<option value = "">Your Board</option>
															<option value = "CBSE" <?php if($row_academics['TwelveBoard']=="CBSE") echo 'selected="selected"'; ?>>CBSE</option>
															<option value = "ICSE" <?php if($row_academics['TwelveBoard']=="ICSE") echo 'selected="selected"'; ?>>ICSE</option>
															<option value = "JAC" <?php if($row_academics['TwelveBoard']=="JAC") echo 'selected="selected"'; ?>>JAC</option>
															<option value = "BIHAR" <?php if($row_academics['TwelveBoard']=="BIHAR") echo 'selected="selected"'; ?>>Bihar </option>
															<option value = "OTHER" <?php if($row_academics['TwelveBoard']=="OTHER") echo 'selected="selected"'; ?>>Other</option>
													  </select>
												</div>
												<div class="form-group">
													  <label for="school">Roll No of 12th</label>
													  <input type="text" name = "twelveRoll" value = "<?php echo $row_academics['TwelveRoll'] ?>" class="form-control form-index"  placeholder="Roll no Of 12th" />
												</div>
												<div class="form-group">
													  <label for="year">Passing Year</label>
													  <select name = "yearOfTwelve" class=" form-control form-index" value = "<?php echo $row_academics['TwelveYear'] ?>">
															<option value = "">Passing Year</option>
															<option value = "2010" <?php if($row_academics['TwelveYear']=="2010") echo 'selected="selected"'; ?>>2010</option>
															<option value = "2011" <?php if($row_academics['TwelveYear']=="2011") echo 'selected="selected"'; ?>>2011</option>
															<option value = "2012" <?php if($row_academics['TwelveYear']=="2012") echo 'selected="selected"'; ?>>2012</option>
															<option value = "2013" <?php if($row_academics['TwelveYear']=="2013") echo 'selected="selected"'; ?>>2013</option>
															<option value = "2014" <?php if($row_academics['TwelveYear']=="2014") echo 'selected="selected"'; ?>>2014</option>
															<option value = "2015" <?php if($row_academics['TwelveYear']=="2015") echo 'selected="selected"'; ?>>2015</option>
													</select>
												</div>
												<div class="form-group">
													  <label for="marks">Aggregate Percent</label>
													  <input type="text" value = "<?php echo $row_academics['TwelveMarks'] ?>" name = "marksOfTwelve" class="form-control form-index" placeholder="Aggregate Percent" />
												</div>
												<h3 class = "details-right-sub-heading">Under Graduate Education</h3><hr>
												<div class="form-group">
													  <label for="school">Your College</label>
													  <input type="text" value = "<?php echo $row_academics['College'] ?>" name = "college" class="form-control form-index"  placeholder="Your college" />
												</div>
												<div class="form-group">
													  <label for="board">Branch</label>
													<select name = "branch" class=" form-control form-index" value = "<?php echo $row_academics['Branch'] ?>">  
													    <option value = "">Your Branch</option>
														<option value = "Mechanical" <?php if($row_academics['Branch']=="Mechanical") echo 'selected="selected"'; ?>>Mechanical</option>
														<option value = "Electrical" <?php if($row_academics['Branch']=="Electrical") echo 'selected="selected"'; ?>>Electrical</option>
														<option value = "Civil" <?php if($row_academics['Branch']=="Civil") echo 'selected="selected"'; ?>>Civil</option>
														<option value = "Mining" <?php if($row_academics['Branch']=="Mining") echo 'selected="selected"'; ?>>Mining</option>
														<option value = "Production" <?php if($row_academics['Branch']=="Production") echo 'selected="selected"'; ?>>Production</option>
														<option value = "Metallurgy" <?php if($row_academics['Branch']=="Metallurgy") echo 'selected="selected"'; ?>>Metallurgy</option>
														<option value = "Chemical" <?php if($row_academics['Branch']=="Chemical") echo 'selected="selected"'; ?>>Chemical</option>
														<option value = "Information Technology" <?php if($row_academics['Branch']=="Information Technology") echo 'selected="selected"'; ?>>Information Technology</option>
														<option value = "Computer Science" <?php if($row_academics['Branch']=="Computer Science") echo 'selected="selected"'; ?>>Computer Science</option>
														<option value = "Electronics and Communication" <?php if($row_academics['Branch']=="Electronics and Communication") echo 'selected="selected"'; ?>>Electronics and Communication</option>
													</select>
												</div>
												<div class="form-group">
													  <label for="roll">College Roll </label>
													  <input type="text" name = "collegeRoll" value = "<?php echo $row_academics['CollegeRoll'] ?>" class="form-control form-index"  placeholder="College Roll No" />
												</div>
												<div class="form-group">
													  <label for="regno">Registration No</label>
													  <input type="text" name = "collegeRegNo" value = "<?php echo $row_academics['CollegeRegNo'] ?>" class="form-control form-index"  placeholder="Registration No" />
												</div>
												<div class="form-group">
													  <label for="year">Batch</label>
													  <select name = "batch" class=" form-control form-index" value = "<?php echo $row_academics['Batch'] ?>">
															<option value = "">Your Batch</option>
															<option value = "2010" <?php if($row_academics['Batch']=="2010") echo 'selected="selected"'; ?>>2010</option>
															<option value = "2011" <?php if($row_academics['Batch']=="2011") echo 'selected="selected"'; ?>>2011</option>
															<option value = "2012" <?php if($row_academics['Batch']=="2012") echo 'selected="selected"'; ?>>2012</option>
															<option value = "2013" <?php if($row_academics['Batch']=="2013") echo 'selected="selected"'; ?>>2013</option>
															<option value = "2014" <?php if($row_academics['Batch']=="2014") echo 'selected="selected"'; ?>>2014</option>
															<option value = "2015" <?php if($row_academics['Batch']=="2015") echo 'selected="selected"'; ?>>2015</option>
															<option value = "2016" <?php if($row_academics['Batch']=="2016") echo 'selected="selected"'; ?>>2016</option>
															<option value = "2017" <?php if($row_academics['Batch']=="2017") echo 'selected="selected"'; ?>>2017</option>
													  </select>
												</div>
												<div class="form-group">
													  <label for="marks">Aggregate SGPA</label>
													  <input type="text" value = "<?php echo $row_academics['SGPA'] ?>" name = "sgpa" class="form-control form-index" placeholder="Aggregate SGPA" />
												</div>
												<div class="form-group">
													  <input type="submit" name = "update_academics" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
												</div>
												
											</form>
										</div>
									<!-- Academics section ends here -->
									<!-- Docs section starts here -->
										<div id="docs" class="tab-pane fade">
										<h3 class = "details-right-sub-heading">Secondary Education</h3><hr>
										<form action = "include/secondaryDocs.php" method = "POST" enctype="multipart/form-data">
											<table class="table table-borderless">
												<thead>
												  <tr style = "border-bottom:2px solid #141e2d;">
													<th>Description</th>
													<th>Files</th>
													<th>Edit</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>Marksheet</td>
													<td><img src = "<?php if($row_secondary_docs['Marksheet'] != ""){echo "img/secondary/".$row_secondary_docs['Marksheet'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag1" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_secondary_docs['Marksheet'] != ""){echo "img/secondary/".$row_secondary_docs['Marksheet'];}else{echo "img/users/user.png";} ?>" download ><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>										<br><br>
													<input type = "file" name = "secondary[]" style = "display:none;" id = "files1"/>
													<button type = "button" class = "btn btn-primary" id = "fileup1" onclick = "upload(1)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>Admit Card</td>
													<td><img src = "<?php if($row_secondary_docs['AdmitCard'] != ""){echo "img/secondary/".$row_secondary_docs['AdmitCard'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag2" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_secondary_docs['AdmitCard'] != ""){echo "img/secondary/".$row_secondary_docs['AdmitCard'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "secondary[]" style = "display:none;" id = "files2"/>			<button type = "button" class = "btn btn-primary" id = "fileup2" onclick = "upload(2);"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  
												  <tr>
													<td>Others</td>
													<td><img src = "<?php if($row_secondary_docs['Others'] != ""){echo "img/secondary/".$row_secondary_docs['Others'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag3" class = "img-responsive img-rounded" /></td>
													<<td><a href = "<?php if($row_secondary_docs['Others'] != ""){echo "img/secondary/".$row_secondary_docs['Others'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "secondary[]" style = "display:none;" id = "files3"/>			<button type = "button" class = "btn btn-primary" id = "fileup3" onclick = "upload(3);"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>    
												</tbody>
											  </table>
											 <div class="form-group">
												<input type="submit" name = "upload_secondary" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
											  </div> 
										 </form>
											<h3 class = "details-right-sub-heading">Higher Secondary Education</h3><hr>  
										<form action = "include/higherSecondaryDocs.php" method = "POST" enctype="multipart/form-data">  
											  <table class="table table-borderless">
												<thead>
												  <tr style = "border-bottom:2px solid #141e2d;">
													<th>Description</th>
													<th>Files</th>
													<th>Edit</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>Marksheet</td>
													<td><img src = "<?php if($row_higher_secondary_docs['Marksheet'] != ""){echo "img/higher_secondary/".$row_higher_secondary_docs['Marksheet'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag4" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_higher_secondary_docs['Marksheet'] != ""){echo "img/higher_secondary/".$row_higher_secondary_docs['Marksheet'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary" ><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "higher_secondary[]" id = "files4" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup4" onclick = "upload(4)" ><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>Admit Card</td>
													<td><img src = "<?php if($row_higher_secondary_docs['AdmitCard'] != ""){echo "img/higher_secondary/".$row_higher_secondary_docs['AdmitCard'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag5" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_higher_secondary_docs['AdmitCard'] != ""){echo "img/higher_secondary/".$row_higher_secondary_docs['AdmitCard'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary" ><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "higher_secondary[]" id = "files5" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup5" onclick = "upload(5)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												</tr>
												  
												  <tr>
													<td>Others</td>
													<td><img src = "<?php if($row_higher_secondary_docs['Others'] != ""){echo "img/higher_secondary/".$row_higher_secondary_docs['Others'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag6" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_higher_secondary_docs['AdmitCard'] != ""){echo "img/higher_secondary/".$row_higher_secondary_docs['Others'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "higher_secondary[]" id = "files6" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup6" onclick = "upload(6)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												</tr>    
												</tbody>
											
											  </table>
										
											  <div class="form-group">
												<input type="submit" name = "upload_higher_secondary" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
											  </div>
										</form>
                                                                                      <h3 class = "details-right-sub-heading">Undergraduate Education</h3><hr>  
                                                                                 <form action = "include/undergradDocs.php" method = "POST" enctype="multipart/form-data">
											  <table class="table table-borderless">
												<thead>
												  <tr style = "border-bottom:2px solid #141e2d;">
													<th>Description</th>
													<th>Files</th>
													<th>Edit</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>SEM-1 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_one'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_one'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag7" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_one'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_one'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files7" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup7" onclick = "upload(7)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>SEM-2 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_two'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_two'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag8" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_two'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_two'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files8" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup8" onclick = "upload(8)"> <i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>SEM-3 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_three'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_three'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag9" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_three'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_three'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files9" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup9" onclick = "upload(9)"> <i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>SEM-4 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_four'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_four'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag10" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_four'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_four'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files10" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup10" onclick = "upload(10)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr> 
												  <tr>
													<td>SEM-5 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_five'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_five'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag11" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_five'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_five'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files11" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup11" onclick = "upload(11)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>SEM-6 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_six'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_six'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag12" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_six'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_six'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files12" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup12" onclick = "upload(12)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>SEM-7 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_seven'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_seven'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag13" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_seven'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_seven'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files13" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup13" onclick = "upload(13)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>  
												  <tr>
													<td>SEM-8 Marksheet</td>
													<td><img src = "<?php if($row_undergrad_docs['Sem_eight'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_eight'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag14" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Sem_eight'] != ""){echo "img/undergrad/".$row_undergrad_docs['Sem_eight'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files14" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup14" onclick = "upload(14)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr> 
												  <tr>
													<td>Others</td>
													<td><img src = "<?php if($row_undergrad_docs['Others'] != ""){echo "img/undergrad/".$row_undergrad_docs['Others'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag15" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_undergrad_docs['Others'] != ""){echo "img/undergrad/".$row_undergrad_docs['Others'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "undergrad[]" id = "files15" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup15" onclick = "upload(15)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												</tbody>
											  </table>
											  <div class="form-group">
												<input type="submit" name = "upload_undergrad" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
											  </div>
										</form>
											  <h3 class = "details-right-sub-heading">E-kalyan Docs</h3><hr>
										<form action = "include/ekalyanDocs.php" method = "POST" enctype = "multipart/form-data">  
											  <table class="table table-borderless">
												<thead>
												  <tr style = "border-bottom:2px solid #141e2d;">
													<th>Description</th>
													<th>Files</th>
													<th>Edit</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>Bonafide</td>
													<td><img src = "<?php if($row_ekalyan_docs['Bonafide'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Bonafide'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag16" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_ekalyan_docs['Bonafide'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Bonafide'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "ekalyan[]" id = "files16" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup16" onclick = "upload(16)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>Income</td>
													<td><img src = "<?php if($row_ekalyan_docs['Income'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Income'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag17" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_ekalyan_docs['Income'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Income'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "ekalyan[]" id = "files17" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup17" onclick = "upload(17)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>Caste</td>
													<td><img src = "<?php if($row_ekalyan_docs['Caste'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Caste'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag18" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_ekalyan_docs['Caste'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Caste'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "ekalyan[]" id = "files18" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup18" onclick = "upload(18)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>  
												  <tr>
													<td>Residential</td>
													<td><img src = "<?php if($row_ekalyan_docs['Residential'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Residential'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag19" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_ekalyan_docs['Residential'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Residential'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "ekalyan[]" id = "files19" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup19" onclick = "upload(19)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr> 
												  <tr>
													<td>Bank Passbook</td>
													<td><img src = "<?php if($row_ekalyan_docs['Passbook'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Passbook'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag20" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_ekalyan_docs['Passbook'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Passbook'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "ekalyan[]" id = "files20" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup20" onclick = "upload(20)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>Others</td>
													<td><img src = "<?php if($row_ekalyan_docs['Others'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Others'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag21" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_ekalyan_docs['Others'] != ""){echo "img/ekalyan/".$row_ekalyan_docs['Others'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "ekalyan[]" id = "files21" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup21" onclick = "upload(21)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												</tbody>
											  </table>
											  <div class="form-group">
												<input type="submit" name = "upload_ekalyan" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
											  </div>
										</form>
											  <h3 class = "details-right-sub-heading">Internship/Achievements</h3><hr>
										<form action = "include/internshipDocs.php" method = "POST" enctype = "multipart/form-data">  
											  <table class="table table-borderless">
												<thead>
												  <tr style = "border-bottom:2px solid #141e2d;">
													<th>Description</th>
													<th>Files</th>
													<th>Edit</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>Internship</td>
													<td><img src = "<?php if($row_internship_docs['Internship_one'] != ""){echo "img/internship/".$row_internship_docs['Internship_one'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag22" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_internship_docs['Internship_one'] != ""){echo "img/internship/".$row_internship_docs['Internship_one'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "internship[]" id = "files22" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup22" onclick = "upload(22)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>Internship</td>
													<td><img src = "<?php if($row_internship_docs['Internship_two'] != ""){echo "img/internship/".$row_internship_docs['Internship_two'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag23" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_internship_docs['Internship_two'] != ""){echo "img/internship/".$row_internship_docs['Internship_two'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "internship[]" id = "files23" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup23" onclick = "upload(23)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>
												  <tr>
													<td>Olympiad</td>
													<td><img src = "<?php if($row_internship_docs['Olympiad_one'] != ""){echo "img/internship/".$row_internship_docs['Olympiad_one'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag24" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_internship_docs['Olympiad_one'] != ""){echo "img/internship/".$row_internship_docs['Olympiad_one'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "internship[]" id = "files24" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup24" onclick = "upload(24)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr>  
												  <tr>
													<td>Olympiad</td>
													<td><img src = "<?php if($row_internship_docs['Olympiad_two'] != ""){echo "img/internship/".$row_internship_docs['Olympiad_two'];}else{echo "img/users/user.png";} ?>" id="profile-img-tag25" class = "img-responsive img-rounded" /></td>
													<td><a href = "<?php if($row_internship_docs['Olympiad_two'] != ""){echo "img/internship/".$row_internship_docs['Olympiad_two'];}else{echo "img/users/user.png";} ?>" download><button type  = "button" class = "btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
													<br><br>
													<input type = "file" name = "internship[]" id = "files25" style = "display:none;"/>			<button type = "button" class = "btn btn-primary" id = "fileup25" onclick = "upload(25)"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
													</td>
												  </tr> 
												  
												</tbody>
											  </table>
											  <div class="form-group">
												<input type="submit" name = "upload_internship" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
											  </div>
										</div>
									</form>
									<!-- Docs section ends here -->
									
									<!-- skills section starts here -->
										<div id="skills" class="tab-pane fade">
											<form action = "include/skills.php" method = "POST" name = "skillForm">
												<div class = "row">
													<br><p><a href='javascript:sAll();' id = "checkSkills">Select All</a> | <a href='javascript:sNone();' id = "checkSkills">Select None</a> | <a href='javascript:sOdd();' id = "checkSkills"> Select Odd </a> | <a href='javascript:sEven();' id = "checkSkills">Select Even </a></p>		  
												</div>
												<div class = "row" style =  "font-family:verdana;color:#c0cbd1;">
													<div class = "col-sm-4 col-md-4">
														<div class="form-group">
															<input type='checkbox' value = "C" name = "skills[]" <?php if(in_array("C",$skills)) { ?> checked="checked" <?php } ?>> C <br>
															  <input type='checkbox' value = "C++" name = "skills[]" <?php if(in_array("C++",$skills)) { ?> checked="checked" <?php } ?>> C++ <br>
															  <input type='checkbox' value = "Java" name = "skills[]" <?php if(in_array("Java",$skills)) { ?> checked="checked" <?php } ?>/> Java <br>
															  <input type='checkbox' value = "Machine Learning" name = "skills[]"<?php if(in_array("Machine Learning",$skills)) { ?> checked="checked" <?php } ?>/> Machine Learning <br>
															  <input type='checkbox' value = "Artificial Intelligence" name = "skills[]" <?php if(in_array("Artificial Intelligence",$skills)) { ?> checked="checked" <?php } ?>/> Artificial Intelligence <br>
															  <input type='checkbox' value = "Python" name = "skills[]" <?php if(in_array("Python",$skills)) { ?> checked="checked" <?php } ?>/> Python <br>
															  <input type='checkbox' value = "PHP" name = "skills[]" <?php if(in_array("PHP",$skills)) { ?> checked="checked" <?php } ?>/> PHP <br>
															  <input type='checkbox' value = "Javascript" name = "skills[]" <?php if(in_array("Javascript",$skills)) { ?> checked="checked" <?php } ?>/> Javascript <br>
															  <input type='checkbox' value = "MySql" name = "skills[]" <?php if(in_array("MySql",$skills)) { ?> checked="checked" <?php } ?>/> MySql <br>
															  <input type='checkbox' value = "HTML" name = "skills[]" <?php if(in_array("HTML",$skills)) { ?> checked="checked" <?php } ?>/> HTML <br>
														</div>
													</div>
													<div class = "col-sm-4 col-md-4">
														<div class="form-group" style =  "font-family:verdana;">
															<input type='checkbox' value = "CSS" name = "skills[]" <?php if(in_array("CSS",$skills)) { ?> checked="checked" <?php } ?>/> CSS <br>
															  <input type='checkbox' value = "Bootstrap" name = "skills[]" <?php if(in_array("Bootstrap",$skills)) { ?> checked="checked" <?php } ?>/> Bootstrap <br>
															  <input type='checkbox' value = "Jquery" name = "skills[]" <?php if(in_array("Jquery",$skills)) { ?> checked="checked" <?php } ?>/> Jquery <br>
															  <input type='checkbox' value = "Ajax" name = "skills[]" <?php if(in_array("Ajax",$skills)) { ?> checked="checked" <?php } ?>/> Ajax <br>
															  <input type='checkbox' value = "Node.js" name = "skills[]" <?php if(in_array("Node.js",$skills)) { ?> checked="checked" <?php } ?>/> Node.js <br>
															  <input type='checkbox' value = "React Js" name = "skills[]" <?php if(in_array("React Js",$skills)) { ?> checked="checked" <?php } ?>/> React Js <br>
															  <input type='checkbox' value = "Data structure" name = "skills[]" <?php if(in_array("Data structure",$skills)) { ?> checked="checked" <?php } ?>/> Data structure <br>
															  <input type='checkbox' value = "Algorithm" name = "skills[]" <?php if(in_array("Algorithm",$skills)) { ?> checked="checked" <?php } ?>/> Algorithm <br>
															  <input type='checkbox' value = "Matlab" name = "skills[]" <?php if(in_array("Matlab",$skills)) { ?> checked="checked" <?php } ?>/> Matlab <br>
															  <input type='checkbox' value = "PLC" name = "skills[]" <?php if(in_array("PLC",$skills)) { ?> checked="checked" <?php } ?>/> PLC <br>
														</div>
													</div>
													<div class = "col-sm-4 col-md-4">
														<div class="form-group" style =  "font-family:verdana;">
															<input type='checkbox' value = "Angular JS" name = "skills[]" <?php if(in_array("Angular JS",$skills)) { ?> checked="checked" <?php } ?>/> Angular JS <br>
															  <input type='checkbox' value = "XML" name = "skills[]" <?php if(in_array("XML",$skills)) { ?> checked="checked" <?php } ?>/> XML <br>
															  <input type='checkbox' value = "Dancing" name = "skills[]" <?php if(in_array("Dancing",$skills)) { ?> checked="checked" <?php } ?>/> Dancing  <br>
															  <input type='checkbox' value = "Singing" name = "skills[]" <?php if(in_array("Singing",$skills)) { ?> checked="checked" <?php } ?>/> Singing <br>
															  <input type='checkbox'value = "Athlete" name = "skills[]" <?php if(in_array("Athlete",$skills)) { ?> checked="checked" <?php } ?>/> Athlete  <br>
															  <input type='checkbox' value = "Communication" name = "skills[]" <?php if(in_array("Communication",$skills)) { ?> checked="checked" <?php } ?> /> Communication  <br>
															  <input type='checkbox' value = "Blogging" name = "skills[]" <?php if(in_array("Blogging",$skills)) { ?> checked="checked" <?php } ?>/> Blogging  <br>
															  <input type='checkbox' value = "Robotics" name = "skills[]" <?php if(in_array("Robotics",$skills)) { ?> checked="checked" <?php } ?>/> Robotics <br>
															  <input type='checkbox' value = "Leadership" name = "skills[]" <?php if(in_array("Leadership",$skills)) { ?> checked="checked" <?php } ?>/> Leadership <br>
															  <input type='checkbox' value = "Management" name = "skills[]" <?php if(in_array("Management",$skills)) { ?> checked="checked" <?php } ?>/> Management <br>
														</div>
													</div>
												</div>
												<div class="form-group form-inline">
													<input type="submit" name = "update_skills" class="btn btn-primary" value = "Commit changes" style = "background:#032549;" />
													<input type="button" data-toggle = "modal" data-target = "#letUsKnow" class="btn btn-danger" value = "My Skill is not listed here"/>
												</div>
											</form>	
										</div>
									<!-- skills section ends here -->
									<!-- Achievement section starts here -->
										<div id="achievement" class="tab-pane fade">
											<form action = "include/achievement.php" method = "POST" name = "achievement">
												<h3 class = "details-right-sub-heading">Achievements</h3><hr>
												<div class="form-group">
													  <textarea rows = "5" name = "achievement_one" class="form-control form-index" placeholder="Brag about yourself (max 355 char)" onkeyup = "LimitText_one(this.value)"><?php echo $row_achievement['Achievement_One'] ?></textarea>
												</div>
												<div class="form-group">
													  <textarea rows = "5" name = "achievement_two" class="form-control form-index" placeholder="I am gold medalist in IMO" onkeyup = "LimitText_two(this.value)"><?php echo $row_achievement['Achievement_Two'] ?></textarea>
												</div>
												<div class="form-group">  
													  <textarea rows = "5" name = "achievement_three" class="form-control form-index" placeholder="I was state topper in 10th standard" onkeyup = "LimitText_three(this.value)"><?php echo $row_achievement['Achievement_Three'] ?></textarea>
												</div>
												<div class="form-group form-inline">
													<input type="submit" name = "update_achievement" class="btn btn-primary" value = "Commit changes" style = "background:#032549;"/>
												</div>
											</form>
										</div>
									<!-- Achievement section ends here -->
									</div>
							</div>
	
						</div>
					</div>
				</div>
					
	<!-- about section starts here -->

	<div id = "about" >
		<div class = "container-fluid about">
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-1 col-md-"></div>
					<div class = "col-sm-10 col-md-10 about-heading">
						<h2>About Us</h2>
						<p>On being asked about his telephone number, Albert Einstein took out his notepad from his pocket and after turning some pages; recided the number. The man before him was astonished and asked him that of course he was so genius why could he just not memorise it as it was his personal number which he needs then and now. Einstein on hearing this gave a very beutiful answer that why need to store those things in our memory which can be easily met by other sources. This very application of virtual files can be used to store, retrive and monitor your personal documents from anywhere and anytime.It's very easy,  secured and feasible mode  to be in contact with your most valuable assets. Morever options regarding amendments is provided to the user, if needed. The much needed necessity of security is also matched via this platform by OTP jurisdiction on your email. The user have full authority of their records and processed data. Though there are are various other modes such as google drive ,dropbox  but this is specially meant for your documents and files. Concentrating on a specific work is worth than engaging yourself with multiple burden.This paltform of your space is very reliable, user friendly and compatible with all types of devices.So do come and secure your valuable docs which would obviously let you to get a foothold in your career.</p>
						<h3><a href = "#" data-toggle = "modal" data-target = "#letUsKnow">Provide Some feedback</a> Suggestions are most welcome</h3>
					</div>
					<div class = "col-sm-1 col-md-1"></div>
				</div>
			</div>
		</div>
	</div>

<!-- about section ends here -->

<!-- faq section starts here -->
	<div id = "faq">
		<div class = "container-fluid faq">
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-12 col-md-12 faq-heading">
						<h2>Frequently Asked Questions</h2>
					</div>	
				</div>
				<div class = "row">
					<div class = "col-sm-6 col-md-6 faq-text">
						<h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> What is Mine Docs?</h3>
						<p>We provide a platform , where you can save all your documents , and can access anytime , anywhere.</p>
					</div>	
					<div class = "col-sm-6 col-md-6 faq-text">
						<h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> Is my docs secure here?</h3>
						<p>Yes It is quite secure , No one can see your Dashboard , untill they haven't your password. your profile is always private.</p>
					</div>	
				</div>
				<div class = "row">
					<div class = "col-sm-6 col-md-6 faq-text">
						<h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> OTP didn't recieved?</h3>
						<p>It may take some time but surely you will recieve an OTP , don't close or refresh the page. If OTP wasn't send to you, it will throw an error, so if you haven't got any error, wait a while. It will come.</p>
					</div>	
					<div class = "col-sm-6 col-md-6 faq-text">
						<h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> My account got autometically logout?</h3>
						<p>Yes Our website uses session..If you aren't active since long, session will expire and you will be redirected to home page.</p>
					</div>	
				</div>
				<h3 id = "faq-bottom">Your query is not listed here <a href = "#" data-toggle = "modal" data-target = "#letUsKnow">Let us know</a></h3>
			</div>
		</div>
	</div>

<!-- faq section ends here -->

<!-- help section starts here -->

	<div id = "help">
		<div class = "container-fluid help">
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-12 col-md-12 help-heading">
						<h2>Where to Start?</h2>
					</div>	
				</div>
			</div>
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-5 col-md-5 help-text">
						<ul>
							<li><i class="glyphicon glyphicon-ok-sign"> </i> Create an account</a></li>
							<li><i class="glyphicon glyphicon-ok-sign"> </i> Let us verify your Email</li>
							<li><i class="glyphicon glyphicon-ok-sign"> </i> Login to your Dashboard</li>
							<li><i class="glyphicon glyphicon-ok-sign"> </i> Choose Category</li>
							<li><i class="glyphicon glyphicon-ok-sign"> </i> Fill your details..whatever you want</li>
							<li><i class="glyphicon glyphicon-ok-sign"> </i> Hit save button</li>
							<li><i class="glyphicon glyphicon-ok-sign"> </i> Congrats! you are all done</li>
						</ul>
					</div>
					<div class = "col-sm-1 col-md-1"></div>
					<div class = "col-sm-5 col-md-5">
						<!--image goes here-->
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--help section ends here-->

<!--contact section starts here-->
	
	<div id = "contact" >
		<div class = "container-fluid contact">
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-12 col-md-12 contact-heading">
						<h2>Contact Us</h2>
					</div>
				</div>
				<div class = "row">
					<div class = "col-sm-6 col-md-6 contact-sub-heading">
						<h2>Contact Information</h2><hr>
						<div class = "contact-text">
							<p>You can get in touch with us with any mode email, phone or contact from. We are always willing to help you. We would love to answer your questions on phone calls. Moreover it will gives us immense pleasure, if you will <a href = "#" data-toggle = "modal" data-target = "#letUsKnow">Let us know</a> If you are facing any issue in our website.</p>
							<p>Phone: +91-9955074864<br>
							Email: no-reply@minedocs.online<br>
							Website: minedocs.online<br>
							<a href = "https://www.facebook.com/minedocs/" target = "_blank" > Facebook Page</a></p>
						</div>
					</p>
					</div>
					<div class = "col-sm-6 col-md-6 contact-sub-heading">
						<h2>Contact Form</h2><hr>
							<form action="include/contactFormDashboard.php" name = "contactForm" method = "POST">
								<div class = "form-group">
									<input type = "text" name = "name" class = "form-control form-index" placeholder = "Your Name (max 30 char)" required onkeyup = "doLimitContactName(this.value)" pattern="[a-zA-Z .]{1,30}" title="Only Alphabets and dots Allowed" value = "<?php echo $row_profile['Name'] ?>" readonly />
								</div>
								<div class = "form-group">
									<input type = "email" name = "email" class = "form-control form-index" placeholder = "Your Email" required pattern = "^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" title = "Invalid email" value = <?php echo $row_profile['Email'] ?> readonly />
								</div>
								<div class = "form-group">
									<input type = "text" name = "mobile" class = "form-control form-index" placeholder = "Mobile(optional)"  pattern="[7-9]{1}[0-9]{9}" title = "Enter valid mobile no"/>
								</div>
								<div class = "form-group ">
									<input type = "text" name = "subject" class = "form-control form-index" placeholder = "Subject (max 100 char)"  required onkeyup = "doLimitSubject(this.value)">
								</div>
								<div class = "form-group ">
									<textarea rows = "5" name = "message" class = "form-control form-index" placeholder = "Fell free to write(max 355 char)"  required onkeyup = "doLimitMessage(this.value);"></textarea>
								</div>
								<div class = "form-group ">
									<input type = "submit" name = "send" class = "btn btn-primary  btn-block btn-lg" value = "Send" style = "background:#032549;"/>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--contact section ends here -->

<!--footer starts here-->
	<div class = "container-fluid footer">
			<div class = "row">
				<div class = "col-sm-12 col-md-12 footer-content">
					<p>&copy; Copyright reserved. Mine Docs 2017 . Designed and mantain by <a href = "https://github.com/kundan-2508" target = "_blank">Kundan Kumar</a></p>
				</div>
			</div>
	</div>
	
<!--footer ends here-->


<!-- popup for let's us know starts here--> 
<div class = "modal fade" id = "letUsKnow">
			<div class = "modal-dialog">
					<div class = "modal-content">
							<!--header starts here-->
							<div class = "modal-header">
								<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
								<h3>We want to hear from you...</h3>
							</div>
							<!--header ends here-->
							<!--body starts here-->
							<div class = "modal-body">
								<form name = "feedbackForm" method = "post" action = "include/feedbackDashboard.php">
									<div class = "form-group"> 
										<input type = "text" name="name" class = "form-control" placeholder = "Your Name (max 30 char)" required pattern="[a-zA-Z .]{1,30}" title="Name" onkeyup="doLimitFeedbackName(this.value);" value = "<?php echo $row_profile['Name'] ?>" readonly/>
									</div>
									<div class = "form-group"> 
										<input type = "email" name="email" class = "form-control" placeholder = "Email" value = "<?php echo $row_profile['Email']?>" readonly required pattern = "^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" title = "email"/>
									</div>
									<div class = "form-group"> 
										<textarea type = "text" name = "txt" rows = '5' class = "form-control" placeholder = "Feel free to write (max 355 char)" required onkeyup="doLimitText(this.value);"></textarea>
									</div>
							</div>
							<!--body ends here-->
							<!--footer starts here-->
									<div class = "modal-footer">
										<input type = "submit" name = "submit" value = "Send" class = "btn btn-primary btn-block"/>
									</div>
							<!--footer ends here-->
							    </form>
					</div>
			</div>
</div>
<!--popup for let's us know ends here--> 

<script>

// custom upload file button

$(document).ready(function(){
	$('#uppic').click(function(){
			$('#profile-img').click();
		});
});

// showing submit button after choosing file

$(document).ready(
    function(){
        $('input:file#profile-img').change(
            function(){
                if ($(this).val()) {
                    $('input:submit#save').css('display','block');
                    // or, as has been pointed out elsewhere:
                    // $('input:submit').removeAttr('disabled'); 
                } 
            }
            );
    });

// preview image

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>



<script>
function upload(e)
{
	var id = "#" + "fileup" + e; // custom button
	var des = "#" + "files" + e; // default button
		$(des).click();	
		
	// image preview
	
	var image = "#" + "profile-img-tag" + e;
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $(image).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
	    $(des).change(function(){
	        readURL(this);
	    });		
}	

</script>

	<!--


This website is designed by

 _                    _               _                               
| |                  | |             | |                              
| | ___   _ _ __   __| | __ _ _ __   | | ___   _ _ __ ___   __ _ _ __ 
| |/ / | | | '_ \ / _` |/ _` | '_ \  | |/ / | | | '_ ` _ \ / _` | '__|
|   <| |_| | | | | (_| | (_| | | | | |   <| |_| | | | | | | (_| | |   
|_|\_\\__,_|_| |_|\__,_|\__,_|_| |_| |_|\_\\__,_|_| |_| |_|\__,_|_|   
                                                                      
   
   
   contact me - kun123658@gmail.com
                                                                      
-->
					
</body>

</html>