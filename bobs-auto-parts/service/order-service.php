<?php


  define ('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);


  function saveOrder($tireQuantity, $oilQuantity, $sparkQuantity, $totalAmount){
    echo '<br/>' .DOCUMENT_ROOT;

    $date = date('H:i, jS F Y');

    $outputString = $date."\t"
    .$tireQuantity." tires\t"
    .$oilQuantity." oil\t"
    .$sparkQuantity. " spark plugs\t"
    .'$'.$totalAmount."\n";


    $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'ab');


    if(!$file){
      echo '<p><strong>Your order could not be processed at this time.
            Please try again later.</strong></p>';
    } else {
        flock($file, LOCK_EX);
        fwrite($file, $outputString, strlen($outputString));
        flock($file, LOCK_UN);

        fclose($file);
    }
  }

  function getOrders(){

    try{
      $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'rb');

      if(!$file){


      throw new FileNotFoundException('No orders pending. Please try again later.');
      } else {
          while(!feof($file)){
            $order = fgets($file, 999);
            echo $order.'<br/>';

          };

          fclose($file);
      }
    } catch(FileNotFoundException $fnfe){
      echo $fnfe->getMessage();
      echo $fnfe;
    }
  }

  function getVatPercent(){
      try{
      $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/properties.txt', 'rb');

      if(!$file){
        throw new FileNotFoundException('No VAT value found. Please try again later.');
      } else {
        while(!feof($file)){
        $vatPercent = fgets($file, 999);
        $vatPercentArr = explode("=", $vatPercent);
        return @ $vatPercentArr[1];
        };
        fclose($file);
      }
    }catch (FileNotFoundException $fnfe){
      echo $fnfe->getMessage();
    }
  }
  ?>
