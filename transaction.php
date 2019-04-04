<?php
require ('Session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reciept List </title>
    <link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
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
    <nav class="navbar navbar-expand-sm bg-primary sticky-top navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Back</a>
        </li>
      </ul>
    </nav>
  <div class="container-fluid">
      <div class="row">
         <div class="col-md-10 col-sm-8 col-xs-12 center_div" style="margin-top:9%;">
         <!--form class="form-container1" action="E_receipt.php" method="post"-->
              <h2 align="center"><b>Receipts </h2><br>
                <div class="container-fluid">
                  <table class="table">
                  <thead>
                    <tr>
                      <th>Sr NO. </th>
                      <th>Source</th>
                      <td>Destination</td>
                      <td>Date</td>
                      <th>Order-date</th>
                      <th>Passcode</th>
                      <th></th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php
                     $query="SELECT source_ad 'ad', no_destination 'ad',  D_id 'deal' ,order_date 'ad' from ad a,deal d where d.Ad_id=a.AD_id and t_id=(SELECT t_id from user_t where t_mail='sp@gmail.com') and d_status='0' order by order_date ASC";
                     $result= mysqli_query($con,$query) or die(mysqli_error($con));
                     if(mysqli_num_rows($result)>0)
                     {
                       while ($row=mysqli_fetch_array($result))
                       {
                       $source=$row[0];
                       $no_destination=$row[1];
                       $deal=$row[2];
                       //$order_date=$row[2];
                       $ad_date=$row[3];
                       $num=md5(rand($deal,100000));
                        $finaldeal=substr($num,-10);

                     ?>
                      <tr>
                        <form action="tras.php" method="post">
                        <td>   <?php echo $finaldeal?></td>
                        <td> <?php echo $source ?>  <input type="hidden" name="id_Ad" value="<?php echo $re[0]; ?>"> </td>
                        <td><?php echo $no_destination; ?></td>
                      <!--  <td> <?php echo $order_date; ?></td>-->
                        <td>   <?php echo $ad_date; ?></td>
                        <td> <input type="password"  name="passcode" style="border-radius:15px;" placeholder="Passcode" ></td>
                        <th><input type="submit" class="btn btn-primary" style="float:right;height:28px;width:65px;margin:7px;font-size:15px;margin-bottom:7px;padding-top:2px;padding-left:7px;font-weight:boldborder-radius: 15px 50px 30px 5px;" value="Submit"></th>
                      </form>
                      </tr>
                     <?php

                     if($_POST):
                         $passcode=$_POST['passcode'];
                         //require(fs.php);
                         $q="SELECT passcode from deal_dtails";
                         $sql = mysqli_query($con, $q) or die(mysqli_error($con));
                         $count = mysqli_num_rows($sql);
                          if($count==0):
                          //echo "<h1 align='center' padding-down:15%;><b> Error in Login</h1>";

                          else:
                          echo "Matched"; // header('location:.php');

                      endif;
                endif;


                        }
                        }
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <!--/form-->
      </div>

      <script type="text/javascript">
    document.getElementById("Hide").onclick = function()
    {
    this.disabled = true;
    }
    </script>
  </body>
</html>





//SELECT * FROM `deal` WHERE d_status=0 and S_id=(SELECT S_id from user_s where s_mail='akshatsoni64@gmial.com')
//select no_destination,order_date,Source_ad from ad where ad_id=(SELECT ad_id from deal  where d_id='6');
