<?php

session_start();
define("name", "Mine Docs");
?>
<?php

if(isset($_POST['verifyOtp']))
{
	$OTP = $_POST['otp'];
	if($_SESSION['otp'] != $OTP)
	{
		$_SESSION['error'] = "You have enterd wrong OTP.. try again";
		header("location:resetPassword.php");
		//echo "not match";
		exit();
	}
	
}
else
{
	header("location:forgetpassword.php");
	exit();
}

?>

<?php
/*
if(isset($_SESSION['error']))
{
	echo '
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-1 col-md-1"></div>
					<div class = "col-sm-10 col-md-10" style = "padding:0;margin:0;border:none;background:transparent;font-size:1.4em;">
						<div class = "alert alert-danger alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
							@$_SESSION['error'].'
						</div>
					</div>
					<div class = "col-sm-1 col-md-1"></div>
				</div>
			</div>';
	session_unset($_SESSION['error']);
	session_destroy();
	
}
*/
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
	<link rel="shortcut icon" href="img/.jpg" type="image/jpg" />
	<!--title logo ends here-->
	
	<!--title starts here-->
	<title> <?php echo name;?> - A place to save your Docs </title>
	<!--title endss here-->
	
	<!--custom css starts here-->
	<link rel = "stylesheet" href = "css/style.css" type = "text/css">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all" />
	<!--custom css ends here-->
	
	<!--custom js starts here-->
	<script src = "../js/validate.js" type = "text/javascript"></script>
	<!--custom js ends here-->
	
	<!--SEO starts here-->
	
	<!--SEO ends here-->

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

<br><br><br>
<div class = "container">
	<div class = "row">
		<div class = "col-sm-4 col-md-4"></div>
		<div class = "col-sm-4 col-md-4" style = "background:linen;height:300px;box-sizing:border-box;border:2px solid #ddd;margin:10px;">
			<h2 style = "text-align:center;color:green;">Almost Done... </h2>
			<form name = "newPassword" action = "saveNewPassword.php" method = "POST">
				<label>Choose New Password :</label><br>
				<input type = "password" name = "newPass"  placeholder = "New Password" class = "form-control" onkeyup = "validatePassword();"  required /><br>
				<input type = "password" name = "confirmPass" placeholder = "Confirm Password" class = "form-control" onkeyup = "validatePassword();" required /><span id = "dyn"></span><br>
				<input type = "submit" disabled name = "reset" value = "Save Changes"  class = "btn btn-info btn-block"/><br><br>
			</form>
		</div>
		<div class = "col-sm-4 col-md-4"></div>
	</div>
</div>

</body>



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


</html>