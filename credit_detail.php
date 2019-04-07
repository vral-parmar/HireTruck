<?php
require 'Session.php';
//require 'nav.php';
 echo $hid= $_POST['AD'];
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Details</title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
        <title>Credit Details</title>
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
 <!--background-image: url("Image/Login.jpg");-->
 <!--background-image:no-repeat;-->
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



    <!--Credit_card_details-->
  <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-10 center_div" style="margin-top:7%;">
            <form class="form-container1" action="deal_confirm.php" method="post">
              <h2 align="center"><img src="https://i.ibb.co/GQ6gw34/1544624867669.png" alt="Img" width="8%"> &nbsp;&nbsp;Important Details </h2><hr><br>
              <div class="row container">
                 <div class="col">
                     <label><b>Receiver's Name</b></label>
                     <input type="name" name="R_name" class="form-control" placeholder="Enter your Name" autofocus required>
               </div>
                 <div class="col">
                    <label for="source"><b>Receiver's Mobile Number</b></label>
                    <input type="tel" pattern=".{10}" name="R_number" class="form-control" minlength="10" placeholder="777*******" title="Must Be an Indian Number Minimum length 10" required>
                 </div>
                 <div class="col">
                    <label for="source"><b>Receiver's E-mail</b></label>
                    <input type="email" name="R_mail" class="form-control" placeholder="Enter your Email ID" maxlength="50" required> <br><br>
                 </div>
               </div>





                  <div class="row">
                    <div class="text-center col">
                      <input type="hidden" name="ad" value="<?php echo $hid; ?>">
                      <input type="submit" class="btn btn-success" id="Hide" value="Submit">&nbsp; &nbsp; &nbsp;
                      <button type="reset" class="btn btn-danger">Reset</button><br><br><br>
                    </div>
                    <div class="col text-right">
                      <div class="col-6">
                          <a href="Ad_view.php" class="btn btn-primary">Back to Home</a>
                      </div>
                    </div>
                  </div>
              </form>
        </div>
      </div>
    </div><br><br><br><br>
    </script>
  </body>
</html>
