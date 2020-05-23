<!DOCTYPE html>
<html>

<head>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--Javascript-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
   <div class="container">
      <div class="card bg-light mb-3">
         <form action="caesar-shift.php" method="post">
            <div class="card-body">
               <h3 class="card-title">Caesar Shift:</h3>
               <div class=form-group>
                  <label for="message">Enter your encrypt message:</label>
                  <textarea class="form-control" name="text" placeholder="Enter message">
                  </textarea>
               </div>
               <div class=form-group>
                  <label for="key">Enter Key:</label>
                  <input type="number" class="form-control" name="key" placeholder="Enter key">
               </div>
            

<div class=form-group>
<!-- getting the value -->
<?php
  if (!empty($_POST['text'])) {
                  
    $text = $_POST['text'];
    $key  =  $_POST['key'] ? $_POST['key'] : 0;
    $key = $key % 26; 
      if($key<0){
        $key = $key+26;
      }


    $text = strtoupper($text); 
    $strArray = str_split($text);
      echo '<p>Caesar Shift Result: ';
      $encryptedMessage='';
        for ($index = 0; $index < strlen($text); $index++) { 
          $byte = ord($text[$index]);
            if (ctype_alpha($byte)) { 
              $byte = $byte + $key; 
                if($byte>90){
                  $byte=$byte-26;
                }
            }

              $encryptedByte = chr($byte); 
              $encryptedMessage = $encryptedMessage.$encryptedByte;

      // Note: If input is "Hello World", only "Hello" is encrypted
      // Assignment awfully similar to JC
      $output = "";
    	$inputArr = str_split($mes);
      foreach ($inputArr as $char){
        if (!ctype_alpha($char)){
          $output = $char;
        } else {
          $offset = ord(ctype_upper($char) ? 'A' : 'a');
          $output .= chr(fmod(((ord($char) + $num) - $offset), 26) + $offset);
 d9f7d55e3bd8288b00ee69d9f7f112a710546d09
        }
              echo $encryptedMessage;
              echo '</p>';
  }
?>
</div>
</div>
          <div class="card-footer">
               <button type="submit" class="btn btn-link">Submit</button>
            </div>

         </form>
      </div>
   </div>
</body>

</html>