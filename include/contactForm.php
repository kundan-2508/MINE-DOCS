<?php
session_start();
if(isset($_POST['send']))
{
	// storing variable from contact form
	
	$name = ucwords(strtolower(trim($_POST['name'])));
	$email = trim($_POST['email']);
	$mob = trim($_POST['mobile']);
	$sub = trim($_POST['subject']);
	$msg = trim($_POST['message']);
	
	// sending mail 
	$to = 'no-reply@minedocs.online';
	$subject = $sub.'\n'.$mob;
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
	header("location:../index.php");
}
else
{
	header("location:../index.php");
}

?>