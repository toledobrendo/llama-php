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
            <center><h1 class="card-title">FIBONACCI SEQUENCE</h1></center>
            <form action="fibonacci-sequence.php" method="post">
              <div>
                <input type="number" name="sequence" min="1" class="col-10" required = "required" placeholder="Enter Number">
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
              <?php
                $fibonacciSeq =  @($_POST['sequence'] ? $_POST['sequence'] : 0);
                  echo 'Sequence Length: '. $fibonacciSeq. '<br/>';

                  $mainValue = 0;
                  $secondValue = 0;
                  $thirdValue = 0;
                  $index;

                  for ($index=1; $index <= $fibonacciSeq ; $index++) {
                    $secondValue = $thirdValue;
                    $thirdValue = $mainValue;

                    if ($index == 1){
                      echo $thirdValue. '&emsp;&emsp;&emsp;';
                      $mainValue += 1;
                      echo $mainValue. '&emsp;&emsp;&emsp;';
                      $index++;
                    } else {
                      $mainValue = $secondValue + $thirdValue;
                      echo $mainValue. '&emsp;&emsp;&emsp;';
                    }
                  }
               ?>
            </form>
            </div>
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
