<?php
include "connection.php";

if (isset($_SESSION['name'])) 
{
  $user = $_SESSION['name'];
  $loggedin = TRUE;
} 
else 
  $loggedin = FALSE;

if ($loggedin) 
{
  echo "<hr style='margin-top: 12%;'>";
} 
else
{
  echo "<hr style='margin-top: 4%;'>";
}
?>