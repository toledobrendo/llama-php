<?php
  require_once('view-comp/header.php');
  require_once('model/product.php');
  require_once('model/product-list.php');
 ?>
    <h3 class="cart-title">Order Results</h3>
<?php
    echo '<p> Order Processed at ';
    echo date('H:i, jS F Y');
    echo '</p>';
    // PHP Comments

    $tire->__set('quantity', $_POST['tireQty']? $_POST['tireQty']: 0);
    $oil->__set('quantity', $_POST['oilQty']? $_POST['oilQty']: 0);
    $sparkPlugs->__set('quantity',$_POST['sparkQty']? $_POST['sparkQty']: 0);
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
    echo $tire->__get('quantity').' Tire<br/>';
    echo $oil->__get('quantity').' Oil<br/>';
    echo $sparkPlugs->__get('quantity').' Spark Plugs<br/>'.'<br/>';

    $totalQty = @($tire->__get('quantity') + $oil->__get('quantity') + $sparkPlugs->__get('quantity'));
    echo 'Total Quantity: '.$totalQty.'<br/><br/>';

    echo '<p>Prices:<br/>';
    echo 'Tires: '.TIRE_PRICE.'<br/>';
    echo 'Oil: '.OIL_PRICE.'<br/>';
    echo 'Spark Plugs: '.SPARK_PRICE.'<br/><br/>';

    $tireAmount = @($tire->__get('quantity') * TIRE_PRICE);
    $oilAmount = @($oil->__get('quantity') * OIL_PRICE);
    $sparkAmount = @($sparkPlugs->__get('quantity') * SPARK_PRICE);

    $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

    echo 'Tire amount: '.$tireAmount.'<br/>';
    echo 'Oil amount: '.$oilAmount.'<br/>';
    echo 'Spark Plug amount: '.$sparkAmount.'<br/>';

    

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
