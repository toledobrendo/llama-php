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
          <form action="hw2.php" method="post">
            <div class="form-group">
              <label for="formGroupExampleInput">Message</label>
              <input type="text" class="form-control" name="message" id="formGroupExampleInput" placeholder="Enter Message">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Key</label>
              <input type="number" class="form-control" name="key" id="formGroupExampleInput2" min="0" placeholder="Enter Key">
            </div>

          <button type="submit" class="btn btn-danger">Encrypt</button>
          </form>

          <?php
            // Note: Spaces were not handled. ex. "hello world", 1 key yields "IFMMPBXPSME"
            $message = @($_POST['message']);
            $key = @($_POST['key']);

            $message = strtoupper($message);
            $message = str_split($message);
            $counter = count($message);
            $alphabet  = range("A","Z");
            $cipher = array();

            for($count = 0; $count < $counter; $count++){

                $cipher[$count] = array_search($message[$count],$alphabet,true);
                $cipher[$count] += $key;

                $cipher[$count] = $alphabet[$cipher[$count]];
                $message[$count] = $cipher[$count];

              }

            echo "Message: ";
            for ($count=0; $count < $counter; $count++) {
              echo $message[$count];
            }

           ?>
      </div>
    </div>
  </div>
 
</body>
</html>