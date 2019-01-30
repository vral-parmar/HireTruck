<?php
session_start();
if(isset($_SESSION[''])){
  echo "Weclome : ". $_SESSION['$mail'];
}
else {
  echo "Session not setteld!!";
  header( "refresh:3;url=login.php" );
}
 ?>
