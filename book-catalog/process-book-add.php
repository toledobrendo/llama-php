<?php
require_once('view-comp/header.php');
?>

<div class="card-header">
  Add Book Result
</div>
<div class="card-body">
  <?php
  $bookName = $_POST['bookName'];
  $authorName = $_POST['authorName'];
  $isbn = $_POST['isbn'];
  $bookImage = $_POST['imgSrc'];

  try{
    if (!$bookName && !$authorName && !$isbn) {
      throw new Exception('Entered details not complete. Please try again.');
    }

    @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

    $dbError = mysqli_connect_errno();
    if ($dbError) {
      throw new Exception('Error: Could not connect to database. Please try again later.');
    }

    $query = "SELECT `id` FROM `author` WHERE `name` = ?";
    $prepStat = $db->prepare($query);
    $prepStat->bind_param('s',$authorName);
    $prepStat->execute();
    $result = $prepStat->get_result();

    if($result->num_rows > 0){ //there is existing author.
      $authorName = implode("",$result->fetch_assoc());
      $prepStat->close();
      addBook($bookName,$isbn,$authorName,$bookImage);
    }else{ //author not found, creating one.
      $prepStat->close();
      $query = 'INSERT INTO AUTHOR(NAME) VALUES(?)';
      $prepStat = $db->prepare($query);
      $prepStat->bind_param('s',$authorName);
      $prepStat->execute();
      $prepStat->close();
      $authorName = getAuthorName($authorName);
      addBook($bookName,$isbn,$authorName,$bookImage);
    }

  } catch (Exception $e) {
    error_log($e->getMessage());
    echo $e->getMessage();
  }
  ?>

  <?php

   function addBook($bookName,$isbn,$authorName,$bookImage){
     @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');
     $query = "INSERT INTO `book`(`title`, `isbn`,`author_id`,`imgSrc`)
               VALUES (?,?,?,?)";
     $prepStat = $db->prepare($query);
     $prepStat->bind_param('siis',$bookName,$isbn,$authorName,$bookImage);
     $prepStat->execute();

     if($prepStat->affected_rows > 0){
       echo "Book successfully added.";
     }else{
       throw new Exception('Book add fail.');
     }
     $prepStat->close();
   }

   function getAuthorName($authorName){
      @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');
     $query = "SELECT `id` FROM `author` WHERE `name` = ?";
     $prepStat = $db->prepare($query);
     $prepStat->bind_param('s',$authorName);
     $prepStat->execute();
     $result = $prepStat->get_result();
     if($result->num_rows > 0){ //there is existing author.
       $authorName = implode("",$result->fetch_assoc());
       $prepStat->close();
       return $authorName;
   }
 }
   ?>

  <br/>
  <a class="btn btn-secondary" href="book-add.php">Back</a>
</div>

<?php
require_once('view-comp/footer.php');
?>
