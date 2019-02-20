<?php
require('Session.php');
$query="UPDATE ad SET status='1' WHERE AD_id=" AND S_id;
if($sql=mysqli_query($con,$query) or die(mysqli_error($con))){
  header("location:Profile.php?Ad_Deleted");
}
else {
  echo "soething is Wrong";
}
?>
