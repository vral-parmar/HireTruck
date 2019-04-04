
<?php
require ("Session.php");
$ad=$_POST['deal_id'];
//echo $ad;exit;
$passcode=$_POST['passcode'];
$query="SELECT * from deal_dtails where  D_id='$ad' and passcode='$passcode'";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
if($sql){ echo "Match";}
else {
  echo "Not matched";
}
 ?>
