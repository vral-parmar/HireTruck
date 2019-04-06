<?php
@session_start();
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
</head>
<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="https://i.ibb.co/tDkQbmq/Logo.png" height="50px" width="50px" alt="HireTruck"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <?php if(@isset($_SESSION['mail'])){
                  if ($_SESSION['user_type']=="Transport") {
                      ?>
                      <li class="nav-item"><a class="nav-link" href="transaction.php">Transaction</a></li>
                      <?php
                  }
                } ?>
              <?php if(@isset($_SESSION['mail'])){
                if($_SESSION['user_type']=="Shipper"){
                  ?>
                <li class="nav-item"><a class="nav-link" href="Ad_view.php">Advertisement</a></li> <?php }

                if($_SESSION['user_type']=="Transport"){
                ?>
                <li class="nav-item"><a class="nav-link" href="ad.php">Advertisement</a></li> <?php }}?>


                <?php if(@!$_SESSION['mail'])  {//hide login and registration if user is login ?>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Registration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item"><a class="nav-link" href="Shipper_registration.php">Shipper</a></li>
                            <li class="nav-item"><a class="nav-link" href="Transport_registration.php">Carrier</a></li>
                        </ul>
                    <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>
                    </li><?php }?>

                <?php  if (isset($_SESSION['mail'])){//check user login or not ?>
                    <li class="nav-item"><a class="nav-link" href="Profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php }?>
            </ul>
        </div>
    </nav>
</header>
