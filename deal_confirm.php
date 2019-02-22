<?php
require('Session.php');

$AD=$_POST['AD'];
$query="SELECT * from bid_ref where Ad_id=(SELECT Ad_id from ad where AD_id='$AD') AND status='0'";
$result= mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>0)
{
  while ($row=mysqli_fetch_array($result))
  {
print_r($row);
$b_id=$row[1];
$t_id=$row[0];
$t_org_name=$row[4];
$price=$row[5];
$date=$row[6];
$email=$_SESSION['mail'];
$date=date("Y-m-d");
//echo $b_id;exit;

$query="SELECT T_id from bid_ref where Bid_id='$b_id'";
$res1=mysqli_query($con,$query) or die(mysqli_error($con));
echo $e=mysqli_num_rows($res1);
$Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,B_id,conform_date,price,d_status)VALUES(null,'$AD',(SELECT S_id FROM user_s WHERE S_mail='$email'),'$t_id','$b_id',$date,'$price','0')";
//$Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,conform_date,d_status)VALUES(null,'$AD',SELECT s_id from user_s WHERE S_mail='$email','$t_id','$b_id','$date','$prise','0')";
$res=mysqli_query($con,$Qry) or die(mysqli_error($con));

$query1="UPDATE ad SET status='1' WHERE AD_id = '$AD' AND S_id=(SELECT S_id FROM user_s WHERE S_mail='$email')";
$sql=mysqli_query($con,$query1) or die(mysqli_error($con));
if($res){
  header('location:Ad_view.php');
}
}
}
else {
  echo "Something is Wrong With Query!!";
}
?>
