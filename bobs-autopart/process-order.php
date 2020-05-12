
<?php
require_once('view-comp/header.php');
require_once('model/ProductBean.php');
require_once('model/ProductList.php');
require_once('services/order-service.php');
require_once('exception/file-not-found-exception.php');

// $VAT_PERCENT = file_get_contents(DOCUMENT_ROOT."/llama-php/bobs-autopart/resource/orders.txt", FALSE, NULL, 13, 3);



  function getVat(){
      // $filePathProperties = @fopen(DOCUMENT_ROOT.'/llama-php/bobs-autopart/resource/properties.txt' , 'rd');
      $filePathProperties = DOCUMENT_ROOT."/llama-php/bobs-autopart/resource/properties.txt";
      $fileHandler = @fopen($filePathProperties,rb);

      if (!$fileHandler) {
        echo '<p><strong>Properties File containg computation values are not available.
          Please try again later.</strong></p>';
      } else{
        while(!feof($fileHandler)){
          $order = fgets($fileHandler , 222);
          $value = explode("VAT_PERCENT=", $order);

          return $value[1];
        }
      }
      fclose($filePathProperties);
  }
?>

        <h3 class="card-title">Order Result</h3>

		   <?php

             echo '<p>Order Processed at ';
             echo date('H:i, jS F Y');
             echo '</p>';

             //Some inputs made into a object;
             // $tires = new Product('Tire','good tires',TIRE_PRICE);
             // $oil = new Product('Oil','Oil from Canada',OIL_PRICE);
             // $spark = new Product('Spark','Sparking',SPARK_PRICE);

             $tires->__set('quantity',$_POST['tireQty'] ? $_POST['tireQty'] : 0);
             $oil->__set('quantity',$_POST['oilQty'] ? $_POST['oilQty'] : 0);
             $sparkPlugs->__set('quantity',$_POST['sparkQty'] ? $_POST['sparkQty'] : 0);
						 $find = $_POST['find'];

              //SET THEM UP



							switch($find){
									case 'regular':
										echo "Regular Customer";
										break;
									case 'tv':
										echo "from Advertising";
										break;
									case 'phone':
										echo "Phone directory";
										break;
									case 'mouth':
										echo "Unknown Customers";
										break;
									default:
										echo "IDK";
										break;
							}



              echo "<p>Your order is as follows</p>";
              echo ''.$tires->__get('quantity').' tires<br/>';
              echo ''.$oil->__get('quantity').' Oil<br/>';
              echo ''.$sparkPlugs->__get('quantity').'&nbsp;Spark Plug<br/>';



							//PRINTING OUT DEFINED VARIABLES
							echo "<br><p>Prices<br>";
							echo "Tires: ".TIRE_PRICE.'<br/>';//. = +
							echo "Oil: ".OIL_PRICE.'<br/>';
							echo "Spark Plugs: ".SPARK_PRICE.'<br/><br/>';


							// $totalQty =   @($tires->getQuantity() + $oilQty->getQuantity() + $sparkQty->getQuantity());
              $totalQty = ($tires->__get('quantity') + $oil->__get('quantity') + $sparkPlugs->__get('quantity'));

							if($totalQty == 0){
								echo "You didn't order anyting you swine";
							}else {
								echo "<p>Your order is as follows</p>";
							}

               echo "Total Qty: ".$totalQty.'<br/>';



               $tireAmount = @($tires->__get('quantity') * $tires->__get(price));
               $oilAmount = @($oil->__get('quantity') * $oil->__get(price));
               $sparkAmount = @($sparkPlugs->__get('quantity') * $oil->__get(price));


							 $totalAmount = (float) + $tireAmount + $oilAmount + $sparkAmount;

               echo 'Total Amount: '.$totalAmount.'<br/>';

               echo 'Amount exceeded  500?'.($totalAmount>500 ? ' Yes' : ' No').'<br/>';



							 (float) $vatAmount = $totalAmount * (float) getVat();
							 (float) $vatTotal = (float)$totalAmount + (float)$vatAmount;

               //Prints vatAmount and vatTotal
							 echo "<br/>Total vat Amount: ".$vatAmount."<br/>";

							 echo "<br/>Total amount with vatable: ".$vatTotal."<br/>";

							 echo 'is $totalAmount string?'.(is_string($totalAmount) ? 'Yes' : 'No').'<br/>';
							 echo 'Is $totalAmount empty?'.(empty($totalAmount) ? 'Yes' : 'No' ).'<br/>';

               saveOrder($tires->__get('quantity') , $oil->__get('quantity'), $sparkPlugs->__get('quantity'), $totalAmount);

           ?>
        </div>

			<?php
		require_once('view-comp/footer.php')
			 ?>
