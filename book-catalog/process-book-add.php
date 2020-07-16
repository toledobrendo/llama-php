<?php

// Note: Observe proper indention
$server = "localhost";
$dBUser = "root";
$dbPass = "";
$dBName = "php_lesson_db";

$connection = mysqli_connect($server, $dBUser, $dbPass, $dBName);

if(!$connection){
  die("Cannot connect to db: ".mysqli_connect_error());
}


 $bookTitle = $_POST['bookTitle'];
 $bookName = $_POST['bookName'];
 $bookIsbn = $_POST['bookIsbn'];
 $picUrl = $_POST['picUrl'];


     $sql = "SELECT name, id FROM author WHERE name=? ";

     $prepstmnt = mysqli_stmt_init($connection);
     if(!mysqli_stmt_prepare($prepstmnt, $sql)){
       header("Location: addbookfail.php");
       exit();
     }

     else {
       mysqli_stmt_bind_param($prepstmnt, "s", $bookName);
       mysqli_stmt_execute($prepstmnt);
       $sqlResult = mysqli_stmt_get_result($prepstmnt);
       $sqlResultCheck = mysqli_stmt_num_rows($prepstmnt);
       while ($sqlColumn = mysqli_fetch_assoc($sqlResult)) {
        $authId = $sqlColumn["id"];
       }

      if($authId != null){

       $sql = "INSERT INTO book (title, isbn, author_id, pic_url)
       VALUES (?, ?, ?, ?)";

       $prepstmnt = mysqli_stmt_init($connection);
       if(!mysqli_stmt_prepare($prepstmnt, $sql)){
         header("Location: addbookfail.php");
         exit();
       }
       else {

         mysqli_stmt_bind_param($prepstmnt, "ssis", $bookTitle, $bookIsbn, $authId, $picUrl);
         mysqli_stmt_execute($prepstmnt);
         header("Location: successexist.php");

       }
       exit();
     }

      else{
        $sql = "INSERT INTO author (name)
        VALUES (?) ";

        $prepstmnt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($prepstmnt, $sql)){
          header("Location: addbookfail.php");
          exit();
        }
        else {
          mysqli_stmt_bind_param($prepstmnt, "s", $bookName);
          mysqli_stmt_execute($prepstmnt);
        }

        $sql = "SELECT name, id FROM author WHERE name=? ";

        $prepstmnt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($prepstmnt, $sql)){
          header("Location: addbookfail.php");
          exit();
        }

        else {
          mysqli_stmt_bind_param($prepstmnt, "s", $bookName);
          mysqli_stmt_execute($prepstmnt);
          $sqlResult = mysqli_stmt_get_result($prepstmnt);
          $sqlResultCheck = mysqli_stmt_num_rows($prepstmnt);
          while ($sqlColumn = mysqli_fetch_assoc($sqlResult)) {
           $authId = $sqlColumn["id"];
          }
        }

         // Note: This lines of code repeats line 40. Find a way to minimize repetition of code.
         $sql = "INSERT INTO book (title, isbn, author_id, pic_url)
         VALUES (?, ?, ?, ?) ";

         $prepstmnt = mysqli_stmt_init($connection);
         if(!mysqli_stmt_prepare($prepstmnt, $sql)){
           header("Location: addbookfail.php");
           exit();
         }
         else {
           mysqli_stmt_bind_param($prepstmnt, "ssis", $bookTitle, $bookIsbn, $authId, $picUrl );

           mysqli_stmt_execute($prepstmnt);

           header("Location: successnew.php");

         }
        }
     }

     mysqli_stmnt_close($prepstmnt);
     mysqli_close($connection);
