<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-body">
          <h2 class="card-title">Caesar Shift</h2>
          <form action="caesar-shift.php" method="post">
            <div class="form-group">
              <label for="caesarShift">Enter Message:</label>
              <input type="text" class="form-control" name="messageEnter" placeholder="Enter Message" required="required">
            </div>
            <div class="form-group">
              <label for="key">Enter Key</label>
              <input type="text" class="form-control" name="keyEnter"  placeholder="Enter Key" required="required">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>

          <?php

            
              $messageEnter = @($_POST['messageEnter']);
              $keyEnter = @($_POST['keyEnter']);

              $messageEnter = strtoupper($messageEnter);
              $messageEnter = str_split($messageEnter);
              $counter = count($messageEnter);
              $letterAlphabet = range("A","Z");
              $cipher = array();


              for ($count=0; $count < $counter; $count++) {

                  $cipher[$count] = array_search($messageEnter[$count],$letterAlphabet,true);
                  $cipher[$count] += $keyEnter;
                  $cipher[$count] = $letterAlphabet[$cipher[$count]];
                  $messageEnter[$count] = $cipher[$count];
              }
              


              if(isset($_POST['submit'])){
                  for ($count = 0; $count < $counter; ++$count){
                    echo $messageEnter[$count];
                  }
                }

           ?>

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
