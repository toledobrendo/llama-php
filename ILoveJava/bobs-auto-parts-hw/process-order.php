  <?php
    require_once('view/header.php');
    require_once('model/ProductBean.php');
    require_once('model/list-of-products.php');
   ?>
   <body class="container">
          <h3 class="card-title">Order Result</h3>
          <div class="container" style="display: block; margin-left: auto;margin-right: auto;">
          <?php
              echo '<p>Order Processed at ';
              echo date('H:i, jS F Y');
              echo '</p>';

              // PHP Comments
              /**Multiline Comments
                Wow**/

                $tire->__set('quantity', $_POST['tireQty']? $_POST['tireQty']: 0);
                $oil->__set('quantity', $_POST['oilQty']? $_POST['oilQty']: 0);
                $sparkPlugs->__set('quantity',$_POST['sparkQty']? $_POST['sparkQty']: 0);
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

              //Quantity CODESSSS
              echo '<p>Your order is as follows</p>';
              echo $tire->__get('quantity').' Tire<br/>';
              echo $oil->__get('quantity').' Oil<br/>';
              echo $sparkPlugs->__get('quantity').' Spark Plugs<br/>'.'<br/>';

              $totalQty = @($tire->__get('quantity') + $oil->__get('quantity') + $sparkPlugs->__get('quantity'));
              echo 'Total Quantity: '.$totalQty.'<br/><br/>';

              //Getting the pricessssss
              echo '<p>Prices:<br/>';
              echo 'Tires: '.TIRE_PRICE.'<br/>';
              echo 'Oil: '.OIL_PRICE.'<br/>';
              echo 'Spark Plugs: '.SPARK_PRICE.'<br/><br/>';

              $tireAmount = @($tire->__get('quantity') * TIRE_PRICE);
              $oilAmount = @($oil->__get('quantity') * OIL_PRICE);
              $sparkAmount = @($sparkPlugs->__get('quantity') * SPARK_PRICE);

              $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

              //Sysout of Items
              echo 'Tire amount: '.$tireAmount.'<br/>';
              echo 'Oil amount: '.$oilAmount.'<br/>';
              echo 'Spark Plug amount: '.$sparkAmount.'<br/>';

              //Computing the vat
              $vat = .12;
              $vatableAmount = $totalAmount / (1+$vat);
              $vatAmount = $totalAmount - $vatableAmount;

              //Sysout of VAT computed
              echo '<br/>'."VATable amount: ".$vatableAmount.'<br/>';
              echo "VAT Amount: ".$vatAmount.'<br/>'.'<br/>';
              echo "Total Amount: ".$totalAmount.'<br/>'.'<br/>';
              echo 'Amount exceeded 500 but less than 1000? '.($totalAmount > 500 && $totalAmount < 1000? 'Yes' : 'No').'<br/>';
              require_once('view/footer.php');
            ?>
          </div>
      </body>
</html>
