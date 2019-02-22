<?php
require (Session.php);
$rad= $_POST['R_ad'];
$mail=$_SESSION['mail'];
$name= $_POST['SHIPPER_fname'];
$num=$_POST['SHIPPER_number'];
$email=$_POST['SHIPPER_mail'];
$qrey="INSERT INTO deal_detail VALUES(null,'$rad','select s_id from user_s where S_mail='$mail','','$name','$num','$email','')";
?>
