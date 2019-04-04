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

                <div class="container" style=" margin-top:10px; webkit-box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);-moz-box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);	box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);">

                            <div class="container" style="padding-top:5%;"><br>
                              <h1 class="text-center"> Enter Details At Every Checkpoint: <h1>
                            </div><br>

                        <form action="Track.php" method="POST" class="form-group">



                            <div class="container-fluid">
                              <div class="row">
                                    <div class="col-md-6">
                                          <p><b>D_id : </b></p> <p> <?php  print $re[2];?> </p>
                                          <!-- <p><b>Truck No. :</b> </p> <p>  </p> -->


                                    </div>
                                    <div class="col-md-6">
                                           <p><b>Source Of Lugguage : </b></p> <p> <?php  print $re[5];?>  </p>
                                            <p><b>Destination Of Lugguage :</b> </p> <p> <?php  print $re[5];?>  </p>
                                            <p><b>Truck number :</b> </p> <p> <?php  print $re[5];?>  </p>


                                    </div>
                                </div>
                                <br><br>
                              <div class="row"style="padding-bottom:50px;">
                                        <div  class="col-md-6">
                                            <label>Enter Your Current Location:</label>
                                            <textarea  name="CARRIER_address" class="form-control" row="5" placeholder="Enter your Address" maxlength="200" title="Max Length is 200 Minimum 50" required> </textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row"style="padding-top:10%;">
                                             <div class="col">
                                            <button type="submit" class="btn btn-success btn-block" id="Hide" >Submit</button>
                                          </div>

                                            <div class="col">
                                            <button type="reset" class="btn btn-Primary btn-block">Reset</button>
                                            </div>
                                          </div>
                                        </div>

                              </div>

                          </div>

                  </div>

</body>
</html>
