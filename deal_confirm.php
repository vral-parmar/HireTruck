<?php
require ('Session.php');
require ('Meiler/Deal_mail.php');
require  ("Sms/way.php");
//require ("credit_detail.php");
//require ('connection.php');

$AD= $_POST['ad'];
//receiver code
  $R_name=$_POST['R_name'];
  $R_number=$_POST['R_number'];
  $R_mail=$_POST['R_mail'];
  $num=md5(rand(1,100000));
  $finalpass=substr($num,-8);
   $finalpass;

  //otp($R_mail,$R_name,$finalpass);
  //otpmob($,$password,$num);


$query="SELECT * from bid_ref where B_id=(SELECT B_id from bid where AD_id='$AD')";
$result= mysqli_query($con,$query) or die(mysqli_error($con));
$a=mysqli_num_rows($result);

if($a>0)
{

  while ($row=mysqli_fetch_array($result))
  {

$b_id=$row[0];
$t_id=$row[1];
$t_org_name=$row[2];
$price=$row[3];
$date=$row[4];
//exit;
$email=$_SESSION['mail'];
$date=date("Y-m-d");

//account   info check Query  expiry='$expiry' and

  $query="SELECT T_id from bid_ref where B_id='$b_id'";
  $res1=mysqli_query($con,$query) or die(mysqli_error($con));
 $e=mysqli_num_rows($res1);

  // $selQry="SELECT * FROM deal WHERE";

  $query1="UPDATE ad SET status_ad='1' WHERE AD_id = '$AD' AND S_id=(SELECT S_id FROM user_s WHERE S_mail='$email')";
  $sql21=mysqli_query($con,$query1) or die(mysqli_error($con));


  $query3="UPDATE `bid` SET `B_status`='1' WHERE Ad_id='$AD' and B_id='$b_id'";
  $sql=mysqli_query($con,$query3) or die(mysqli_error($con));

  $mail_query="SELECT D_id from deal where B_id='$b_id'";
$sql_mail=mysqli_query($con,$mail_query) or die(mysqli_error($con));
$row_mail=mysqli_fetch_array($sql_mail);

$D_id=$row_mail['0'];

//

  }
  $Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,B_id,conform_date,price,d_status,order_id)VALUES(null,'$AD',(SELECT S_id FROM user_s WHERE S_mail='$email'),'$t_id','$b_id','$date','$price','0','0')";
  //$Qry="INSERT INTO deal (D_id,Ad_id,S_id,T_id,conform_date,d_status)VALUES(null,'$AD',SELECT s_id from user_s WHERE S_mail='$email','$t_id','$b_id','$date','$prise','0')";
  $res5=mysqli_query($con,$Qry) or die(mysqli_error($con));


  $mail_dataqry="SELECT source_ad 'ad', no_destination 'ad',  D_id 'deal' ,order_date 'ad' from ad a,deal d where d.Ad_id=a.AD_id and a.s_id=(SELECT s_id from user_s where S_mail='$email')";
   $res_mail=mysqli_query($con,$mail_dataqry)or die(mysqli_query($con));

   if(mysqli_num_rows($res_mail)>0){
     while ($ctn_mail=mysqli_fetch_array($res_mail)) {


      $D_id=$ctn_mail['2'];


       $Source=$ctn_mail['0'];
       $Destnation=$ctn_mail['1'];
       $ord_date=$ctn_mail['3'];
     }
     $_SESSION['tid'] = $t_id;

     $_SESSION['price'] = $price;
     $_SESSION['did']=$D_id;

     deal_final_mail($email,$D_id,$Source,$Destnation,$ord_date);
     //otp($email,$D_id,$price,$date);

     $qry_rec="INSERT INTO `deal_dtails`(`Dd_id`, `Ad_id`, `S_id`, `D_id`, `R_name`, `R_number`, `R_mail`, `T_id`, `PASSCODE`) VALUES (null,'$AD',(SELECT S_id FROM user_s WHERE S_mail='$email'),'$D_id','$R_name','$R_number','$R_mail','$t_id','$finalpass')";
     $result_rec=mysqli_query($con,$qry_rec) or die(mysqli_error($con));
     //print_r($result_rec);
     //exit;
       header("location:PaytmKit/TxnTest.php");

   }else{
     echo "Mail Not Sent or No data Were found";
   }

}
else {
  echo "Something is Wrong With Query!!";
}

?>
