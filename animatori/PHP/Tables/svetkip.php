<?php
if (isset($_POST['pievienot'])) 
{
  $ZanrsID = $_POST['zid'];
  $KlientaID = $_POST['kid'];
  $KopSum = $_POST['kopsum'];
  $Datums = $_POST['dat'];
  $Laiks = $_POST['laiks'];
  $Adrese = $_POST['adr'];

  $sql = "INSERT INTO svetki (ZanrsID, KlientaID, KopSum, Datums, Laiks, Adrese)
  VALUES ('$ZanrsID', '$KlientaID', '$KopSum', '$Datums', '$Laiks', '$Adrese')";

  if ($conn->query($sql) === TRUE) 
  {
    echo "";
  } 
  else 
  {
    echo "";
  }
}

$sql = "SELECT * FROM Svetki";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
$sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'SvetkiID';
$sortOrder = isset($_GET['order']) ? $_GET['order'] : 'asc';
$sql = "SELECT * FROM svetki ORDER BY $sortColumn $sortOrder";
$result = $conn->query($sql);

echo "<table class='tabula1'>";
echo "<tr>";
echo "<th class='raksts'><a href='?sort=SvetkiID&order=". ($sortColumn == 'SvetkiID' && $sortOrder == 'asc' ? 'desc' : 'asc') ."'>ID</a></th>";
echo "<th class='raksts'><a href='?sort=ZanrsID&order=". ($sortColumn == 'ZanrsID' && $sortOrder == 'asc' ? 'desc' : 'asc') ."'>Žanra ID</a></th>";
echo "<th class='raksts'><a href='?sort=KlientaID&order=". ($sortColumn == 'KlientaID' && $sortOrder == 'asc' ? 'desc' : 'asc') ."'>Klienta ID</a></th>";
echo "<th class='raksts'><a href='?sort=KopSum&order=". ($sortColumn == 'KopSum' && $sortOrder == 'asc' ? 'desc' : 'asc') ."'>Kopējā summa</a></th>";
echo "<th class='raksts'><a href='?sort=Datums&order=". ($sortColumn == 'Datums' && $sortOrder == 'asc' ? 'desc' : 'asc') ."'>Datums</a></th>";
echo "<th class='raksts'><a href='?sort=Laiks&order=". ($sortColumn == 'Laiks' && $sortOrder == 'asc' ? 'desc' : 'asc') ."'>Laiks</a></th>";
echo "<th class='raksts'><a href='?sort=Adrese&order=". ($sortColumn == 'Adrese' && $sortOrder == 'asc' ? 'desc' : 'asc') ."'>Adrese</a></th>";
echo "<th class='raksts'>Darbības</th>";
echo "</tr>";

