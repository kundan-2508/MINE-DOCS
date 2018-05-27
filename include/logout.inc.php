<?php


if(isset($_POST['logout']))
{
	session_start();
	session_unset();
	$_SESSION['msg'] = "You have successfully logged out";
	header("location:../index.php");
	exit();
}
else
{
	header("location:../index.php");
	exit();
}
?>