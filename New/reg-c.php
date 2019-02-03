<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="]https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>REGISTRATION</title>

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
        <!--================Registration Area =================-->
        <section class="service_solution_area p_100">
            <div class="container">
                <div class="row s_solution_inner">
                    <div class="col-lg-6">
                        
                                <img src="img/icon/title-icon.png" alt="">

                    <form class="form-container1" action="#" method="post">
                    <h2 align="center">CARRIER REGISTRATION</h2>
                    <hr><br>
                    <div class="form-group ">
                      <label for="cname">Comapany's Name</label>
                        <input type="name" name="cname" class="form-control" placeholder="Enter Comapany's Name" autofocus required>
                    </div>
                    <div class="form-group ">
                      <label for="oname">Owner's Name</label>
                        <input type="name" name="oname" class="form-control"  placeholder="Enter Owner's name" required>
                    </div>
                    <div class="form-group ">
                      <label for="temail">Email</label>
                        <input type="email" name="temail" class="form-control" placeholder="Enter your Email ID" maxlength="50" required>
                    </div>
                    <div class="form-group">
                      <label for="mnum">Contact Number</label>
                        <input type="tel" name="mnum" pattern="[6789][0-9]{9}" class="form-control" placeholder="Enter your Contact Number" required>
                    </div>
                    <div class="form-group">
                      <label for="anum">Additional Contact Number <small>(if above number not reached)</small></label>
                        <input type="tel" pattern="[6789][0-9]{9}" name="anum" class="form-control"placeholder="Enter Additional Contact Number" required>
                    </div>
                    <div class="form-group">
                      <label for="novehicle">Number Of Vehicles</label>
                        <input type="number" name="novehicle" class="form-control" min="1" max="100" placeholder="Enter the No.of vehicles available" required>
                    </div>
                    <div class="form-group">
                      <label for="textarea">Address</label>
                        <textarea  name="address" class="form-control" row="5" placeholder="Enter your Address" maxlength="200" minlength="50" title="Max Length is 200 Minimum 50" required> </textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-success btn-block">Hire Out</button>
                      <button type="reset" class="btn btn-Primary btn-block">Reset</button>
                    </div><br>
                    <div class="row">
                      <div class="col-6" style="text-align:left;">
                          <a href="#"> <code><-</code>Back to Home</a>
                      </div>
                      <div class="col-6" style="text-align:right;">
                          <a href="Login.php" >Already Register? Click Here</a>
                      </div>
                  </div>
            </form>
                    </div>
                        </div>
                  </div>
            </div>
            </section>
        <!--================End Registration Area=================-->
        
    </body>
</html>