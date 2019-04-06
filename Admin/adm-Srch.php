
<html>
<head>

  <title>Search HireTruck</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="JS/script.js"></script>
<?php
  require ('../session.php');
  require ('../Nav.php');
?>
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


    <title>Search</title>
    <!-- Including jQuery is required. -->
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!- Including our scripting file. -->
    <!-- <script type="text/javascript" src="script.js"></script> -->
    <!-- Including CSS file. -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
<!-- Search box. -->
<?php
if($_SESSION['user_type']=="Police"){ //transport condition started
?>
<center><p>Search according to the City you are interested in:</p></center>
<form name="search_form" method="POST" action="adm-result.php">

    <center><input name="search" type="text" placeholder="Search" /></center>
    <center><input class="btn btn-primary" style="margin-top:10px ; margin-bottom:10px" type="submit" name="Search" role="button"></center>

<?php }
?>

</body>
</html>
