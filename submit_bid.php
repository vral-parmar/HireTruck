<?php
require('Session.php');
require('Sms/way.php');
  //  while($status==0)

  echo $Ad_id=$_POST['ad_id'];

    echo   $username=$_SESSION['mail'];
      echo $price=$_POST['bid'];
      $query="SELECT `B_id` from `bid` where `Ad_id`='$Ad_id'";
      $result=mysqli_query($con,$query) or die(mysqli_error($con));
      $b_id=mysqli_fetch_array($result);

      print_r($b_id);
      echo $b_id['B_id'];

      $qry="SELECT `T_org_name`,`T_id` from `user_t` where `T_mail`='$username'";

      $row=mysqli_query($con,$qry) or die(mysqli_error($con));
      $ary=mysqli_fetch_array($row);
// print_r($ary);

    echo  $bid=$b_id['B_id'];
    echo  $t_id=$ary['T_id'];
    echo  $tname=$ary['T_org_name'];
    echo $pri=$price;
    echo  $dat=date("Y-m-d");

      $qryins="INSERT INTO `bid_ref`(`B_id`, `T_id`, `T-org_name`, `price`, `date`) VALUES('$bid','$t_id','$tname','$pri','$dat')";
      $res1=mysqli_query($con,$qryins) or die(mysqli_error($con));

// print_r($res1);exit;

      $qry1="SELECT `S_mail`,`S_mnumber` from `user_s` where `S_id`=(SELECT `S_id` from `ad` where `AD_id`='$Ad_id')";
      $res1=mysqli_query($con,$qry1) or die(mysqli_error($con));
      $data1=mysqli_fetch_row($res1);


      $num=$data1['1'];

      bid_otp($data1['0'],$username,$num,$pri);
      if($res1){
        header("location:Profile.php?=Bid_Success");
      }
?>
