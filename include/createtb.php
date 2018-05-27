<?php

include_once "dbh.inc.php";

$query = "CREATE TABLE user_details(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(30) NOT NULL,
	Email VARCHAR(100) UNIQUE NOT NULL,
	Pword CHAR(40) NOT NULL,
	ProfilePic VARCHAR(100),
	RegisteredOn TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$query_profile_details = "CREATE TABLE profile_details(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(30) NOT NULL,
	DOB DATE,
	Email VARCHAR(100) NOT NULL,
	Mobile CHAR(10) ,
	Bio TEXT ,
	BloodGroup VARCHAR(10),
	Url VARCHAR(200),
	Company VARCHAR(200),
	Location VARCHAR(200)	
)";

$query_achievement = "CREATE TABLE achievement(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	Achievement_One TEXT,
	Achievement_Two TEXT,
	Achievement_Three TEXT
)";
$query_academics = "CREATE TABLE academics(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	TenthSchool VARCHAR(200),
	TenthBoard VARCHAR(200),
	TenthRoll VARCHAR(50),
	TenthYear CHAR(4),
	TenthMarks VARCHAR(10),
	TwelveSchool VARCHAR(200),
	TwelveBoard VARCHAR(200),
	TwelveRoll VARCHAR(50),
	TwelveYear CHAR(4),
	TwelveMarks VARCHAR(10),	
	College VARCHAR(200),
	Branch VARCHAR(100),
	CollegeRoll VARCHAR(10),
	CollegeRegNo VARCHAR(20),
	Batch CHAR(4),
	SGPA VARCHAR(10)
)";

$query_skills = "CREATE TABLE skills(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	Skills TEXT
)";

$query_secondary_education = "CREATE TABLE secondary_docs(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	Marksheet VARCHAR(200),
	AdmitCard VARCHAR(200),
	Others VARCHAR(200)
)";
$query_higher_secondary_education = "CREATE TABLE higher_secondary_docs(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	Marksheet VARCHAR(200),
	AdmitCard VARCHAR(200),
	Others VARCHAR(200)
)";

$query_undergrad_education = "CREATE TABLE undergrad_docs(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	Sem_one VARCHAR(200),
	Sem_two VARCHAR(200),
	Sem_three VARCHAR(200),
	Sem_four VARCHAR(200),
	Sem_five VARCHAR(200),
	Sem_six VARCHAR(200),
	Sem_seven VARCHAR(200),
	Sem_eight VARCHAR(200),
	Others VARCHAR(200)
)";
$query_ekalyan = "CREATE TABLE ekalyan_docs(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	Bonafide VARCHAR(200),
	Income VARCHAR(200),
	Caste VARCHAR(200),
	Residential VARCHAR(200),
	Passbook VARCHAR(200),
	Others VARCHAR(200)
)";
$query_internship = "CREATE TABLE internship_docs(
	Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(100) NOT NULL,
	Internship_one VARCHAR(200),
	Internship_two VARCHAR(200),
	Olympiad_one VARCHAR(200),
	Olympiad_two VARCHAR(200)
)";

mysqli_query($conn,$query_profile_details) or die("Oops! something went wrong");
mysqli_query($conn,$query) or die("Oops! something went wrong");
mysqli_query($conn,$query_achievement) or die("Oops! something went wrong");
mysqli_query($conn,$query_academics) or die("Oops! something went wrong");
mysqli_query($conn,$query_skills) or die("Oops! something went wrong");
mysqli_query($conn,$query_secondary_education) or die("Oops! something went wrong");
mysqli_query($conn,$query_higher_secondary_education) or die("Oops! something went wrong");
mysqli_query($conn,$query_undergrad_education) or die("Oops! something went wrong");
mysqli_query($conn,$query_ekalyan) or die("Oops! something went wrong");
mysqli_query($conn,$query_internship) or die("Oops! something went wrong");




?>
