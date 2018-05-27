<?php

include_once "dbh.inc.php";

$query = "CREATE DATABASE id4085485_bitcloud";

@mysqli_query($conn , $query) or die("Oops! something went wrong");

?>