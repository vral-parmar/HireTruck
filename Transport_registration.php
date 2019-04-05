<?php
session_start();
if (isset($_SESSION['mail'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CARRIER REGISTRATION</title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
<style media="screen">
body{
 height: 100%;
 width:100%;
 background-image: url("Image/trk.jpg");
}
</style>
    <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
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
         <div class="col-md-5 col-xs-10 col-sm-9 center_div">
            <form class="form-container1" action="T_validate.php" method="post">
                    <h2 align="center">CARRIER REGISTRATION</h2>
                    <hr><br>
                    <div class="form-group ">
                      <label for="cname">Comapany's Name *</label>
                        <input type="text" name="CARRIER_company" class="form-control" placeholder="Enter Comapany's Name" autofocus required>
                    </div>
                    <div class="form-group ">
                      <label for="oname">Owner's Name *</label>
                        <input type="text" name="CARRIER_owner" class="form-control"  placeholder="Enter Owner's name" required>
                    </div>
                    <div class="form-group ">
                      <label for="temail">Email *</label>
                        <input type="email" name="CARRIER_mail" class="form-control" placeholder="Enter your Email ID" maxlength="50" required>
                    </div>
                    <div class="form-group">
                      <label for="mnum">Contact Number *</label>
                        <input type="tel" pattern=".{10}" name="CARRIER_number" pattern=".{10}" class="form-control" minlength="10" placeholder="Enter your Contact Number" required>
                    </div>
                    <div class="form-group">
                      <label for="anum">Additional Contact Number *<small>(if above number not reached)</small></label>
                        <input type="tel" pattern=".{10}" name="CARRIER_alt_num" class="form-control" minlength="10" placeholder="Enter Additional Contact Number" required>
                    </div>
                    <div class="form-group">
                      <label for="novehicle">Number Of Vehicles *</label>
                        <input type="number" name="no_vehicle" class="form-control" min="1" max="100" placeholder="Enter the No.of vehicles available" required>
                    </div>
                    <div class="form-group">
                      <label for="textarea">Company address *</label>
                        <input type="text" name="CARRIER_address" class="form-control" row="5" placeholder="Enter your Address" maxlength="200" title="Max Length is 200 Minimum 50" required> </textarea>
                    </div>
                    <div class="form-group">
                      <label for="textarea">Services *</label>
                        <input type="text"  name="CARRIER_service" class="form-control" row="5" placeholder="Enter your Address" maxlength="200" title="Max Length is 200 Minimum 50" required> </textarea>
                    </div>
                <div> <label for="secq">Security Question *</label></div>
                <div class="container row">
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
                        </select></div>
                    <div class="col">
                        <input type="text" name="secans" class="form-control" required placeholder="Your answer">
                    </div>
                </div><br>

                <div align="center">
                    <div class="g-recaptcha" data-sitekey="6LfX7nQUAAAAACZdSxmsMfk765RdBf65BEh9kHx9"  class="col-md-5 col-xs-10 col-sm-9"></div>
                  </div>  <br>

                    <div>
                      <button type="submit" class="btn btn-success btn-block" id="Hide">Hire Out</button>
                      <button type="reset" class="btn btn-Primary btn-block">Reset</button>
                    </div><br>
                    <div class="row">
                      <div class="col-6" style="text-align:left;">
                          <a href="index.php"> <code><-</code>Back to Home</a>
                      </div>
                      <div class="col-6" style="text-align:right;">
                          <a href="login.php" >Already Register? Click Here</a>
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
