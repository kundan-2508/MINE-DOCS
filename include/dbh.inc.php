<?php

$dbServername = "minedocs";
$dbUsername = "minedocs_admin";
$dbPassword = "testpassword@123";
$dbName = "";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword);
mysqli_select_db($conn,$dbName);

?>
