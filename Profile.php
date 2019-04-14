<?php
include("connection.php");
require_once("Session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        //  session_start();
          $email=$_SESSION["mail"];
        ?>
        <style>
        .fa-btn {
          padding: 20px;
          font-size: 50px;
          width: 50px;
          text-align: center;
          text-decoration: none;
          margin: 5px 5px;
          border-radius: 30%;
        }
        .fa:hover {
          opacity: 0.7;
        }
        .fa-btn-facebook {
          background: #3B5998;
          color: white;
        }
        .fa-btn-twitter {
          background: #55ACEE;
          color: white;
        }
        .fa-btn-google {
          background: #dd4b39;
          color: white;
        }
        .fa-btn-instagram {
          background: #F624EC;
          color: white;
        }
        img {
          border-radius: 50%;
        }
      </style>
    </head>

    <body>
    <?php
    include ('Nav.php');
if($_SESSION['user_type']=="Shipper"){
?>
    <!-- ================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                </div>
            </div>
        </section>
    <!--================End Blog Main Area =================-->

        <div class="container ">
              <h3 style="font:weight:bold;padding-bottom:6px;padding-right:2px;"><b><u><strong>Profile :</strong></u></b></h3><br>
            <div class="row card">
                <div class="col-md-12 card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                  <?php
                                  $qry="SELECT * FROM `user_s` WHERE S_mail='$email'";
                                  $res=mysqli_query($con,$qry) or die(mysqli_error($con));
                                    if(mysqli_num_rows($res)>0)
                                    {
                                      while(  $retrive=mysqli_fetch_array($res))
                                      {
                                        $row=$retrive;
                                        $fname=ucwords($row['S_fname']);
                                         $lname=ucwords($row['S_lname']);
                                         $mno=$row['S_mnumber'];
                                         $add=$row['S_address'];
                                  ?>
                                    <h2><?php echo $fname." ".$lname; ?> </h2><br>
                                    <p><strong>Email: &nbsp;</strong> <?php echo $email; ?> </p>
                                    <p><strong>Mobile Number: &nbsp;</strong>  <?php echo $mno; ?> </p>
                                    <p><strong>Your Address: &nbsp;</strong>  <?php echo $add; ?> </p>
                                  <br><br>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <!-- <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="" class="center-block img-circle img-responsive"> -->
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4">                                   <!-- modal code start -->
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
                                                            <form action="Ad_inc.php" method="post" class="form-group">
                                                                <div class="form-group">
                                                                    <label> Enter Source of Luggage</label>
                                                                    <input type="textbox" name="source" class="form-control" placeholder="Ahmedabad" required/>
                                                                </div>
                                                                <div class="form-group">
                                                                <label>Enter destination of Luggage</label>
                                                                <input type="text" class="form-control" name="no_dest" placeholder="meghaninagar & maninagar" required/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Type of Luggage</label>
                                                                    <input type="textbox" name="luggage" class="form-control" placeholder="Liquid, hard, soft, gas..." required/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kind of luggage</label>
                                                                    <input type="textbox" name="type_luggage" class="form-control" placeholder="Furniture, Glass, Cargo..." required/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Goods Capicity </label>&nbsp;<bold>ton</bold>&nbsp; <small>(Approx)</small>
                                                                    <input type="number" name="waight" class="form-control" placeholder="Weight" min=0 required/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Date of Arrival </label>
                                                                    <input type="date" name="order_date" class="form-control" YYYY-mm-dd required/>
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
                                                                    <input type="textbox" name="extra_req" class="form-control" placeholder="Rope, Strip, Hooks, cable etc.." required/>
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
                                                                            <input type="Submit" value="submit" class="form-control btn btn-success"/>
                                                                            <div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div></div></div></div>
                                    <!-- ad modal end -->
                                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus-circle"></span><strong> Post Ad </strong> </button>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4">
                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#Edit_prof"><span class="fa fa-user"></span> <strong>Edit Your Profile</strong> </button>
                                    <div class="container border">
  <!-- Modal -->
  <!---Edit Profile start --->
    <div class="modal fade" id="Edit_prof" role="dialog">
  <form class="form-group" action="Profile_up.php" method="post">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h4 class="modal-title">Edit your Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <div>
        <label for="fname">First Name *</label>
          <input type="name" name="SHIPPER_fname" class="form-control" placeholder="Enter your First Name" autofocus required value="<?php echo $fname ?>"><br>
        </div>
        <div>
        <label for="fname">Last Name *</label>
          <input type="name" name="SHIPPER_lname" class="form-control" placeholder="Enter your First Name" autofocus required value="<?php echo $lname; ?>"><br>
        </div>
        <div>
        <label for="fname">Mobile *</label>
          <input type="name" name="SHIPPER_number" class="form-control" placeholder="Enter your First Name" autofocus required value="<?php echo $mno; ?>"><br>
        </div>
        </div><?php   }
        }?>
        <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<!--Edit Profile end -->
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4">
                                    <a href="new_re.php" type="button" class="btn btn-primary btn-block"><span class="fa fa-truck"></span> <strong>E-Reciept</strong> </a>
                                </div><!--/col-->
                            </div><!--/row-->
                        </div><!--/panel-body-->
                    </div><!--/panel-->
                </div>
            </div>
        </div>
        <br>

      <div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModaldel">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Are you Sure?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          Are you Sure you Want to Delete this Advertizement?
        </div><div class="container">
          <form class="form-group" action="Del_ad.php" method="post">
            <input type="hidden" name="ad_id" value="<?php echo $re[0]; ?>">
        <div class="row">
        	<div class="col">
     			<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">No</button>
            </div>
     		<div class="col">
          		<input type="submit" class="btn btn-success btn-block" value="Yes"/>
            </div>
        </div>
      </form>
    </div>
   <div class="modal-footer">
  </div>
 </div>
</div>
</div>
</div>

<!---========================================    Saprate LOC   ================================================================ -->
<?php  } //end of shipper condition
if($_SESSION['user_type']=="Transport"){ //transport condition started
?>        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                  <div class="container">
                    <?php
                    $qry="SELECT * FROM `user_t` WHERE T_mail='$email'";
                    $res=mysqli_query($con,$qry) or die(mysqli_error($con));

                      if(mysqli_num_rows($res)>0)
                      {
                        while(  $retrive=mysqli_fetch_array($res))
                        {
                          $row=$retrive;
                          $Tname=$row['T_org_name'];
                           $towner=$row['T_owner_name'];
                           $mno=$row['T_number'];
                           $tadd=$row['T_address'];
                           $nov=$row['T_no_vehicle'];
                           $tano=$row['T_anumber'];
                    ?>
                    <div class="container">
                      <div class="row">
                        <div class="container">
                          <div class="row">
                            <div class="col">
                                <h4><small><?php echo "<b>".$Tname."</b>"." Owned by: "."<b>".$towner."</b>"; ?>
                                At: <?php echo "<b>".$tadd."</b>"; ?>&nbsp;Location </small></h4>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <h3><small>Email: <?php echo $email; ?> </small></h3>
                          <h3><small>Mobile Number: <?php echo $mno; ?> </small></h3>
                        </div>
                        <div class="row">
                          <div class="col"><br><br>
                            <a href="ad.php" class="btn btn-success btn-block"><span class="fa fa-eye"></span> View Ad  </a>
                          </div>
                          <div class="col"><br><br>
                            <button class="btn btn-info btn-block" data-toggle="modal" data-target="#Edit_prof"><span class="fa fa-user"></span> Edit Your Profile </button>
                        </div>
                        <div class="col"><br><br>
                            <button type="button" class="btn btn-primary btn-block"><span class="fa fa-truck"></span> Bills </button>
                        </div>
                    </div>
                        </div>
                      </div>
                    </div>
                    <?php } } ?>
                  </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        <div class="modal fade" id="Edit_prof" role="dialog">
          <form class="form-group" action="Profile_up.php" method="post">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-info">
                  <h4 class="modal-title">Edit your Profile</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <div>
                <label for="fname">Transport Company's Name *</label>
                  <input type="name" name="t_name" class="form-control" placeholder="Enter the Company's Name" autofocus required value="<?php echo $Tname ?>"><br>
                </div>
                <div>
                <label for="fname">Owner's Name *</label>
                  <input type="name" name="o_name" class="form-control" placeholder="Enter the Owner's Name" autofocus required value="<?php echo $towner; ?>"><br>
                </div>
                <div>
                <label for="fname">Mobile *</label>
                  <input type="number" name="m_number" class="form-control" placeholder="Enter the mobile number" autofocus required value="<?php echo $mno; ?>"><br>
                </div>
                <div>
                <label for="fname">Additional No.*</label>
                  <input type="name" name="a_number" class="form-control" placeholder="Enter additional number" autofocus required value="<?php echo $tano; ?>"><br>
                </div>
                <div>
                <label for="fname">No.of Vehicles *</label>
                  <input type="number" name="nov" class="form-control" placeholder="Enter the No.of vehicles" autofocus required value="<?php echo $nov; ?>"><br>
                </div>
                <div>
                <label for="fname">Company's Address *</label>
                  <input type="text" name="t_add" class="form-control" placeholder="Enter the new address" autofocus required value="<?php echo $tadd; ?>"><br>
                </div>

                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </div>
            </form>
          </div>

        <?php } //end of transport condition ?>

        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-6 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="https://i.ibb.co/vwmyN0n/1549187869210.png" width="150px" alt="HireTruck" >
                            </aside>
                            <h5><strong><i>Follow Us :</i></strong></h5><br><br>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Subscribe to newsletter</h3>
                                </div>
                                <form class="form-group" action="index.html" method="post">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here" required/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                              </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
 This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by HireTruck<br>Copyright © 2019 HireTruck Services Pvt. Ltd.</h5>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>

        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
