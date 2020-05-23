<?php

  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 150);
 ?>

  define('TIRE_PRICE',100);
  define('OIL_PRICE',50);
  define('SPARK_PRICE',20);
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
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div href="index.php" class="navbar-brand">iAC Consulting</div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
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

            switch($find){
              case 'regular':
                echo "Regular Customer<br/>";
                break;
              case 'tv':
                echo "TV Advertisement<br/>";
                break;
              case 'phone':
                echo "From Phone Directory<br/>";
                break;
              case 'mouth':
                echo "From word of mouth<br/>";
              default:
                echo "Unknown Customer<br/>";
            }

            echo '<p>Prices<br/>';
            echo 'Tires: '.TIRE_PRICE.'<br/>';
            echo 'Oil: '.OIL_PRICE.'<br/>';
            echo 'Sparkplugs: '.SPARK_PRICE.'<br/>';

            $totalQty = @($tireQty + $oilQty + $sparkQty);
            echo 'Total Quantity: '.$totalQty.'<br/>';


            //total = VAT + VATable
            // VAT = 0.12 * VATable
            //VATable = total/1.12

            if($totalQty == 0){
              echo 'You didn\'t order anything. <br/><br/>';
            }else{
              echo '<p>Your order is as follows</p>';
              if($tireQty)
                echo "$tireQty tires<br/>";
              if($oilQty)
                echo "$oilQty bottles of oil<br/>";
              if($sparkQty)
                echo "$sparkQty sparkplugs<br/><br/>";
            }

            $tireAmount = @($tireQty * TIRE_PRICE); // @() - Surpressing [To avoid warnings]
            $oilAmount = @($oilQty * OIL_PRICE);
            $sparkAmount = @($sparkQty * SPARK_PRICE);

            $vatAble = (float)(($tireAmount + $oilAmount + $sparkAmount)/1.12);
            $vatAmount = (float)($vatAble * 0.12);

            $totalAmount = (float)($vatAble + $vatAmount);


            echo "<br/>VATable amount = ".$vatAble.'<br/>';
            echo "VAT amount = ".$vatAmount.'<br/>';
            echo "Total Amount = ".$totalAmount."<br/><br/>";

            echo "Amount exceeded 500?".($totalAmount > 500 ? ' YES' : ' NO').'<br/><br/>';

            echo 'Is $totalAmount string? '.is_string($totalAmount) ? 'YES' : 'NO'.'<br/>';
            echo 'Is $totalAmount set? '.isset($totalAmount) ? 'YES' : 'NO'.'<br/>';

          ?>


        </div>
        <div class="card-footer">
          <a class="btn btn-success" href="order-form.php"> Go Back </a>
          <h1 class="card-title">Order Result</h1>
          <?php
            echo '<p>Order Processed at';
            echo date(' H:i, jS F Y');
            echo '</p>';

            //PHP Comment
            /**Maltiline Comment
                Wow**/

              $tireQty = $_POST['tireQty'] ?  $_POST['tireQty'] : 0;
              $oilQty = $_POST['oilQty'] ?  $_POST['oilQty']: 0;
              $sparkQty = $_POST['sparkyQty']?  $_POST['sparkyQty']: 0;

              echo '<p>Your order is as follows </p>';
              echo "$tireQty  tires<br/>";
              echo $oilQty.' oil<br/>';
              echo $sparkQty.' sparkplug<br/><br/>';

              echo '<p>Prices<br/>';
              echo 'Tires: '.TIRE_PRICE.'<br/>';
              echo 'Oil: '.OIL_PRICE.'<br/>';
              echo 'Spark: '.SPARK_PRICE.'<br/><br/>';

              $totalQty = @($tireQty + $oilQty + $sparkQty);
              echo "Total Qty: ".$totalQty.'<br/>';

              $tireAmount = @($tireQty) * TIRE_PRICE;
              $oilAmount = @($oilQty) * OIL_PRICE;
              $sparkAmount = @($sparkQty) * SPARK_PRICE;

              $totalAmount = (float)($tireAmount);

              $otherTotalAmount = &$totalAmount;
              $otherTotalAmount += $oilAmount;
              echo 'Other Total Amount:  '.$otherTotalAmount.'<br/>';
              $totalAmount +=$sparkAmount;
              echo 'Total Amount: '.$totalAmount.'<br/>';

              echo 'Amount exceeded  500?'.($totalAmount>500 ? ' Yes' : ' No').'<br/>';
            ?>

            <div class="card-footer">
                <a class="btn btn-info"href="order-form.php">Go Back</a>
            </div>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center my-3 text-muted">
      <small>&copy; iAC Consulting Inc.</small>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
  </body>
</html>