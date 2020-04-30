<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
    <title>Caesar Shift</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1>Caesar Shift</h1>
            <form action="caesar-shift.php" method="post">
              <?php
                echo "Message<br>";
                echo '<input type="text" name="message" class="form-control col-12 float-left"/><br><br>';
                echo "Key<br>";
                echo '<input type="number" name="key" min="0" max="25" class="form-control col-12 float-left"/><br><br>';
                echo '<button type="submit" class="btn btn-primary col-1">Submit</button>';

                @($message = str_split(strtoupper($_POST['message'] ? $_POST['message'] : 0)));
                @($key = $_POST['key'] ? $_POST['key'] : 0);

                $count = count($message);
                $alphabet = range('A','Z');
                $ptr = 0;
                $newPtr = 0;

                for ($ptr=0; $ptr < $count ; $ptr++) {
                  $newPtr = array_search($message[$ptr], $alphabet);
                  if($newPtr>-1){
                    $message[$ptr] = $alphabet[$newPtr+$key];
                  }
                }

                echo "<br><br>Result: ";

                for ($i=0; $i < $count ; $i++) {
                  echo $message[$i];
                }

              ?>
        </div>
        <div class="card-footer">
          <a class="btn btn-info" href="../index.php">Go Back to Index</a>
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
