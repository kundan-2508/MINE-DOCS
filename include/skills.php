<?php
session_start();

if(isset($_POST['update_skills']))
{
	include_once "dbh.inc.php";
	
	$skills = implode(',',$_POST['skills']);
	
	// updating skills table
	
	$email = $_SESSION['u_email'];
	
	$sql = "UPDATE skills SET Skills = '$skills' WHERE Email = '$email'";
	if($res = mysqli_query($conn,$sql))
	{
		if(mysqli_affected_rows($conn))
		{
			$_SESSION['msg'] = "Skills Updated successfully";
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
		$_SESSION['msg'] = "Unable to update Skills..try again";
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