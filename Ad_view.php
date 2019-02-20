<?php
require ('Session.php');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <div class="container"><br>
      <h1 class="text-center">Recently Posted ad on HireTruck<h1>
    </div><br>

<?php
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
          <p>Waight of Luggage : </p> <p> <?php  print $re[6];?>  </p>
          <p>Approximate Prize for Transfer your Luggage : </p> <p> <?php  print $re[7];?>  </p>
          <p>Vehicle Type : </p> <p> <?php  print $re[11];?></p><br>
          <div class="row">
            <div class="col">
              <input type="Button" class="form-group btn btn-success btn-block" name="edit" value="Edit ad"/>
            </div>
            <div class="col">
              <input type="button" class="form-group btn btn-success btn-block" data-toggle="modal" data-target="#myModaldel" name="Delete_ad" value="Delete ad"/>
            </div>
            <div class="col">
              <input type="button" class="form-group btn btn-success btn-block" name="view_bid" value="Show Bid"/>
            </div></div>
          </div>
        </div>
      </div>
    </div><br>
<?php
}
 ?>
</body>
</html>
