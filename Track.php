<?php
require ("Session.php");
require ('Nav.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
                <section class="banner_area">
                    <div class="container">
                        <div class="banner_inner_text">
                        </div>
                    </div>
                </section>



                <div class="container" style=" webkit-box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);-moz-box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);	box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);">

                            <div class="container" style="padding-top:5%;"><br>
                              <h1 class="text-center"> Track Your Luggage: <h1>
                            </div><br>

                        <form action="" method="POST" class="form-group">

                            <div class="container-fluid">
                              <div class="row">
                                    <div class="col-md-6">
                                          <p><b>T_id : </b></p> <p> <?php  print $re[2];?> </p>
                                          <p><b>Truck No. :</b> </p> <p><?php  print $re[4];?>  </p>
                                              <p><b>Current Location:</b> </p> <p> <?php  print $re[5];?>  </p>


                                    </div>
                                    <div class="col-md-6">
                                           <p><b>Source Of Lugguage : </b></p> <p> <?php  print $re[5];?>  </p>
                                            <p><b>Destination Of Lugguage :</b> </p> <p> <?php  print $re[5];?>  </p>



                                    </div>
                                </div>
                                <br><br>

                          </div>
                          </form>

                  </div>
                  <div class="container">
                  <?php  if($i==20)
                  {?>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                        20% Distance Covered
                      </div>
                  <?php
                    } if($i==40)
                {?>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                        40% Distance Covered
                      </div>
                    </div>
                  <?php
                } if($i==60)
                  {?>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                        60% Distance Covered
                      </div>
                    </div>
                  <?php
                } if($i==80)
                  {?>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        80% Distance Covered
                      </div>
                  <?php
                } if($i==100)
                    {?>
                      <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                          100% Distance Covered
                        </div>
                    </div>
                  <?php } ?>
                  </div>



</body>
</html>
