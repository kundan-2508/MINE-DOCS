<?php

session_start();
if(isset($_POST['update_academics']))
{
	include_once "dbh.inc.php";
	
	$email = $_SESSION['u_email'];
	$schoolTen = mysqli_real_escape_string($conn,$_POST['tenthSchool']);
	$boardOfTen = mysqli_real_escape_string($conn,$_POST['boardOfTen']);
	$tenRoll = mysqli_real_escape_string($conn,$_POST['tenthRoll']);
	$yearOfTen = mysqli_real_escape_string($conn,$_POST['yearOfTen']);
	$marksOfTen = mysqli_real_escape_string($conn,$_POST['marksOfTen']);
	$schoolOfTwelve = mysqli_real_escape_string($conn,$_POST['schoolOfTwelve']);
	$boardOfTwelve = mysqli_real_escape_string($conn,$_POST['boardOfTwelve']);
	$twelveroll = mysqli_real_escape_string($conn,$_POST['twelveRoll']);
	$yearOfTwelve = mysqli_real_escape_string($conn,$_POST['yearOfTwelve']);
	$marksOfTwelve = mysqli_real_escape_string($conn,$_POST['marksOfTwelve']);
	$college = mysqli_real_escape_string($conn,$_POST['college']);
	$branch = mysqli_real_escape_string($conn,$_POST['branch']);
	$collegeRoll = mysqli_real_escape_string($conn,$_POST['collegeRoll']);
	$collegeRegNo = mysqli_real_escape_string($conn,$_POST['collegeRegNo']);
	$batch = mysqli_real_escape_string($conn,$_POST['batch']);
	$sgpa = mysqli_real_escape_string($conn,$_POST['sgpa']);
	
	// updating academics table
	
	$sql = "UPDATE academics SET TenthSchool = '$schoolTen' , TenthBoard = '$boardOfTen',TenthRoll = '$tenRoll',
			TenthYear = '$yearOfTen', TenthMarks = '$marksOfTen', TwelveSchool = '$schoolOfTwelve' ,
			TwelveBoard = '$boardOfTwelve' ,TwelveRoll = '$twelveroll', TwelveYear = '$yearOfTwelve' ,TwelveMarks = '$marksOfTwelve',
			College = '$college' , Branch = '$branch' ,CollegeRoll = '$collegeRoll',CollegeRegNo = '$collegeRegNo', Batch = '$batch' , SGPA = '$sgpa' WHERE Email = '$email'";
			
	if($res = mysqli_query($conn,$sql))
	{
		
		if(mysqli_affected_rows($conn))
		{
			$_SESSION['msg'] = "Academic details Updated successfully";
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
		$_SESSION['msg'] = "Unable to update Academic Details..try again";
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