<?php
require("connection.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
     <title>Forgot Password - HireTruck</title>
     <link rel="stylesheet" type="text/css" href="css/logreg.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
     <script src='https://www.google.com/recaptcha/api.js'></script>
   </head>
   <body>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-10 center_div" style="margin-top:3%;">
               <form class="form-container1" action="Forget_Pass.php" method="post">
                 <h3 align="center">Forgot Password</h3><hr><br>
                      <div class="radio" class="col-md-6">
                        <div class="" style="text-align:center;">
                           <label>
                          <input type="radio" name="radioF" value="Shipper" checked><strong>&nbsp;I am a Shipper</strong>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label>
                           <input type="radio" name="radioF" value="Transport"><strong>&nbsp;I am a Carrier</strong>
                         </label>
                       </div><br>
                       </div>
                       <div class="form-group ">
                         <label for="lemail">Your Email</label>
                           <input type="email" name="User_email" class="form-control" placeholder="Email" autocomplete="off"  maxlength="50" autofocus required>
                       </div>
                       <div class="form-group">
                         <label for="Select">Your Security Question: </label>
                           <select class="form-control" name="Select">
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
                       <div class="form-group ">
                         <label for="lemail">Your Answer</label>
                           <input type="text" name="User_Ans" class="form-control" placeholder="Your Answer" autocomplete="off"  maxlength="50" autofocus required>
                       </div>
                       <div align="center">
                       <div class="g-recaptcha" data-sitekey="6LfX7nQUAAAAACZdSxmsMfk765RdBf65BEh9kHx9"></div>
                     </div><br>
                       <div>
                         <input type="submit" class="btn btn-success btn-block" id="Hide" value="Send Me New Password"><br>
                         <div class="row">
                           <div class="col-6" style="text-align:left;">
                               <a href="index.php"> <code><-</code>Back to Home</a>
                           </div>
                             <div class="col-6" style="text-align:right;">
                               <a href="index.php" >Back to Login</a>
                                 </div>
                       </div>
                       </div>
               </form>
             </div>
         </div>
       </div>
   </body>
 </html>
