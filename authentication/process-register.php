<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
              <h6>Register</h6>
            </div>
            <div class="card-body">
                <?php
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  try {
                    if (!$username || !$password) {
                      throw new Exception('Input is not complete');
                    }

                    @ $db = new mysqli('127.0.0.1:3306', 'student2', '123qwe', 'php_lesson_db');

                    $dbError = mysqli_connect_errno();
                    if ($dbError) {
                      throw new Exception('Could not connect to database. Error: '.$dbError);
                    }

                    $query = "insert into user_info (username, password) values (?, ?)";
                    $stmt = $db->prepare($query);
                    $stmt->bind_param("ss", $username, $password);
                    $stmt->execute();
                    echo "You've successfully registered a new account";
                    $stmt->close();

                  } catch (Exception $e) {
                    echo $e->getMessage();
                  }
                ?>
            </div>
            <div class="card-footer">
              <a href="login.php" class="btn btn-secondary">Go Back</a>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
