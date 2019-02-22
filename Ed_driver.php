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
  <?php
                                $sql="SELECT source 'ad', no_destination 'ad',  D_id 'deal' ,order_date 'ad' from ad a,deal d where d.Ad_id=a.AD_id;";
                                $result=mysqli_query($con, $sql);
                                $row=mysqli_fetch_array($result);
                                //print_r($row);
                                ?>
                <section class="banner_area">
                    <div class="container">
                        <div class="ba  nner_inner_text">
                        </div>
                    </div>
                </section><br><br><br><br><br>

                <div class="container" style=" webkit-box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);-moz-box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);	box-shadow: 1px 0px 17px 7px rgba(0,0,0,0.75);">

                            <div class="container" style="padding-top:5%;"><br>
                              <h1 class="text-center"> Track Your Luggage:<h1>
                            </div><br>

                            <form action="edit_d.php" method="post" class="form-group">
                            <div class="container">
                              <div class="row">


                                    <div class="col-md-6">
                                          <p><b>D_id : </b></p> <?php echo $row[2]?><p>  </p>
                                          <div class="form-group">
                                              <label> truck number</label>
                                              <input type="textbox" name="source" class="form-control" placeholder="Ahmedabad" required/>
                                          </div>


                                    </div>
                                    <div class="col-md-6">
                                           <p><b>Source Of Lugguage : </b></p> <p> <?php echo $row[0];?> </p>
                                            <p><b>Destination Of Lugguage :</b> </p> <p>   <?php echo $row[1];?></p>
                                            <div class="col">
                                              <p><b>confirm date :</b> </p> <p>   <?php echo $row[3];?></p>
                                              <div class="col">

                                                <input type="reset" value="reset" class="form-control btn btn-danger"/>
                                            </div>
                                            <div class="col">
                                                <input type="Submit" value="submit" class="form-control btn btn-success"/>
                                            </div>
                                          </div>
                                </form>
                  </div>
                                </div>
                                <br><br>
                          </div>
                        </div>
</div>
                        </div>


<?php //}?>
</body>
</html>
