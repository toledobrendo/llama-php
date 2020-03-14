<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9"></script>
</head>
<!--hello-world.php or hello_world.php -->

<body>
   <div class="container">
      <div class="card">
         <div class="card-body">
            <h3 class="card-title">Order Result</h3>
            <?php
               echo '<p>Order processed at</p>';
               echo date ('H:i, jS F Y');
               echo '</p>';

               // PHP Comments
               /**Multiline Comments
                * asd
                asd
                */

                $tireQty = $_POST['tireQty'];
                $oilQty = $_POST['oilQty'];
                $sparkQty = $_POST['sparkQty'];

                echo '<p>Your order is as follows</p>';
                echo $tireQty.' tires.<br/>';
                echo $oilQty.' bottles of oil<br/>';
                echo $sparkQty.' spark plugs<br/>';
               ?>

         </div>
      </div>
   </div>


</body>

</html>