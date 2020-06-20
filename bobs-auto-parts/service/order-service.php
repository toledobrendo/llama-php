<?php
  require_once('exception/file-not-found-exception.php');
 ?>


<?php
  define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

  function saveOrder($boughtList,$total){

		$outFile = date('H:i, jS F Y').', '."\t";
		$printFile = date('H:i, jS F Y').', '."\t".$total.'.00, '."\t";

		$fileLoc = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'ab');

		if(!$fileLoc){
			echo '<p><b>Sorry for the inconvinience. We are currently under maintainance.</b></p>';
		}else{
			//success
			$ctr=1;
			foreach ($boughtList->product as $item) {
				if($ctr!=3){
					$printFile .= $_POST[$item->prodId]." ".$item->name.'(s). '."\t";

          $item->name.'(s), '."\t";
    				}else{
    					$printFile .= $_POST[$item->prodId]." ".$item->name.'(s). '."\n";
    				}
    				$ctr++;
                }

                flock($fileLoc, LOCK_EX);
                fwrite($fileLoc, $printFile, strlen($printFile));
                flock($fileLoc, LOCK_UN);

                fclose($fileLoc);
    		}
    	}

  function getOrders(){

    try{
      $file = @ fopen(DOCUMENT_ROOT.'/llama-php/bobs-auto-parts/resource/orders.txt', 'rb'); // reading

        if (!$file) {
          throw new FileNotFoundException('No orders pending.
              Please try again later.', 1);
        }else{
          while (!feof($file)){
            $order = fgets($file, 999);
            echo $order.'<br>';
          };

          fclose($file);
        }
      }catch(FileNotFoundException $fnfe){
        echo $fnfe->getMessage();
      }
    }

?>
