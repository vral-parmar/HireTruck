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
  <div class="container"  style="padding-top:3%;">
<div class="container shadow-lg  bg-white rounded" style="margin-top:1%;">
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
                        $source=$row['source'];
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
                <td>Source of Luggage:</td>
                <td><?php echo $source ?></td>
              </tr>
              <tr>
                <td>Destination:</td>
                <td><?php echo $des ?></td>
              </tr>
              <tr>
                <td>Kind of luggage the shipper wants to transfer:</td>
                <td><?php echo $kol ?></td>
              </tr>
              <tr>
                <td>Type of luggage:</td>
                <td><?php echo $tol ?></td>
              </tr>
              <tr>
                <td>Goods Capacity:</td>
                <td><?php echo $wol ?><bold>&nbsp;ton</td>
              </tr>
              <tr>
                <td>Shippers Budget:</td>
                <td><?php echo $budget ?></td>
              </tr>
              <tr>
                <td>Order date:</td>
                <td><?php echo $date ?></td>
              </tr>
              <tr>
                <td>Vehicle type:</td>
                <td><?php echo $vtype ?></td>
              </tr>
              <tr>
                <td>Extra Requirements:</td>
                <td><?php echo $addreq ?></td>
              </tr>
              <tr>
                <td>Your Bid:</td>
                <td><input type="textbox" name="bid" class="form-control input-sm" required/>
                    <input type="hidden" name="ad_id" value="<?php echo $Ad_id; ?>"/></td>
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
