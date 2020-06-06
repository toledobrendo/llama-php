  <?php
    require_once('view/header.php');
    require_once('model/ProductBean.php');
    require_once('model/list-of-products.php');
    require_once('service/orderService.php');
   ?>
   <!-- Note: Better to place this on an external .css file -->
   <style>
   .flip-card {
     background-color: transparent;
     width: 250px;
     height: 250px;
     perspective: 1000px;
   }

   .flip-card-inner {
     position: relative;
     width: 100%;
     height: 100%;
     text-align: center;
     transition: transform 0.6s;
     transform-style: preserve-3d;
     box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   }

   .flip-card:hover .flip-card-inner {
     transform: rotateY(180deg);
   }

   .flip-card-front, .flip-card-back {
     position: absolute;
     width: 100%;
     height: 100%;
     -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
   }

   .flip-card-front {
     background-color: #bbb;
     color: black;
   }

   .flip-card-back {
     background-color: #dddfd4;
     color: white;
     transform: rotateY(180deg);
     padding-left: 20px;
     padding-right: 20px;
   }

   .glow {
     font-size: 24px;
     color: #fae596;
     text-align: center;
     -webkit-animation: glow 1s ease-in-out infinite alternate;
     -moz-animation: glow 1s ease-in-out infinite alternate;
     animation: glow 1s ease-in-out infinite alternate;
   }

   @-webkit-keyframes glow {
     from {
       text-shadow: 0 0 10px #fae596, 0 0 20px #fae596, 0 0 30px #3fb0ac, 0 0 40px #3fb0ac, 0 0 50px #3fb0ac, 0 0 60px #3fb0ac, 0 0 70px #3fb0ac;
     }

     to {
       text-shadow: 0 0 20px #fae596, 0 0 30px #173e43, 0 0 40px #173e43, 0 0 50px #173e43, 0 0 60px #173e43, 0 0 70px #173e43, 0 0 80px #173e43;
     }
   }
   </style>
   <body class="container">
          <h3 class="card-title"><span class="glow">Order Result</span></h3>
          <div class="container">
          <?php
              echo '<p>Order Processed at ';
              echo date('H:i, jS F Y');
              echo '</p>';

              // setting classes

                $tire->__set('quantity', $_POST['tireQty']? $_POST['tireQty']: 0);
                $oil->__set('quantity', $_POST['oilQty']? $_POST['oilQty']: 0);
                $sparkPlugs->__set('quantity',$_POST['sparkQty']? $_POST['sparkQty']: 0);

                //similar with the activity in bobs auto part
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
              //getting the quantity
              $tireQty = $tire->__get('quantity');
              $oilQty = $oil->__get('quantity');
              $sparkPlugsQty = $sparkPlugs->__get('quantity');
              //sysout of the quantity
              ?>

              <section id="about">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6" style="border-style: solid; box-shadow: 10px 10px 5px grey;">
                      <h2>Your order is as follows</h2>
                      <p class="order">
                        <?php
                        echo '<p>Your order is as follows</p>';
                        echo '- '.$tireQty.' Tire<br/>';
                        echo '- '.$oilQty.' Oil<br/>';
                        echo '- '.$sparkPlugsQty.' Spark Plugs<br/>'.'<br/>';

                        $totalQty = @($tireQty + $oilQty + $sparkPlugsQty);
                        echo 'Total Quantity: '.$totalQty.'<br/><br/>';
                        ?>
                      </p>
                    </div>
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-4" style="border-style: solid; box-shadow: 10px 10px 5px grey;">
                      <h2><strong>Prices:</strong></h2>
                      <p class="prices"><strong>Mission:</strong><br />
                        <?php
                        //Getting the pricessssss
                        //defined prices from list-of-products and sysout
                        echo '<p>:<br/>';
                        echo 'Tires: '.TIRE_PRICE.'<br/>';
                        echo 'Oil: '.OIL_PRICE.'<br/>';
                        echo 'Spark Plugs: '.SPARK_PRICE.'<br/><br/>';
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
              </section>
              <br /><br /><br />
              <center>
                <div class="card">
                  <div class="card-body">
                        <?php
                        //computing for the prices
                        $tireAmount = @($tireQty * TIRE_PRICE);
                        $oilAmount = @($oilQty * OIL_PRICE);
                        $sparkAmount = @($sparkPlugsQty * SPARK_PRICE);
                        $totalAmount = (float) $tireAmount + $oilAmount + $sparkAmount;

                        //Sysout of Items
                        echo 'Tire amount: '.$tireAmount.'<br/>';
                        echo 'Oil amount: '.$oilAmount.'<br/>';
                        echo 'Spark Plug amount: '.$sparkAmount.'<br/>';

                        //Computing the vat
                        $VAT_PERCENT = doubleval(getProperty("VAT_PERCENT"));
                        $VATable = $totalAmount / $VAT_PERCENT;
                        $VAT = $totalAmount - $VATable;

                        //Sysout of VAT computed
                        echo '<br/>'."VATable amount: ".$VATable.'<br/>';
                        echo "VAT Amount: ".$VAT.'<br/>'.'<br/>';
                        echo "Total Amount: ".$totalAmount.'<br/>'.'<br/>';
                        echo 'Amount exceeded 500 but less than 1000? '.($totalAmount > 500 && $totalAmount < 1000? 'Yes' : 'No').'<br/><br/>';
                        saveOrder($tireQty, $oilQty,
                        $sparkPlugsQty, $totalAmount);
                      ?>
                  </div>
                </div>
              </center>
            <div class="card-footer">
              <a class="btn btn-info" href="order-form.php">Go Back</a>
            </div>
            <?php require_once('view/footer.php'); ?>
