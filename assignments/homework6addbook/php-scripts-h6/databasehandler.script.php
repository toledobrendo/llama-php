<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "php_lesson_db";


$connection = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$connection){
  die("Connection failed: ".mysqli_connect_error());
}
