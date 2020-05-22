<?php require_once('view-comp/header.php') ?>
<div class="card-header">Book Results</div>
<div class="card-body">
  <?php
    $searchType = $_POST['searchType'];
    $searchType = $_POST['searchType'];

    try{
      if (!isset($searchType) || !isset($searchTerm)){
        throw new \Exception("You have not entered search details. Please go back and try again", 1);
      }

      @ $db = new mysqli('127.0.0.1.3306', 'user', '123qwe', 'php_lesson_db');
      if($dbError){
        throw new Exception('Error: Could not connect to database. Please try again later.'.$dbError,1);
      }

      $query = 'SELECT author.name as author_name, book.title, book.isbn
        FROM book
        INNER JOIN author
          ON author.id = book.author_id
          WHERE author.name like \'%'.$searchTerm.'%\';';

          $results = $db->query($query);
          $resultCount = $result->num_rows;

          for ($ctr = 0; $ctr < $ $resultCount; $ctr++){
            $row = $result -> fetch_assoc();
            echo $row['']
          }


    }catch (Exception $e) {
      echo $e->getMessage();
      echo '<br/>';
      echo '<a class="btn btn-secondary my-3" href="index.php">Go Back</a>';
    }
  ?>
</div>
<?php require_once('view-comp/footer.php') ?>
