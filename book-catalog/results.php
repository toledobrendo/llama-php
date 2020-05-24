<?php require_once('view-comp/header.php') ?>
<?php require_once('service/log-service.php') ?>
  <div class="card-header">
    Book Results
  </div>
  <div class="card-body">
      <?php
      define('FIELDS', array(
        'author' => 'author.name',
        'title' => 'book.title',
        'isbn' => 'book.isbn'
      ));

      define('IMAGES', array(
        'The Lord of the Rings' => 'images/lotr.jpg',
        'Harry Potter and the Chamber of Secrets' => 'images/hp.jpg'
      ));

        $searchType = $_POST['searchType'];
        $searchTerm = $_POST['searchTerm'];

        try {
          if(!$searchType || !$searchTerm){
            throw new Exception('You have not entered search details properly. Go back and try again.' ,1 );
          }else {
              @$db = new mysqli('127.0.0.1:3306', 'kean', 'kean', 'php_lesson_db');

              $dbError = mysqli_connect_errno();

              if($dbError){
                throw new Exception('Error: Could not connect to the database');
              }

                $query = 'SELECT author.name as author_name, book.title, book.isbn
                  FROM book
                  INNER JOIN author
                      ON author.id = book.author_id
                  WHERE '.FIELDS[$searchType].' LIKE \'%'.$searchTerm.'%\';';

                logMessage($query);

                $result = $db->query($query);
                $resultCount = $result->num_rows;

                echo "Result for: ".$searchTerm.'<br>';
                echo "Number of results found: ".$resultCount;

                for($ctr = 0; $ctr < $resultCount; $ctr++){
                    $row = $result -> fetch_assoc();
                  ?>
                    <div class="card col-4">
                      <div class="card-body">
                        <center>
                          <?php $title = $row['title'] ?>
                          <h6><?php echo $title; ?></h6>
                          <p>
                              By: <?php echo $row['author_name']; ?>
                              <br>
                              ISBN:<?php echo $row['isbn']; ?>
                              <br>
                              <?php echo '<img src=\''.IMAGES[$title].'\' style=\'width=100px; height: 200px; margin-top:15px\'>'; ?>
                          </p>
                      </center>
                      </div>
                    </div>
                  <?php
                }

              // echo $query;
          }

        } catch (Exception $e) {
            echo $e->getMessage();
            echo "<br>
                  <a href='index.php' class='btn btn-info my-3 float-right'>
                    Go back
                  </a>";
        }


       ?>
  </div>

<?php require_once('view-comp/footer.php') ?>
