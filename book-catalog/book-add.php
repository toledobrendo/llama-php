<?php require_once('view-comp/header.php'); ?>

<?php
if (isset($_POST['submit'])) {

   $bookTitle = $_POST['bookTitle'];
   $authorName = $_POST['authorName'];

   echo '<div class="card-header">
            <b>Add Book Result</b>
         </div>';

   //The condition below is 'if else' instead of 'try catch' because  
   //if we make it 'try catch', an uncaught error will be thrown at
   //the finally block when closing mysqli. This is because the mysqli 
   //object is null and we can't close a null connection).
   if (empty($bookTitle) || empty($authorName)) {

      echo '<div class="m-4"> 
               Error: Book title OR author name were not provided.
               Please try again! 
            </div>';
   } else {
      try {
         @$db = new mysqli('127.0.0.1:3306', 'student', 'qwe123', 'php_lesson_db');
         $dbError = mysqli_connect_errno();
         if ($dbError) {
            throw new Exception('Error: Could not connect to database. 
            Please try again later.');
         }

         
         // $authorName = $db->real_escape_string($authorName);
         // $bookTitle = $db->real_escape_string($bookTitle);
         // These clean Strings are not optimal since titles of
         // books with legit apostrophes (ex. Can't Hurt Me)
         // get corrupted when uploaded to database.
         // Instead we use prepared statements (found below)

         //Query below merges checking and inserting of author 
         //for 1 trip to db instead of 2 
         $query = 
         'INSERT INTO author (name)
         SELECT * FROM (SELECT ?) AS temp
         WHERE NOT EXISTS
         (SELECT name FROM author WHERE name = ?
            )LIMIT 1';
         $stmt = $db->prepare($query);
         $stmt->bind_param("ss",$authorName,$authorName);
         $stmt->execute();

         //Checks for duplicate books before inserting 
         //for 1 trip to db instead of 2.
         //Note: we used book title and author name (instead of ISBN)
         //as the determinators of duplicate books 
         //for easier testing. Need to put ? AS x to make books with
         //same name and author (however unlikely) be possible.
         $query = 
         'INSERT INTO book (title, author_id) 
         SELECT * FROM (SELECT ? AS title, (SELECT id FROM author WHERE name = ?) AS author_id) AS temp
         WHERE NOT EXISTS
         (SELECT * FROM book WHERE title = ? AND author_id = (SELECT id FROM author WHERE name = ?)
         )LIMIT 1';
      
         $stmt = $db->prepare($query);
         $stmt->bind_param("ssss",$bookTitle,$authorName,$bookTitle,$authorName);
         $stmt->execute();
         $affectedRows=$stmt->affected_rows;
         $stmt->close();
         
         if ($affectedRows>0) {
            echo '<div class="m-4">Book successfully added to Catalog!</div>';
         } else {
            //note:'ALTER TABLE book ADD CONSTRAINT un_book_specs UNIQUE (title,author_id)'; was executed at the start
            throw new Exception('Error: The book you entered, <b>' . $bookTitle . ' by ' . $authorName . '</b> is already in the database!');
         }
      } catch (Exception $e) {
         echo '<div class="m-4">' . $e->getMessage() . '</div>';
      } finally {
         $db->close();
      }
   }
}
?>

<div class="card-header">
   Add Book
</div>
<div class="card-body">
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-row">
         <div class="form-group col-md-4">
            <label for="bookTitle">Book Title:</label>
            <input type="text" class="form-control" id="bookTitle" name="bookTitle" /><br />
         </div>
         <div class="form-group col-md-8">
            <label for="authorName"> Author Name:</label>
            <input type="text" class="form-control" id="authorName" name="authorName" /><br />
         </div>
         <div class="form-group col-md-12">
            <button type="submit" name="submit" class="btn btn-primary float-right mt-3">Add to Catalog</button>
         </div>
      </div>
   </form>
</div>
<?php require_once('view-comp/footer.php'); ?>