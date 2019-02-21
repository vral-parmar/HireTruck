<?php
require ('Session.php');
$ss=$_SESSION['mail'];
$query="SELECT * FROM ad  WHERE S_id=(SELECT S_id FROM user_s WHERE S_mail='$ss') AND status='0'";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
//print_r($sql);
//echo mysqli_num_rows($sql);
while($re=mysqli_fetch_array($sql)){
?>
<div class="container card">
  <div class="row well well-lg">
    <div class="container"><br>

    </div>
  </div>
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><p>Source of Luggage : </p> <p> <?php  print $re[2];?></p>
          <p>Type of Luggage : </p> <p><?php  print $re[4];?>  </p>
          <p>Sub type of luggage : </p> <p> <?php  print $re[5];?>  </p>
          <p>Order Date of Luggage : </p> <p> <?php  print $re[9];?>  </p>
          <p>Extra Requirements for your Luggage : </p> <p> <?php  print $re[12];?>  </p></div>
        <div class="col-sm-6"><p>Destination or Number of Drop Point : </p> <p><?php  print $re[3];?>  </p>
          <p>Weight of Luggage : </p> <p> <?php  print $re[6];?>  </p>
          <p>Approximate Prize for Transfer your Luggage : </p> <p> <?php  print $re[7];?>  </p>
          <p>Vehicle Type : </p> <p> <?php  print $re[11];?></p><br>
<?php
}
 ?>
