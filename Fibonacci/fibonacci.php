<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
crossorigin="anonymous">
<title>Fibonacci Generator</title>
</head>
  <body>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Fibonacci Sequence</h2>
          Length of Sequence:
          <br><br>
          <form action="fibonacci.php" method="post">
            <div>
              <input type="number" name="sequence" class="col-5" min="1"
              placeholder="Enter Length" required="required">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            <?php
                $fiboSequence = @($_POST['sequence'] ? $_POST['sequence'] : 0);
                echo "<br/>Series Length: ".$fiboSequence.'<br/><br/>';

                $seqValue = 0;
                $val = 0;
                $val2 = 0;

                while($i != $fiboSequence){
                  $val2 = $val;
                  $val = $seqValue;

                    if($i == 1){
                      echo $val;
                      $seqValue += 1;
                      echo $seqValue;
                      $i++;
                    } else {
                      $seqValue = $val + $val2;
                      echo $seqValue;
                    }

                }

             ?>

        </form>
      </div>
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
