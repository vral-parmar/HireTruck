<?php
// require ('session.php');
// require ('Nav.php');

require ("../connection.php");
if(!isset($_POST['search'])){
  header("Location:../index.php");
  header("Location:../connection.php");
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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


    <div class="container-fluid">
        <div class="row">
           <div class="col-md-10 col-sm-8 col-xs-12 center_div" style="margin-top:9%;">
              <form class="form-container1" action="Lvalidate.php" method="post">
                <b><h2 align="center">Deal of Your interest: </h2></b><hr><br>

                 <div class="row container">
                     <div class="col">
                          <p><b>S_id :</b></p>
                     </div>
                     <div class="col">
                       <p><b>T_id :</b></p>
                     </div>
                     <div class="col">
                          <p><b>Confirm Date:</b></p>
                     </div>
                     <div class="col">
                         <p><b>Source:</b></p>
                     </div>

                       <div class="col">
                          <p><b>Destination:</b></p>
                       </div>
                       <div class="col">
                          <p><b>Status:</b></p>
                       </div>


                  </div>

                  <?php


                  $query="SELECT * from ad WHERE (source LIKE '%".$_POST['search']."%') or (destination LIKE '%".$_POST['search']."%') or (luggage LIKE '%".$_POST['search']."%')";

                  $result= mysqli_query($con,$query) or die(mysqli_error($con));

                  if(mysqli_num_rows($result)>0)
                    {
                        while($row=mysqli_fetch_array($result))
                          {
                            $ad_id=$row['AD_id'];

                                $query1="SELECT * from deal where Ad_id='$ad_id'";
                                $result1= mysqli_query($con,$query1) or die(myqli_error($con));

                                if(mysqli_num_rows($result1)>0)
                                  {   while ($row1=mysqli_fetch_array($result1))
                                      {

                  ?>


                                  <div class="row container">
                                      <div class="col">
                                         <?php print substr(md5($row['S_id']),-8); ?>
                                      </div>
                                      <div class="col">
                                         <?php print substr(md5($row1['T_id']),-8); ?>
                                      </div>
                                      <div class="col">
                                         <?php echo $row1['conform_date']; ?>
                                      </div>
                                      <div class="col">
                                         <?php echo $row['source']; ?>
                                      </div>
                                        <div class="col">
                                         <?php echo $row['destination']; ?>
                                       </div>
                                       <div class="col">
                                      <?php if($row1['d_status']==0)
                                             {
                                               echo "In Process";
                                             }
                                             else
                                                    {
                                                      echo "Done";
                                                    }


                                          ?>
                                       </div>
                                   </div>
                                   <?php
                                            }
                                          }
                                        }
                                      }

                      else {
                          echo "No Results Found";
                      }
                        ?>

      </div>
    </div>
  </div>
    <script type="text/javascript">
    document.getElementById("Hide").onclick = function()
    {
    this.disabled = true;
    }
    </script>
  </body>
</html>
