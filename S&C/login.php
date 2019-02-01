<?php

session_start();

//TODO: do not hardcode, get from database
$login = 'admin';
$password = 'admin';

if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
{
if ($_POST['login'] === $login && $_POST['password'] === $password)
{
$_SESSION['login'] = $_POST['login']; //write login to server storage
header('Location:index.php'); //redirect to main
}
else
{
echo "<script>alert('Wrong login or password');</script>";
echo "<noscript>Wrong login or password</noscript>";
}
}

?>

