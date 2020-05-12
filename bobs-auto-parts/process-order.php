<?php
require_once 'view/header.php';
require_once 'model/order-service.php';
require_once 'model/process.php';
require_once 'model/products.php';

 ?>

    <div class="container">
      <div class="card mt-3">

        <div class="card-body">
          <h3 class="card-title">Order Result</h3>
          <?php
              echo '<p>Order Processed at';
              echo date(' H:i, jS F Y');
              echo '</p>';

                $tire->__set('qty',$_POST['Tires']);
                $oil->__set('qty',$_POST['Oil']);
                $sparkPlug->__set('qty',$_POST['SparkPlugs']);
                $find = $_POST['find'];


                  switch ($find) {
                    case 'regular':
                      echo "Regular Customer";
                      break;
                    case 'tv':
                      echo "From TV advertisment";
                      break;
                    case 'phone':
                      echo "Phone Directory";
                      break;
                    case 'mouth':
                      echo "Word of Mouth";
                      break;
                    default:
                      echo "Unknown Customer";
                      break;
                  }

                  $tireQty= $tire->__get('qty');
                  $oilQty= $oil->__get('qty');
                  $sparkQty=  $sparkPlug->__get('qty');

                echo '<p>Your order is as follows</p>';
                echo $tireQty.' Tire<br/>';
                echo $oilQty.' Oil<br/>';
                echo $sparkQty.' Spark Plugs<br/>';
                echo "<hr>";

                echo '<p>Prices<br/>';
                echo 'Tires: '.$tire->__get('price').'<br/>';
                echo 'Oil: '.$oil->__get('price').'<br/>';
                echo 'Spark: '.$sparkPlug->__get('price').'<br/><br/>';

                $totalQty = @($tireQty + $oilQty + $sparkQty);

                if($totalQty==0){
                echo "You didn't order anything<br/><br/>";
                }
                echo "Total Qty: ".$totalQty.'<br/><br/>';

                $tireAmount = @($tireQty) * $tire->__get('price');
                $oilAmount = @($oilQty) * $oil->__get('price');
                $sparkAmount = @($sparkQty) * $sparkPlug->__get('price');


                $tiretotal = $tire->__get('price') * $tireQty;
                $oiltotal = $oil->__get('price') * $oilQty;
                $sparktotal = $sparkPlug->__get('price') * $sparkQty;


                echo "Calculation".'<br/>';
                echo "Tires: ".$tire->__get('price')."(BASE PRICE) * ".$tireQty."(QUANTITY) = ".$tiretotal.'<br/>';
                echo "Tires: ".$oil->__get('price')."(BASE PRICE) * ".$oilQty."(QUANTITY) = ".$oiltotal.'<br/>';
                echo "Tires: ".$sparkPlug->__get('price')."(BASE PRICE) * ".$sparkQty."(QUANTITY) = ".$sparktotal.'<br/>';

                // TOTAL
                echo "<hr>";
                $totalAmount = $tiretotal+$oiltotal+$sparktotal;
                echo 'Total Amount: '.$totalAmount.'php<br/><br/>';

                // VAT
                $VATable = $totalAmount*getVAT();
                echo "VAT: ".getVAT().'<br/>';
                echo "VATable Amount: ".$totalAmount.'php<br/>';
                echo "VAT Amount(12%): ".$totalAmount*getVAT().'php<br/>';
                $totalAmount += $VATable;
                echo "Total: ".$totalAmount.'php<br/><br/>';

                saveOrder($tireQty,$oilQty,$sparkQty,$totalAmount);

              ?>
              <div class="card-footer">
                          <a class="btn btn-info"href="order-form.php">Go Back</a>
              </div>
        </div>
      </div>
    </div>


        <?php
        require_once  'view/footer.php';
         ?>
