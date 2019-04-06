<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
<?php
require('connection.php');
require('Session.php');
$ad= $_POST['id_ad'];
$username=mysqli_real_escape_string($con, htmlspecialchars($_SESSION['mail']));
 $source=mysqli_real_escape_string($con, htmlspecialchars($_POST['source']));
 $dest=mysqli_real_escape_string($con, htmlspecialchars($_POST['no_dest']));
 $luggage=mysqli_real_escape_string($con, htmlspecialchars($_POST['luggage']));
 $type=mysqli_real_escape_string($con, htmlspecialchars($_POST['type_luggage']));
 $weight=mysqli_real_escape_string($con, htmlspecialchars($_POST['waight']));
 //$budget=mysqli_real_escape_string($con, htmlspecialchars($_POST['budget']));
 $order_date=mysqli_real_escape_string($con, htmlspecialchars($_POST['order_date']));
 $wheel=mysqli_real_escape_string($con, htmlspecialchars($_POST['wheel']));
 $sub=mysqli_real_escape_string($con, htmlspecialchars($_POST['sub_type']));
 $vehicle=$wheel.','.$sub;
 $extra=mysqli_real_escape_string($con, htmlspecialchars($_POST['extra_req']));

 $query="UPDATE ad SET Source_ad='$source',no_destination='$dest',luggage='$luggage',type_luggage='$type',weight='$weight',price_budget='0',
 order_date='$order_date',vehicle_type='$vehicle',add_requirement='$extra' WHERE Ad_id='$ad' AND S_id=(select S_id from user_s where S_mail='$username')";
 $result=mysqli_query($con,$query) or die(mysqli_error($con));
 if($result){
 header( "refresh:1;url=Ad_view.php?=Ad_Edited_Successfully" );
 //header(home.php);
}
?>
  <div class='container'>
    <div class='alert alert-success' role='alert' style='text-align:center; margin-top:25%;padding-top:2%;padding-bottom:2%' >
    <h4><strong>Well done.... You are Almost There!</strong>Your Ad has been Updated as Your Requirements!</h4>
    </div>
  </div>
