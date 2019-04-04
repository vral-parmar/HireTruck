<?php
require ('Session.php');
$ss=$_SESSION['mail'];
$query="SELECT * FROM `ad` WHERE status='0'AND  S_id=(SELECT S_id from user_s  where S_mail='$ss')";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
//print_r($sql);
//echo mysqli_num_rows($sql);
while($re=mysqli_fetch_array($sql)){
?>

Result Size: 753 x 601

<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.pagination a {

  color: black;

  float: left;

  padding: 8px 16px;

  text-decoration: none;
  transition: background-color .3s;
}
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}
.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
</head>
<body>
<h2>Pagination</h2>
<p>Responsive pagination with hover effects:</p>
<div class="pagination">

  <a href="#">&laquo;</a>

  <a href="#">1</a>

  <a class="active" href="#">2</a>

  <a href="#">3</a>

  <a href="#">4</a>

  <a href="#">5</a>

  <a href="#">6</a>

  <a href="#">&raquo;</a>

</div>

​

</body>

</html>

​


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
<form action="Edit_ad.php" method="post">
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
          <p>Extra Requirements for your Luggage : </p> <p> <?php  print $re[11];?>  </p></div>
        <div class="col-sm-6"><p>Destination : </p> <p><?php  print $re[3];?>  </p>
          <p>Weight of Luggage : </p> <p> <?php  print $re[6];?>  </p>

          <p>Vehicle Type : </p> <p> <?php  print $re[10];?></p><br>
          <p>date : <?php  print $re[12];?></p><br>

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
 ?>
</body>
</html>
