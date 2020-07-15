<?php require_once('../view-comp/header.php'); ?>
<div class="card-header">
Add Author Result
</div>
<div class="card-body">
  <?php
    $authorName = $_POST['authorName'];
    $bookTitle = $_POST['bookTitle'];
    $isbn = $_POST['isbn'];
    $bookThumbnail = $_POST['bookThumbnail'];

    try{
      if(!$authorName || !$bookTitle || !$isbn || !$bookThumbnail){
        throw new Exception('Book details are not complete. Please Try Again.');
      }
      @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError){
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

      // Note: Duplicate authors not caught.
      $query = "INSERT into author (NAME) values (?)";

      $stmt = $db->prepare($query);
      $stmt->bind_param("s", $authorName);
      $stmt->execute();

      $affectedRows = $stmt->affected_rows;
      if($affectedRows > 0){

        echo $affectedRows."Successfully inserted";
        $select = "SELECT author.id as authorId from author where name = "'.$authorName.'"";
        $authorId = $db->query($select);
        $id = $authorId->fetch_assoc();

        $queryBook = "INSERT INTO book(TITLE, ISBN, AUTHOR_ID, pic_url) VALUES (?, ?, ?, ?)";

        $stmtBook = $db->prepare($queryBook);


        $stmtBook->bind_param("ssis", $bookTitle, $isbn, $id['authorId'], $bookThumbnail);
        $stmtBook->execute();
        $affectedRowsBook = $stmtBook->affected_rows;
        if($affectedRowsBook > 0){
          echo $affectedRowsBook." book inserted into database.";
        }else {
          throw new Exception("Error: The book was not added.");
        }
      }else {
        throw new Exception("Error: The author was not added.");
      }

      $stmt->close();

      }catch (Exception $e){
        error_log($e->getMessage());
        echo $e->getMessage();
      }
   ?>
</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="../add-book.php">Back</a>
</div>
<?php require_once('../view-comp/footer.php'); ?>
