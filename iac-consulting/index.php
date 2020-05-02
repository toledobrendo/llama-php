<?php
  // include ('message.php'); //means pwede mawala yung file
  require_once('script.php'); //ensures isang beses lang ma import yung class or function.
  // //or include 'message.php'
  //
  // require 'message.php';

  require_once('message.php');
  require_once('view-comp/header.php')
 ?>

      	<?php
      	echo $message;
        $isValid = true;
      	?>

        <?php if($isValid){ ?>
          <strong>This is valid.</strong>

        <?php }?>

        <?php
      	  require_once('view-comp/footer.php')
      	?>
