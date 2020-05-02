<?php
  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 30);
  define('VAT_PERCENT', 0.12);
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
  </head>
  <body>
    <!-- hello-world.php or hello_world.php -->
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Order Result</h3>
          <?php
            echo '<p>Order Processed at ';
            echo date('H:i, jS F Y');
            echo '</p>';

            // PHP Comments
            /**Multiline Comments
              Wow**/

            $tireQty = $_POST['tireQty'] ? $_POST['tireQty'] : 0;
            $oilQty = $_POST['oilQty'] ? $_POST['oilQty'] : 0;
            $sparkQty = $_POST['sparkQty'] ? $_POST['sparkQty'] : 0;
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
            if (@($totalQty == 0)) {
              echo 'You didn\'t order anything. <br/> <br/>';
            } else {
              echo '<p>Your order is as follows</p>';
              // echo $tireQty.' $tireQty tires<br/>';
              if ($tireQty > 0)
                echo "$tireQty tires<br/>";
              if ($oilQty > 0)
                echo $oilQty.' oil<br/>';
              if ($sparkQty > 0)
                echo $sparkQty.' spark plugs<br/>';
              echo '<br/>';
            }
            echo 'Total Quantity: '.@($totalQty).'<br/>';

            $tireAmount = @($tireQty * TIRE_PRICE);
            $oilAmount = @($oilQty * OIL_PRICE);
            $sparkAmount = @($sparkQty * SPARK_PRICE);

            $totalAmount = (float) $tireAmount;

            $otherTotalAmount = &$totalAmount;
            $otherTotalAmount += $oilAmount;
            $totalAmount += $sparkAmount;

            $VATable = $totalAmount / 1.12;;
            $VAT = $totalAmount - $VATable;


            echo 'VATable Amount: '.$VATable.'<br/>';
            echo 'VATt: '.$VAT.'<br/>';
            echo 'Total Amount: '.$totalAmount.'<br/>';
            echo 'Amount exceeded 500? but less than 1000 '.($totalAmount > 500 && $totalAmount < 1000 ? 'Yes' : 'No').'<br/>';
            echo 'Is $totalAmount string? '.(is_string($totalAmount) ? 'Yes' : 'No').'<br/>';

            unset($totalAmount);

            echo 'Is $totalAmount set? '.(isset($totalAmount) ? 'Yes' : 'No').'<br/>';

            $totalAmountTwo = 0;
            echo 'Is $totalAmountTwo set? '.(isset($totalAmountTwo) ? 'Yes' : 'No').'<br/>';
            echo 'Is $totalAmountTwo empty? '.(empty($totalAmountTwo) ? 'Yes' : 'No').'<br/>';
            require_once('view-comp/footer.php');
      ?>
</html>
