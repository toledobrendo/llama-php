<?php
  define('TIRE_PRICE', 100);
  define('OIL_PRICE', 50);
  define('SPARK_PRICE', 30);
  require_once('view-comp/header.php');
 ?>
    <h3 class="cart-title">Order Results</h3>

    <?php
    echo '<p> Order Processed at ';
    echo date('H:i, jS F Y');
    echo '</p>';

    // PHP Comments

    $tireQty = $_POST['tireQty']? $_POST['tireQty']: 0;
    $oilQty = $_POST['oilQty']? $_POST['oilQty']: 0;
    $sparkQty = $_POST['sparkQty']? $_POST['sparkQty']: 0;
    $find = $_POST['find'];

    switch($find){
      case 'regular':
        echo 'Regular Customer';
        break;
      case 'tv':
        echo 'From Television advertising.';
        break;
      case 'phone':
        echo 'From Phone Directory';
        break;
      case 'mouth':
        echo 'Word of mouth.';
        break;
      default:
        break;
    }

    echo '<p>Your order is as follows</p>';
    echo $tireQty.' Tire<br/>';
    echo $oilQty.' Oil<br/>';
    echo $sparkQty.' Spark Plugs<br/>'.'<br/>';

    $totalQty = @($tireQty + $oilQty + $sparkQty);
    echo 'Total Quantity: '.$totalQty.'<br/><br/>';

    echo '<p>Prices:<br/>';
    echo 'Tires: '.TIRE_PRICE.'<br/>';
    echo 'Oil: '.OIL_PRICE.'<br/>';
    echo 'Spark Plugs: '.SPARK_PRICE.'<br/><br/>';

    $tireAmount = @($tireQty * TIRE_PRICE);
    $oilAmount = @($oilQty * OIL_PRICE);
    $sparkAmount = @($sparkQty * SPARK_PRICE);

    $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

    echo 'Tire amount: '.$tireAmount.'<br/>';
    echo 'Oil amount: '.$oilAmount.'<br/>';
    echo 'Spark Plug amount: '.$sparkAmount.'<br/>';

    // $otherTotalAmount = $totalAmount;
    // $otherTotalAmount += $oilAmount;
    // echo "Other total amount: ".$otherTotalAmount.'<br/>'.'<br/>';

    $vat = .12;
    $vatableAmount = $totalAmount / (1+$vat);
    $vatAmount = $totalAmount - $vatableAmount;

    echo '<br/>'."VATable amount: ".$vatableAmount.'<br/>';
    echo "VAT Amount: ".$vatAmount.'<br/>'.'<br/>';
    echo "Total Amount: ".$totalAmount.'<br/>'.'<br/>';

    echo 'Amount exceeded 500 but less than 1000? '.($totalAmount > 500 && $totalAmount < 1000? 'Yes' : 'No').'<br/>';


    require_once('view-comp/footer.php');
    ?>

</html>
