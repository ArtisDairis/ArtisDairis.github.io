<?php
session_start();
include "connection.php";

if (isset($_POST['iesniegt'])) 
{
    $username1 = $_POST['name'];
    $password = $_POST['password'];

      $sql = "SELECT * FROM autorizacija WHERE lietvards = '$username1' AND parole = '$password'";
      $result = $conn->query($sql);

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
}

$conn->close();
?>