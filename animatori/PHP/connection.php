<?php

/*$servername = "10.0.114.137";
$username = "kroics";
$password = "2523";
$mydb = "kroics";*/

$servername = "localhost";
$username = "root";
$password = "mysql";
$mydb = "kroics";

$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*$sql = "SELECT admin FROM autorizacija WHERE lietvards = '$username1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$admin = $row['admin'];

if ($_SESSION['user'] && $admin == 'true') {
    $username1 = $_POST['name'];
    $password = $_POST['password'];

    // Check if there is a row returned
    if ($result->num_rows == 1) 
    {
      $_SESSION['name'] = $username1;
      $_SESSION['password'] = $password;
      header("Location: ./admin.php?view=$username1");
      exit();
    } 
    else 
    {
      header("Location: ./login.php");
      exit();
  }
}*/
/*  echo "Connectet successfully";*/

?>