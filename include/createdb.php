<?php

include_once "dbh.inc.php";

$query = "CREATE DATABASE minedocs";

@mysqli_query($conn , $query) or die("Oops! something went wrong");

?>
