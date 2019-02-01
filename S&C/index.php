<?php

session_start(); //gets session id from cookies, or prepa

if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
    ?>

    <form method="post" action="login.php">
        Login:<br><input name="login"><br>
        Password:<br><input name="password"><br>
        <input type="submit">
    </form>
    <?php
} else {
    echo "Hi, " . $_SESSION['login'];
    ?>
    <a href="logout.php">Logout</a>
    <?php
}
?>