<html>

<head>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--Javascript-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
   <div class="container">
      <div class="card bg-light mb-3">
         <form action="caesar-shift.php" method="post">
            <div class="card-body">
               <h3 class="card-title">CAESAR SHIFT</h3>
               <div class=form-group>
                  <label for="message">Message:</label>
                  <input type="text" class="form-control" name="message" placeholder="Enter message">
                  </input>
               </div>
               <div class=form-group>
                  <label for="key">Key:</label>
                  <input type="number" class="form-control" name="key" placeholder="Enter key number">
               </div>


<div class=form-group>
<!-- getting the value -->
<?php
  if(isset($_POST['message']) && isset($_POST['key'])) {
    $message = $_POST['message'];
    $key = $_POST['key'];

    $message = strtoupper($message);
    $splitMessage = str_split($message);
    $arraySize = count($splitMessage);


    for($letterIndex = 0; $letterIndex < $arraySize; $letterIndex++) {
        for($stepCount = 0; $stepCount < $key; $stepCount++) {
            if($splitMessage[$letterIndex] != "Z") {
              $splitMessage[$letterIndex]++;
            } else {
              $splitMessage[$letterIndex] = "A";
            }
        }
    }

      echo "<strong> Caesar Shift Result: </strong>";
      foreach($splitMessage as $encryptedMessage) {
        echo $encryptedMessage;

      }
        $splitMessage = array();
      }
?>
</div>
</div>
          <div class="card-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>

         </form>
      </div>
   </div>
</body>

</html>
