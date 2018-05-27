<?php
session_start();

if(isset($_POST['signup']))
{
	include_once "dbh.inc.php";
	$name = ucwords(strtolower(trim(mysqli_real_escape_string($conn,$_POST['name']))));
	$email = trim(mysqli_real_escape_string($conn,$_POST['email']));
	$pwd = $_POST['password'];

	
	// error handlers
	
	if(empty($name) || empty($email) || empty($pwd))
	{
		$_SESSION['msg'] = "Please fill all the fields";
		header("location:../index.php?fillAlltheFields");
		exit();
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$_SESSION['msg'] = "Notice! Alphabet and space are allowed in Name";
			header("location:../index.php?signup=invalidName");
			exit();
			
		}
		else
		{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$_SESSION['msg'] = "<b>Invalid email</b>";
				header("location:../index.php?signup=invalidEmail");
				exit();
			}
			else
			{
				$sql = "SELECT * FROM user_details WHERE Email = '$email'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck > 0)
				{
					$_SESSION['msg'] = "It seems like You have already registered with us..please Login";
					header("location:../index.php?signup=emailAlreadyExist");
					exit();
				}
				else
				{
					// making user details as global variable	
					$_SESSION['u_name'] = $name;
					$_SESSION['u_email'] = $email;
					$_SESSION['u_pwd'] = sha1($pwd);

					header("location:verify.php");
					/*
					// hashing the password
					//$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
					$hashedPwd = sha1($pwd);
					// insert teh user into database
					$sql = "INSERT INTO user_details (
						Name  , Email ,Pword)
						VALUES ('$name' , '$email' , '$hashedPwd'
					)";
					mysqli_query($conn,$sql);
					$_SESSION['msg'] = "<b>Boom !</b> Account creation successful..please login";
					header("location:../index.php?login");
					exit();*/
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