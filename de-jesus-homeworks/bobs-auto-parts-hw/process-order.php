<?php

  require_once('view-comp/header.php');
  require_once('model/product.php');
  require_once('model/product-list.php');
?>

<h3 class="card-title">Order Result</h3>
          <?php
            echo '<p>Order Processed at ';
            echo date('H:i, jS F Y');
            echo '</p>';

            // PHP Comments
            /**Multiline Comments
              Wow**/

            $tire->__set('quantity',$_POST['tireQty'] ? $_POST['tireQty'] : 0);
            $oil->__set('quantity',['oilQty'] ? $_POST['oilQty'] : 0);
            $sparkPlugs->__set('quantity',['sparkQty'] ? $_POST['sparkQty'] : 0);
            $find = $_POST['find'];

            switch($find) {
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

            echo '<p>Your order is as follows</p>';
            echo $tire->__get('quantity').' Tire<br/>';
            echo $oil->__get('quantity').' Oil<br/>';
            echo $sparkPlugs->__get('quantity').' Spark Plugs<br/>'.'<br/>';

            $totalQty = @($tire->__get('quantity') + $oil->__get('quantity') + $sparkPlugs->__get('quantity'));
            echo 'Total Quantity: '.$totalQty.'<br/><br/>';

            echo '<br/><br/>';
            echo '<p>Prices<br/>';
            echo 'Tires: '.TIRE_PRICE.'<br/>';
            echo 'Oil: '.OIL_PRICE.'<br/>';
            echo 'Spark Plugs: '.SPARK_PRICE.'<br/><br/>';

            $totalQty = @($tireQty + $oilQty + $sparkQty);


            $tireAmount = @($tire->__get('quantity') * TIRE_PRICE);
            $oilAmount = @($oil->__get('quantity') * OIL_PRICE);
            $sparkAmount = @($sparkPlugs->__get('quantity') * SPARK_PRICE);

            $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

            $otherTotalAmount = &$totalAmount;
            $otherTotalAmount += $oilAmount;
            $totalAmount += $sparkAmount;

            echo 'Other Total Amount: '.$otherTotalAmount.'<br/>';
            echo 'Total Amount: '.$totalAmount.'<br/>';

            $vatableAmount = $totalAmount / 1.12;
            $vat = $totalAmount - $vatableAmount;

            echo '<br/>VATable Amount: '.$vatableAmount.'<br/>';
            echo 'VAT: '.$vat.'<br/>';

            echo 'Amount exceeded 500? '.($totalAmount > 500 ? 'Yes' : 'No').'<br/><br/>';

            echo 'Is $totalAmount string? '.(is_string($totalAmount) ? 'Yes' : 'No').'<br/>';

            unset($totalAmount);

            echo 'Is $totalAmount set? '.(isset($totalAmount) ? 'Yes' : 'No').'<br/>';

            $totalAmountTwo = 0;
            echo 'Is $totalAmountTwo set? '.(isset($totalAmountTwo) ? 'Yes' : 'No').'<br/>';
            echo 'Is $totalAmountTwo empty? '.(empty($totalAmountTwo) ? 'Yes' : 'No').'<br/>';
          ?>
        </div>
        <div class="card-footer">
          <a class="btn btn-info" href="order-form.php">Go Back</a>

<?php
  require_once('view-comp/footer.php');
?>
