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
          <h3 class="card-title">Caesar Shift</h3>
          <form action = "caesarShift.php" method = "POST">
            Enter Relay Message: <br>
            <input type="text" name="message" required="required"> <br>
            Enter Key: <br>
            <input type="number" name="key" min="1" required="required"> <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

           <?php
           // Note: Insert suppress warnings.
           $rm = $_POST['message'];
           $k = $_POST['key'];

           function shifter($rm, $k) {
             $pasd = "";
             $k = $k % 26;
             if($k < 0) {
               $k += 26;
             }
             $ctr = 0;
             while($ctr < strlen($rm)) {
               $caps = strtoupper($rm{$ctr});
               if(($caps >= "A") && ($caps <= 'Z')) {
                 if((ord($caps) + $k) > ord("Z")) {
                   $pasd .= chr(ord($caps) + $k - 26);
                 } else {
                   $pasd .= chr(ord($caps) + $k);
                 }
               } else {
                 $pasd .= " ";
               }
               $ctr++;
             }
             return $pasd;
           }

           $relayedMessage = shifter($rm, $k);
           echo $relayedMessage;
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