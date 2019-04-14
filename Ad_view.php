<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ad View - HireTruck</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
<style media="screen">
  .box{
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px #888888;
  }
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-primary sticky-top">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-white" href="index.php">Back</a>
        </li>
      </ul>
    </nav><br><br>
    <?php
    require ('Session.php');
    $ss=$_SESSION['mail'];
    $query="SELECT * FROM `ad` WHERE status_ad='0'AND  S_id=(SELECT S_id from user_s  where S_mail='$ss')";
    $sql=mysqli_query($con,$query) or die(mysqli_error($con));
    $res=mysqli_num_rows($sql);
  //  print_r($res);exit;
    //echo mysqli_num_rows($sql);
    if($res>0){
    while($re=mysqli_fetch_array($sql)){
    ?>
    <form action="Edit_ad.php" method="post">
      <div class="container card box">
        <div class="row well well-lg">
          <div class="container"><br>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6"><p><b>Source of Luggage : </b></p> <p> <?php  print $re[2];?></p>
              <p><b>Type of Luggage :</b> </p> <p><?php  print $re[4];?>  </p>
              <p><b>Sub type of luggage : </b></p> <p> <?php  print $re[5];?>  </p>
              <p><b>Order Date of Luggage : </b></p> <p> <?php  print $re[9];?>  </p>
              <p><b>Extra Requirements for your Luggage : </b></p> <p> <?php  print $re[11];?>  </p></div>
              <div class="col-sm-6"><p><b>Destination : </b></p> <p><?php  print $re[3];?>  </p>
                <p><b>Weight of Luggage : </b></p> <p> <?php  print $re[6];?>  </p>
                <p><b>Vehicle Type :</b> </p> <p> <?php  print $re[10];?></p><br>
                <p><b>Date :</b> <?php  print $re[12];?></p><br>
          <!--deelte  ad query-->
              <div class="row">
                <div class="col">
                  <input type="hidden" name="id_ad" value="<?php echo $re[0]; ?>">
                  </form>
                    <button class="btn btn-success btn-block" data-toggle="modal" type="submit" data-target="#myModal" href="Edit_ad.php"><span class="fa fa-plus-circle"></span> Edit Ad </button>            </div>
            <div class="col">
              <input type="button" class="form-group btn btn-success btn-block" data-toggle="modal" data-target="#myModaldel" name="Delete_ad" value="Delete ad"/>
            </div>
            <div class="col">
              <form class="form-group" action="new_bid.php" method="post">
                <input type="hidden" name="id_Ad" value="<?php echo $re[0]; ?>">
              <input type="submit" class="form-group btn btn-success btn-block" name="view_bid" value="Show Bid"/>
              </form>
            </div>
          </div>
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
}
else {
  echo "<h2 style='text-align:center;'>Opps! There are No ad posted by you Why not to Post a New One</h2>";
}
 ?>
</body>
</html>
