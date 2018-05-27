<?php

session_start();

define("name", "Mine Docs");

?>


<?php

if(isset($_POST['sendCode']))
{
	include "dbh.inc.php";
	$email = trim(mysqli_real_escape_string($conn , $_POST['forgetEmail']));
	//echo $email;
	
	$sql = "SELECT *FROM user_details WHERE Email = '$email'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);
	//echo $row;
	if($row == 0)
	{
		$_SESSION['error'] = "Sorry We couldn't found any record of your Email";
		header("location:forgetpassword.php");
		exit();
	}
	else if ($row == 1)
	{
		$code = rand(1111,9999);
		$to = $email;
		$subject = 'OTP from Mine Docs ';
		$body = 'OTP to reset your password is '.$code.' Dont\'t share it with anyone,Keep it confidential';
		$header = 'From: no-reply@minedocs.online';
		//echo $code;
		mail($to,$subject,$body,$header);
		$_SESSION['otp'] = $code;
		$_SESSION['update_pwd_email'] = $email;
	}
}
else
{
	// some code
	header("location:forgetpassword.php");
	exit();
}

?>

<?php
/*
if(isset($_SESSION['wrongOTP']))
{
	echo '
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-1 col-md-1"></div>
					<div class = "col-sm-10 col-md-10" style = "padding:0;margin:0;border:none;background:transparent;font-size:1.4em;">
						<div class = "alert alert-danger alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
							@$_SESSION['wrongOTP'].'
						</div>
					</div>
					<div class = "col-sm-1 col-md-1"></div>
				</div>
			</div>';
	session_unset($_SESSION['wrongOTP']);
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
	<link rel="shortcut icon" href="img/logo.png" type="image/png" />
	<!--title logo ends here-->
	
	<!--title starts here-->
	<title> <?php echo name;?> - A place to save your Docs </title>
	<!--title endss here-->
	
	<!--custom css starts here-->
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all" />
	<!--custom css ends here-->
	
	<!--custom js starts here-->
	
	<!--custom js ends here-->
	
	<!--SEO starts here-->
	
	<!--SEO ends here-->
</head>

<body>
	<br><br><br>
<div class = "container">
	<div class = "row">
		<div class = "col-sm-4 col-md-4"></div>
		<div class = "col-sm-4 col-md-4" style = "background:linen;height:300px;box-sizing:border-box;border:2px solid #ddd;margin:10px;"><br><br>
			<form action = "createNewPassword.php" method = "POST">
				<label>We have sent a 4 digit verification code on <b><i><?php echo $email ?></b></i></label><br>
				<p>Sometimes It may takes more than a minute...don't close or refresh the page.. </p>
				<input type = "text" name = "otp" placeholder = "Enter Code" class = "form-control" required/><br>
				<input type = "submit" name = "verifyOtp" value = "verify" class = "btn btn-info btn-block"/><br><br>
			</form>
		</div>
		<div class = "col-sm-4 col-md-4"></div>
	</div>
</div>

</body>


</html>