<?php
require ('Session.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://i.ibb.co/tDkQbmq/Logo.png" type="image/x-icon" />
    <meta charset="utf-8">
    <title>Edit Your Ad - HireTruck</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-primary sticky-top navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="Ad_view.php">Back</a>
        </li>
      </ul>
    </nav>
<?php
//echo $_POST['id_ad'];
$ss=$_SESSION['mail'];
$ad=$_POST['id_ad'];
$query="SELECT * FROM `ad` WHERE status_ad='0'AND Ad_id='$ad' AND S_id=(SELECT S_id from user_s  where S_mail='$ss')";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
//print_r($sql);
//echo mysqli_num_rows($sql);
//print_r( $re=mysqli_fetch_array($sql));
while($re=mysqli_fetch_array($sql)){
?>
    <div class="container" style="padding-top:1%;"><br>
      <h1 class="text-center">Edit Your ad Requirements<h1>
    </div><br>
    <!-- modal code start -->
                   <!-- Modal body --><div class="row">
                     <div class="col">

                     </div>
                     <div class="col">
                       <div class=" container card-body border">
                           <h4 class="card-title text-center">Post your AD for transfer your Luggage</h4>
                           <p class="card-text text-center">Fill up your requirement's for vehicle and Luggage and tap submit for open your ad
                               in the HireTruck </p>
                           <div class="container">
                               <form action="Edit_ad_update.php" method="post" class="form-group">
                                       <label> Enter Source of Luggage</label>
                                       <div class="form-group">
                                       <input type="hidden" name="id_ad" value="<?php echo $re[0]; ?>">
                                       <input type="textbox" name="source" class="form-control" value="<?php print_r ($re[2]);?>" placeholder="Ahmedabad" required/>
                                   </div>
                                   <div class="form-group">
                                   <label>Enter destination of Luggage</label>
                                   <input type="text" class="form-control" name="no_dest" placeholder="meghaninagar & maninagar" value="<?php print($re[3]); ?>" required>
                                   </textarea>
                                   </div>
                                   <div class="form-group">
                                       <label>Type of Luggage</label>
                                       <input type="textbox" name="luggage" class="form-control" placeholder="Liquid, hard, soft, gas..." value="<?php print($re[4]); ?>" required/>
                                   </div>
                                   <div class="form-group">
                                       <label>Kind of luggage</label>
                                       <input type="textbox" name="type_luggage" class="form-control" placeholder="Furniture, Glass, Cargo..."  value="<?php print($re[5]); ?>"required/>
                                   </div>
                                   <div class="form-group">
                                       <label>Goods Capacity</label>&nbsp; <small>(Approx)</small>
                                       <input type="number" name="waight" class="form-control" placeholder="Weight" min=0 value="<?php print($re[6]); ?>"required/>
                                   </div>
                                       <div class="form-group">
                                       <label>Date of Arrival </label>
                                       <input type="date" name="order_date" class="form-control" value="<?php print ($re[9]); ?>"YYYY-mm-dd required/>
                                   </div>
                                   <div class="form-group">
                                       <label>Type of Vehicle</label>
                                       <div class="container">
                                         <div class="row">
                                           <div class="col-6">
                                               <select class="form-control" name="wheel" required>
                                                 <option value="">--Select--</option>
                                                 <option value="4-Wheel">4-Wheel</option>
                                                 <option value="6-Wheel">6-Wheel</option>
                                                 <option value="8-Wheel">8-Wheel</option>
                                                 <option value="10-Wheel">10-Wheel</option>
                                               </select>
                                           </div>
                                           <div class="col-6">
                                             <select class="form-control" name="sub_type" required>
                                               <option value="">-Sub-Type-</option>
                                               <option value="Open">Open</option>
                                               <option value="Close">Close</option>
                                               <option value="Carrier">Carrier</option>
                                             </select>

                                           </div>
                                         </div>
                                       </div>
                                   </div>
                                   <div>
                                       <label>Extra Requirements</label>
                                       <input type="textbox" name="extra_req" class="form-control" placeholder="Rope, Strip, Hooks, cable etc.." value="<?php print ($re[11]); ?>"required/>
                                   </div>
                                   <br>
                                   <div class="container">
                                       <div class="row">
                                           <div class="col">
                                               <a href="Ad_view.php" type="button" class="btn btn-secondary btn-block" data-dismiss="modal">
                                                   Close
                                               </a>
                                           </div>
                                           <div class="col">
                                               <input type="reset" value="reset" class="form-control btn btn-danger"/>
                                           </div>
                                           <div class="col">
                                               <input type="Submit" value="Update" class="form-control btn btn-success"/>
                                               <div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
         </div>
                     </div>
                     <div class="col">
                     </div>
                   </div>
  </body>
</html>
<?php } ?>
