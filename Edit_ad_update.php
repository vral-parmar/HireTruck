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

 $query="UPDATE ad SET source='$source',no_destination='$dest',luggage='$luggage',type_luggage='$type',weight='$weight',price_budget='0',
 order_date='$order_date',vehicle_type='$vehicle',add_requirement='$extra' WHERE Ad_id='$ad' AND S_id=(select S_id from user_s where S_mail='$username')";
 $result=mysqli_query($con,$query) or die(mysqli_error($con));
 if($result){
 echo "Success";
 header('location:Ad_view.php');
 //header(home.php);
}
?>
