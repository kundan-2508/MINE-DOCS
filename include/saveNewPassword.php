<?php

session_start();
define("name", "Mine Docs");

?>


<?php

	if(isset($_POST['reset']))
		{
			include "dbh.inc.php";
			
			$newPass = $_POST['newPass'];
			
					$pwd = sha1($newPass); 
					$email = $_SESSION['update_pwd_email'];
					$sql = "UPDATE user_details SET Pword = '$pwd' WHERE Email = '$email'";
					$result = mysqli_query($conn,$sql);
					if($result>0)
					{
						$_SESSION['msg'] = "Your Password have been successfully changed";
						
						$to = $_SESSION['update_pwd_email'];
						$subject = 'Congratulations!!';
						$body = 'Congratulations!! You have successfully changed your password in Mine Docs..login to see your Dashboard. ';
						$header = 'From: confirm@minedocs.online';
						@mail($to,$subject,$body,$header);
						
						
						header("location:../index.php");
						exit();
					}
					else
					{
						$_SESSION['error'] = "Unable to reset Password...try again";
						header("location:forgetpassword.php");
						exit();
					}

		}
	else
		{
			header("location:forgetpassword.php");
			exit();
		}

?>