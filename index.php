<?php

session_start();
define("name", "Mine Docs");

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
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
	<title> <?php echo name;?> - A place to save your Docs </title>
	<!--title endss here-->
	
	<!--custom css starts here-->
	<link href = "css/style.css" rel = "stylesheet" type = "text/css"/> <!--navbar-->
	<link href = "css/style1.css" rel = "stylesheet" type = "text/css"/> <!--index-->
	<link href = "css/form.css" rel = "stylesheet" type = "text/css"/> <!--index-->
	<!--custom css ends here-->
	
	<!--custom js starts here-->
	<script src = "js/validate.js" type = "text/javascript"></script>
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
	
</head>

<body>

<!--navbar starts here-->
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
			<a href = "index.php" class = "navbar-brand" ><?php echo name ?></a>
		</div>
		<div class = "col-sm-1 col-md-1"></div>
		
		<div class = "collapse navbar-collapse" id = "mainNavBar">
			
			<ul class = "nav navbar-nav">
				<li><a href = "#about" class = "slide-section"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
				<li><a href = "#contact"  class = "slide-section"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact us</a></li>
				<li><a href = "#faq"  class = "slide-section"><i class="fa fa-question-circle" aria-hidden="true"></i> Faq's</a></li>
				<li><a href = "#help"  class = "slide-section"><i class="fa fa-flag" aria-hidden="true"></i> Help</a></li>
				<li><a href = "#"  class = "slide-section" data-toggle = "modal" data-target = "#popupwindow"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
			</ul>		
		</div>					
	</div>
</nav>

<!--navbar ends here-->
<?php

// checking for any error  

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
	session_unset($_SESSION['msg']);
	session_destroy();
}
else
{
	//nothing will show
}
?>
	<!-- popup window starts here -->


	<div class = "modal fade" id = "popupwindow">
		<div class = "modal-dialog">
			<div class = "modal-content">
				<div class="container">
					<div class = "row">
							
							<div class = "col-sm-6 col-md-6 toggleForm">
								<button type = "button" class = "close" data-dismiss = "modal" style = "margin-top:18px;font-size:30px;">&times;</button>
								
								<h2 class = "heading"> Welcome in <?php echo name;?></h2>
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#signup">Signup</a></li>
									<li><a data-toggle="tab" href="#login">Login</a></li>
								</ul>

								<div class="tab-content">
									<div id="signup" class="tab-pane fade in active">
										<form name = "signUpForm" action = "include/signup.inc.php" method = "POST">
											<br>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
												<input type="text" class="form-control loginForm" name="name" placeholder="Your Name" onkeyup="doLimitName(this.value);" required pattern="[a-zA-Z .]{1,30}" title="Only Alphabets and dots Allowed"/>
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
												<input type="text" class="form-control loginForm" name="email"
												placeholder="Your Email" required  title = "please enter a valid email"/>
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
												<input type="password" class="form-control loginForm" name="password" placeholder="Your Password" onkeyup="doLimitPass(this.value);" required />
											</div>	
											<br>
											<input type="submit" class="btn btn-info form-control loginForm-btn" name = "signup" value="Create an account">
											<br>
											<div class = "checkbox">
											By signing up you agree to our <a href = "#">Terms of Service </a>and <a href = "#">Privacy Policy</a>
											</div>
										</form>
									</div>
									<div id="login" class="tab-pane fade">
										<br>
										<form action = "include/login.inc.php" method = "POST" name = "loginForm">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
												<input id="email" type="text" class="form-control loginForm" name="email" placeholder="Your Email" required />
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
												<input id="pass" type="password" class="form-control loginForm" name="password" placeholder="Your Password" required />
											</div>
											<br>
											<div class="checkbox">
												<label><input type="checkbox" name="remember" style = "margin-right:5px;" value = "1"> Remember me</label>
												<a href = "include/forgetpassword.php" style = "float:right;margin-right:15px;">Forget password?</a>
											</div>
											<br>
											<input type="submit" class="btn btn-info form-control loginForm-btn" name = "login" value="Log In"/>
											<br>
											<div class = "checkbox">
											By signing up you agree to our <a href = "#">Terms of Service </a>and <a href = "#">Privacy Policy</a>
											</div>
										</form>
									</div>
								</div>
							</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<!-- popup window starts here -->

