<?php
include "connection.php";

if (isset($_SESSION['name'])) 
{
  $username1 = $_SESSION['name'];
  $loggedin = TRUE;
 
/*else 
{*/
  
//}

if ($loggedin) 
{
  // Retrieve user's admin status from the database
  $sql = "SELECT admin FROM autorizacija WHERE lietvards = '$username1'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $admin = $row['admin'];
}

if ($loggedin && $admin == "true") 
{
  echo "<div class='rikj'>";
  echo "<a href='admin.php?view=".$username1."'><input type='button' value='Mājas' class='box'></a>";
  echo "<a href='svetki.php?view=".$username1."'><input type='button' value='Tabula' class='box'></a>";
  echo "<a href='jaun.php?view=".$username1."'><input type='button' value='Jaunumi' class='box'></a>";
  echo "<a href='pied.php?view=".$username1."'><input type='button' value='Piedāvājumi' class='box'></a>";
  echo "<a href='konts.php?view=".$username1."'><input type='button' value='Mans konts' class='box'></a>";
  echo "</div>";
} 
elseif ($loggedin && $admin == "false") 
{
  echo "<div class='rikj'>";
  echo "<a href='admin.php?view=".$username1."'><input type='button' value='Mājas' class='box'></a>";
  echo "<a href='jaun.php?view=".$username1."'><input type='button' value='Jaunumi' class='box'></a>";
  echo "<a href='pied.php?view=".$username1."'><input type='button' value='Piedāvājumi' class='box'></a>";
  echo "<a href='konts.php?view=".$username1."'><input type='button' value='Mans konts' class='box'></a>";
  echo "</div>";
}
}
else 
{
  $loggedin = FALSE;
  echo "<div class='rikj'>";
  echo "<a href='admin.php?view=Guest'><input type='button' value='Mājas' class='box'></a>";
  echo "<a href='jaun.php?view=Guest'><input type='button' value='Jaunumi' class='box'></a>";
  echo "<a href='pied.php?view=Guest'><input type='button' value='Piedāvājumi' class='box'></a>";
  echo "</div>";
}
?>
