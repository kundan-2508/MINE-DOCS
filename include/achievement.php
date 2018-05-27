<?php
session_start();



if(isset($_POST['update_achievement']))
{
	// establishing database connection
		include_once "dbh.inc.php";
	$email = $_SESSION['u_email'];
	$achievement_one = mysqli_real_escape_string($conn,$_POST['achievement_one']);
	$achievement_two = mysqli_real_escape_string($conn,$_POST['achievement_two']);
	$achievement_three = mysqli_real_escape_string($conn,$_POST['achievement_three']);
	
	// updating details in profile_details table
	
	$sql = "UPDATE achievement SET Achievement_One = '$achievement_one' , Achievement_Two = '$achievement_two'
			, Achievement_Three = '$achievement_three' WHERE Email = '$email'";
	if($res = mysqli_query($conn,$sql))
	{
		
		if(mysqli_affected_rows($conn))
		{
			$_SESSION['msg'] = "Achievements Updated successfully";
			header("location:../dashboard.php");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "You have no changes made";
			header("location:../dashboard.php");
			exit();
		}
		
	}
	else
	{
		$_SESSION['msg'] = "Unable to update Achievements..try again";
		header("location:../dashboard.php");
		exit();
	}
}
else
{
	header("location:../dashboard.php");
	exit();
}