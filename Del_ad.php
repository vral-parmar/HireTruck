<?php
require('Session.php');
$ad_id= $_POST['ad_id'];
$query="UPDATE ad SET status='1' WHERE AD_id = '$ad_id'";
if($sql=mysqli_query($con,$query) or die(mysqli_error($con))){
  header("location:Profile.php?Ad_Deleted");
}
else {
  echo "soething is Wrong";
}
?>
