<?php
  require_once('service/log-service.php');
  require_once('view/header.php');
?>
<div class="card-header">
  Book Results
</div>
<div class="card-body">
  <?php
    define('FIELDS', array(
      'author' => 'author.name',
      'title' => 'book.title',
      'isbn' => 'book.isbn',
      'pic_url' =>'book.pic_url'
    ));

    $searchType = $_POST['searchType'];
    $searchTerm = $_POST['searchTerm'];

    try {
      if (!$searchType || !$searchTerm) {
        throw new Exception('You have not entered search details. Please go back and try again.', 1);
      }


      @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. '.
          'Please try again later. '.$dbError, 1);
      }

      $query = 'SELECT author.name as author_name, book.title, book.isbn, book.pic_url
        FROM book
        INNER JOIN author
            ON author.id = book.author_id
        WHERE '.FIELDS[$searchType].' LIKE \'%'.$searchTerm.'%\';';

      logMessage($query);

      $result = $db->query($query);

      $resultCount = $result->num_rows;

      echo '<p>Result for '.$searchType.' : '.$searchTerm.'</br>';
      echo 'Number of books found: '.$resultCount;

      echo '<div class="row">';
      for ($ctr = 0; $ctr < $resultCount; $ctr++) {
        $row = $result -> fetch_assoc();
      ?>
      <?php
        echo '<div class="card col-04 mx-1">';
          echo '<div class="card-body">';
            echo '<h6>'.$row['title'].'</h6>
            <div><img src='.$row['pic_url'].' width=300px height=300px></div>
            <p>
              By: '.$row['author_name'].' <br>
              '.$row['isbn'].'
            </p>
          </div>
          </div>';
       ?>
      <?php
      }
      echo '</div>';
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  ?>
  <br/>
  <a class="btn btn-secondary" href="index.php">Go Back</a>
</div>
<?php require_once('view/footer.php');?>