<!-- intro starts here-->

<div class = "container-fluid intro">
	<div class = "container intro-text">
			<h1><?php echo name ?></h1>
			<h3>A place to save your Docs</h3>
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
						<p>We provide a platform , where you can save  all your documents , and can access anytime , anywhere.</p>
					</div>	
					<div class = "col-sm-6 col-md-6 faq-text">
						<h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> Is my docs secure here?</h3>
						<p>Yes It is quite secure , No one can see your Dashboard , untill they haven't your password. your profile is always private. </p>
					</div>	
				</div>
				<div class = "row">
					<div class = "col-sm-6 col-md-6 faq-text">
						<h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> OTP didn't recieved?</h3>
						<p>It may take some time but surely you will recieve an OTP , don't close or refresh the page. If OTP wasn't send to you, it will throw an error, so if you haven't got any error, wait a while. It will come.</p>
					</div>	
					<div class = "col-sm-6 col-md-6 faq-text">
						<h3><i class="fa fa-question-circle-o" aria-hidden="true"></i> My account got automatically logout?</h3>
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
							<li><i class="glyphicon glyphicon-ok-sign"> </i><a href = "#" data-toggle = "modal" data-target = "#popupwindow"> Create an account</a></li>
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
						<!--form goes here-->
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--help section ends here-->
	

<script>

</script>

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
							<p>You can get in touch with us with any mode via email, phone or contact form. We are always willing to help you. We would love to answer your questions on phone calls. Moreover it will gives us immense pleasure, if you will <a href = "#" data-toggle = "modal" data-target = "#letUsKnow">Let us know</a> If you are facing any issue in our website.</p>
							<p>Phone: +91-9955074864<br>
							Email: no-reply@minedocs.online<br>
							Website: minedocs.online<br>
							<a href = "https://www.facebook.com/minedocs/" target = "_blank"> Facebook Page</a></p>
						</div>
					</p>
					</div>
					<div class = "col-sm-6 col-md-6 contact-sub-heading">
						<h2>Contact Form</h2><hr>
							<form action="include/contactForm.php" name = "contactForm" method = "POST">
								<div class = "form-group">
									<input type = "text" name = "name" class = "form-control form-index" placeholder = "Your Name (max 30 char)" required onkeyup = "doLimitContactName(this.value)" pattern="[a-zA-Z .]{1,30}" title="Only Alphabets and dots Allowed"/>
								</div>
								<div class = "form-group">
									<input type = "email" name = "email" class = "form-control form-index" placeholder = "Your Email" required pattern = "^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" title = "Invalid email "/>
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
									<input type = "submit" name = "send" class = "btn btn-primary  btn-block btn-lg" value = "Send" style = "background:#032549;" />
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
					<p>&copy; Copyright reserved. <?php echo name;?> 2017 . Designed and mantain by <a href = "https://www.hackerrank.com/kundan_2508" target = "_blank">Kundan Kumar</a></p>
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
								<form name = "feedbackForm" method = "post" action = "include/feedback.php">
									<div class = "form-group"> 
										<input type = "text" name="name" class = "form-control" placeholder = "Your Name (max 30 char)" required pattern="[a-zA-Z .]{1,30}" title="Only Alphabets and dots Allowed" onkeyup="doLimitFeedbackName(this.value);" />
									</div>
									<div class = "form-group"> 
										<input type = "email" name="email" class = "form-control" placeholder = "Email" required pattern = "^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" title = "Invalid email"/>
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