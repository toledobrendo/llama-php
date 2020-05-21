<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
   <div class="container">
      <div class="card">
         <form action="caesar-cipher.php" method="post">
            <div class="card-body">
               <h3 class="card-title">Caesar Cipher</h3>
               <div class=form-group>
                  <label for="message">Message</label>
                  <textarea class="form-control" name="plaintext" rows="3" placeholder="Enter message to encrypt"></textarea>
               </div>
               <div class=form-group>
                  <label for="key">Key</label>
                  <input type="number" class="form-control" name="key" placeholder="Enter key">
               </div>

               <?php
               //GOOD DAY TO YOU!
               if (!empty($_POST['plaintext'])) {
                  
                  $plaintext = $_POST['plaintext'];
                  $key  =  $_POST['key'] ? $_POST['key'] : 0;
                  $key = $key % 26; //TO "WRAP AROUND"
                  if($key<0){
                     $key = $key+26;
                  }

                  $plaintext = strtoupper($plaintext); //CAPITALIZE ALL CHARACTERS
                  $strArray = str_split($plaintext); //TURNS STRING TO ARRAY OF STRINGS, 1 CHARACTER PER ELEMENT
                  // foreach ($strArray as $char) { //TESTING - LOOPS THROUGH THE ARRAY
                  //    echo $char;
                  // }

                  echo '<p>Result: ';
                  $encryptedMessage='';
                  for ($index = 0; $index < strlen($plaintext); $index++) { //TO GET EACH CHAR IN STRING
                     $byte = ord($plaintext[$index]);
                     if (ctype_alpha($byte)) { //CHECKS IF CHAR IS IN ALPHABET
                        $byte = $byte + $key; //ADDS OFFSET/ROTATION
                        if($byte>90){//CHECKS IF IT'S NOT CAPITAL ANYMORE
                           $byte=$byte-26;//TO MAKE IT GO BACK TO CAPITAL LETTERS
                        }
                     }

                     $encryptedByte = chr($byte); //CASTS ASCII BACK TO STRING

                     $encryptedMessage = $encryptedMessage.$encryptedByte;
                  }
                  echo $encryptedMessage;
                  echo '</p>';
               }
               ?>
            </div>
            <div class="card-footer">
                <!--Note: Typo-->
               <button type="submit" class="btn btn-primary">Susbmit</button>
               <a class="btn btn-secondary" href="index.php">Go Back</a>
            </div>
         </form>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>