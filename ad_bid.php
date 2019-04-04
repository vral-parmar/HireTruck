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
<div class="container shadow-lg p-3 mb-5 bg-white rounded">
            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-light">Advertisement Details</h4>
            </div>
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
            <div class="card-body">
                <h4 class="card-title">The Ad you are interested in:</h4>
                <p class="card-text">Enter the price if you are interested in the deal or cancel. </p>
                <div class="container">
                    <form action="submit_bid.php" method="post" class="form-group">
                        <div>
                            <label>Source of Luggage:</label>
                            <?php echo $source ?>
                        </div>
                        <label>Destination:</label>
                            <?php echo $des ?>
                        <div>
                            <label> Kind of luggage the shipper wants to transfer:</label>
                            <?php echo $kol ?>
                        </div>
                        <div>
                            <label>Type of luggage:</label>
                            <?php echo $tol ?>
                        </div>
                        <div>
                            <label>Goods Capacity:</label>
                            <?php echo $wol ?><bold>&nbsp;ton</bold>
                        </div>
                        <!--<div>
                            <label>Shipper's Budget:</label>
                            <?php echo $budget ?>
                        </div>-->
                        <div>
                            <label>Order date:</label>
                            <?php echo $date ?>
                        </div>
                        <div>
                            <label>Vehicle type:</label>
                            <?php echo $vtype ?>
                        </div>
                        <div>
                            <label>Extra Requirements:</label>
                            <?php echo $addreq ?>
                        </div>

                        <div>
                            <label>Your Bid:</label>
                            <input type="textbox" name="bid" class="form-control" required/>
                            <input type="hidden" name="ad_id" value="<?php echo $Ad_id; ?>"/>
                        </div>
                        <br>
                        <?php
                            }
                          }
                          ?>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <input type="reset" value="reset" class="form-control btn btn-danger"/>
                                </div>
                                <div class="col">
                                    <input type="Submit" value="submit" class="form-control btn btn-primary"/>
                                </div>
                              </div>
                        </div>
                    </form>
</div>
</body>
</html>
