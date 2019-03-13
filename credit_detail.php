<?php
require ('session.php');
require ('Nav.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Details</title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
        <title>Credit Details</title>
        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
<style media="screen">
body{
 height: 100%;
 width:100%;
 }
</style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="css/logreg.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-10 center_div" style="margin-top:9%;">
            <form class="form-container1" action="Lvalidate.php" method="post">
              <h2 align="center">Account Details </h2><hr><br>
                 <div class="row container">
                  <div class="col-md-6">
                        <label><b>Card Holder Name</b></label>
                        <input type="card_name" name="cardholder" pattern="[A-Za-z]{100}" class="form-control" placeholder="Enter Card Holder Name" autofocus required>
                  </div>
                 </div>
                 <div class="row container">
                    <div class="col-md-6">
                       <label for="source"><b>Card Number</b></label>
                       <input type="card_number" pattern=".{16}" name="card_number" class="form-control"  maxlength="16" placeholder="Enter Card Number" autofocus required>
                    </div>
                  </div>
                  <div class="row container">
                    <div class="col-md-6">
                       <label for="source"><b>Expiry Date</b></label>
                       <input type="date"  pattern="dd-mm-YYYY" name="SHIPPER_truck_num" class="form-control" placeholder="Enter the Expiry date" autofocus required>
                    </div>
                    <div class="col-md-4">
                       <label for="source"><b>CVV</b></label>
                       <input type="password" pattern="/^[0-9] {3}$/" pattern"[0-9]{10}"  ng-model="dataItem.password" name="SHIPPER_number" class="form-control" maxlength="3" placeholder="***" required><br><br>
                    </div>
                  </div>
                   <?php
                    $query="select * from bid_ref WHERE(SELECT B_id FROM bid WHERE Ad_id='1')";
                    $result= mysqli_query($con,$query) or die(myqli_error($con));
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row=mysqli_fetch_array($result))
                      {
                      $b_id=$row['B_id'];
                      $t_id=$row['T_id'];
                      $t_org_name=$row['T-org_name'];
                      $price=$row['price'];
                      $date=$row['date'];
                    ?>
                    <div class="row container">
                        <div class="col">
                           <?php echo $t_id; ?>
                        </div>
                        <div class="col">
                           <?php echo $t_org_name; ?>
                        </div>
                        <div class="col">
                           <?php echo $price; ?>
                        </div>
                        <div class="col">
                           <?php echo $date; ?>
                        </div>
                     <button type="button" class="btn btn-info" onclick="alert('Bid Confirmed !!')">Confirm</button>
                     </div>
                     <?php
                        }
                        }
                        ?>
                      <div>
                        <input type="submit" class="btn btn-success" id="Hide" value="Submit">&nbsp; &nbsp; &nbsp;
                        <button type="reset" class="btn btn-danger">Reset</button><br><br><br>
                      </div>

                      <div class="row container">
                        <div class="col-6" style="text-align:left;">
                            <a href="index.php"> <code><-</code>Back to Home</a>
                        </div>
                      </div>
            </form>
      </div>
    </div>
  </div>
    <script type="text/javascript">
    document.getElementById("Hide").onclick = function()
    {
    this.disabled = true;
    }
    </script>
  </body>
</html>
