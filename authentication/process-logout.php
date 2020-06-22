<?php
  session_start();
  //to destroy all the array
  session_destroy(); //or
  //unset($_SESSION['username']); //the difference here is unset only destroy specific session

  header('Location: login.php')
 ?>
