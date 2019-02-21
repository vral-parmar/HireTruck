<?php
session_start();
setcookie(session_name(), "", time() - 3600); //send browser command remove sid from cookie
session_destroy(); //remove sid-login from server storage
session_write_close();
//$con->close();
header('Location:home.php');
?>
