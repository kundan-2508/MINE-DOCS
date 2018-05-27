<?php

session_start();

if(isset($_POST['upload_ekalyan']))
{
	include_once "dbh.inc.php";
	$email = $_SESSION['u_email'];
	$files = $_FILES['ekalyan']; // global variable for files
	$n = count($files['name']); // count total no of files
	$empty = 0; // counting empty files, if empty = total no of files , it means no files are choosen
	
	// index of the choosen files
	#Bonafide - 0
	#Income - 1
	#Caste - 2
	#Residential - 3
	#Passbook - 4
	#Others - 5
	
	
	$allowed = array('png','jpg','jpeg');
	
	$failed = array(); // storing failed files in failed array..in the begining it is empty
	$description = array('Bonafide','Income','Caste','Residential','Passbook','Others');
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
						$file_des = "../img/ekalyan/".$file_new_name;
						if(move_uploaded_file($file_tmp,$file_des))
						{
							switch($i)
							{
								case '0':
									$sql = "UPDATE ekalyan_docs SET Bonafide = '$file_new_name' WHERE Email = '$email'";
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
									$sql = "UPDATE ekalyan_docs SET Income = '$file_new_name' WHERE Email = '$email'";
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
									$sql = "UPDATE ekalyan_docs SET Caste = '$file_new_name' WHERE Email = '$email'";
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
								case '3':
									$sql = "UPDATE ekalyan_docs SET Residential = '$file_new_name' WHERE Email = '$email'";
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
								case '4':
									$sql = "UPDATE ekalyan_docs SET Passbook = '$file_new_name' WHERE Email = '$email'";
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
								case '5':
									$sql = "UPDATE ekalyan_docs SET Others = '$file_new_name' WHERE Email = '$email'";
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