<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
    <title>Fibonacci Sequence</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1>Fibonacci Sequence</h1>
            <form action="fibonacci-sequence.php" method="post">
              <?php
                echo "Sequence Length<br>";
                echo '<input type="number" name="seqLength" min="0" class="form-control col-11 float-left"/>';
                echo '<button type="submit" class="btn btn-success col-1 float-right">Submit</button>';

                @($seqLength = $_POST['seqLength'] ? $_POST['seqLength'] : 0);
                echo "<br><br><p>Series Length: $seqLength</p>";

                $noOne = 0;
                $noTwo = 1;

                if ($seqLength < 1) {
                  echo "";
                }else {
                  if ($seqLength  > 0)
                    echo $noOne.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                  if ($seqLength > 1)
                    echo $noTwo.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                  if ($seqLength > 2)
                    for ($iteration=2; $iteration < $seqLength ; $iteration++) {
                      $noThree = $noOne + $noTwo;
                    echo $noThree.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                    $noOne = $noTwo;
                    $noTwo = $noThree;
                  }
                }
                ?>
        </div>
        <div class="card-footer">
          <a class="btn btn-info" href="index.php">Go Back to Index</a>
        </div>
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
