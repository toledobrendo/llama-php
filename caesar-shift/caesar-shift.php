<html>
<head>
  <!-- does not allow form resubmission; upon pressing F5, input will refresh. -->
  <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
  crossorigin="anonymous">
</head>
<body>

  <div class = "container">
    <div class="card">
      <div class="card-body">
        <h1> Caesar Shift </h1>
          <form method="post">
            <div class="form-group">
              <label for="message">Message</label>
              <!-- use pattern so that only those within its range is allowed to be inputted from the user -->
              <input type="text" class="form-control" name="message"  placeholder="Enter message" pattern = "^[a-zA-Z-_]+( [a-zA-Z-_]+)*$" value="<?php if (isset($_POST['message'])) {echo htmlentities ($_POST['message']); }?>" style="height: 100px;" required>
              <!-- NOTE: textarea does not allow pattern; create your own function if you must. <textarea class="form-control" name="message" rows="3" placeholder="Enter message" pattern = "[A-Za-z]" required></textarea> -->
            </div>

            <div class="form-group">
              <label for="key">Key</label>
              <input type="number" class="form-control" name="key" min = "0" placeholder="Enter key" value="<?php if (isset($_POST['key'])) {echo htmlentities ($_POST['key']); }?>" required>
            </div>

            <button type = "submit" name = "submit" class="btn btn-primary">Submit</button>

            <br/> <br/> Result:
        	<?php
            function encrypt($msg, $key){
              if(!ctype_alpha ($msg))
                return $msg;

              $enc = ord(ctype_upper($msg) ? 'A' : 'a');
              return chr(fmod(((ord($msg) + $key) - $enc), 26) + $enc);
            }

            function cipher($input, $key){
              $result = " ";

              $inputArr = str_split($input);
              foreach ($inputArr as $msg) {
                $result .= encrypt($msg, $key);
              }

              return strtoupper($result);


            }

            $input = @($_POST['message']);
            $key = @($_POST['key']);

            echo cipher($input, $key);
        	?>

          </form>

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
