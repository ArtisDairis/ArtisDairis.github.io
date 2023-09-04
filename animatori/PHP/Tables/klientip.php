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
  $Vardss = $_POST['vard'];
  $Uzvards = $_POST['uzvards'];
  $Tel_num = $_POST['telnum'];
  $Adrese = $_POST['adr'];
  $Apraksts = $_POST['apr'];
  $Datums = $_POST['dat'];
  $Epasts = $_POST['epasts'];
  $Laiks = $_POST['laiks'];

  $sql = "INSERT INTO klienti (Vards, Uzvards, Tel_num, Adrese, Apraksts, Datums, Epasts, Laiks)
  VALUES ('$Vardss ', '$Uzvards', '$Tel_num', '$Adrese', '$Apraksts', '$Datums', '$Epasts', '$Laiks')";

  if ($conn->query($sql) === TRUE) 
  {
    echo "New record created successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$sql = "SELECT * FROM klienti";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    echo "<table class='tabula1'>";
    echo "<tr>";
    echo "<th class='raksts'>ID</th>";
    echo "<th class='raksts'>Vārds</th>";
    echo "<th class='raksts'>Uzvārds</th>";
    echo "<th class='raksts'>Telefona numurs</th>";
    echo "<th class='raksts'>Adrese</th>";
    echo "<th class='raksts'>Apraksts</th>";
    echo "<th class='raksts'>Datums</th>";
    echo "<th class='raksts'>E-pasts</th>";
    echo "<th class='raksts'>Laiks</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='raksts'>" . $row['KlientaID'] .".". "</td>";
        echo "<td class='raksts'>" . $row['Vards'] . "</td>";
        echo "<td class='raksts'>" . $row['Uzvards'] . "</td>";
        echo "<td class='raksts'>" . $row['Tel_num'] . "</td>";
        echo "<td class='raksts'><b>" . $row['Adrese'] . "</b></td>";
        echo "<td class='raksts'>" . $row['Apraksts'] . "</td>";
        echo "<td class='raksts'>" . $row['Datums'] . "</td>";
        echo "<td class='raksts'>" . $row['Epasts'] . "</td>";
        echo "<td class='raksts'>" . $row['Laiks'] . "</td>";
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