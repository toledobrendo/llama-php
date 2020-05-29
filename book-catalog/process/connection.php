<?php

$server = "localhost";
$dbuser = "gtech.dp";
$dbpass = "dp";
$dbname = "testdp";

$conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

 ?>
