<?php
  define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

  function saveOrder($username, $password, $name, $email, $contact) {
    echo '<br/>'.DOCUMENT_ROOT;

    $date = date('H:i, jS F Y');

    $outputString = $date."\t\n"
      ."User: ".$username."\t\n"
      ."Pass: ".$password."\t\n"
      ."Name: ".$name."\t\n"
      ."Email: ".$email."\t\n"
      ."Contact: ".$contact."\t\n";

    $file = @ fopen(DOCUMENT_ROOT.'/llama-php/llama-php/eccom_finals/txt/registry.txt', 'ab');

    if (!$file) {
      echo '<p><strong>Your order could not be processed at this time.
        Please try again later.</strong></p>';
    } else {
      flock($file, LOCK_EX);
      fwrite($file, $outputString, strlen($outputString));
      flock($file, LOCK_UN);

      fclose($file);
    }
  }
  ?>
