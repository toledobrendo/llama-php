<?php
  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 30);
 ?>
 <?php
   require_once('view-comp/header.php');
 ?>
    <title>Process Order</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Order results</h3>
          <?php
          //PHP Comment
          /*Multiple
          line comment*/
            echo '<p>Order Processed at ';
            echo date('H:i jS F Y');
            echo '</p>';

            $tireQty = $_POST['tireQty'] ? $_POST['tireQty'] : 0;
            $oilQty = $_POST['oilQty'] ? $_POST['oilQty'] : 0;
            $sparkQty = $_POST['sparkQty'] ? $_POST['sparkQty'] : 0;
            $find = $_POST['find'];

            switch ($find) {
              case 'regular':
                echo "Regular Customer.<br>";
                break;
                case 'tv':
                  echo "From TV Advertising.<br>";
                  break;
                  case 'phone':
                    echo "From Phone Directory.<br>";
                    break;
                    case 'mouth':
                      echo "From Word of Mouth.<br>";
                      break;
                      default:
                        echo "Unknown Customer.<br>";
                        break;
            }
            echo "<br>";
            echo "<p>PRICES<br>";
            echo "Tires: ".TIRE_PRICE."<br>";
            echo "Oil: ".OIL_PRICE."<br>";
            echo "Spark plugs: ".SPARK_PRICE."<br><br>";

            $totalQty = @($tireQty + $oilQty + $sparkQty);

            if ($totalQty == 0) {
              echo "You didn't order anything. <br><br>";
            }else {
              echo "<p>Your order is as follows</p>";

              if ($tireQty > 0)
                echo "$tireQty tire/s.<br>";
              if ($oilQty > 0)
                echo "$oilQty oil.<br>";
              if ($sparkQty > 0)
                echo "$sparkQty spark plug/s.<br>";
              echo "<br>";
            }

            echo "Total Quantity: ".$totalQty."<br>";

            $tireAmount = @($tireQty * TIRE_PRICE);
            $oilAmount = @($oilQty * OIL_PRICE);
            $sparkAmount = @($sparkQty * SPARK_PRICE);

            $totalAmount = (float) $tireAmount;
            $totalAmount += $sparkAmount;

            $otherTotalAmount = &$totalAmount;
            $otherTotalAmount += $oilAmount;

            $VATableAmount = $totalAmount / 1.12;
            echo "Vatable: ".$VATableAmount."<br>";
            $VAT = $VATableAmount * 0.12;
            echo "Vat: ".$VAT."<br>";

            // echo "Other Total Amount: ".$otherTotalAmount."<br>";
            echo "Total Amount: ".$totalAmount."<br><br>";
            echo "Amount exceeded 500? ".($totalAmount > 500 ? "yes":"no")."<br><br>";

            echo 'Is $totalAmount string? '.(is_string($totalAmount) ? "Yes" : "No")."<br>";

            unset($totalAmount);
            echo 'Is $totalAmount set? '.(isset($totalAmount) ? "Yes" : "No")."<br>";

            $totalAmountTwo = 1;
            echo 'Is $totalAmountTwo set? '.(isset($totalAmountTwo) ? "Yes" : "No")."<br>";
            echo 'Is $totalAmountTwo empty? '.(empty($totalAmountTwo) ? "Yes" : "No")."<br>";
           ?>
         <?php
           require_once('view-comp/footer-go-back.php');
           require_once('view-comp/footer.php');
         ?>
