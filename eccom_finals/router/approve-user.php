<?php
include '../includes/connect.php';
$success=false;

$username = $_POST['username'];
$password = $_POST['password'];

$result = 'SELECT * FROM users WHERE username=? AND password=?';
$stmt = $con->prepare($result);

// while($row = mysqli_fetch_array($result))
// {
//     $success = true;
//     $user_id = $row['id'];
//     $name = $row['name'];
// }

// if($success == true)
// {
//     session_start();
//     $_SESSION['customer_sid'] = session_id();
//     $_SESSION['user_id'] = $user_id;
//     $_SESSION['name'] = $name;
//     $_SESSION['password'] = $password;

//     header("location: ../browse-products.php");
// }

// else
// {
//     header("location: ../login.php");
// }
$hpass = hash('sha512', $password);
$stmt->bind_param('ss', $username, $hpass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->fetch_assoc()){
    $success = true;
    $result = mysqli_query($con, "SELECT * FROM users;");
    while($row = mysqli_fetch_array($result))
{
    $user_id = $row['id'];
    $name = $row['name'];
}



    if($success == true)
{
    session_start();
    $_SESSION['customer_sid'] = session_id();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    header('location: ../browse-products.php');
}
}

else{
    header('location: ../login.php');
}
?>
