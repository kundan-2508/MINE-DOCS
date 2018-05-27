<?php
session_start();

if(isset($_POST['verify']))
{
	include_once "dbh.inc.php";
	
	$userCode = $_POST['code'];
	if($_SESSION['cap_code'] != $userCode)
	{
		$_SESSION['msg'] = "We are sorry to verify your OTP..you have entered wrong OTP or OTP have expired.";
		header("location:../index.php?wrongOTP");
		unset($_SESSION['u_name']);
		unset($_SESSION['u_email']);
		unset($_SESSION['u_pwd']);
	}
	else if($_SESSION['cap_code'] == $userCode)
	{
		// insert the user into database
			$u_name = $_SESSION['u_name'];
			$u_email = $_SESSION['u_email'];
			$u_pwd = $_SESSION['u_pwd'];
			
			$sql = "INSERT INTO user_details (
				Name  , Email ,Pword,ProfilePic)
				VALUES ('$u_name' , '$u_email' , '$u_pwd',''
			)";
		// insert the profile details
		
			$sql_profile = "INSERT INTO profile_details (
				Name  , DOB , Email ,Mobile , Bio ,BloodGroup,Url , Company , Location)
				VALUES ('$u_name' , '1997-08-25','$u_email','','','','','','')";
		
		// insert the achievement table
			
			$sql_achievement = "INSERT INTO achievement (
				Email ,Achievement_One,Achievement_Two,Achievement_Three)
				VALUES ('$u_email' , '' , '' , ''
			)";
		// inserting the academic details
			
			$sql_academics = "INSERT INTO academics (
				Email ,TenthSchool,TenthBoard,TenthRoll,TenthYear,TenthMarks,TwelveSchool,TwelveBoard,TwelveRoll,TwelveYear,
				TwelveMarks,College,Branch,CollegeRoll,CollegeRegNo,Batch,SGPA)	
				VALUES ('$u_email' , '' , '' , '','','','','','','','','','','','','',''
			)";
		// insereting skills table
			$sql_skills = "INSERT INTO skills (
				Email ,Skills)	
				VALUES ('$u_email' , '')";
				
		// insereting secondary_docs table
			$sql_secondary_docs = "INSERT INTO secondary_docs (
				Email ,Marksheet,AdmitCard,Others)	
				VALUES ('$u_email' , '','','')";
		
		// insereting higher_secondary_docs table
			$sql_higher_secondary_docs = "INSERT INTO higher_secondary_docs (
				Email ,Marksheet,AdmitCard,Others)	
				VALUES ('$u_email' , '','','')";

		// insereting undergrad_docs table
			$sql_undergrad_docs = "INSERT INTO undergrad_docs (
				Email ,Sem_one,Sem_two,Sem_three,Sem_four,Sem_five,Sem_six,Sem_seven,Sem_eight,Others)	
				VALUES ('$u_email' , '','','', '','','', '','','')";
		
		// insereting ekalyan_docs table
			$sql_ekalyan_docs = "INSERT INTO ekalyan_docs (
				Email ,Bonafide,Income,Caste,Residential,Passbook,Others)	
				VALUES ('$u_email' , '','','', '','','')";
				
		// insereting internship_docs table
			$sql_internship_docs = "INSERT INTO internship_docs (
				Email ,Internship_one,Internship_two,Olympiad_one,Olympiad_two)	
				VALUES ('$u_email' , '','','','')";
				
			if(mysqli_query($conn,$sql)) 
			{
				mysqli_query($conn,$sql_profile); 
				mysqli_query($conn,$sql_achievement);
				mysqli_query($conn,$sql_academics) ;
				mysqli_query($conn,$sql_skills) ;
				mysqli_query($conn,$sql_secondary_docs) ;
				mysqli_query($conn,$sql_higher_secondary_docs);
				mysqli_query($conn,$sql_undergrad_docs) ;
				mysqli_query($conn,$sql_ekalyan_docs) ;
				mysqli_query($conn,$sql_internship_docs);
				$to = $_SESSION['u_email'];
				$subject = 'Congratulations!!';
				$body = 'Congratulations!! '.$_SESSION['u_name'].' Your account have been successfully created...Login to website to look your Dashboard.';
				$header = 'From: confirm@minedocs.online';
				mail($to,$subject,$body,$header);
				$_SESSION['msg'] = "<b>Boom !</b> Account creation successful..please login";
				header("location:../index.php?login");
				exit();
			}
			else
			{
				$_SESSION['msg'] = "<b>Oops !</b> Error occured..unable to create account..try again";
				header("location:../index.php?tryagain");
				exit();
			}
				
			
			
			
	}
}
else
{
	header("location:../index.php");
	exit();
}
?>