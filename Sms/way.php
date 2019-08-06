
<?php
function otpmob($eename,$password,$num){
$number = $num;
$text = "Welcome to HireTruck $eename your Account Password is:$password Do not share it to anyone!!";
//post
$url="www.way2sms.com/api/v1/sendCampaign";
$message = urlencode($text);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey= Your Key is here &secret=Secret key is here &usetype=stage&phone=$number&senderid=HRTRK&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;
}
function bid_otp($eename,$temail,$num,$price){
$number = $num;
$text = "Welcome to HireTruck ".$eename.", A Transport Company just Bid on your Advertisement ".$temail.", The bid amount is $price";
//post
$url="www.way2sms.com/api/v1/sendCampaign";
$message = urlencode($text);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey= Your key is hee &secret= Secret key &usetype=stage&phone=$number&senderid=HRTRK&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
}
?>
