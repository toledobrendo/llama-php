<?php
  // include 'message.php';
  require_once('script.php');
  require_once('message.php');
  require_once('view-comp/header.php');
?>
<?php
  echo @ $message;
  echo $_SERVER['REQUEST_URI'];
  $isValid = false;
?>
<?php if($isValid) { ?>
  <strong>This is valid.</strong>
<?php } ?>
<?php
  require_once('view-comp/footer.php');
?>
