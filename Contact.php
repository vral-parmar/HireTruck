<?php
require ("Nav.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Hire Truck</title>

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

     <link href="css/style.css" rel="stylesheet">
     <link href="css/responsive.css" rel="stylesheet">

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
     <!-- ================Banner Area =================-->
         <section class="banner_area">
             <div class="container">
                 <div class="banner_inner_text">
                 </div>
             </div>
         </section>
     <!--================End Blog Main Area =================-->

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
     .fa {
       padding: 15px;
       font-size: 20px;
       width: 50px;
       text-align: center;
       text-decoration: none;
       margin: 5px 5px;
       border-radius: 30%;
     }
     .fa:hover {
       opacity: 0.7;
     }
     .fa-facebook {
       background: #3B5998;
       color: white;
     }
     .fa-twitter {
       background: #55ACEE;
       color: white;
     }
     .fa-google {
       background: #dd4b39;
       color: white;
     }
     .fa-instagram {
       background: #F624EC;
       color: white;
     }
     </style>
   </head>
   <body>
     <section class="get_in_touch_area">

         <div class="container">
<h3>Contact Us :</h3>
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
     <!--================Footer Area =================-->
     <footer class="footr_area">
         <div class="footer_widget_area">
             <div class="container">
                 <div class="row footer_widget_inner">
                     <div class="col-lg-6 col-sm-6">
                         <aside class="f_widget f_about_widget">
                             <img src="https://i.ibb.co/vwmyN0n/1549187869210.png" width="120px" height="110px" alt="HireTruck">
                             <!-- <p>Locjhsfkjbfkjfb</p>-->
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
                     <h5> This Site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by HireTruck<br>Copyright © 2019 HireTruck Services Pvt. Ltd.</h5>
                 </div>

             </div>
         </div>
     </footer>
     <!--================End Footer Area =================-->

   </body>
 </html>
