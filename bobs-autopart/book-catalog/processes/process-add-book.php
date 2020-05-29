<?php require_once('../view-comp/header.php');?>

<?php require_once('../DB_Connection.php'); ?>

<!-- BOOK ADD CODE -->
<?php

  //
  $bookTitle = mysqli_real_escape_string($db,$_POST['bookTitle']);
  $authorName = mysqli_real_escape_string($db,$_POST['authorName']);
  $ISBN = mysqli_real_escape_string($db,$_POST['ISBN']);
  $imgPath = mysqli_real_escape_string($db,$_POST['imgPath']);

  // Check if user has an input if not then throw an exception
  try {
    if (!$bookTitle){
      throw new Exception('You have not entered an book title. Please go back and try again.');
    }
    else if(!$authorName){
      throw new Exception('You have not entered an author name. Please go back and try again.');
    }
    else if(!$ISBN){
      throw new Exception('You have not entered an ISBN. Please go back and try again.');
    }
    else if(!$imgPath){
      throw new Exception('You have not entered an imgURL. Please go back and try again.');
    }
  // SQL statement for finding an existing author
  $sql = "SELECT * FROM author WHERE name = '$authorName' ";

  //Execute Query
  $result = $db->query($sql);

  //Get the number of rows
  $resultCount = $result->num_rows;

  // Find the ID on the database
  $row = $result->fetch_assoc();
  // If authorID found an ID then author is exisiting
  $authorID = $row['id'];

  // If author found
  if($resultCount == 1){
    echo "Author is already on database<br>";
    $stmnt_insert_book = "INSERT INTO book (title, isbn, author_id, imgPath) VALUES
    ('$bookTitle', '$ISBN', '$authorID', '$imgPath')";
    $result_insert_book = mysqli_query($db,$stmnt_insert_book);
    // If successfuly executed and added
    if ($result_insert_book > 0) {
      echo "<br><strong>Data succesfully inserted into the database.</strong>";
    } else { // If error
      throw new Exception('<br><strong>Error: Data was not added on database.</strong>');
    }
   }
   // If not then create author based upon input of user
   else{
    // Statement for inserting author input on author table
    $stmnt_insert_author = "INSERT INTO author (name)  VALUES ('$authorName') ";
    // Execute query
    $result_insert_author = $db->query($stmnt_insert_author);

    // Statement to find the author on the author table
    $stmnt_find_author = "SELECT * FROM author WHERE name = '$authorName' ";
    // Find the authorID on the table
    $result_find_author = $db->query($stmnt_find_author);

    $row2 = $result_find_author->fetch_assoc();
    //Then insert it on authorID variable
    $authorID = $row2['id'];

    //SQL STATMENT FOR INSERTION
    $stmnt_insert_book = "INSERT INTO book (title,isbn,author_id,imgPath) VALUES
    ('$bookTitle', '$ISBN', '$authorID', '$imgPath')";
    // Execute Query
    $result_insert_book = $db->query($stmnt_insert_book);

    if ($result_insert_book > 0) {// if successful
    echo "<br><strong>Data succesfully inserted into the database.</strong>";
    } else { //If not
        throw new Exception('<br><strong>Error: Data was not added on database.</strong>');
    }
   }

 }catch(Exception $e){
   echo $e->getMessage();
 }
 ?>
<br><br>
<!-- Shows Inserted Data -->
<?php
  echo "Your input data is as follows: <br>";
  echo "Book Title: ".$bookTitle."<br>";
  echo "Author Name: ".$authorName."<br>";
  echo "ISBN: ".$ISBN."<br>";
  echo "Img Path: ".$imgPath."<br>";
 ?>
<br><br>
<a href="../add-book.php">
  <button type="button" class="btn btn-info">Go Back</button>
</a>

<?php require_once('../view-comp/footer.php');?>
