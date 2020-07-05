<?php require_once('view-comp/header.php');
@ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');
 ?>
<div class="card-header">
  Add Author Result
</div>
<div class="card-body">
  <?php



    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $bookIsbn = $_POST['bookIsbn'];
    $bookImg = $_POST['bookImg'];
    $errors = array();

    $ExistingTitle = "SELECT title FROM book WHERE title = '$bookName' ";
    $ExistingIsbn = "SELECT isbn FROM book WHERE isbn = '$bookIsbn' ";
    $checkTitle = $db->query($ExistingTitle);
    $checkIsbn = $db->query($ExistingIsbn);

    try{
      if (!$authorName) {
        throw new Exception('Book details are incomplete. Please try again.');
      }else if(!$bookName){
        throw new Exception('Book details are incomplete. Please try again.');
      }else if(!$bookIsbn){
        throw new Exception('Book details are incomplete. Please try again.');
      }else if (!$bookImg){
        throw new Exception('Book details are incomplete. Please try again.');
      }else if ($checkTitle ->num_rows >=1){
        throw new Exception('Book is already in database');
      }else if ($checkIsbn->num_rows >=1){
        throw new Exception('ISBN already in database');
      }




      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }


    if(count($errors) == 0){

      $query = 'insert into book (title, authorName, isbn, pic_url )
        VALUES (?, ? , ?, ?)';

      $stmt = $db->prepare($query);
      $stmt->bind_param("ssss", $bookName, $authorName, $bookIsbn, $bookImg);
      $stmt->execute();


      $affectedRows = $stmt->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows." book inserted into the database.";
      } else {
        throw new Exception('Error: The book was not added.');
      }

      $stmt->close();
}
    } catch (Exception $e) {
      error_log($e->getMessage());
      echo $e->getMessage();

    }


  ?>
</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="book-add.php">Back</a>
</div>
<?php require_once('view-comp/footer.php'); ?>
