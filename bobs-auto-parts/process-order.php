<?php
   require_once('view-comp/header.php');
   require_once('model/product.php');
   require_once('model/product-list.php');
   require_once('service/order-service.php');
   define ('VAT_PERCENT', getVatPercent());

  ?>

        <h3 class = "card-title"> Order Title </h3>

      	<?php
      	echo '<p> Order Processed at ';
        echo date ('H:i, jS F Y');
        echo '</p>';



          @($tire->__set('qty', $_POST['tireQuantity'] ? $_POST['tireQuantity'] : 0));
          @($oil->__set('qty', $_POST['oilQuantity'] ? $_POST['oilQuantity'] : 0));
          @($sparkPlugs->__set('qty', $_POST['sparkQuantity'] ? $_POST['sparkQuantity'] :0));
          $find = $_POST['find'];

          switch ($find) {
            case 'regular':
              echo 'Regular Customer';
              break;
            case 'tv':
              echo 'From TV Advertising';
              break;
            case 'phone':
              echo 'From Phone Directory';
              break;
            case 'mouth':
              echo 'From Word of Mouth';
              break;
            default:
              echo 'Unknown Customer';
              break;
          }

          $tireQty = $tire->__get('qty');
          $oilQty = $oil->__get('qty');
          $sparkQty = $sparkPlugs->__get('qty');

          echo '<p>Your order is as follows: </p>';
          echo  $tireQty.' tires <br/>';
          echo $oilQty.' bottles of oil <br/>';
          echo $sparkQty.' spark plugs.<br/><br/>';

          $totalQty = @($tire->__get('qty') + $oil->__get('qty') + $sparkPlugs->__get('qty'));
          echo 'Total Quantity '.$totalQty.'<br/><br/>';

          echo '<br/>';
          echo '<p>Prices<br/>';

          echo 'Tires: '.TIRE_PRICE. '<br/>';
          echo 'Oil: '.OIL_PRICE. '<br/>';
          echo 'Spark Plug: '.SPARK_PRICE. '<br/><br/>';


          $tireAmount = @($tire->__get('qty') * TIRE_PRICE);
          $oilAmount = @($oil->__get('qty') * OIL_PRICE);
          $sparkAmount = @($sparkPlugs->__get('qty')* SPARK_PRICE);



          $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

          echo 'Tire Amount: '.$tireAmount.' <br/>';
          echo 'Oil Amount: '.$oilAmount.' <br/>';
          echo 'Spark Plugs Amount: '.$sparkAmount.' <br/><br/>';


          $vatableAmount = @ ((float) $totalAmount / (1 + VAT_PERCENT));
          echo 'VATable Amount: '.$vatableAmount.'.<br/>';

          $vatAmount = @ ($vatableAmount * VAT_PERCENT);
          echo 'VAT Amount ' .@(VAT_PERCENT * 100). '%: ' .$vatAmount.'<br/>';


          echo 'Total Amount: '.$totalAmount.'<br/>';




          echo 'Amount exceeded 500 but less than 1000?'.($totalAmount > 500 && $totalAmount < 1000 ? ' Yes ' : ' No ').'<br/>';

          echo 'Is $totalAmount string? ' .(is_string($totalAmount) ? 'Yes' : 'No').'<br/>';


          $totalAmountTwo = "";
          echo 'Is $totalAmount set? ' .(isset($totalAmount) ? 'Yes' : 'No').'<br/>';
          echo 'Is $totalAmountTwo set? ' .(isset($totalAmountTwo) ? 'Yes' : 'No').'<br/>';


          echo 'Is $totalAmountTwo empty? ' .(empty($totalAmountTwo) ? 'Yes' : 'No').'<br/>';


          saveOrder($tire->__get('qty'), $oil->__get('qty'), $sparkPlugs->__get('qty'), $totalAmount);
      	?>


      </div>

      <div class="card-footer">
        <a class="btn btn-info" href="order-form.php">Go Back</a>
      </div>
    </div>
  </div>
  <?php
    require_once('view-comp/footer.php');

   ?>
