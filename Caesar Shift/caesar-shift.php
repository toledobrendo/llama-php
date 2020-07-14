<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
     <body>

       <div class="container">
         <div class="card">
           <div class="card-body">
             <h2 class="card-title">Caesar Shift</h2>
             <form action="caesar-shift.php" method="post">
               <div class="form-group">
                 <label for="caesarMessage">Message</label>
                 <input type="text" class="form-control" name="sentence" required="required" placeholder="Enter message">
               </div>
               <div class="form-group">
                 <label for="key">Key</label>
                 <input type="text" class="form-control" name="key" required="required" placeholder="Enter Key">
               </div>

               <button type="submit" name="submit" class="btn btn-success">Submit</button>
              </form>

               <!-- Note: Spaces were not encrypted properly.
               "Hello world", with key 1, yields "IFMMPBXPSME"-->
               <?php
                 $sentence = @$_POST['sentence'];
                 $key = @$_POST['key'];
                 $sentence = strtoupper($sentence);
                 $sentence = str_split($sentence);
                 $index = count($sentence);
                 $letters = range("A", "Z");
                 $cipher = array();

                  for ($count = 0; $count < $index; ++$count){
                    $cipher[$count] = array_search($sentence[$count], $letters,true);
                    $cipher[$count] += $key;

                    $cipher[$count] = $letters[$cipher[$count]];
                    $sentence[$count] = $cipher[$count];
                  }

                  if(isset($_POST['submit'])){
                  for ($count = 0; $count < $index; ++$count){
                    echo $sentence[$count];
                  }
                }
                ?>
    </div>
  </div>
</div>
</body>
</html>
