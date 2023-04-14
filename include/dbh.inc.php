<?php

$dbServername = "minedocs.mysql.database.azure.com";
$dbUsername = "minedocs_admin";
$dbPassword = "testpassword@123";
$dbName = "minedocs";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword);
mysqli_select_db($conn,$dbName);

?>
