<?php
require ("Session.php");
//require ('Nav.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-secondary sticky-top navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="ad.php">Back</a>
      </li>
    </ul>
  </nav>
  <?php
if(isset($_POST['Update'])){
$pricehid= $_POST['price'];
  ?><div class="container"  style="padding-top:3%;">
<div class="container shadow-lg col-8 bg-white rounded" style="margin-top:1%;">
            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-light">Advertisement Details for Bid</h4>
            </div>
            <div class="container">
            <table class="table">
              <tbody>
            <?php
              //  while($status==0)
               $Ad_id=$_POST['id_ad'];
                  $qry="SELECT * FROM `ad` WHERE AD_id='$Ad_id' ";
                  $res=mysqli_query($con,$qry) or die(mysqli_error($con));
                    if(mysqli_num_rows($res)>0)
                    {
                      while(  $retrive=mysqli_fetch_array($res))
                      {
                        $row=$retrive;
                        $Ad_id=$row['AD_id'];
                        $source=$row['Source_ad'];
                        $des=$row['no_destination'];
                        $kol=$row['luggage'];
                        $tol=$row['type_luggage'];
                        $wol=$row['weight'];
                        $budget=$row['price_budget'];
                        $date=$row['order_date'];
                        $vtype=$row['vehicle_type'];
                        $addreq=$row['add_requirement'];
            ?>
            <!-- Modal body -->
            <form action="up_bid.php" method="post" class="form-group">
              <tr>
                <td><b>Source of Luggage:</b></td>
                <td><?php echo $source ?></td>
              </tr>
              <tr>
                <td><b>Destination:</b></td>
                <td><?php echo $des ?></td>
              </tr>
              <tr>
                <td><b>Kind of luggage the shipper wants to transfer:</b></td>
                <td><?php echo $kol ?></td>
              </tr>
              <tr>
                <td><b>Type of luggage:</b></td>
                <td><?php echo $tol ?></td>
              </tr>
              <tr>
                <td><b>Goods Capacity:</b></td>
                <td><?php echo $wol ?><bold>&nbsp;ton</td>
              </tr>
              <tr>
                <td><b>Shippers Budget</b>:</td>
                <td><?php echo $budget ?></td>
              </tr>
              <tr>
                <td><b>Order date:</b></td>
                <td><?php echo $date ?></td>
              </tr>
              <tr>
                <td><b>Vehicle type:</b></td>
                <td><?php echo $vtype ?></td>
              </tr>
              <tr>
                <td><b>Extra Requirements:</b></td>
                <td><?php echo $addreq ?></td>
              </tr>
              <tr>
                <td><b>Your Bid:</td>
                  <td><div class="container">
                <input type="textbox" name="bid" class="form-control input-sm" value="<?php echo $pricehid; ?>" required/>
                    <input type="hidden" name="ad_id" value="<?php echo $Ad_id; ?>"/>
                  </td></div>
              </tr>
              <br><br>
                        <?php } } ?>
                          </tbody>
                              </table>
                                </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <input type="reset" value="reset" class="form-control btn btn-danger"/>
                                </div>
                                <div class="col">
                                    <input type="Submit" value="submit" class="form-control btn btn-primary"/>
                                </div>
                              </div>
                        </div><br><br>
                    </form>
</div>
</div>
  <?php
}else{
   ?>
  <div class="container"  style="padding-top:3%;">
<div class="container shadow-lg col-8 bg-white rounded" style="margin-top:1%;">
            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-light">Advertisement Details for Bid</h4>
            </div>
            <div class="container">
            <table class="table">
              <tbody>
            <?php
              //  while($status==0)
               $Ad_id=$_POST['id_ad'];
                  $qry="SELECT * FROM `ad` WHERE AD_id='$Ad_id' ";
                  $res=mysqli_query($con,$qry) or die(mysqli_error($con));
                    if(mysqli_num_rows($res)>0)
                    {
                      while(  $retrive=mysqli_fetch_array($res))
                      {
                        $row=$retrive;
                        $Ad_id=$row['AD_id'];
                        $source=$row['Source_ad'];
                        $des=$row['no_destination'];
                        $kol=$row['luggage'];
                        $tol=$row['type_luggage'];
                        $wol=$row['weight'];
                        $budget=$row['price_budget'];
                        $date=$row['order_date'];
                        $vtype=$row['vehicle_type'];
                        $addreq=$row['add_requirement'];
            ?>
            <!-- Modal body -->
            <form action="submit_bid.php" method="post" class="form-group">
              <tr>
                <td><b>Source of Luggage:</b></td>
                <td><?php echo $source ?></td>
              </tr>
              <tr>
                <td><b>Destination:</b></td>
                <td><?php echo $des ?></td>
              </tr>
              <tr>
                <td><b>Kind of luggage the shipper wants to transfer:</b></td>
                <td><?php echo $kol ?></td>
              </tr>
              <tr>
                <td><b>Type of luggage:</b></td>
                <td><?php echo $tol ?></td>
              </tr>
              <tr>
                <td><b>Goods Capacity:</b></td>
                <td><?php echo $wol ?><bold>&nbsp;ton</td>
              </tr>
              <tr>
                <td><b>Shippers Budget</b>:</td>
                <td><?php echo $budget ?></td>
              </tr>
              <tr>
                <td><b>Order date:</b></td>
                <td><?php echo $date ?></td>
              </tr>
              <tr>
                <td><b>Vehicle type:</b></td>
                <td><?php echo $vtype ?></td>
              </tr>
              <tr>
                <td><b>Extra Requirements:</b></td>
                <td><?php echo $addreq ?></td>
              </tr>
              <tr>
                <td><b>Your Bid:</td>
                  <td><div class="container">
                <input type="textbox" name="bid" class="form-control input-sm" required/>
                    <input type="hidden" name="ad_id" value="<?php echo $Ad_id; ?>"/>
                  </td></div>
              </tr>
              <br><br>
                        <?php } } ?>
                          </tbody>
                              </table>
                                </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <input type="reset" value="reset" class="form-control btn btn-danger"/>
                                </div>
                                <div class="col">
                                    <input type="Submit" value="submit" class="form-control btn btn-primary"/>
                                </div>
                              </div>
                        </div><br><br>
                    </form>
</div>
</div>
</body>
</html>
<?php } ?>
