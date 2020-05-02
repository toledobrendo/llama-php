<?php
  require_once('message.php'); //this is a mandatory importation of a file. it will show an fatal error if not found. also, it cannot be suppressed unlike include()
?>
  <?php
    require_once('view-comp/header.php');

    echo $message;

    require_once('view-comp/footer.php')
   ?>

</html>
