<?php
  define('TIRE_PRICE',100);
  define('OIL_PRICE',50);
  define('SPARK_PRICE',30);
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
    <body>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Order Results</h3>
            <?php
              echo '<p> Order Processed at ';
              echo date('H:1, jS F Y');
              echo '</p>';

              //Php Comment
              /*
                MultiLine comment
              */

              $tireQty = $_POST['tireQty'] ? $_POST['tireQty'] : 0;
              $oilQty = $_POST['oilQty'] ? $_POST['oilQty'] :0 ;
              $sparkQty = $_POST['sparkQty'] ? $_POST['sparkQty'] : 0 ;
              $find = $_POST['find'];

              switch ($find) {
                case 'regular':
                  echo'Regular Customer';
                  break;
                case 'tv':
                  echo 'From TV Advertising';
                  break;
                case 'phone':
                  echo 'From Phone Directory';
                  break;
                case 'mouth':
                  echo 'From Word of mouth';
                  break;
                default:
                  echo 'Unknown Customer';
                  break;
              }

              echo '<br/><br/>';
              echo '<p>Prices:<br/>';
              echo 'Tires ' .TIRE_PRICE.'<br/>';
              echo 'Oil ' .OIL_PRICE.'<br/>';
              echo 'Spark Plug ' .SPARK_PRICE.'<br/><br/>';




              $tireAmount = @($tireQty * TIRE_PRICE);
              $oilAmount = @($oilQty * OIL_PRICE);
              $sparkAmount = @($sparkQty * SPARK_PRICE);

              $totalQty = @($tireQty + $oilQty + $sparkQty);

              if ($totalQty == 0) {
                echo 'You didnt order anything. <br/><br/>';
              } else {
                echo '<p>Your order is as follows </p>';
                if ($tireQty > 0)
                  echo $tireQty.' tires<br/>';
                if ($oilQty > 0)
                  echo $oilQty. ' oil<br/>';
                if($sparkQty > 0)
                  echo $sparkQty. ' spark plugs<br/>';
                  echo '<br/>';
              }
              echo 'Total Quantity: '.$totalQty.'<br/>';

              $vatAble = (float)(($tireAmount + $oilAmount + $sparkAmount)/1.12); //for VATable
              $vatAmount = (float)($vatAble * 0.12);   //to get vatAmount

              $totalAmount = (float)($vatAble + $vatAmount);

              echo 'VATable Amount: '. $vatAble. '<br/>';
              echo 'VAT Amount (12%): '. $vatAmount. '<br/>';
              echo 'Total Amount: '.$totalAmount. '<br/>';

              $totalAmount = (float) $tireAmount;

              $otherTotalAmount = &$totalAmount;
              $otherTotalAmount += $oilAmount;
              $totalAmount += $sparkAmount;

              echo 'Other Total Amount: '. $otherTotalAmount. '<br/>';
              echo 'Total Amount: '. $totalAmount.'<br/>';

              echo 'Amount Exceeded 500? '.($totalAmount > 500 ? 'Yes':'No').'<br/><br/>';



              echo 'is $totalAmount string? ' .(is_string($totalAmount)? ' Yes ' : ' No '). '<br/>';

              unset($totalAmount);

              echo 'is $totalAmount set? ' .(isset($totalAmount)? 'Yes' : 'No'). '<br/>';

              $totalAmountTwo =0;
              echo 'is $totalAmounttwo set? ' .(isset($totalAmountTwo)? 'Yes' : 'No'). '<br/>';
              echo 'is $totalAmountTwo empty? '. (empty($totalAmountTwo)? 'Yes' : 'No'). '<br/>';
             ?>
          </div>
          <div class="card-footer">
            <a class="btn btn-info" href="order-form.php">Go Back</a>
          </div>
        </div>
      </div>


       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
       integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
       integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
