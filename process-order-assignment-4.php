<?php
  require_once('view-comp/header.php');
	require_once('model/define-model.php');
  require_once('service/define-variables.php');

  define('VAT_AMOUNT', 0.12);
?>

				<h3 class="card-title">Order Results</h3>
				<?php

				echo '<p>Order Processed at';
				echo date(' H:i, jS F Y');

				echo '</p>';


				$tires = @$_POST['tireQty'] ?  $_POST['tireQty'] : 0;
				$oil = @$_POST['oilQty'] ?  $_POST['oilQty'] : 0;
				$sparkPlugs = @$_POST['sparkQty'] ?  $_POST['sparkQty'] : 0;
				$find = @$_POST['find'];

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

			   $totalQty = ($tires + $oil + $sparkPlugs);

				if ($totalQty == 0) {
					echo "<br/>You didn't order anything. <br/> </br>";
				} else {

				echo '<hr><p><b> Your order is as follows: </b></p>';

				if($tires> 0)
					echo ''.$tires.' tires<br/>';

				if($oil> 0)
					echo ''.$oil.' Oil<br/>';

				if($sparkPlugs > 0)
					echo ''.$sparkPlugs.'&nbsp;Spark Plug<br/>';

				echo "<hr><p>Prices</br>";
				echo 'Tires: '.TIRE_PRICE.'<br/> ';
				echo 'Oil: '.OIL_PRICE.'<br/> ';
				echo 'Spark Plugs: '.SPARK_PRICE.'<br/> <br/>';

				}

				echo "Total Quantity: ".$totalQty."<br/><br/>";

        $tireAmount=@($tires* TIRE_PRICE);
        $oilAmount=@($oil* OIL_PRICE);
        $sparkAmount= @($sparkPlugs* SPARK_PRICE);

        $totalAmount=(float)$tireAmount;
        $totalAmount += $oilAmount;
        $otherTotalAmount = &$totalAmount;
        $otherTotalAmount += $sparkAmount;

        $VATable=@($totalAmount/(VAT_AMOUNT+1));
        $VAT=@(VAT_AMOUNT*$VATable);
        $totalAmount2=@($VAT+$VATable);


        echo '<p><b>Total Amount: </b>'.$totalAmount2.'</p>';
        echo '<p><b>VATable Amount: </b>'.$VATable;
        echo '<p><b> VAT Amount: </b>'.$VAT;
        echo '<p><b> Amount Exceeded 500 but less than 1000? </b>'.($totalAmount>500 && $totalAmount<1000?'Yes.':'No.');
	     ?>
				 </div>

				 <div class="card-footer">
				 <a class="btn btn-info" href="order-form.php">Go back</a>

	<?php
  require_once('view-comp/footer.php');
