<?php
require('Session.php');
  //  while($status==0)
   $Ad_id=$_POST['ad_id'];
   $username=$_SESSION['mail'];
   $price=$_POST['bid'];
      $query="select B_id from bid where ad_id='$Ad_id'";
      $result=mysqli_query($con,$query) or die(mysqli_error($con));
      $b_id=mysqli_fetch_row($result);
      $qry="SELECT T_org_name,T_id from user_t where t_id=(SELECT t_id from user_t where T_mail='$username')";
      $res=mysqli_query($con,$qry) or die(mysqli_error($con));
      $data=mysqli_fetch_row($res);
      //print_r($data);exit;
      $dat=date("Y-m-d");
<<<<<<< HEAD
      $qryins="INSERT INTO bid_ref VALUES(NULL,'$data[1]','$data[0]','$bid','$dat',NULL)";
      //echo $qryins."<br>";
        //print_r($qry);
    
=======
      $qryins="INSERT INTO bid_ref VALUES('$b_id[0]','$data[1]','$data[0]','$price','$dat',NULL)";
>>>>>>> 6832d51929f4479a0952fb062d60de2a02fab2ca
      $res1=mysqli_query($con,$qryins) or die(mysqli_error($con));
      if($res1){
        header("location:Profile.php?=Bid_Success");
      }
?>
