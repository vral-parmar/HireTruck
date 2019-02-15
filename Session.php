<?php
session_start();
if(!isset($_SESSION['mail']) && !isset($_SESSION['user_type'])){
    header( "location:home.php");
}
?>