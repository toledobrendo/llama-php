<?php
  define ('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

  //this function accepts the tire, oil, sparkquantity as well as total amount(based on the parameter)
  function saveOrder($tireQuantity, $oilQuantity, $sparkQuantity, $totalAmount){
    echo '<br/>' .DOCUMENT_ROOT;

    $date = date('H:i, jS F Y');

    //make a variable $outputString
    $outputString = $date."\t"
    .$tireQuantity." TIRES\t"
    .$oilQuantity." OIL\t"
    .$sparkQuantity. " SPARK PLUGS\t"
    .'$'.$totalAmount."\n";

    //opens the file
    //1st parameter: file destination
    $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'ab');

    //means file does not contain anything
    if(!$file){
      echo '<p><strong>Your order could not be processed at this time.
            Please try again later.</strong></p>'; //would be seen if there is no resource folder.
    } else {
        flock($file, LOCK_EX); //lock the file first before writing it.
        fwrite($file, $outputString, strlen($outputString));
        flock($file, LOCK_UN); //unlock the file after writing
        //lock and unlock are milliseconds only

        fclose($file);
    }
  }

  function getOrders(){

    try{
      $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'rb');

      if(!$file){ //file does not exist
        // echo '<p><strong> No orders pending. Please try again later.</p></strong>';
        //create exception: message, and exception code
      //throw new Exception('No orders pending. Please try again later.', 1);

      //use the newly created file exception (no need for the code)
      throw new Exception('No orders pending. Please try again later.');
      } else { //there is a file
          while(!feof($file)){
            $order = fgets($file, 999);
            echo $order.'<br/>';

            //if you want to track it by line
            /*if ($llineNum == 3){
            echo $order.'<br/>';
            }
            $lineNum++;

            if you want to check if a line contain a certain name
            if(strpos($order, 'brendo')){
              echo $order.'<br/>';
            }

            explode returns an array and we want to access the array without storing it in the variable
            $orderArr = explode("-", $order)
            if( trim($orderArr[1] === 'brendo'){
            echo $order.'<br/>';
          }
            */
          };

          fclose($file); //dont forget to close the file
      }
    } catch(FileNotFoundException $e){
      echo $e->getMessage();
      echo $e;
    }
  }
?>
