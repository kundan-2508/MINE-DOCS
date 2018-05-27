<?php

session_start();

if(isset($_POST['upload_secondary']))
{
	include_once "dbh.inc.php";
	$email = $_SESSION['u_email'];
	$files = $_FILES['secondary']; // global variable for files
	$n = count($files['name']); // count total no of files
	$empty = 0; // counting empty files, if empty = total no of files , it means no files are choosen
	
	// index of the choosen files
	#marksheet - 0
	#admitCard - 1
	#Others - 2
	
	$allowed = array('png','jpg','jpeg');
	
	$failed = array(); // storing failed files in failed array..in the begining it is empty
	$description = array('Marksheet','AdmitCard','Others');
	for($i=0;$i<$n;$i++)
	{
		// getting all the variables
		$file_name = $files['name'][$i];
		$file_size = $files['size'][$i];
		$file_error = $files['error'][$i];
		$file_tmp = $files['tmp_name'][$i];
		
		if(!empty($file_name))
		{
			 
			// getting extension of file
			$file_extension = explode('.',$file_name);
			$file_extension = strtolower(end($file_extension));
			if(in_array($file_extension,$allowed))
			{
				if($file_error === 0)
				{
					if($file_size[$i]< 2097152)
					{
						$file_new_name = uniqid('',true).'.'.$file_extension;
						$file_des = "../img/secondary/".$file_new_name;
						if(move_uploaded_file($file_tmp,$file_des))
						{
							switch($i)
							{
								case '0':
									$sql = "UPDATE secondary_docs SET Marksheet = '$file_new_name' WHERE Email = '$email'";
									$res = mysqli_query($conn,$sql);
									if($res>0)
									{
										// nothing
									}
									else
									{
										array_push($failed,$i);
									} 
									break;
								case '1':
									$sql = "UPDATE secondary_docs SET AdmitCard = '$file_new_name' WHERE Email = '$email'";
									$res = mysqli_query($conn,$sql);
									if($res>0)
									{
										// nothing
									}
									else
									{
										array_push($failed,$i);
									} 
									break;
								case '2':
									$sql = "UPDATE secondary_docs SET Others = '$file_new_name' WHERE Email = '$email'";
									$res = mysqli_query($conn,$sql);
									if($res>0)
									{
										// nothing
									}
									else
									{
										array_push($failed,$i);
									} 
									break;
							}
						}
						else
						{
							
							array_push($failed,$i);
						}
					}
					else
					{
						array_push($failed,$i);
					}
				}
				else
				{
					array_push($failed,$i);
				}
			}
			else
			{
				array_push($failed,$i);
			}
		}
		else
		{
			// will store the index of empty file in a array
			$empty++;
		}
	}
	
	if($empty == $n)
	{
		$_SESSION['msg'] = "Please choose atleast a file to upload";
		header("location:../dashboard.php");
		exit();
	}
	else if(count($failed)==$n)
	{
		$_SESSION['msg'] = "Unable to upload..try again..possible reason - only jpg, jpeg, png are allowed and file size should be less than 2MB";
		header("location:../dashboard.php");
		exit();
	}
	else if(count($failed)>0)
	{
		$msg = "";
		for($i=0;$i<count($failed);$i++)
		{
			$msg = $msg.$description[$failed[$i]].' ,';
		}
		$_SESSION['msg'] = $msg." files are failed to upload...possible reason - only jpg, jpeg,  png are allowed and file size should be less than 2MB";
		header("location:../dashboard.php");
		exit();
	}
	else
	{
		$_SESSION['msg'] = "Updated successfully";
		header("location:../dashboard.php");
		exit();
	}
}
else
{
	header("location:../dashboard.php");
	exit();
}