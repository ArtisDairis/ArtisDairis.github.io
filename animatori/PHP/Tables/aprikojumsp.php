<?php
if (isset($_POST['pievienot'])) 
{
  $nosaukums = $_POST['no'];

  $sql = "INSERT INTO aprikojums (nosaukums)
  VALUES ('$nosaukums')";

  if ($conn->query($sql) === TRUE) 
  {
    echo "New record created successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$sql = "SELECT * FROM aprikojums";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    echo "<table class='tabula1'>";
    echo "<tr>";
    echo "<th class='raksts'>ID</th>";
    echo "<th class='raksts'>Aprīkojuma nosaukums</th>";
    echo "<th class='raksts'>Darbības</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='raksts'>" . $row['Aprik_ID'] .".". "</td>";
        echo "<td class='raksts'>" . $row['Nosaukums'] . "</td>";
        echo "
        <td class='raksts'>
        <form method='POST'>
        <input type='hidden' name='edit_id' value='".$row['Aprik_ID']."'>
        <a src='./aprikojumsadd.php'><input type='submit' name='redig1' value='Rediģēt' class='tbut'></a>
          <br>
        <input type='submit' name='dzest' value='Dzēst' class='tbut'>
        </form>
        </td>";
        echo "</tr>";
}
    echo "</table>";
} 
else 
{
    echo "No data found";
}

if (isset($_POST['apstr1'])) 
  {
    $Aprik_ID = $_POST['edit_id'];

    $Nosaukums = $_POST['no'];

    $sql = "UPDATE aprikojums SET Nosaukums='$Nosaukums' WHERE Aprik_ID='$Aprik_ID'";

    if ($conn->query($sql) === TRUE) 
      {
    /*    echo "Record updated successfully";*/
      } 
    else 
      {
    /*    echo "Error updating record: " . $conn->error;*/
      }
  }
if (isset($_POST['dzest'])) {
  $Aprik_ID = $_POST['edit_id'];

  $sql = "DELETE FROM aprikojums WHERE Aprik_ID='$Aprik_ID'";

if ($conn->query($sql) === TRUE) 
{
  echo "Record deleted successfully";
} 
else 
{
  echo "Error deleting record: " . $conn->error;
}
}
?>