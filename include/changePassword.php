<?php

session_start();

if(isset($_POST['changePassword']))
{
	include_once "dbh.inc.php";
	$newPass = $_POST['newPass'];
	$email = $_SESSION['u_email'];
	
	// updating the password
	
	$pwd = sha1($newPass); 
	$sql = "UPDATE user_details SET Pword = '$pwd' WHERE Email = '$email'";
	
	if($result = mysqli_query($conn,$sql))
	{
		if(mysqli_affected_rows($conn))
		{
			$_SESSION['msg'] = "Your Password have been successfully changed";
			header("location:../dashboard.php");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "Your new password is same as old password..choose another";
			header("location:../dashboard.php");
			exit();
		}
		
	}
	else
	{
		header("location:../dashboard.php");
		exit();
	}
}
else
{
	header("location:../dashboard.php");
	exit();
}


?>