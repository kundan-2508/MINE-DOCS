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
	<link rel="shortcut icon" href="img/logo.png" type="image/png" />
	<!--title logo ends here-->
	
	<!--title starts here-->
	<title> <?php echo name;?> - A place to save your Docs </title>
	<!--title endss here-->
	
	<!--custom css starts here-->
	<link rel = "stylesheet" href = "css/style2.css" type = "text/css">
	
	<!--custom css ends here-->
	
	<!--custom js starts here-->
	<script src = "js/validate.js" type = "text/javascript"></script>
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


<br><br>

<?php

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
else
{
    // nothing
}
?>

<div class = "container">
	<div class = "row">
		<div class = "col-sm-3 col-md-3"></div>
		<div class = "col-sm-6 col-md-6" style = "background:linen;height:300px;box-sizing:border-box;border:2px solid #ddd;margin:10px;"><br><br>
			<p style = "color:red;font-size:1.3em;text-align:center;">Forget Password ? No worries...</p>
			<p style = "color:#777;font-size:1.3em;text-align:center;">We will send a 4 digit code to your email...</p>
			<form name = "forgetPassword" method = "post" class = "form-group" action = "resetPassword.php">
				<input type = "email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name = "forgetEmail" class = "form-control" placeholder = "Enter your email"  style = "text-align:center"/>
				<br>
				<input type = "submit" name = "sendCode" class = "btn btn-info btn-block" value = "Send Code" class = "form-control"/>
				
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

