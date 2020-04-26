<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="col-12">
            <h2>Caesar Shift</h2>
            <p>Message</p>
            <form method="POST" action="index.php">
              <input type="textarea" name="message" class="form-control"/>
              <br>
              <p>Key</p>
              <input type="number" name="key" class="form-control"/>
              <br>
              <?php
                $message = @($_POST['message']? $_POST['message'] : null);
                $key = @($_POST['key']? $_POST['key'] : null);

                $letters = range('A','Z');

                if($key > count($letters)){
                  $key = $key % count($letters);
                }

                  if(isset($message)){
                    $message = strtoUpper($message);
                    $arrayMessage = str_split($message);

                    foreach($arrayMessage as &$charValue){
                      $index = array_search($charValue,$letters);
                      if($index == 'A' || $index != false){
                        $charValue = $letters[$index + $key];
                      }
                    }

                  }//end of if(isset($message))

                  echo 'Result: ';
                  foreach(@($arrayMessage) as $value){
                    echo @($value);
                  }

              ?>
              <button type='submit' class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
