<?php
$price=$_POST['price'];
$b_id=$_POST['bid'];



$query="SELECT T_id from bid_ref where B_id='$b_id'";
$res1=mysqli_query($con,$query) or die(mysqli_error($con));
echo $e=mysqli_num_rows($res1);
$Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,B_id,conform_date,price,d_status)VALUES(null,'$AD',(SELECT S_id FROM user_s WHERE S_mail='$email'),'$t_id','$b_id','$date','$price','0')";
//$Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,conform_date,d_status)VALUES(null,'$AD',SELECT s_id from user_s WHERE S_mail='$email','$t_id','$b_id','$date','$prise','0')";
$res=mysqli_query($con,$Qry) or die(mysqli_error($con));

$query1="UPDATE ad SET status='1' WHERE AD_id = '$AD' AND S_id=(SELECT S_id FROM user_s WHERE S_mail='$email')";
$sql=mysqli_query($con,$query1) or die(mysqli_error($con));
if($res){
  header('location:credit_detail.php');
}
}

 ?>
