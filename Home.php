<?php
session_start(); //gets session id from cookies, or prepa
if (session_id() == '' || !isset($_SESSION['mail'])) { //if sid exists and login for sid exists
    ?><a href="login.php">Login</a> <?php
} else {
    echo "Hi, " . $_SESSION['mail'];
    ?>
    <a href="logout.php">Logout</a>
    <?php
}
?>