<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="post">
	<input type="text" name="name"/>
	<input type="email" name="email"/>
	<input type="submit" value="Click"/>
</form>
</body>
</html>
 <?php
 require('OTP.php');
 	if($_POST)
 	{
 			$eename = $_POST['name'];
 			$eemail = $_POST['email'];
 			otp($eemail,$eename);
 	}
 ?>
