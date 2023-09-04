<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$mydb = "kroics";

$conn = new mysqli($servername, $username, $password, $mydb);

if (isset($_POST['dzest'])) 
{
  $SvetkiID = $_POST['dzest_id'];

  $sql = "DELETE FROM svetki WHERE SvetkiID='$SvetkiID'";
  if ($conn->query($sql) === TRUE) 
  {
    echo"aaaaaaaaaaaa";
    header("Location: svetki.php");
    exit();
  } 
  else 
  {
    echo "Error deleting record: " . $conn->error;
  }
}
?>
