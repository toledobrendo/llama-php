

	<?php
  require_once('view-comp/header-bobs.php');
	require_once('model/productModel.php');
	require_once('model/ProductList.php');
	require_once('php-scripts/getvat.script.php');
?>

				<h3 class="card-title">Order Results</h3>
				<?php

				echo '<p>Order Processed at';
				echo date(' H:i, jS F Y');

				echo '</p>';

				//variable, getting variable from another site
				$tires->__set('quantity',$_POST['tireQty'] ?  $_POST['tireQty'] : 0);
				$oil->__set('quantity',$_POST['oilQty'] ?  $_POST['oilQty'] : 0);
				$sparkPlugs->__set('quantity',$_POST['sparkQty'] ?  $_POST['sparkQty'] : 0);
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



			   $totalQty = ($tires->__get('quantity') + $oil->__get('quantity') + $sparkPlugs->__get('quantity'));

				if ($totalQty == 0) {
					echo "<br/>You didn't order anything. <br/> </br>";

				} else {



				echo '<hr><p><b> Your order is as follows: </b></p>';
				//echo $tireQty.' tires<br/>';
				if($tires->__get('quantity') > 0)
					echo ''.$tires->__get('quantity').' tires<br/>';

				if($oil->__get('quantity') > 0)
					echo ''.$oil->__get('quantity').' Oil<br/>';

				if($sparkPlugs->__get('quantity') > 0)
					echo ''.$sparkPlugs->__get('quantity').'&nbsp;Spark Plug<br/>';


				echo "<hr><p>Prices</br>";
				echo 'Tires: '.TIRE_PRICE.'<br/> ';
				echo 'Oil: '.OIL_PRICE.'<br/> ';
				echo 'Spark Plugs: '.SPARK_PRICE.'<br/> <br/>';

				}




				echo "Total Quantity: ".$totalQty."<br/><br/>";

				$tireAmount = @($tires->__get('quantity') * $tires->__get(price));
				$oilAmount = @($oil->__get('quantity') * $oil->__get(price));
				$sparkAmount = @($sparkPlugs->__get('quantity') * $oil->__get(price));




				$totalAmount = (float) ($tireAmount + $oilAmount + $sparkAmount);
				//$vatAble = (float) $totalAmount / 1.12;
				$vatPercent =  (float) getVat() + 1;// +1 to match value of my old calculation
				$vatAble = (float) $totalAmount / $vatPercent;
				$vatTax = (float) ($totalAmount - $vatAble);


				echo "VATable Amount: ".$vatAble."<br/>";
				echo "VAT Amount(12%): ".$vatTax."<br/>";


				echo "Total Amount: ".$totalAmount."<br/><br/>";

				echo "Amount exceeded 500 but less than 1000?".($totalAmount > 500 && $totalAmount < 1000 ? ' Yes':' No')."<br/>";




				?>
				 </div>

				 <div class="card-footer">
				 <a class="btn btn-info" href="order-form.php">Go back</a>

	<?php
  require_once('view-comp/footer-bobs.php');
?>
