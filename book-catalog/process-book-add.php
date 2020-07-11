<?php
  require_once('view-comp/header.php');
 ?>
 <div class="card-header">
   Add Book Result
 </div>
 <div class="card-body">
   <?php
    try{
      $bookName = $_POST["bookName"];
      $authorName = $_POST["authorName"];
      $ISBN = $_POST["ISBN"];
      $bookImg = $_POST["bookImg"];


      if(!$bookName) {
        throw new Exception("Book title missing. Please try again.");
      } else if (!$authorName){
        throw new Exception("Book author missing. Please try again.");
      } else if (!$ISBN){
        throw new Exception("Book ISBN missing. Please try again.");
      } else if (!$bookImg){
        throw new Exception("Book image missing. Please try again.");
      }

      //connect to db
      @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if($dbError){
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }


      //searching if author exists
      $query = "select * from author where name = '$authorName'";
      $result = mysqli_query($db, $query);
      $resultCount = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $resultCount = mysqli_num_rows($result);
      $authorId = $row['id'];

      if(mysqli_num_rows($result) > 0 ){ //author is existing
        echo "author found in the database.";
        insertBook($bookName, $ISBN, $bookImg, $authorId);
      } else { //author does not exist
        //put new author to db
        $sql = "insert into author (name) values ('$authorName')";
        $result = mysqli_query($db, $sql);

        $sql = "select * from author where name = '$authorName'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $authorId = $row['id'];
        insertBook($bookName, $ISBN, $bookImg, $authorId);
      }

      } catch(Exception $e){
        echo $e->getMessage();
      }
    ?>

    <?php
      function insertBook($bookName, $ISBN, $bookImg, $authorId){
        @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

        $dbError = mysqli_connect_errno();
        if($dbError){
          throw new Exception('Error: Could not connect to database. Please try again later.');
        }

        //inserting book details
        $query = 'insert into book (title, ISBN, image_url, author_id) values (?,?,?,?)';
        $statement = $db->prepare($query);
        $statement->bind_param("ssss", $bookName, $ISBN, $bookImg, $authorId);
        $statement-> execute();

        if($statement-> affected_rows > 0) {
            echo $statement->affected_rows." book successfully inserted into database.";
        } else {
          throw new Exception('Error: The book was not added.');
        }
        $statement->close();

      }

    
     ?>
</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="book-add.php">Back</a>
</div>
 <?php
   require_once('view-comp/footer.php');
  ?>
