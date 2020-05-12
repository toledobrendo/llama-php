<?php
   @include_once('../exceptions/file-not-found-exception.php');
   define ('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
   
   function saveOrder($tireQty, $oilQty,$sparkQty,$totalAmount){
      echo '<br/>'.DOCUMENT_ROOT;

      $date=date('H:i, jS F Y');

      $outputString = $date."\t"
      .$tireQty." tires\t"
      .$oilQty." oil\t"
      .$sparkQty." spark plugs\t"
      .'$'.$totalAmount."\n";
      
      $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/order.txt','ab');

      if(!$file){
         echo '<p><strong>Your order could not be processed, please try again later.</strong></p>';
      }else{
         // echo $outputString;
         flock($file,LOCK_EX);
         fwrite($file,$outputString, strlen($outputString));
         fwrite($file,$outputString, strlen($outputString));
         fclose($file);
      }
   }

   function getOrders(){

      try{
         $file= @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/order.txt', 'rb');

         if(!$file){
            throw new FileNotFoundException('No orders pending. Please try again later.');
         }else{
            while(!feof($file)){
               $order = fgets($file,999);
               // $orderArr = explode("-",$order);
               // if(@ trim($orderArr[1])=='jc'){
                  echo $order.'<br/>';
               // }
               // if(strpos($order,'brendo')){
               //    echo $order.'<br/>';
               // }
            };
            fclose($file);
         }
      }catch (FileNotFoundException $fnfe){
         echo $fnfe->getMessage();
         echo $fnfe;
      }
   }

   function getVAT(){

      $file=fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/properties.txt','rb');

      if(!$file){
         throw new FileNotFoundException('NO VAT');

      }else{
         $VAT=fgets($file,999);
         $VATarr = explode("=",$VAT);
         //IN VAT_PERCENT=0.12, VATarr[0] is VAT_PERCENT AND VATarr[1] is 0.12
         return $VATarr[1];
      }

   }
?>