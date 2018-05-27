<?php

session_start();

if(isset($_POST['submit']))
{
	// storing data from user
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['txt'];
	
	// sending mail
	
	$to = no-reply@minedocs.online';
	$subject = 'Feedback';
	$body = $msg;
	$header = 'From:'.$name.'<'.$email.'>';
		
		// if mail sent successfully
		
		if(mail($to,$subject,$body,$header))
		{
			$_SESSION['msg'] = "Thankyou for contacting us..will respond you soon";
		}
		else
		{
			$_SESSION['msg'] = "Sorry! Unable to send...try again";
		}
	
	// directing index page and showing messsage
	header("location:../dashboard.php?".$_SESSION['u_name']);
}
else
{
	header("location:../dashboard.php?".$_SESSION['u_name']);
}

?>