<?php require_once('view-comp/header.php');?>
<div class="card-header">
  Add Author Result
</div>
<div class="card-body">
  <?php
  try {
    $authorName = $_POST['authorName'];
    if(!$authorName){
      throw new Exception('Author details incomplete. Try again.');
    }
    @$db = new mysqli('127.0.0.1:3306', 'kean', 'kean', 'php_lesson_db');
    $dbError = mysqli_connect_errno();
    if($dbError){
      throw new Exception('Error: could not connect to the database.');
    }
    // $query = 'insert into author (name) values (\''.$authorName.'\');';
    // $result = $db->query($query);
    //
    // if($result){
    //   echo $db->affected_rows." author inserted into the database.";
    // }else {
    //   throw new Exception('Error: The author was not added.');
    // }

    //query by prepared statements.
    $query = 'INSERT INTO AUTHOR(NAME) VALUES(?)';
    $pStatement = $db->prepare($query);
    $pStatement->bind_param('s', $authorName);
    // bind_param : s-string d-double i-int b-blob
    // bind_param example: $pStatement->bind_param('si', $authorName, $authorId);
    $pStatement->execute();
    if($pStatement->affected_rows > 0){
      echo $pStatement->affected_rows." authors inserted into database.";
    }else {
      throw new Exception('Error: The author was not added.');
    }
    $pStatement->close();


  } catch (Exception $e) {
    echo $e->getMessage();
  }
  ?>

  <div class="card-footer">
    <a class="btn btn-info" href="author-add.php">Go Back</a>
  </div>
</div>
<?php require_once('view-comp/footer.php');?>
