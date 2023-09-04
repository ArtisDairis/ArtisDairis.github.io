<?php
include "connection.php";

if (isset($_SESSION['name'])) {
  $user = $_SESSION['name'];
  $loggedin = TRUE;
} else {
  $loggedin = FALSE;
}

if ($loggedin) 
{
$username1=$_SESSION['name'];
echo"<div class='acc'>";
echo"			<img src='image/user.png' class='user'>";
echo"			<p class='nickname'><b>". $username1 ."</b></p>";
echo"			<form method='post' action='index.php'>";
echo"				<input type='submit' name='iziet' value='Iziet' class='mkonts'>";
echo"			</form>";
echo"</div>";
}
else
{
echo "<a href='login.php'><input type='button' name='' value='Ienākt' class='login'></a>"; 
}
/*$conn->close();*/
?>