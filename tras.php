
<?php
require ("Session.php");
require ("passcode_mail.php");
$ad=$_POST['deal_id'];
$passcode=$_POST['passcode'];
$mail= $_SESSION['mail'];
$query="SELECT * from deal_dtails where  D_id='$ad' and passcode='$passcode' and T_id=(SELECT t_id from user_t where t_mail='$mail')";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
$result=mysqli_fetch_array($sql);
//print_r($result);
if($result[8]==$passcode){
  
}
else {
  echo "Not matched";
}
 ?>
