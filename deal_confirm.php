<?php
require('Session.php');
$AD= $_POST['AD_ID'];

//$AD=$_POST['AD'];
$card_number=$_POST['card_number'];
$expiry=$_POST['expiry'];
$cvv=$_POST['cvv'];
$cardholder=$_POST['cardholder'];

//echo $AD;exit;
$query="SELECT * from bid_ref where B_id=(SELECT B_id from bid where AD_id='$AD')";
$result= mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_num_rows($result)>0)
{
  while ($row=mysqli_fetch_array($result))
  {
print_r($row);
$b_id=$row[0];
$t_id=$row[1];
$t_org_name=$row[2];
$price=$row[3];
$date=$row[4];
//exit;
$email=$_SESSION['mail'];
$date=date("Y-m-d");
//echo $b_id;exit;?>

<?php
//account   info check Query  expiry='$expiry' and
$Qry1="select Ac_id,balance from account_info where atm_no='$card_number' and  cvv='$cvv'";
$result1= mysqli_query($con,$Qry1) or die(mysqli_error($con));
while ($row1=mysqli_fetch_array($result1))
{
//  print_r($row1);
  $ac_id=$row1[0];
   $amount=$row1[1];

  if($price <= $amount){
      $amount1=$amount-$price;

      $queryup="UPDATE `account_info` SET `balance`='$amount1' WHERE Ac_id='$ac_id'";
      $sql1=mysqli_query($con,$queryup) or die(mysqli_error($con));
      $Query="select Ac_id,balance from account_info where name='mediator'";
      $result2= mysqli_query($con,$Query) or die(mysqli_error($con));
        while ($row2=mysqli_fetch_array($result2))
        {
         $Acid=$row2[0];
         $amt=$row2[1];
         $amt1=$amt+$price;
         $queryup2="UPDATE `account_info` SET `balance`='$amt1' WHERE Ac_id='$Acid'";
         $sql2=mysqli_query($con,$queryup2) or die(mysqli_error($con));

       }


  $query="SELECT T_id from bid_ref where B_id='$b_id'";
  $res1=mysqli_query($con,$query) or die(mysqli_error($con));
  echo $e=mysqli_num_rows($res1);
  $Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,B_id,conform_date,price,d_status)VALUES(null,'$AD',(SELECT S_id FROM user_s WHERE S_mail='$email'),'$t_id','$b_id','$date','$price','0')";
  //$Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,conform_date,d_status)VALUES(null,'$AD',SELECT s_id from user_s WHERE S_mail='$email','$t_id','$b_id','$date','$prise','0')";
  $res=mysqli_query($con,$Qry) or die(mysqli_error($con));

  $query1="UPDATE ad SET status='1' WHERE AD_id = '$AD' AND S_id=(SELECT S_id FROM user_s WHERE S_mail='$email')";
  $sql=mysqli_query($con,$query1) or die(mysqli_error($con));
  $query3="UPDATE `bid` SET `B_status`='1' WHERE Ad_id='$AD' and B_id='$b_id'";
  $sql=mysqli_query($con,$query3) or die(mysqli_error($con));

    if($res){
      header('location:E_receipt.php');
    }
  }

  else{
    echo "transaction  failed";
    header('location:index.php');
  }
}

  }

}
else {
  echo "Something is Wrong With Query!!";
}

?>
