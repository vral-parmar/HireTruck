<?php //session_start();

?>
<!DOCTYPE html>
<html lang="en">
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        .fa {
          padding: 20px;
          font-size: 50px;
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
        img {
          border-radius: 50%;
        }
      </style>
</head>
<body>
        <?php
        require_once('Nav.php');
        if(isset($_SESSION['mail'])){
            //echo "Welcome: ".$_SESSION['mail'];
        }
?>


        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                            data-x="['left','left','left','left','15','center']"
                            data-hoffset="['0','80','80','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['400','400','400','250','180','180']"
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Convenience :<br /> Just a click away!!</div>

                            <div class="tp-caption tp-resizeme secand_text"
                                data-x="['left','left','left','left','15','center']"
                                data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['575','575','575','400','320','300']"
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text"
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">For Shippers as well as for Carriers
                            </div>

                            <div class="tp-caption tp-resizeme single_img"
                            data-x="['right','right','right','right','right','right']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['180','180','180','180','0']"
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">
                                <img src="images/home-slider/slider1.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                            data-x="['left','left','left','left','15','center']"
                            data-hoffset="['0','80','80','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['400','400','400','250','180','180']"
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Just Advertise <br/> Your Requirements</div>

                            <div class="tp-caption tp-resizeme secand_text"
                                data-x="['left','left','left','left','15','center']"
                                data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['575','575','575','400','320','300']"
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text"
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">Find reliable Transport Companies
                            </div>

                            <div class="tp-caption tp-resizeme single_img"
                            data-x="['right','right','right','right','right','right']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['180','180','180','180','0']"
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">
                                <img src="images/home-slider/slider2.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                            data-x="['left','left','left','left','15','center']"
                            data-hoffset="['0','80','80','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['400','400','400','250','180','180']"
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Reaching out for<br/> Customers is now Easy</div>

                            <div class="tp-caption tp-resizeme secand_text"
                                data-x="['left','left','left','left','15','center']"
                                data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['575','575','575','400','320','300']"
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text"
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']"> Register Your Tansport Company
                            </div>

                            <div class="tp-caption tp-resizeme single_img"
                            data-x="['right','right','right','right','right','right']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['180','180','180','180','0']"
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">
                                <img src="images/home-slider/slider3.png" alt="">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area">
            <div class="container">
                <div class="c_title">
                    <img src="img/icon/title-icon.png" alt="">
                    <h6>Discover the features</h6>
                    <h2>Online Goods transportation</h2>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-1.png" alt="">
                            </div>
                            <h4>Transfer Your Luggage at Your Price</h4>
                            <p>We are always looking forward for Your Requirements in your Budget.</p>
                            <!--<a class="more_btn" href="#">Read More</a>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-2.png" alt="">
                            </div>
                            <h4>Online Confirmation</h4>
                            <p>Confirm your vehicle online for getting desired services on any date</p>
                            <!-- <a class="more_btn" href="#">Read More</a>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-3.png" alt="">
                            </div>
                            <h4>We are also Hear Your Contact us for any help</h4>
                            <p>We are always here to hear from you and try to provide our best services</p>
                            <!-- <a class="more_btn" href="#">Read More</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->

        <!--================The best slider Area =================-->
        <section class="best_3d_area">
            <div class="left_3d">
                <div class="shap_slider_inner owl-carousel">
                    <div class="item">
                        <br><br><h4>“We are the best”</h4>
                        <p>We help people to Resolve the gap between Shipper and Carrier. We always Believe in Win-Win !</p>
                        <div class="media">
                            <img src="images\ag.jpg" alt="" width="42" height="42">
                            <div class="media-body">
                                <h5>Archana Gondalia</h5>
                                <h6>Mentor of HireTruck</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <br><br><h4>“Moto of our service”</h4>
                        <p>Panctuality is a virtue of the bored and so Beginning of a great day begins a night before. HireTruck tries to provide Best Services on air.</p>
                        <div class="media">
                            <img src="images\vp.jpg" alt="" width="42" height="42">
                            <div class="media-body">
                                <h5>Viral Paramr</h5>
                                <h6>Team Leader</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <br><br><h4>“Easy, Cheezy and Simple”</h4>
                        <p>Makes it easy to post Ads on HireTruck and get quick Responce with best price.</p>
                        <div class="media">
                            <img src="images\ps.jpg" alt="" width="42" height="42">
                            <div class="media-body">
                                <h5>Prince Shah</h5>
                                <h6>Database Administrator</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_text">
                <div class="right_text_inner">
                    <div class="text_3d">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h6> We are here to help you to get your desired Vehicle in your Budget. </h6>
                            <h3>Looking for vehicle to transport your Luggage in your Area ??</h3>
                        </div>
                        <p>Welcome to HireTruck<br>We are in front of you With solution ofyour transportation project which helps user to get Services on your time, date and budget.<br>Post an Ad -- Bid your requirement -- Your work is done!</p>
                    </div>
                    <!-- <div class="shap_mobile">
                        <img src="img/iphone4.png" alt="">
                    </div> -->
                </div>
            </div>
        </section>
        <!--================End The best slider Area =================-->

        <!--================Team People Area =================-->
        <section class="team_people_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team_people_text">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Backbone of services</h6>
                                <h2>We build a strong team of great people</h2>
                            </div>
                            <ul>
                                <li><a href="about.php">Prince Shah</a></li>
                                <li><a href="about.php">Ridham Joshi</a></li>
                                <li><a href="about.php">K K Gayatri </a></li>
                                <li><a href="about.php">Viral Parmar </a></li>
                                <li><a href="about.php">Kesha Kaneria</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team_img_inner">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Team People Area =================-->

        <!--================Get in Touch Area =================-->
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
                            <p>Having Trouble to get transportation? Why don't you try to contact us? We are always ready to Hear from you !</p>
                            <a href="Contact.php"><h5>Call us now</h5></a>
                            <a href="Contact.php"><h4>+91-709-694-2284</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->

        <!--================Map Area =================-->
        <section class="world_map_area p_100">
            <div class="container">
                <div class="world_map_inner">
                    <img class="img-fluid" src="img/world-map.png" alt="">
                    <div class="bd-callout">
                        <h3>HireTruck Office</h3>
                        <p>RakshaShakti University, Lavad<br /> India</p>
                        <h4><a href="Contact.pho">+91-709-694-2284</a> <a href="Contact.php">Jamesmrt@gmail.com</a></h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->

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

        <script src="js/theme.js"></script>
    </body>
</html>
