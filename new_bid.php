<?php
require ('Session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEW BID</title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
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
    <nav class="navbar navbar-expand-sm bg-primary sticky-top navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="Ad_view.php">Back</a>
        </li>
      </ul>
    </nav>
  <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-10 center_div" style="margin-top:5%;">
            <form class="form-container1" action="credit_detail.php" method="post">
              <h2 align="center">NEW BID</h2><hr><br>
                 <div class="row container">
                  <div class="col">
                        <label><b>Trans.'s ID</b></label>
                  </div>
                    <div class="col">
                       <label for="source"><b>Trans. Org. Name</b></label>
                    </div>
                    <div class="col">
                       <label for="source"><b>Price</b></label>
                    </div>
                    <div class="col">
                       <label for="source"><b>Date</b></label>
                    </div>
                    <div class="col">
                       <label for="source"><b>Confirmation</b></label>
                     </div>
                  <?php
                    $adi=$_POST['id_Ad'];
                    //echo $adi;exit;

                    $query="SELECT * FROM bid_ref where B_id=(SELECT b_id from bid where ad_id='$adi') ORDER by price ASC";
                    $result= mysqli_query($con,$query) or die(mysqli_error($con));
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
                    <div class="row container" style="padding-bottom:1%;">
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
                        <input type="hidden" name="AD" value="<?php echo $adi; ?>"/>
                     <input type="submit" class="btn btn-success btn-sm" value="Confirm Bid">
                     <input type="hidden" name="id_ad" value="<?php echo $Ad_id; ?>">
                     <!--button type="button" onclick="alert('Bid Confirmed !!')">Confirm</button-->
                   </div>
                     <?php
                        }
                        }
                        ?>

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
