<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="]https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>LOGIN</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php
    include ('Nav.php');
    ?>
        <!--================Login Area =================-->
        <section class="service_solution_area p_100">
            <div class="container">
                <div class="row s_solution_inner">
                    <div class="col-lg-6">
                        
                                <img src="img/icon/title-icon.png" alt="">

                    <form class="form-container1" action="#" method="post">
                      <h2 align="center">LOGIN</h2><hr><br>
                           <div class="radio" class="col-md-6">
                             <div class="" style="text-align:center;">
                                <label>
                               <input type="radio" name="radioF" value="Shipper"><strong>&nbsp;I am a Shipper</strong>
                             </label>&nbsp;&nbsp;&nbsp;
                             <label>
                                <input type="radio" name="radioF" value="Transport"><strong>&nbsp;I am a Carrier</strong>
                              </label>
                            </div><br>
                            </div>
                            <div class="form-group ">
                              <label for="lemail">Email</label>
                                <input type="email" name="lemail" class="form-control" placeholder="Email" autocomplete="off"  maxlength="50" autofocus required>
                            </div>
                            <div class="form-group">
                              <label for="lpass">Password</label>
                                <input type="password" name="lpass" class="form-control" placeholder="Password" autocomplete="off" title="8 Characters Minimum"  minlength="8" maxlength="30" required>
                            </div>
                            <br>
                            <div>
                              <button type="submit" class="btn btn-success btn-block">Get In</button><br>
                              <div class="row">
                                <div class="col-6" style="text-align:left;">
                                    <a href="#"> <code><-</code>Back to Home</a>
                                </div>
                                  <div class="col-6" style="text-align:right;">
                                    <a href="#" >Forgot Password??</a>
                                      </div>
                            </div>
                            </div>
                    </form>
                    </div>
                        </div>
                  </div>
            </div>
            </section>
