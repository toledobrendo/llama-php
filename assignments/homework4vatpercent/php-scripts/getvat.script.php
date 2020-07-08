<?php
 define ('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);

function getVat(){


     $file = fopen(DOCUMENT_ROOT.'/llama-php/assignments/homework4vatpercent/config/properties.txt','rb');

     if(!$file){
        throw new FileNotFoundException('Vat file not found');

     } else {

        $vatPerc = fgets($file,999);
        $vatPercArray = explode("=",$vatPerc);

        return $vatPercArray[1];
     }

     fclose($file);
  }


 ?>
