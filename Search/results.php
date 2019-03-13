<?php
// require ('session.php');
// require ('Nav.php');


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
         <div class="col-md-8 col-sm-6 col-xs-10 center_div" style="margin-top:9%;">

           <div class="row container">
               <div class="col">
                  <p><b>Source: </b></p>
               </div>
               <div class="col">
                  <p><b>Kind of Lugguage: </b></p>
               </div>
               <div class="col">
                  <p><b>Type of Lugguage: </b></p>
               </div>
               <div class="col">
                  <p><b>Weight Of Lugguage: </b></p>
               </div>
               <div class="col">
                  <p><b>Order Date: </b></p>
               </div>
               <div class="col">
                <p><b>Vehicle Type:</b></p>
               </div>

            </div><b>

                  <?php


                  $search_sql="SELECT * FROM ad WHERE source LIKE '%".$_POST['search']."%'";
                  $search_query=mysqli_query($con,$search_sql);
                  if(mysqli_num_rows($search_query)>0){


                      while ($search_rs=mysqli_fetch_array($search_query))
                      {
                      $source=$search_rs['B_id'];
                      $lug=$search_rs['luggage'];
                      $type=$search_rs['type_luggage'];
                      $weight=$search_rs['weight'];
                      $date=$search_rs['date'];
                      $v_type=$search_rs['vehicle_type'];
                    ?>
                    <div class="row container">
                        <div class="col">
                           <?php echo $source; ?>
                        </div>
                        <div class="col">
                           <?php echo $lug; ?>
                        </div>
                        <div class="col">
                           <?php echo $type; ?>
                        </div>
                        <div class="col">
                           <?php echo $weight; ?>
                        </div>
                        <div class="col">
                           <?php echo $date; ?>
                        </div>
                        <div class="col">
                           <?php echo $v_type; ?>
                        </div>

                     </div>
                     <?php
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
