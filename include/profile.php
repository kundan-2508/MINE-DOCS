<?php
session_start();

if(isset($_POST['update_profile']))
{
	// getting variable
	include_once "dbh.inc.php";
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$dob = mysqli_real_escape_string($conn,$_POST['dob']);
	$email = $_POST['email'];
	$mobile = $_POST['mob'];
	$bio = mysqli_real_escape_string($conn,$_POST['bio']);
	$blood = $_POST['bloodGroup'];
	$url = $_POST['url'];
	$company = mysqli_real_escape_string($conn,$_POST['company']);
	$location = mysqli_real_escape_string($conn,$_POST['location']);
	
	// updating details in profile_details table
	
	$sql = "UPDATE profile_details SET Name = '$name' , DOB = '$dob' , Mobile = '$mobile' ,Bio = '$bio' ,BloodGroup = '$blood',
				 Url = '$url' , Company = '$company' , Location = '$location' WHERE Email = '$email'";
	if($res = mysqli_query($conn,$sql))
	{
		if(mysqli_affected_rows($conn)>0)
		{
			$_SESSION['msg'] = "Profile Updated successfully";
		}
		else
		{
			$_SESSION['msg'] = "You have no changes made";
		}
		header("location:../dashboard.php");
	}
	else
	{
		$_SESSION['msg'] = "Unable to update profile..try again";
		header("location:../dashboard.php");
	}
}
else
{
	header("location:../dashboard.php");
}

?>