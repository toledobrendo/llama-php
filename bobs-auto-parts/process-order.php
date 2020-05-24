<?php
   require_once("view-comp/header.php");
   require_once('product-factory.php');
   require_once('service/order-service.php');
   define("VAT_PERCENT",getVAT());

?>

<h2 class="card-title">Order Result</h2>

<?php

   echo '<p>Order Processed at ';
   echo date('H:i, jS F Y');
   echo '</p>';


   @$tireQty = $_POST['tireQty'] ? $_POST['tireQty'] : 0;
   @$oilQty = $_POST['oilQty'] ? $_POST['oilQty'] : 0;
   @$sparkQty = $_POST['sparkQty'] ? $_POST['sparkQty'] : 0;
   @$find = $_POST['find'];

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

   echo '<br/><br/>';
   echo '<p>Prices<br/>';
   echo 'Tires: ' . $tires->price . '<br/>';
   echo 'Oil: ' . $oil->price . '<br/>';
   echo 'Spark Plugs: ' . $sparkPlug->price . '<br/><br/>';

   $totalQty = @($tireQty + $oilQty + $sparkQty);

   if ($totalQty == 0) {
      echo 'You did not order anything. <br/> <br/>';
   } else {
      echo '<p>Your order is as follows</p>';
   if ($tireQty > 0)
      echo "$tireQty tires<br/>";
   if ($oilQty > 0)
      echo $oilQty . ' oil<br/>';
   if ($sparkQty > 0)
      echo $sparkQty . ' spark plugs<br/>';
      echo '<br/>';
   }
      echo 'Total Quantity: ' . $totalQty . '<br/>';

      $tireAmount = @($tireQty * $tires->price);
      $oilAmount = @($oilQty * $oil->price);
      $sparkAmount = @($sparkQty * $sparkPlug->price);

      $totalAmount = (float) $tireAmount;

      $otherTotalAmount = &$totalAmount;
      $otherTotalAmount += $oilAmount;
      $totalAmount += $sparkAmount;
   
      echo 'Other Total Amount: ' . $otherTotalAmount . '<br/>';
      echo 'Total Amount: ' . $totalAmount . '<br/>';

 
      $vatableAmount = $totalAmount / (VAT_PERCENT + 1);
      $vat = $totalAmount - $vatableAmount;

      echo 'VATable Amount: ' . $vatableAmount . '<br/>';
      echo 'VAT: ' . $vat . '<br/>';
      echo 'Amount exceeded 500? ' . ($totalAmount > 500 ? 'Yes' : 'No') . '<br/><br/>';
      echo 'Is $totalAmount string? ' . (is_string($totalAmount) ? 'Yes' : 'No') . '<br/>';
      echo 'Is $totalAmount set? ' . (isset($totalAmount) ? 'Yes' : 'No') . '<br/>';

      $totalAmountTwo = 0;
      echo 'Is $totalAmountTwo set? ' . (isset($totalAmountTwo) ? 'Yes' : 'No') . '<br/>';
      echo 'Is $totalAmountTwo empty? ' . (empty($totalAmountTwo) ? 'Yes' : 'No') . '<br/>';

      @saveOrder($tireQty, $oilQty, $sparkQty, $totalAmount);
?>

<div class="card-footer">
   <a class="btn btn-dark" href="order-form.php">Go Back</a>
</div> 
   <?php
      include("view-comp/footer.php")
   ?>