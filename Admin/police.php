<?php
//require ('session.php');
//require ('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEW BID</title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
        <title>Hire Truck</title>
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
              <h2 align="center">Police Verification</h2><hr><br>
                 <div class="row container">
                  <div class="col">
                        <label><b>Shipper name</b></label>
                  </div>
                    <div class="col">
                       <label for="source"><b>Transpost company</b></label>
                    </div>
                    <div class="col">
                       <label for="source"><b>Price</b></label>
                    </div>
                    <div class="col">
                       <label for="source"><b>Date</b></label>
                    </div>
                    <div class="col">
                      <label for="source"><b>Luggage</b></label>
                    </div>
                    <div class="col">
                     <label for="source"><b>Type of luggage</b></label>
                    </div>
                    <div class="col">
                       <label><b>Source</b></label>
                    </div>
                    <div class="col">
                          <label><b>Destination</b></label>
                    </div>
                  <?php
                    $query="SELECT * from user_s where S_id = ( SELECT s_id from ad where Ad_id=(SELECT Ad_id from deal where D_id='1'))";
                    $query1="SELECT * from ad where Ad_id=(SELECT Ad_id from deal where D_id='1')";
                    $query2="SELECT * from user_t where T_id=(SELECT T_id from deal where D_id='1')";
                    $query3="SELECT price,conform_date from deal where D_id='1'";
                    //echo $e=array_combine($query, $result);

                    $result= mysqli_query($con,$query) or die(myqli_error($con));
                    $result1= mysqli_query($con,$query1) or die(myqli_error($con));
                    $result2= mysqli_query($con,$query2) or die(myqli_error($con));
                    $result3= mysqli_query($con,$query3) or die(myqli_error($con));
                    if(mysqli_num_rows($result)>0)
                      {

                      while($row1=mysqli_fetch_array($result1))
                      {
                    //print_r($row1);

                      $lugagge=$row1[4];
                      $type=$row1[5];
                      $source=$row1[2];
                      $Destination=$row1[3];
                    }
                    while($row3=mysqli_fetch_array($result3))
                      {
                    //print_r($row3);

                      $price=$row3[0];
                      $date=$row3[1];
                      }
                    while($row2=mysqli_fetch_array($result2))
                      {
                    //print_r($row3);
                    $t_org_name=$row2[2];
                      //$price=$row5[39];
                      //$date=$row7[40];
                      }
                    while($row=mysqli_fetch_array($result))
                      {
                    //print_r($row);
                      $S_id=$row['S_fname'];
                      //$t_org_name=$row2[26];
                      //$price=$row5[39];
                      //$date=$row7[40];
                      }
                    ?>
                    <div class="row container">
                        <div class="col">
                           <?php echo $S_id; ?>
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
                          <div class="col">
                           <?php echo $lugagge; ?>
                        </div>
                          <div class="col">
                           <?php echo $type; ?>
                        </div>

                        <div class="col">
                           <?php echo $source; ?>
                        </div>
                        <div class="col">
                           <?php echo $Destination; ?>
                        </div>
                     </div>
                     <?php
                        //}
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
