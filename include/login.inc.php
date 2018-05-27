<?php

session_start();

if(isset($_POST['login']))
{
	include_once "dbh.inc.php";
	
	$email = trim(mysqli_real_escape_string($conn,$_POST['email']));
	$pwd = $_POST['password'];
	
	// error handler
	if(empty($email) || empty($pwd))
	{
		$_SESSION['msg'] = "Please fill the all the fields";
		header("location:../index.php?login=empty");
		exit();
	}
	else
	{
		
		$sql = "SELECT *FROM user_details WHERE Email = '$email' ";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1)
		{
			$_SESSION['msg'] = "It seems like You have not registered with us..Please SignUp";
			header("location:../index.php?login=emailNotExist");
			exit();
		}
		else
		{
			if($row = mysqli_fetch_assoc($result))
			{
				// De-hashing the password
				//$hashedPwdCheck = password_verify($pwd,$row[5]);
				$hashedPwdCheck = sha1($pwd);
				if($hashedPwdCheck != $row['Pword'])
				{
					$_SESSION['msg'] = " Ooops! Wrong Password";
					header("location:../index.php?login=wrongPassword");
					exit();
				}
				else if($hashedPwdCheck == $row['Pword'])
				{
					$_SESSION['u_id'] = $row['Id'];
					$_SESSION['u_name'] = $row['Name'];
					$_SESSION['u_email'] = $row['Email'];
					$_SESSION['u_pwd'] = $row['Pword'];
					header("location:../dashboard.php?".$_SESSION['u_name']);
					exit();
				}
			}
			
		}
	}
}
else
{
	header("location:../index.php");
	exit();
}

?>