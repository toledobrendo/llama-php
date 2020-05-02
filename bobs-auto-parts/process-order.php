<?php
	define('TIRE_PRICE', 100);
	define('OIL_PRICE', 50);
	define('SPARK_PRICE', 30);
	?>


	<?php
  require_once('view-comp/header-bobs.php');
?>

				<h3 class="card-title">Order Results</h3>
				<?php 

				echo '<p>Order Processed at';
				echo date(' H:i, jS F Y');

				echo '</p>';

				//variable, getting variable from another site
				$tireQty = $_POST['tireQty'] ?  $_POST['tireQty'] : 0;
				$oilQty = $_POST['oilQty'] ?  $_POST['oilQty'] : 0;
				$sparkQty = $_POST['sparkQty'] ?  $_POST['sparkQty'] : 0;
				$find = $_POST['find'];

				switch ($find) {
					case 'regular':
						echo "Regular Customer";
						break;

					case 'tv':
						echo "From TV Advertising";
						break;
					

					case 'phone':
						echo "From Phone Directory";
						break;
					

					case 'mouth':
						echo "From Word of Mouth";
						break;
					
					
					default:
						echo "Unknown Customer";						
						break;
				}



			$totalQty = @($tireQty + $oilQty + $sparkQty);

				if ($totalQty == 0) {
					echo "<br/>You didn't order anything. <br/> </br>";

				} else {



				echo '<p> Your order is as follows</p>';
				//echo $tireQty.' tires<br/>';
				if($tireQty > 0)
					echo "$tireQty tires<br/>";

				if($tireQty > 0)
					echo "$oilQty bottles of oil<br/>";

				if($tireQty > 0)
					echo "$sparkQty sparkplugs<br/><br/>";

				echo "<p>Prices</br>";
				echo 'Tires: '.TIRE_PRICE.'<br/> ';
				echo 'Oil: '.OIL_PRICE.'<br/> ';
				echo 'Spark Plugs: '.SPARK_PRICE.'<br/> <br/>';

				}


				

				echo "Total Quantity: ".$totalQty."<br/><br/>";

				$tireAmount = @($tireQty * TIRE_PRICE);
				$oilAmount = @($oilQty * OIL_PRICE);
				$sparkAmount = @($sparkQty * SPARK_PRICE);




				$totalAmount = (float) ($tireAmount + $oilAmount + $sparkAmount);
				$vatAble = (float) $totalAmount / 1.12;
				$vatTax = (float) ($totalAmount - $vatAble);
			

				echo "VATable Amount: ".$vatAble."<br/>";
				echo "VAT Amount(12%): ".$vatTax."<br/>";


				echo "Total Amount: ".$totalAmount."<br/><br/>";

				echo "Amount exceeded 500 but less than 1000?".($totalAmount > 500 && $totalAmount < 1000 ? ' Yes':' No')."<br/>";

				echo 'is $totalAmount string?'.(is_string($totalAmount) ? "Yes" : "No")."<br/>";

				//unset($totalAmount);


				echo 'is $totalAmount set?'.(isset($totalAmount) ? "Yes" : "No")."<br/>";

				$totalAmounttwo ;

				echo 'is $totalAmounttwo set?'.(isset($totalAmounttwo) ? "Yes" : "No")."<br/>";

				echo 'is $totalAmounttwo empty ?'.(empty($totalAmounttwo) ? "Yes" : "No"."<br/>");


				?>
				 </div>

				 <div class="card-footer">
				 <a class="btn btn-info" href="order-form.php">Go back</a> 

			<?php
  require_once('view-comp/footer-bobs.php');
?>