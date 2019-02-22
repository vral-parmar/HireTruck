<?php
require ('Session.php');
$t_no=$_POST['source'];
$sql="SELECT source 'ad', no_destination 'ad',  D_id 'deal' ,order_date 'ad' from ad a,deal d where d.Ad_id=a.AD_id;";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$did=$row[2];
$source=$row[0];
$desti=$row[1];

$quey="INSERT into track VALUES(null,'$did','$desti','$source','$t_no','0',null)";
$res=mysqli_query($con,$quey) or die(mysqli_error($con));

 ?>
