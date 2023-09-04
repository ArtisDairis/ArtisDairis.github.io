<?php 
if (isset($_POST['redig1'])) 
{
  $Aprik_ID = $_POST['edit_id'];

  $piev = "SELECT * FROM aprikojums WHERE Aprik_ID='$Aprik_ID'";
  $result = mysqli_query($conn, $piev);
  
  $row = mysqli_fetch_assoc($result);

  $nosaukums = $row['Nosaukums'];

echo '<form method="POST" action="svetki.php">';
echo '    <div class="lauki">';  
echo '      <div class="le">';
echo '        <p>Žanra ID</p>';
echo '        <input type="text" name="no" value="'. $nosaukums .'" class="ievade">';
echo '      </div>';
echo '      </div>';
}
else
{
echo '<form method="POST" action="svetki.php">';
echo '    <div class="lauki">';  
echo '      <div class="le">';
echo '        <p>Žanra ID</p>';
echo '        <input type="text" name="no" class="ievade">';
echo '      </div>';
echo '      </div>';
}

?>