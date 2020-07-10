<?php
  require_once('view-comp/header.php');
 ?>
 <div class="card-header">
   Add Author Result
 </div>
 <div class="card-body">
  <?php
    //retrieve author name
    $authorName = $_POST['authorName'];

    try{
      //validate author name
      if (!$authorName){
        throw new Exception('Author details not complete. Please try again.');
      }

      @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if($dbError){
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

      //use backslash to put single quote inside a signle quote
      // $query = 'insert author (name) values (\''.$authorName.'\')';


      //get results
      // $result = $db->query($query);
      //
      // if($result){
      //   echo $db-> affected_rows."author inserted into the database.";
      // } else {
      //   throw new Exception('Error: The author was not added.');
      // }

    //this does not filter it; just the characters.
    //$authorName = $db->real_escape_string($authorName);


    //to avoid sql injection
    $query = 'insert into author (name) values (?)';
    $statement = $db->prepare($query);
    //1st parameter: data type to bind; 2nd parameter: parameters to bind
    //s meant to string; so we tell bind param to bind a string in that question mark and that string contains authorName
    $statement->bind_param("s", $authorName);
    $statement-> execute();

    if($statement-> affected_rows > 0) {
        echo $statement->affected_rows." author inserted into database.";
    } else {
      throw new Exception('Error: The author was not added.');
    }

    $statement->close();

    } catch(Exception $e){
      echo $e->getMessage();
    }

   ?>

</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="author-add.php">Back</a>
</div>
 <?php
   require_once('view-comp/footer.php');
  ?>
