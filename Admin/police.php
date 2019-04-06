<?php
require ('session.php');
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
         <div class="col-md-10 col-sm-8 col-xs-12 center_div" style="margin-top:9%;">
            <form class="form-container1" action="Lvalidate.php" method="post">
              <b><h2 align="center">Deal Details For Police Verification</h2></b><hr><br>
              <h3 align="center">Deals yet to be completed:</h3><hr><br>

              <div class="row container">
                  <div class="col">
                       <p><b>S_id :</b></p>
                  </div>
                  <div class="col">
                    <p><b>T_id :</b></p>
                  </div>
                  <div class="col">
                       <p><b>Confirm Date:</b></p>
                  </div>
                  <div class="col">
                      <p><b>Source:</b></p>
                  </div>

                    <div class="col">
                       <p><b>Destination:</b></p>
                    </div>

               </div>


                  <?php

                    $query="SELECT * from deal where d_status='0'";

                    $result= mysqli_query($con,$query) or die(myqli_error($con));

                    if(mysqli_num_rows($result)>0)
                      {
                          while($row=mysqli_fetch_array($result))
                            {
                              $ad_id=$row['Ad_id'];

                                  $query1="SELECT * from ad where Ad_id='$ad_id'";
                                  $result1= mysqli_query($con,$query1) or die(mysqli_error($con));

                                  if(mysqli_num_rows($result1)>0)
                                    {   while ($row1=mysqli_fetch_array($result1))
                                        {

                    ?>


                                    <div class="row container">
                                        <div class="col">
                                           <?php print substr(md5($row['S_id']),-8); ?>
                                        </div>
                                        <div class="col">
                                           <?php print substr(md5($row['T_id']),-8); ?>
                                        </div>
                                        <div class="col">
                                           <?php echo $row['conform_date']; ?>
                                        </div>
                                        <div class="col">
                                           <?php echo $row1['source']; ?>
                                        </div>
                                          <div class="col">
                                           <?php echo $row1['destination']; ?>
                                         </div>
                                     </div>

                                     <br><br>
                     <?php
                              }
                            }
                          }
                        }
                        ?>

              <h3 align="center">Deals completed with payment:</h3><hr><br>

                        <div class="row container">
                            <div class="col">
                                 <p><b>S_id :</b></p>
                            </div>
                            <div class="col">
                              <p><b>T_id :</b></p>
                            </div>
                            <div class="col">
                                 <p><b>Confirm Date:</b></p>
                            </div>
                            <div class="col">
                                <p><b>Source:</b></p>
                            </div>

                              <div class="col">
                                 <p><b>Destination:</b></p>
                              </div>

                         </div>


                            <?php

                              $query="SELECT * from deal where d_status='1'";

                              $result= mysqli_query($con,$query) or die(myqli_error($con));

                              if(mysqli_num_rows($result)>0)
                                {
                                    while($row=mysqli_fetch_array($result))
                                      {
                                        $ad_id=$row['Ad_id'];

                                            $query1="SELECT * from ad where Ad_id='$ad_id'";
                                            $result1= mysqli_query($con,$query1) or die(myqli_error($con));

                                            if(mysqli_num_rows($result1)>0)
                                              {   while ($row1=mysqli_fetch_array($result1))
                                                  {

                              ?>


                                              <div class="row container">
                                                  <div class="col">
                                                     <?php  print substr(md5($row['S_id']),-8); ?>
                                                  </div>
                                                  <div class="col">
                                                     <?php  print substr(md5($row['T_id']),-8); ?>
                                                  </div>
                                                  <div class="col">
                                                     <?php echo $row['conform_date']; ?>
                                                  </div>
                                                  <div class="col">
                                                     <?php echo $row1['source']; ?>
                                                  </div>
                                                    <div class="col">
                                                     <?php echo $row1['destination']; ?>
                                                   </div>
                                             </div>

                                             <br><br>
                               <?php
                                        }
                                      }
                                    }
                                  }
                                  ?>
                      <div class="row container">
                             <div class="col-6" style="text-align:left;">
                                 <a href="adm_login.php"> <code><-</code>Back to Home</a>
                             </div>

                             <div class="col-6" style="text-align:right;">
                                 <a href="adm-Srch.php"> Search a particular location<code>-></code></a>
                             </div>
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
