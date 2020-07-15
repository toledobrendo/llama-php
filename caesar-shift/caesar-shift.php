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
              <label for="messageInput">Message</label>
                <!-- Note: Should accept spaces -->
              <input type="text" class="form-control" name="message" id="messageInput" placeholder="Enter The Message" required = "required" pattern="[A-Za-z]*">
            </div>
            <div class="form-group">
              <label for="keyInput">Key</label>
              <input type="number" class="form-control" name="key" id="keyInput" min="0" placeholder="Enter The Key" required = "required">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          <?php

            $message = @($_POST['message']);
            $key = @($_POST['key']);

            $upperMessage = strtoupper($message);
            $arrayMessage = str_split($upperMessage);
            $count = count($arrayMessage);
            $alphabet = range("A","Z");
            $cipher = array();

            for ($ctr=0; $ctr < $count; $ctr++) {

              if (!(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $arrayMessage[$ctr]) || ctype_space($arrayMessage[$ctr]))){

                $cipher[$ctr] = array_search($arrayMessage[$ctr],$alphabet,true);
                @$cipher[$ctr] += $key;
                $cipher[$ctr] = $alphabet[$cipher[$ctr]];
                $arrayMessage[$ctr] = $cipher[$ctr];
              }
            }


            echo "Message:&emsp;";
            for ($ctr=0; $ctr < $count; $ctr++) {
              echo $arrayMessage[$ctr];
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