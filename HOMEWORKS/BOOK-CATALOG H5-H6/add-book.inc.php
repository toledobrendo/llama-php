<?php require_once('view/header.php'); ?>
<div class="card-header">
  Add Book Result
</div>
<div class="card-body">
  <?php

  if (isset($_POST['add-book-submit'])) {

  try {
    $bookTitle = $_POST['book-title'];
    $authorName = $_POST['author-name'];
    $ISBN = $_POST['isbn'];
    $pic_url = $_POST['pic_url'];
    if(empty($bookTitle) || empty($authorName) || empty($ISBN)){
      throw new Exception('Fill in required fields. Try again.');
    }

    @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Cannot connect to database.');
      }

    $query = "SELECT `id` FROM `author` WHERE `name` = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s',$authorName);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
      $authorId = implode("",$result->fetch_assoc());
      $stmt->close();
      add($bookTitle,$ISBN,$authorId,$pic_url);
    }else{
      $stmt->close();
      $query = 'INSERT INTO AUTHOR(NAME) VALUES(?)';
      $stmt = $db->prepare($query);
      $stmt->bind_param('s',$authorName);
      $stmt->execute();
      $stmt->close();
      $authorId = getAuthId($authorName);
      add($bookTitle,$ISBN,$authorId,$pic_url);
    }

  } catch (Exception $e) {
    error_log($e->getMessage());
    echo $e->getMessage();
  }
}

 ?>

 <?php
   function getAuthId($authorName){
     @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

       $dbError = mysqli_connect_errno();
       if ($dbError) {
         throw new Exception('Cannot connect to database.');
       }
     $query = "SELECT `id` FROM `author` WHERE `name` = ?";
     $stmt = $db->prepare($query);
     $stmt->bind_param('s',$authorName);
     $stmt->execute();
     $result = $stmt->get_result();
     if($result->num_rows > 0){
       $authorId = implode("",$result->fetch_assoc());
       $stmt->close();
       return $authorId;
     }
   }

   function add($bookTitle,$ISBN,$authorId,$pic_url){
     @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

       $dbError = mysqli_connect_errno();
       if ($dbError) {
         throw new Exception('Cannot connect to database.');
       }
     $query = "INSERT INTO `book`(`title`, `isbn`,`author_id`,`pic_url`)
               VALUES (?,?,?,?)";
     $stmt = $db->prepare($query);
     $stmt->bind_param('siis',$bookTitle,$ISBN,$authorId,$pic_url);
     $stmt->execute();

     if($stmt->affected_rows > 0){
       echo "Book added!";
     }else{
       throw new Exception('Book was not added');
     }
     $stmt->close();
   }
 ?>

</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="add-book.php">Back</a>
</div>
<?php require_once('view/footer.php'); ?>
