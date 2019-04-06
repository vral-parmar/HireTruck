
<?php
require ("Session.php");
$deal=$_POST['deal_id'];
$passcode=$_POST['passcode'];
$mail= $_SESSION['mail'];
$query="SELECT * from deal_dtails where  D_id='$deal' and passcode='$passcode' and T_id=(SELECT t_id from user_t where t_mail='$mail')";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
$result=mysqli_fetch_array($sql);
//print_r($result);
if($result[8]==$passcode){
  //echo "match";
$sql1="select * from deal where D_id='$deal'";
$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
$row=mysqli_fetch_array($result1);
 $price=$row['6'];//deal price
 $T_id=$row['3'];// transport id
 //mediator account to debited
 $acct="select Ac_id,balance from account_info where name='mediator'";
 $res1=mysqli_query($con,$acct) or die(mysqli_error($con));
 $row1=mysqli_fetch_array($res1);

$acid=$row1['0'];//account id

$balance=$row1['1'];//balance
 $debit=$balance-$price;//debit balance


 //$up_acct="UPDATE `account_info` SET `balance`='$debit' WHERE name='mediator'";
   //$sql33=mysqli_query($con,$up_acct) or die(mysqli_error($con));

 //credit amount to t_account;
 $qry="select Ac_id,balance from account_info where T_id='$T_id'";
 $result3=mysqli_query($con,$qry) or die(mysqli_error($con));
 $row2=mysqli_fetch_array($result3);
  $acid1=$row2['0'];//account id
  $balance1=$row2['1'];//balance
  $credit=$price+$balance1;

 $up_t="UPDATE `account_info` SET `balance`='$credit' WHERE T_id='$T_id'";
   $sql23=mysqli_query($con,$up_t) or die(mysqli_error($con));

    $up_deal="UPDATE `deal` SET `d_status`='0' WHERE T_id='$T_id'";
      $sql43=mysqli_query($con,$up_deal) or die(mysqli_error($con));

       $up_bid="update bid set B_status='1' where B_id=(SELECT B_id FROM bid_ref WHERE t_id='$T_id')";
         $sql23=mysqli_query($con,$up_bid) or die(mysqli_error($con));
 }

else {
  echo "Not matched";
}
 ?>
