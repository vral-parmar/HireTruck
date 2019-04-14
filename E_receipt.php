<?php
require ('Session.php');
//require ('Nav.php');
 //$id=$_POST['id'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="css/logreg.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style media="screen">
    body{
     height: 100%;
     width:100%;
     }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-sm bg-secondary sticky-top navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Back</a>
    </li>
  </ul>
</nav>
    <?php
      $mail=$_SESSION['mail'];
      $ad=$_POST['ad_id'];
  $qry="SELECT D_id from deal where s_id=(SELECT s_id from user_s where s_mail='$mail')and B_id=(SELECT B_id from bid where Ad_id='$ad')";
  $res12=mysqli_query($con,$qry) or die(mysqli_error($con));
   $did=mysqli_fetch_array($res12);
  $query1="SELECT s_fname 'user_s', T_org_name 'user_t',  conform_date   'deal' , source_ad 'ad' , no_destination 'ad' , price 'deal' from user_s s, deal b, user_t c, ad a
where b.s_id = s.s_id and b.t_id = c.t_id and  b.Ad_id=a.AD_id and b.d_id='27'";
  //$query2="select S_fname,S_lname from user_s";
  $result= mysqli_query($con,$query1) or die(mysqli_error($con));
    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_array($result)){
        //print_r($row);
       $fname=$row[0];
       $lname=$row[1];
       $C_date=$row[2];
       $source=$row[3];
       $no_destination=$row[4];
       $price=$row[5];
     ?>
  <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-10 center_div" style="margin-top:9%;">
            <form class="form-container1" action="Lvalidate.php" method="post">
              <div class="row">
                <div class="col">
                    <img src="images/HT.png" width="20%" alt="HireTruck Logo">
                </div>
                <div class="col">
                    <h2 align="right">e-Reciept</h2>
                </div>
              </div><hr><br>
              <div class="container text-center">
                <h4>Thank You for making Deal with HireTruck</h4>
                <p><small>Here is Your E-Reciept, Please Keep it somewhere safe, just in case if you need to talk about your purchase!</small></p>
              </div>
              <div class="row">
                <div class="col text-left">
                  <p><b>Transaction Id: </b></p><p>
                  <?php echo $ad; ?></p>
                </div>
                <div class="col text-right">
                  <p><b>Transaction Date: </b></p><p>
                  <?php echo $C_date; ?></p>
                </div>
              </div><hr>
              <div class="container">
                <p><b><strong>Name: </strong></b><?php echo $fname;?></p>
              </div>
              <div class="row">
                <div class="col">
                  <p><b><strong>Source :</strong> </b><?php  echo $source; ?>
                  <br><strong><b>Price:</strong> </b><?php echo $price; ?></p>
                </div>
                <div class="col">
                  <p><strong><b>Destination :</strong> </b><?php echo $no_destination; ?></p>

                </div>
              </div>
              <div class="container">
                <div class="row">

                  <div class="col text-right">
                    <p><strong>Carrier Address: </strong><?php echo $lname; ?></p>
                  </div>
                </div>
              </div>

                 </div>
               </div>
            </form>
      </div>
    </div>
  </div>
  <?php
      }
    }
   ?>
    <script type="text/javascript">
    document.getElementById("Hide").onclick = function()
    {
    this.disabled = true;
    }
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>
  </body>
</html>
<?php


//echo "Hello";


 ?>
