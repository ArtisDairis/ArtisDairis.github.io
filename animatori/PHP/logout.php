<?php
include "connection.php";

function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  if (isset($_POST['iziet']))
  {
    destroySession();
    header("Location: ./index.php?view=Guest");
    exit();
  }
  $conn->close();
?>