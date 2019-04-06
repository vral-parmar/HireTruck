<?php
require ("Nav.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
     <meta charset="utf-8">
     <title>Contact Us - HireTruck</title>
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Rev slider css -->
     <link href="vendors/revolution/css/settings.css" rel="stylesheet">
     <link href="vendors/revolution/css/layers.css" rel="stylesheet">
     <link href="vendors/revolution/css/navigation.css" rel="stylesheet">

     <!-- Extra plugin css -->
     <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

     <link href="css/style.css" rel="stylesheet">
     <link href="css/responsive.css" rel="stylesheet">

   </head>
   <body style="background-color: black;">
     <section class="get_in_touch_area">
         <div class="container">
             <div class="row get_touch_inner">
                 <div class="col-lg-6">
                     <form class="contact_us_form row" action="Common_feedback.php" method="post" id="contactForm" novalidate="novalidate">
                         <div class="form-group col-lg-6">
                             <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                         </div>
                         <div class="form-group col-lg-6">
                             <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                         </div>
                         <div class="form-group col-lg-12">
                             <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                         </div>
                         <div class="form-group col-lg-12">
                             <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                         </div>
                         <div class="form-group col-lg-12">
                             <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                         </div>
                     </form>
                 </div>
                 <div class="col-lg-6">
                     <div class="touch_details">
                         <div class="l_title">
                             <img src="img/icon/title-icon.png" alt="">
                             <h6>Say hello</h6>
                             <h2>Get in touch, send us an e-mail or call us</h2>
                         </div>
                         <p>Having Trouble to get transportation Why don't you try to contact us? we are always ready to Hear from you.</p>
                         <a href="#"><h5>Call us now</h5></a>
                         <a href="#"><h4>+91-709-694-2284</h4></a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <br><br><br>
   </body>
 </html>
