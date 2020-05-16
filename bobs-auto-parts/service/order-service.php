<?php
  define ('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
  function saveOrder($tireQuantity, $oilQuantity, $sparkQuantity, $totalAmount){
    echo '<br/>' .DOCUMENT_ROOT;

    $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-autoparts/resource/orders.txt', 'ab');

    if(!$file){
      echo '<p><strong>Your order could not be processed at this time. Please try again later.
            Please try again later.</strong></p>';
    } else {
        fwrite($file, $outputString, strlen($outputString));
    }
  }
?>
