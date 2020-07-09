<?php
@ $db = new mysqli('localhost', 'root', '', 'bookcatalog');

$dbError = mysqli_connect_errno();
if ($dbError) {
  throw new Exception('Error: Could not connect to database. Please try again later.');
}

 ?>
