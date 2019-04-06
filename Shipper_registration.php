<?php
session_start();
if(isset($_SESSION['mail'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHIPPER REGISTRATION</title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png"/>
    <!-- Bootstrap -->
    <style media="screen">
    body{
     height: 100%;
     width:100%;
     background-image: url("Image/trk.jpg");
     }
    </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="css/logreg.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-5 col-xs-12 col-sm-10 center_div" >
            <form class="form-container1" action="S_validate.php" method="post">
                    <h2 align="center">SHIPPER REGISTRATION</h2>
                      <hr><br>
                    <div class="form-group ">
                      <label for="fname">First Name *</label>
                        <input type="name" name="SHIPPER_fname" class="form-control" placeholder="Enter your First Name" autofocus required>
                    </div>
                    <div class="form-group ">
                      <label for="lname">Last Name *</label>
                        <input type="name" name="SHIPPER_lname" class="form-control"  placeholder="Enter your Last name" required>
                    </div>
                    <div class="form-group">
                      <label for="lemail">Email *</label>
                        <input type="email" name="SHIPPER_mail" class="form-control" placeholder="Enter your Email ID" maxlength="50" required>
                    </div>
                    <div class="form-group">
                      <label for="mnum">Mobile Number *</label>
                        <input type="tel" pattern=".{10}" name="SHIPPER_number" class="form-control" minlength="10" placeholder="777*******" title="Must Be an Indian Number Minimum length 10" required>
                    </div>
                    <div class="form-group">
                      <label for="textarea">Address *</label>
                        <input name="SHIPPER_address" maxlength="60" class="form-control" row="5" placeholder="Enter your Address" title="Max Length is 200 Minimum 50" required>
                    </div>
                <div><label for="secq">Security question *</label></div>
                <div class="row form-group">
                    <div class="col">
                        <select class="dropdown btn btn-block form-control" name="secq" required>
                            <option value="#" disabled selected >Select any of one</option>
                            <option value="What is your favourite food?">What is your favourite food?</option>
                            <option value="What is your favourite place?">What is your favourite place?</option>
                            <option value="What is your First toy name?">What is your First toy name?</option>
                            <option value="What is your first Mobile modal?">What is your first Mobile modal?</option>
                            <option value="What is your favourite techer?">What is your favourite techer?</option>
                            <option value="What is your best friend name?">What is your best friend name?</option>
                            <option value="Who is your favourite teacher?">Who is your favourite techer?</option>
                            <option value="What is your gift?">what is your first gift?</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="secans" required placeholder="Your answer">
                    </div>
                </div>

                <div align="center">
                    <div class="g-recaptcha" data-sitekey="6LfX7nQUAAAAACZdSxmsMfk765RdBf65BEh9kHx9"></div>
                  </div>  <br>

                    <div>
                      <button type="submit" class="btn btn-success btn-block" id="Hide">Hire Out</button>
                      <button type="reset" class="btn btn-Primery btn-block">Reset</button>
                    </div><br>
                    <div class="row">
                      <div class="col-6" style="text-align:left;">
                          <a href="index.php"> <code><-</code>Back to Home</a>
                      </div>
                        <div class="col-6" style="text-align:right;">
                          <a href="Login.php" >Already Register? Click Here</a>
                        </div>
                    </div>
            </form>
          </div>
      </div>
    </div>
    <script type="text/javascript">
    document.getElementById("Hide").onclick = function() {
    this.disabled = true;
   }

    </script>
  </body>
</html>
