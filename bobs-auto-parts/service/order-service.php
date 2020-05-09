<?php
  define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
  require_once('exceptions/file-not-found-exception.php');

  function saveOrder($tireQty, $oilQty, $sparkQty, $totalAmount){

    $date = date('H:i, jS F Y');
    $outputString = $date."\t".
                    $tireQty." tires\t".
                    $oilQty." Oil\t".
                    $sparkQty." Spark Plugs\t".
                    '$'.$totalAmount."\n";

    $file = @fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/order.txt',
            'ab'); //file open, second parameter is
            // r read only
            // r+ read/is_write
            // w
            // a write only
            // a+ read/write

    if(!$file)
      echo "<strong>your order cannot be processed at the moment,
            please try again later.</strong>";
    else {
      echo $outputString;
      flock($file, LOCK_EX); //to ensure that writing will not be tangled if multiple users are sending requests.

      fwrite($file, $outputString, strlen($outputString));

      flock($file, LOCK_UN); //to ensure that writing will not be tangled if multiple users are sending requests.
      // fclose($file);
    }

  }

  function getOrders(){

    try {
      $file = @fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/order.txt', 'rb');
      if(!$file){
        throw new FileNotFoundException("File not found!");
        //throw new Exception("<strong>No orders pending. Please try again later. </strong>",1);
        //echo "<strong>No orders pending. Please try again later. </strong>";
      }
      else{
        while(!feof($file)){
          $order = fgets($file, 999);
          echo $order.'<br>';
        }
        fclose($file);
      }
    } catch (Exception $e) {
        echo $e->getMessage();
        echo $e;
    }

  }//end of function getOrders()
?>
