<?php

session_start();
define("name", "Mine Docs");
?>
<?php
		$code = rand(1111,9999);
		$to = $_SESSION['u_email'];
		$subject = 'OTP from Mine Docs';
		$body = 'Dear '.$_SESSION['u_name'].' OTP to register your account in Mine Docs is '. $code.' Don\'t share it with anyone..keep it confidential.';
		$header = 'From: no-reply@minedocs.online';
		
		if(mail($to,$subject,$body,$header))
		{
			$_SESSION['cap_code'] = $code;
		}
		else
		{
			$_SESSION['msg'] = "Unable to send OTP...try again";
			header("location:../index.php");
			exit();
		}
		
		
		
		
?>
<?php
if(!isset($_SESSION['cap_code']) || !isset($_SESSION['u_email']) || !isset($_SESSION['u_name']) || !isset($_SESSION['u_pwd']))
{
	header("location:../index.php");
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
		<div class = "col-sm-3 col-md-3"></div>
		<div class = "col-sm-6 col-md-6" style = "background:linen;height:300px;box-sizing:border-box;border:2px solid #ddd;margin:10px;"><br><br>
			<form action = "success.php" method = "POST">
				<label>We have sent a 4 digit verification code on <b><i><?php echo $_SESSION['u_email'] ?></b></i></label><br>
				<p>It may take more than a minute , don't close or refresh the page.</p>
				Enter OTP : 
				<input type = "text" name = "code" placeholder = "Enter Code" class = "form-control" required /><br>
				<input type = "submit" name = "verify" value = "verify" placeholder = "captcha" class = "btn btn-info btn-block"/><br><br>
			</form>
		</div>
		<div class = "col-sm-3 col-md-3"></div>
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