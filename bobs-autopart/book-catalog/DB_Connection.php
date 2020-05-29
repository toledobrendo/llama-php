<?php


@$db = new mysqli('localhost', 'root', '', 'php_lesson_db');



    $dbError = mysqli_connect_errno();
    if ($dbError) {
      throw new Exception('Error: Could not connect to database. '.
        'Please try again later. '.$dbError, 1);
    }
 ?>
