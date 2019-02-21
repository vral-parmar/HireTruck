<?php
require ('Session.php');
require ('Nav.php');
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


    <div class="container" style="padding-top:5%;"><br>
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
<div class="container">
<!-- The Modal -->
<div class="modal fade" id="myModaldel">
<div class="modal-dialog">
 <div class="modal-content">

   <!-- Modal Header -->
   <div class="modal-header">
     <h4 class="modal-title">Are you Sure?</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>

   <!-- Modal body -->
   <div class="modal-body">
     Are you Sure you Want to Delete this Advertizement?
   </div><div class="container">
     <form class="form-group" action="Del_ad.php" method="post">
       <input type="hidden" name="ad_id" value="<?php echo $re[0]; ?>">
   <div class="row">
     <div class="col">
     <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">No</button>
       </div>
   <div class="col">
         <input type="submit" class="btn btn-success btn-block" value="Yes"/>
       </div>
   </div>
 </form>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
</div>
<?php
}
 ?>
</body>
</html>
