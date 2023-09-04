<?php
$servername = "10.0.114.137";
$username = "kroics";
$password = "2523";
$mydb = "kroics";

$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
  /*die("Connection failed: " . $conn->connect_error);*/
}
  echo "<br>";


if (isset($_POST['pievienot'])) 
{
  $Aprik_ID = $_POST['aprid'];
  $Org_ID = $_POST['orgid'];
  $Zanrs_ID = $_POST['zanid'];

  $sql = "INSERT INTO summa (Aprik_ID, Org_ID, Zanrs_ID)
  VALUES ('$Aprik_ID', '$Org_ID', '$Zanrs_ID')";

  if ($conn->query($sql) === TRUE) 
  {
    echo "";
  } 
  else 
  {
    echo "";
  }
}

$sql = "SELECT * FROM summa";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    echo "<table class='tabula1'>";
    echo "<tr>";
    echo "<th class='raksts'>ID</th>";
    echo "<th class='raksts'>Aprīkojuma ID</th>";
    echo "<th class='raksts'>Organizatora ID</th>";
    echo "<th class='raksts'>Žanra ID</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='raksts'>" . $row['Kop_sum'] .".". "</td>";
        echo "<td class='raksts'>" . $row['Aprik_ID'] . "</td>";
        echo "<td class='raksts'>" . $row['Org_ID'] . "</td>";
        echo "<td class='raksts'>" . $row['Zanrs_ID'] . "</td>";
        echo "</tr>";
}
    echo "</table>";
} 
else 
{
    echo "No data found";
}


$conn->close();
?>