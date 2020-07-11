<?php require_once('view-comp/header.php') ?>
<div class="card-header">
  Book Results
</div>

<div class="card-body">
  <?php

    define('FIELDS', array(
     'author' => 'author.name',
     'title' => 'book.title',
     'isbn' => 'book.isbn',
     // 'image' => 'book.image' //added image
   ));


   $searchType = $_POST['searchType'];
   $searchTerm = $_POST['searchTerm'];

    try{
      if(!$searchType || !$searchTerm){
        throw new Exception('You have not entered search details. Please go back and try again', 1);
      }

      //CONNECTING MYSQL
      //IP ADDRESS AND PORT
      @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

      //check if db is connected
      $dbError = mysqli_connect_errno();

      if($dbError){
        throw new Exception('Error: Could not connect to database. Please try again later.' .$dbError, 1);
      }


      //insert query
      $query = 'SELECT author.name as author_name, book.title, book.isbn, image_url
      FROM book
      INNER JOIN author
        ON author.id = book.author_id
        WHERE '.FIELDS[$searchType].' LIKE \'%'.$searchTerm.'%\';'; //from define as constant

      // $query = 'SELECT author.name as author_name, book.title, book.isbn
      // FROM book
      // INNER JOIN author
      //   ON author.id = book.author_id
      //   WHERE author.name LIKE \'%'.$searchTerm.'%\';';
      /*
      %george% - george in between, beginning, or end
      %george - ends with George
      george% - starts with George
      LIKE - case insensitive
      */

      //extract the results; pass the query inside the query function
        $result = $db->query($query);

      //counts the results
        $resultCount = $result->num_rows;

        //output of the term searched and number of results
        echo '<p>Result for '.$searchType.' : '.$searchTerm.'</br>';
        echo 'Number of books found: '.$resultCount;

        echo '<div class="row">';
        //loops through
        for ($ctr = 0; $ctr < $resultCount; $ctr++) {
        $row = $result -> fetch_assoc(); //fetch assoc is like a pointer that points to the nakuhang result
  ?>
        <!-- for($ctr = 0; $ctr < $resultCount; $ctr++){
          $row = $result->fetch_assoc();
          // echo $row['author_name']. '<br/>';
      ?> -->
      <div class="card col-4 mx-1">
        <div class="card-body">
          <div class="col">
            <img src = "<?php echo $row['image_url'];  ?>" width= '150px' height='150px'>
          </div>
          <h6><?php echo $row['title'];?></h6>
          <p>By: <?php echo $row['author_name'];?> <br/>
            <?php echo $row['isbn'];?>
          </p>
        </div>
      </div>
      <?php
    }
    // echo '</div>';

    // echo $query;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
   ?>
</div>
  <br/>
  <a class="btn btn-secondary" href="index.php">Go Back</a>
</div>
<?php require_once('view-comp/footer.php') ?>
