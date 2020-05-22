<?php require_once('view-comp/header.php');?>
<div class="card-header">
  Book Results
</div>
<div class="card-body">
  <section id="about">
    <div class="container">
  <?php
    define('FIELDS', array(
      'author' => 'author.name',
      'title' => 'book.title',
      'isbn' => 'book.isbn'
    ));

    $searchType = $_POST['searchType'];
    $searchTerm = $_POST['searchTerm'];

    try {
      if (!$searchType || !$searchTerm) { //exception as we did in the previous lessons
        throw new Exception('You have not entered search details. Please go back and try again.', 1);
      }

      // 127.0.0.1 = localhost
      @ $db = new mysqli('localhost', 'root', '', 'php_hw4_bookcatalog');

      $dbError = mysqli_connect_errno();
      if ($dbError) {//exception as we did in the previous lessons
        throw new Exception('Error: Could not connect to database. '.
          'Please try again later. '.$dbError, 1);
      }
      //using inner join in a sql statement like on the previous lesson
      $query = 'SELECT author.name as author_name, book.title, book.isbn, book.imgSrc
        FROM book
        INNER JOIN author
            ON author.id = book.author_id
        WHERE '.FIELDS[$searchType].' LIKE \'%'.$searchTerm.'%\';';


      $result = $db->query($query);

      $resultCount = $result->num_rows;
      echo '<h3>Result search for '.$searchType.': '.$searchTerm.'</h3>';
      echo "<br />";
      echo '<h3>Number of books found: '.$resultCount.'</h3>';
      echo "<br /><br />";
      echo '<div class="card">';
      for ($ctr = 0; $ctr < $resultCount; $ctr++) {
        $row = $result -> fetch_assoc();
      ?>
      <br />
          <!-- Instead off putting them in cards i just used row and col of bootstrap to make it look good
          in the front end -->
            <!-- since inside php we are still inside the loop we could loop all of this -->
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-3" style="border-style: solid; box-shadow: 10px 10px 5px grey;" height="300px" width="200px">
                <center>
                  <!-- fixing the size of the image -->
                  <img src="<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgSrc']; ?>" height="300px" width="200px">
                </center>
              </div>
              <div class="col-lg-1"></div>
              <div class="col-lg-5">
                <h2><strong><?php echo $row['title'];?></strong></h2>
                <p>
                  By: <?php echo  $row['author_name'];?> <br/>
                  <?php echo $row['isbn']?>
                </p>
              </div>
            </div>
      <br /><br /><br />
      <?php
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  ?>
      </div>
    </div>
    </section>
    <br/>
    <a class="btn btn-secondary" href="index.php" width="25%">Go Back</a>
  </div>

<?php require_once('view-comp/footer.php');?>
