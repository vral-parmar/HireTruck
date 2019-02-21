<?php
require ('Session.php');
$ss=$_SESSION['mail'];
$query="SELECT * FROM ad  WHERE S_id=(SELECT S_id FROM user_s WHERE S_mail='$ss') AND status='0'";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
//print_r($sql);
//echo mysqli_num_rows($sql);
while($re=mysqli_fetch_array($sql)){
?>
<!DOCTYPE html>
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

     <!-- modal code start -->
        <div class="modal fade shadow-lg p-3 mb-5 bg-white rounded" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-light">HireTruck Ad Post</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="card-body">
                        <h4 class="card-title">Post your AD for transfer your Luggage</h4>
                        <p class="card-text">Fill up your requirement's for vehicle and Luggage and tap submit for open your ad
                            in the HireTruck </p>
                        <div class="container">
                            <form action="Edit_ad.php" method="post" class="form-group">
                                <div class="form-group">
                                    <label> Enter Source of Luggage</label>
                                    <input type="textbox" name="source" class="form-control" value="<?php print_r ($re[2]);?>" placeholder="Ahmedabad" required/>
                                </div>
                                <div class="form-group">
                                <label>Enter number of destination</label>
                                <textarea class="form-control" name="no_dest" placeholder="meghaninagar & maninagar" value="<?php print($re[3]); ?>" required>
                                </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Type of Luggage</label>
                                    <input type="textbox" name="luggage" class="form-control" placeholder="Liquid, hard, soft, gas..." value="<?php print($re[4]); ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Kind of luggage</label>
                                    <input type="textbox" name="type_luggage" class="form-control" placeholder="Furniture, Glass, Cargo..."  value="<?php print($re[9]); ?>"required/>
                                </div>
                                <div class="form-group">
                                    <label>Weight of luggage in</label>&nbsp;<bold>Kg</bold>&nbsp; <small>(Approx)</small>
                                    <input type="number" name="waight" class="form-control" placeholder="Weight" min=0 value="<?php print($re[6]); ?>"required/>
                                </div>
                                <div class="form-group">
                                    <label>Your Budget</label>
                                    <input type="number" name="budget" class="form-control" placeholder="Price" min=0 value="<?php print ($re[7]); ?>"required/>
                                </div>
                                <div class="form-group">
                                    <label>Date of Arrival </label>
                                    <input type="date" name="order_date" class="form-control" value="<?php print ($re[9]); ?>"YYYY-mm-dd required/>
                                </div>
                                <div class="form-group">
                                    <label>Type of Vehicle</label>
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-4">
                                            <select class="form-control" name="wheel" required>
                                              <option value="">--Select--</option>
                                              <option value="4-Wheel">4-Wheel</option>
                                              <option value="6-Wheel">6-Wheel</option>
                                              <option value="8-Wheel">8-Wheel</option>
                                              <option value="10-Wheel">10-Wheel</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                          <select class="form-control" name="sub_type" required>
                                            <option value="">-Sub-Type-</option>
                                            <option value="Open">Open</option>
                                            <option value="Close">Close</option>
                                            <option value="Carrier">Carrier</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div>
                                    <label>Extra Requirements</label>
                                    <input type="textbox" name="extra_req" class="form-control" placeholder="Rope, Strip, Hooks, cable etc.." value="<?php print ($re[12]); ?>"required/>
                                </div>
                                <br>


                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="reset" value="reset" class="form-control btn btn-danger"/>
                                        </div>
                                        <div class="col">
                                            <input type="Submit" value="Update" class="form-control btn btn-success"/>
                                            <div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div></div></div></div>


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
          <div class="row">
            <div class="col">
              <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus-circle"></span> Edit Ad </button>            </div>
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
