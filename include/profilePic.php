<?php

session_start();


if(isset($_POST['upload']))
{
	
	include_once "dbh.inc.php";
	$email = $_SESSION['u_email'];
	$whitelist = array("jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["pic"]["name"]);
	$extension = end($temp);
	if((isset($_FILES['pic'])) && ($_FILES['pic']['size']>0))
	{
		if((($_FILES["pic"]["type"] == "image/jpeg")
		||($_FILES["pic"]["type"] == "image/jpg")
		||($_FILES["pic"]["type"] == "image/x-png")
		||($_FILES["pic"]["type"] == "image/png"))
		&& in_array($extension, $whitelist)
			)
			{
				$tmp = $_FILES['pic']['tmp_name'];
				if(is_uploaded_file($tmp))
					{
						$pic = $_FILES['pic']['name'];
						$rname = getRand().'-'.$pic;
						$desc = "../img/users/".$rname;
						if(move_uploaded_file($tmp,$desc))
						{
							$sql_update_profile = "UPDATE user_details SET ProfilePic = '$rname' WHERE Email = '$email'";
							$res = mysqli_query($conn,$sql_update_profile);
							if($res>0)
							{
								$_SESSION['msg'] = "Profile pic updated Successfully";
								header("location:../dashboard.php");
							}
							else
							{
								$_SESSION['msg'] = "Unable to Upload";
								header("location:../dashboard.php");
							}
						}
					}
				else
				{
					$_SESSION['msg'] = "Unable to Upload";
					header("location:../dashboard.php");
				}
			}
		else
			{
				$_SESSION['msg'] =  "Inavlid extension..only jpg , png are allowed.";
				header("location:../dashboard.php");
			}
		
		
	}
	else
	{
		$_SESSION['msg'] = "Unable to Upload..path of file is not correct.";
		header("location:../dashboard.php");
	}
}
else
{
	header("location:../dashboard.php");
}

function getRand()
	{
		$str = str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
		return md5(@crypt(sha1(substr($str,0,20),true)));
	}


?>