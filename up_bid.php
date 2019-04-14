<?php
require('Session.php');
if(!isset($_POST["submit"])){

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
     $qryins="update bid_ref set price='$price' where B_id='$b_id[0]'";
     //echo $qryins."<br>";
       //print_r($qry);
     $res1=mysqli_query($con,$qryins) or die(mysqli_error($con));
     if($res1){
       header("location:Profile.php?=Bid_Updated_Success");
     }
}else {
  header("location:Profile.php?=Sorry");
}
 ?>
