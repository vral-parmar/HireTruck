<?php
require ('Session.php');
require ('Nav.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Receiver Details</title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
        <title>Receiver Details</title>
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
            <form class="form-container1" action="Reciever_sub.php" method="post">
              <h2 align="center">Receiver Details</h2><hr><br>
                 <div class="row container">
                    <div class="col">
                        <label><b>Name</b></label>
                        <input type="name" name="SHIPPER_fname" class="form-control" placeholder="Enter your Name" autofocus required>
                  </div>
                    <div class="col">
                       <label for="source"><b>Mobile Number</b></label>
                       <input type="tel" pattern=".{10}" name="SHIPPER_number" class="form-control" minlength="10" placeholder="777*******" title="Must Be an Indian Number Minimum length 10" required>
                    </div>
                    <div class="col">
                       <label for="source"><b>E-mail</b></label>
                       <input type="email" name="SHIPPER_mail" class="form-control" placeholder="Enter your Email ID" maxlength="50" required> <br><br>
                       <input type="hidden" name="R_ad" value="<?php echo $_POST['AD'];?>"/> <br><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-block btn-success" id="Hide" value="Submit">Submit</button> &nbsp;&nbsp;&nbsp;
                    </div>
                  <div class="col">
                     <button type="reset" class="btn btn-block btn-danger">Reset</button>
                   </form>
                  </div>

                  </div>
<br>
  </div>
</div>
</div>

  </body>
</html>
