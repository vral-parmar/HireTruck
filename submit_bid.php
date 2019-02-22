<?php
require('Session.php');
  //  while($status==0)
   $Ad_id=$_POST['ad_id'];
   $username=$_SESSION['mail'];
   $bid=$_POST['bid'];

      $qry="SELECT T_org_name,T_id from user_t where t_id=(SELECT t_id from user_t where T_mail='$username')";
      $res=mysqli_query($con,$qry) or die(mysqli_error($con));
      $data=mysqli_fetch_row($res);
      $dat=date("Y-m-d");
      $qryins="INSERT INTO bid_ref VALUES('$data[1]',NULL,'$Ad_id','0','$data[0]','$bid','$dat')";
      $res1=mysqli_query($con,$qryins) or die(mysqli_error($con));
      if($res1){
        header("location:Profile.php");
      }
?>
