<?php
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
    </head>

    <body>
    <?php
    include ('Nav.php');
    if($_SESSION['user_type']=="Shipper"){ //shipper condition started
    ?>
    <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                </div>
            </div>
        </section>
    <!--================End Blog Main Area =================-->
        <br>
        <div class="container ">
            <div class="row card">
                <div class="col-md-12 card-body">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <h2>Mike Anamendolla</h2>
                                    <p><strong>About: </strong> Web Designer / UI. </p>
                                    <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                                    <p><strong>Skills: </strong>
                                        <span class="label label-info tags">html5</span>
                                        <span class="label label-info tags">css3</span>
                                        <span class="label label-info tags">jquery</span>
                                        <span class="label label-info tags">bootstrap3</span>
                                    </p>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="" class="center-block img-circle img-responsive">
                                </div><!--/col-->

                                <div class="col-xs-12 col-sm-4">
                                    <h2><strong> 20,7K </strong></h2>
                                    <p><small>Add </small></p>
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
                                                            <form action="Ad_inc.php" method="post" class="form-group">
                                                                <div class="form-group">
                                                                    <label> Enter Source of Luggage</label>
                                                                    <input type="textbox" name="source" class="form-control" placeholder="Ahmedabad" required/>
                                                                </div>
                                                                <div class="form-group">
                                                                <label>Enter number of destination</label>
                                                                <textarea class="form-control" name="no_dest" placeholder="meghaninagar & maninagar" required>
                                                                </textarea>
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
                                                                    <label>Weight of luggage in</label>&nbsp;<bold>Kg</bold>&nbsp; <small>(Approx)</small>
                                                                    <input type="number" name="waight" class="form-control" placeholder="Weight" min=0 required/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Your Budget</label>
                                                                    <input type="number" name="budget" class="form-control" placeholder="Price" min=0 required/>
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
                                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus-circle"></span> Post Ad  </button>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4">
                                    <h2><strong>245</strong></h2>
                                    <p><small>Following</small></p>
                                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4">
                                    <h2><strong>43</strong></h2>
                                    <p><small>Snippets</small></p>
                                    <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Options </button>
                                </div><!--/col-->
                            </div><!--/row-->
                        </div><!--/panel-body-->
                    </div><!--/panel-->
                </div>
            </div>
        </div>
        <br>
<?php }  //end of shipper condition
if($_SESSION['user_type']=="Transport"){ //transport condition started
?>        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        <br>
        <div class="container ">
            <div class="row card">
                <div class="col-md-12 card-body">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <h2>Mike Anamendolla</h2>
                                    <p><strong>About: </strong> Web Designer / UI. </p>
                                    <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                                    <p><strong>Skills: </strong>
                                        <span class="label label-info tags">html5</span>
                                        <span class="label label-info tags">css3</span>
                                        <span class="label label-info tags">jquery</span>
                                        <span class="label label-info tags">bootstrap3</span>
                                    </p>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="" class="center-block img-circle img-responsive">
                                </div><!--/col-->

                                <div class="col-xs-12 col-sm-4">
                                    <h2><strong> 20,7K </strong></h2>
                                    <p><small>Followers</small></p>
                                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4">
                                    <h2><strong>245</strong></h2>
                                    <p><small>Following</small></p>
                                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                                </div><!--/col-->
                                <div class="col-xs-12 col-sm-4">
                                    <h2><strong>43</strong></h2>
                                    <p><small>Snippets</small></p>
                                    <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Options </button>
                                </div><!--/col-->
                            </div><!--/row-->
                        </div><!--/panel-body-->
                    </div><!--/panel-->
                </div>
            </div>
        </div>
        <br>

        <?php } //end of transport condition ?>

        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="https://i.ibb.co/vwmyN0n/1549187869210.png" width="150px" alt="HireTruck" >
                                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_insta_widget">
                                <div class="f_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-7.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-8.jpg" alt=""></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Subscribe to newsletter</h3>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
 This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by HireTruck
</h5>
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