// Datu izvade ------------------------------------------------------------------------------------------------------------------------------------------------
    while ($row = mysqli_fetch_assoc($result)) 
    {

// Filtrēšana ------------------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['filtret'])) 
{
    if ($_POST['fpec'] != 'nul') 
    {
        $sortColumn = $_POST['fpec'];
        $sortFilter = $_POST['fpecnos'];
        $sql = "SELECT * FROM svetki WHERE $sortColumn = '$sortFilter'";
        $res = $conn->query($sql);

        while ($filteredRow = mysqli_fetch_assoc($res)) 
        {
          echo "<tr>";
          echo "<td class='raksts'>" . $filteredRow['SvetkiID'] . "." . "</td>";
          echo "<td class='raksts'>" . $filteredRow['ZanrsID'] . "</td>";
          echo "<td class='raksts'>" . $filteredRow['KlientaID'] . "</td>";
          echo "<td class='raksts'>" . $filteredRow['KopSum'] . "</td>";
          echo "<td class='raksts'><b>" . $filteredRow['Datums'] . "</b></td>";
          echo "<td class='raksts'>" . $filteredRow['Laiks'] . "</td>";
          echo "<td class='raksts'>" . $filteredRow['Adrese'] . "</td>";
          echo "
            <td class='raksts'>
              <form method='post' action='svetkiadd.php'>
                <input type='hidden' name='edit_id' value='" . $filteredRow['SvetkiID'] . "'>
                <input type='submit' name='redig' value='Rediģēt' class='tbut'>
              </form>
              <br>
              <form method='post'>
                <input type='hidden' name='dzest_id' value='" . $filteredRow['SvetkiID'] . "'>
                <input type='submit' name='dzest' value='Izdzēst' class='tbut'>
              </form>
            </td>";
          echo "</tr>";
        }
        break;
    }
}
elseif (isset($_POST['meklet'])) 
{
    if ($_POST['mpec'] != 'nul') 
    {
        $sortColumn = $_POST['mpec'];
        $sortSearch = $_POST['mpecnos'];
        $sql = "SELECT * FROM svetki WHERE $sortColumn = '$sortSearch'";
        $res = $conn->query($sql);

        while ($searchRow = mysqli_fetch_assoc($res)) 
        {
          echo "<tr>";
          echo "<td class='raksts'>" . $searchRow['SvetkiID'] . "." . "</td>";
          echo "<td class='raksts'>" . $searchRow['ZanrsID'] . "</td>";
          echo "<td class='raksts'>" . $searchRow['KlientaID'] . "</td>";
          echo "<td class='raksts'>" . $searchRow['KopSum'] . "</td>";
          echo "<td class='raksts'><b>" . $searchRow['Datums'] . "</b></td>";
          echo "<td class='raksts'>" . $searchRow['Laiks'] . "</td>";
          echo "<td class='raksts'>" . $searchRow['Adrese'] . "</td>";
          echo "
            <td class='raksts'>
              <form method='post' action='svetkiadd.php'>
                <input type='hidden' name='edit_id' value='" . $searchRow['SvetkiID'] . "'>
                <input type='submit' name='redig' value='Rediģēt' class='tbut'>
              </form>
              <br>
              <form method='post'>
                <input type='hidden' name='dzest_id' value='" . $searchRow['SvetkiID'] . "'>
                <input type='submit' name='dzest' value='Izdzēst' class='tbut'>
              </form>
            </td>";
          echo "</tr>";
        }
        break;
    }
}
else
{
      echo "<tr>";
      echo "<td class='raksts'>" . $row['SvetkiID'] . "." . "</td>";
      echo "<td class='raksts'>" . $row['ZanrsID'] . "</td>";
      echo "<td class='raksts'>" . $row['KlientaID'] . "</td>";
      echo "<td class='raksts'>" . $row['KopSum'] . "</td>";
      echo "<td class='raksts'><b>" . $row['Datums'] . "</b></td>";
      echo "<td class='raksts'>" . $row['Laiks'] . "</td>";
      echo "<td class='raksts'>" . $row['Adrese'] . "</td>";
      echo "
        <td class='raksts'>
          <form method='post' action='svetkiadd.php'>
            <input type='hidden' name='edit_id' value='" . $row['SvetkiID'] . "'>
            <input type='submit' name='redig' value='Rediģēt' class='tbut'>
          </form>
          <br>
          <form method='post'>
            <input type='hidden' name='dzest_id' value='" . $row['SvetkiID'] . "'>
            <input type='submit' name='dzest' value='Izdzēst' class='tbut'>
          </form>
        </td>";
      echo "</tr>";
}
}
    echo "</table>"; 
}
else 
{
    echo "No data found";
}

// Update -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['apstr'])) 
  {
    $SvetkiID = $_POST['edit_id'];

    $ZanrsID = $_POST['zid'];
    $KlientaID = $_POST['kid'];
    $KopSum = $_POST['kopsum'];
    $Datums = $_POST['dat'];
    $Laiks = $_POST['laiks'];
    $Adrese = $_POST['adr'];

    $sql = "UPDATE svetki SET ZanrsID='$ZanrsID', KlientaID='$KlientaID', KopSum='$KopSum', Datums='$Datums', Laiks='$Laiks', Adrese='$Adrese' WHERE SvetkiID='$SvetkiID'";

    if ($conn->query($sql) === TRUE) 
      {
    /*    echo "Record updated successfully";*/
      } 
    else 
      {
    /*    echo "Error updating record: " . $conn->error;*/
      }
  }

//Dzēšana ------------------------------------------------------------------------------------------------------------------------------------------------
  if (isset($_POST['dzest'])) 
{
  $SvetkiID = $_POST['dzest_id'];

  echo "
    <script>
      if (confirm('Vai esat pārliecināts par šī raksta izdzēšanu?')) {
        window.location.href = 'PHP/Funkc/Delete/svetkid.php?id=$SvetkiID';
      } else {
        window.location.href = 'svetki.php';
      }
    </script>
  ";
  /*$sql = "DELETE FROM svetki WHERE SvetkiID='$SvetkiID'";
            
  if ($conn->query($sql) === TRUE) 
  {
      echo "Record deleted successfully";
      echo "<script>";
      echo "  window.location.href = './svetkid.php';"; // Replace 'your_page.php' with the actual page URL you want to redirect to
      echo "</script>";
  }
  else 
    {
      echo "Error deleting record: " . $conn->error;
    }*/
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>