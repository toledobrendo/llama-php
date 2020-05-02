<?php
//GLOBAL VARIABLES
define('TIRE_PRICE',100);
define('OIL_PRICE',100);
define('SPARK_PRICE',100);

define('VAT_PERCENT',0.12);

?>
<?php
require_once('view-comp/header.php');
 ?>
          <h3 class="card-title">Order Result</h3>
           // Change folder name to bobs-autopart for better naming convention.
           // Spaces are discouraged for web assets
		   <?php

             echo '<p>Order Processed at ';
             echo date('H:i, jS F Y');
             echo '</p>';



              $tireQty = $_POST['tireQty'] ? $_POST['tireQty'] : 0;
              $oilQty = $_POST['oilQty'] ? $_POST['oilQty'] : 0;
              $sparkQty = $_POST['sparkQty'] ? $_POST['sparkQty'] : 0;
							$find = $_POST['find'];

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
              echo $tireQty.' tires<br/>';
              echo $oilQty.' Oil<br/>';
              echo $sparkQty.'&nbsp;Spark Plug<br/>';

							//PRINTING OUT DEFINED VARIABLES
							echo "<p>Prices<br>";
							echo "Tires: ".TIRE_PRICE.'<br/>';//. = +
							echo "Oil: ".OIL_PRICE.'<br/>';
							echo "Spark Plugs: ".SPARK_PRICE.'<br/><br/>';


							$totalQty = @($tireQty + $oilQty + $sparkQty);

							if($totalQty == 0){
								echo "You didn't order anyting you swine";
							}else {
								echo "<p>Your order is as follows</p>";
							}

               echo "Total Qty: ".$totalQty.'<br/>';

               $tireAmount = @($tireQty) * TIRE_PRICE;
               $oilAmount = @($oilQty) * OIL_PRICE;
               $sparkAmount = @($sparkQty) * SPARK_PRICE;

							 //IDK whats this HAHAHAHAH
               // $totalAmount = (float)($tireAmount);
							 //
               // $otherTotalAmount = &$totalAmount;
               // $otherTotalAmount += $oilAmount;
							 //Simplified version
							 $totalAmount = (float) + $tireAmount + $oilAmount + $sparkAmount;
               // echo 'Other Total Amount:  '.$otherTotalAmount.'<br/>';
               // $totalAmount +=$sparkAmount;
               echo 'Total Amount: '.$totalAmount.'<br/>';

							 //IDK
               echo 'Amount exceeded  500?'.($totalAmount>500 ? ' Yes' : ' No').'<br/>';

							 //LIKE JAVA but with $
							 $vatAmount = $totalAmount * 0.12;
							 $vatTotal = $totalAmount + $vatAmount;
							 //Prints vatAmount and vatTotal
							 echo "<br/>Total vat Amount: ".$vatAmount."<br/>";

							 echo "<br/>Total amount with vatable: ".$vatTotal."<br/>";

							 echo 'is $totalAmount string?'.(is_string($totalAmount) ? 'Yes' : 'No').'<br/>';
							 echo 'Is $totalAmount empty?'.(empty($totalAmount) ? 'Yes' : 'No' ).'<br/>';
           ?>
        </div>

			<?php
		require_once('view-comp/footer.php')
			 ?>
