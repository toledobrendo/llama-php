
<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
Add Book Result
</div>
<div class="card-body">
  <?php
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $author_id = $_POST['authod_id'];
    $pic_url = $_POST['pic_url'];

    try{
      // Note: Author name is not declared at this point.
      if (!$authorName) {
        throw new Exception('Book details not complete. Please try again.');
      }

      @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

      // Query by query string concatenation
      // $query = 'insert into author (GAWA TO NI LIAM!!!!!!) values (\''.$authorName.'\')';
      // $result = $db->query($query);
      //
      // if ($result) {
      //   echo $db->affected_rows." author inserted into the database.";
      // } else {
      //   throw new Exception('Error: The author was not added.');
      // }

      // $authorName = $db->real_escape_string($authorName);

      // Query by prepared statements
      $query = 'insert into book (title,isbn,author_id,pic_url) values (?,?,?,?)';
      $stmt = $db->prepare($query);
      $stmt->bind_param("ssss", $title,$isbn,$author_id,$pic_url);
      $stmt->execute();

      $affectedRows = $stmt->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows." book inserted into the database.";
      } else {
        throw new Exception('Error: The book was not added.');
      }
