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
  $Vards = $_POST['vards'];
  $Uzvards = $_POST['uzvards'];
  $Dzimums = $_POST['dzim'];
  $Aprik_ID = $_POST['aprid'];
  $Tels = $_POST['tels'];

  $sql = "INSERT INTO organizatori (Vards, Uzvards, Dzimums, Aprik_ID, Tels)
  VALUES ('$Vards', '$Uzvards', '$Dzimums', '$Aprik_ID', '$Tels')";

  if ($conn->query($sql) === TRUE) 
  {
    echo "";
  } 
  else 
  {
    echo "";
  }
}

$sql = "SELECT * FROM organizatori";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    echo "<table class='tabula1'>";
    echo "<tr>";
    echo "<th class='raksts'>ID</th>";
    echo "<th class='raksts'>Vārds</th>";
    echo "<th class='raksts'>Uzvārds</th>";
    echo "<th class='raksts'>Dzimums</th>";
    echo "<th class='raksts'>Aprīkojuma ID</th>";
    echo "<th class='raksts'>Tēls</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='raksts'>" . $row['Org_ID'] .".". "</td>";
        echo "<td class='raksts'>" . $row['Vards'] . "</td>";
        echo "<td class='raksts'>" . $row['Uzvards'] . "</td>";
        echo "<td class='raksts'>" . $row['Dzimums'] . "</td>";
        echo "<td class='raksts'>" . $row['Aprik_ID'] . "</td>";
        echo "<td class='raksts'>" . $row['Tels'] . "</td>";
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