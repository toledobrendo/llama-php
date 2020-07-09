<?php

if (isset($_POST['book-submit'])) {

  require 'databasehandler.script.php';

  $title = $_POST['title'];
  $name = $_POST['name'];
  $isbn = $_POST['isbn'];
  $imageUrl = $_POST['imageUrl'];

  if (empty($title) && empty($name) && empty($isbn) && empty($imageUrl)) {
    header("Location: ../book-add.php?error=emptyfields");
    exit();
  }

    else if (empty($title)) {
     header("Location: ../book-add.php?error=emptytitle");
     exit();
   }

   else if (empty($name)) {
     header("Location: ../book-add.php?error=emptyname");
     exit();
   }

   else if (empty($isbn)){
     header("Location: ../book-add.php?error=emptyisbn");
     exit();
   }

   else if (empty($imageUrl)){
     header("Location: ../book-add.php?error=emptyimageurl");
     exit();
   }


   else {

     $sql = "SELECT name, id FROM author WHERE name=? ";
     $stmnt = mysqli_stmt_init($connection);
     if(!mysqli_stmt_prepare($stmnt, $sql)){
       header("Location: ../book-add.php?error=sqlerror1");
       exit();
     }

       else {
         mysqli_stmt_bind_param($stmnt, "s", $name);
         mysqli_stmt_execute($stmnt);
         $result = mysqli_stmt_get_result($stmnt);
         $resultCheck = mysqli_stmt_num_rows($stmnt);
         while ($row = mysqli_fetch_assoc($result)) {
          $id = $row["id"];
         }

         if($id != null){//if id is not equal to null it means an author exists and the code will skip to end of "authorexists" code

           $sql = "INSERT INTO book (title, isbn, author_id, pic_url) VALUES (?, ?, ?, ?)";
           $stmnt = mysqli_stmt_init($connection);
           if(!mysqli_stmt_prepare($stmnt, $sql)){
             header("Location: ../book-add.php?error=sqlerror2");
             exit();
           }
           else {

             mysqli_stmt_bind_param($stmnt, "ssis", $title, $isbn, $id, $imageUrl);
             mysqli_stmt_execute($stmnt);
             header("Location: ../book-add.php?success=addedbookexistingauth");


           }
           exit();// end of existing author code
         }

          else{
            $sql = "INSERT INTO author (name) VALUES (?) ";// inserts to database a new author
            $stmnt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmnt, $sql)){
              header("Location: ../signup.php?error=sqlerrorlasts");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmnt, "s", $name);
              mysqli_stmt_execute($stmnt);
            }

            $sql = "SELECT name, id FROM author WHERE name=? ";//get new author id so we can insert it together with the book later
            $stmnt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmnt, $sql)){
              header("Location: ../book-add.php?error=sqlerror1");
              exit();
            }

              else {
                mysqli_stmt_bind_param($stmnt, "s", $name);
                mysqli_stmt_execute($stmnt);
                $result = mysqli_stmt_get_result($stmnt);
                $resultCheck = mysqli_stmt_num_rows($stmnt);
                while ($row = mysqli_fetch_assoc($result)) {
                 $id = $row["id"];//gets the authors id
                }
              }

                     $sql = "INSERT INTO book (title, isbn, author_id, pic_url) VALUES (?, ?, ?, ?) ";
                     $stmnt = mysqli_stmt_init($connection);
                     if(!mysqli_stmt_prepare($stmnt, $sql)){
                       header("Location: ../signup.php?error=sqlerrorlastsss");
                       exit();
                     }
                     else {
                       mysqli_stmt_bind_param($stmnt, "ssis", $title, $isbn, $id, $imageUrl );
                       mysqli_stmt_execute($stmnt);
                       header("Location: ../book-add.php?success=addedbooknewauth");
                       //end of new author code
                     }
                }
     }
   }
     mysqli_stmnt_close($stmnt);
     mysqli_close($connection);

}

else {
  header("Location: ../book-add.php");
  exit();
}
