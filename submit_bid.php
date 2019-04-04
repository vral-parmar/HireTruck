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
      $qryins="INSERT INTO bid_ref VALUES(NULL,'$data[1]','$data[0]','$bid','$dat',NULL)";
      //echo $qryins."<br>";
        //print_r($qry);
    
      $res1=mysqli_query($con,$qryins) or die(mysqli_error($con));
      if($res1){
        header("location:Profile.php?=Bid_Success");
      }
?>
