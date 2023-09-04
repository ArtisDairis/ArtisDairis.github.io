<?php 
if (isset($_POST['redig'])) 
{
  $SvetkiID = $_POST['edit_id'];

  $piev = "SELECT * FROM svetki WHERE SvetkiID='$SvetkiID'";
  $result = mysqli_query($conn, $piev);
  
  $row = mysqli_fetch_assoc($result);

  $zid = $row['ZanrsID'];
  $kid = $row['KlientaID'];
  $kopsum = $row['KopSum'];
  $dat = $row['Datums'];
  $laiks = $row['Laiks'];
  $adr = $row['Adrese'];

echo '<form method="POST" action="svetki.php">';
echo '    <div class="lauki">';  
echo '      <div class="le">';
echo '        <p>Žanra ID</p>';
echo '        <input type="text" name="zid" value="'. $zid .'" class="ievade">';
echo '        <p>Klienta ID</p>';
echo '        <input type="text" name="kid" value="'. $kid .'" class="ievade">';
echo '        <p>Kopējā summa</p>';
echo '        <input type="text" name="kopsum" value="'. $kopsum .'" class="ievade">';
echo '      </div>';
echo '      <div class="ri">';
echo '        <p>Datums</p>';
echo '        <input type="date" name="dat" value="'. $dat .'" class="ievade">';
echo '        <p>Laiks</p>';
echo '        <input type="text" name="laiks" value="'. $laiks .'" class="ievade">';
echo '        <p>Adrese</p>';
echo '        <input type="text" name="adr" value="'. $adr .'" class="ievade">';
echo '      </div>';
echo '      </div>';
}
else
{
echo '<form method="POST" action="svetki.php">';
echo '    <div class="lauki">';  
echo '      <div class="le">';
echo '        <p>Žanra ID</p>';
echo '        <input type="text" name="zid" class="ievade">';
echo '        <p>Klienta ID</p>';
echo '        <input type="text" name="kid"  class="ievade">';
echo '        <p>Kopējā summa</p>';
echo '        <input type="text" name="kopsum"  class="ievade">';
echo '      </div>';
echo '      <div class="ri">';
echo '        <p>Datums</p>';
echo '        <input type="date" name="dat"  class="ievade">';
echo '        <p>Laiks</p>';
echo '        <input type="text" name="laiks"  class="ievade">';
echo '        <p>Adrese</p>';
echo '        <input type="text" name="adr"  class="ievade">';
echo '      </div>';
echo '      </div>';
}

?>