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

    $file = @fopen(DOCUMENT_ROOT.'/llama-php/ILoveJava/bobs-auto-parts-hw/resources/order.txt',
            'ab');

    if(!$file)
      echo "<strong>your order cannot be processed at the moment,
            please try again later.</strong>";
    else {
      echo $outputString;
      flock($file, LOCK_EX);

      fwrite($file, $outputString, strlen($outputString));

      flock($file, LOCK_UN);
    }

  }

  function getOrders(){

    try {
      $file = @fopen(DOCUMENT_ROOT.'/llama-php/ILoveJava/bobs-auto-parts-hw/resources/order.txt', 'rb');
      if(!$file){
        throw new FileNotFoundException("File not found!");
        
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
  }
?>
