<?php
@$db = new mysqli('127.0.0.1:3306', 'kean', 'kean', 'php_lesson_db');
$dbError = mysqli_connect_errno();
if($dbError){
  throw new Exception('Error: could not connect to the database.');
}
?>
