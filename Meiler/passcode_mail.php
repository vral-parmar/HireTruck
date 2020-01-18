<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
	<link rel="icon" type="image/ico" href="https://i.ibb.co/GQ6gw34/1544624867669.png" />
    </head>
</html>
<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'tras.php';
// require 'Transport_registration.php';
require 'vendor/autoload.php';
function otp($carrier_mail,$ad,$passcode){
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('', 'HireTruck Team');
    $mail->addAddress($carrier_mail);     // Add a recipient
    //$mail->addAddress('');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your HireTruck account Passcode';
    $mail->Body    = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>


    <style type="text/css" id="media-query">
      body {
  margin: 0;
  padding: 0; }

table, tr, td {
  vertical-align: top;
  border-collapse: collapse; }

.ie-browser table, .mso-container table {
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

[owa] .img-container div, [owa] .img-container button {
  display: block !important; }

[owa] .fullwidth button {
  width: 100% !important; }

[owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 600px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 200px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 400px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 300px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 200px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 150px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 120px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 100px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 85px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 75px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 66px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 60px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 54px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 50px !important; }

@media only screen and (min-width: 620px) {
  .block-grid {
    width: 600px !important; }
  .block-grid .col {
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 600px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 200px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 400px !important; }
  .block-grid.two-up .col {
    width: 300px !important; }
  .block-grid.three-up .col {
    width: 200px !important; }
  .block-grid.four-up .col {
    width: 150px !important; }
  .block-grid.five-up .col {
    width: 120px !important; }
  .block-grid.six-up .col {
    width: 100px !important; }
  .block-grid.seven-up .col {
    width: 85px !important; }
  .block-grid.eight-up .col {
    width: 75px !important; }
  .block-grid.nine-up .col {
    width: 66px !important; }
  .block-grid.ten-up .col {
    width: 60px !important; }
  .block-grid.eleven-up .col {
    width: 54px !important; }
  .block-grid.twelve-up .col {
    width: 50px !important; } }

@media (max-width: 620px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth, img.fullwidthOnMobile {
    max-width: 100% !important; }
  .no-stack .col {
    min-width: 0 !important;
    display: table-cell !important; }
  .no-stack.two-up .col {
    width: 50% !important; }
  .no-stack.mixed-two-up .col.num4 {
    width: 33% !important; }
  .no-stack.mixed-two-up .col.num8 {
    width: 66% !important; }
  .no-stack.three-up .col.num4 {
    width: 33% !important; }
  .no-stack.four-up .col.num3 {
    width: 25% !important; }
  .mobile_hide {
    min-height: 0px;
    max-height: 0px;
    max-width: 0px;
    display: none;
    overflow: hidden;
    font-size: 0px; } }

    </style>
</head>
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #F8F8F8">
  <style type="text/css" id="media-query-bodytag">
    @media (max-width: 520px) {
      .block-grid {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

      .col {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

        .col > div {
          margin: 0 auto;
        }

      img.fullwidth {
        max-width: 100%!important;
      }
            img.fullwidthOnMobile {
        max-width: 100%!important;
      }
      .no-stack .col {
                min-width: 0!important;
                display: table-cell!important;
            }
            .no-stack.two-up .col {
                width: 50%!important;
            }
            .no-stack.mixed-two-up .col.num4 {
                width: 33%!important;
            }
            .no-stack.mixed-two-up .col.num8 {
                width: 66%!important;
            }
            .no-stack.three-up .col.num4 {
                width: 33%!important;
            }
            .no-stack.four-up .col.num3 {
                width: 25%!important;
            }
      .mobile_hide {
        min-height: 0px!important;
        max-height: 0px!important;
        max-width: 0px!important;
        display: none!important;
        overflow: hidden!important;
        font-size: 0px!important;
      }
    }
  </style>
  <table class="nl-container" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #F8F8F8;width: 100%" cellpadding="0" cellspacing="0">
    <tbody>
    <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">

    <div style="background-color:#e4f9f7;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid two-up no-stack">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
            <div class="col num6" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
    <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:25px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <div align="left" class="img-container left fixedwidth " style="padding-right: 0px;  padding-left: 0px;">
  <img class="left fixedwidth" align="left" border="0" src="https://i.ibb.co/GQ6gw34/1544624867669.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 180px" width="180">
</div>

             </div>
              </div>
            </div>

            <div class="col num6" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
             <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:20px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">


<div align="right" style="padding-right: 10px; padding-left: 10px; padding-bottom: 10px;" class="">
  <div style="line-height:10px;font-size:1px">&#160;</div>
  <div style="display: table; max-width:156px;">

  </div>
</div>

              </div>
              </div>
            </div>

        </div>
      </div>
    </div>
    <div style="background-image:url(`https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/transport_animation_2.gif`);background-position:top center;background-repeat:no-repeat;;background-color:#e4f9f7">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">

            <div class="col num12" style="min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 25px; padding-left: 0px;">



<table border="0" cellpadding="0" cellspacing="0" width="100%" class="divider " style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
        <tr style="vertical-align: top">
            <td class="divider_inner" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 15px;padding-left: 15px;padding-top: 15px;padding-bottom: 15px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                <table class="divider_content" height="75px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid transparent;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                    <tbody>
                        <tr style="vertical-align: top">
                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 75px;line-height: 75px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <span>&#160;</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>


                    <div class="">

    <div style="color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px;">
        <div style="line-height:14px;font-size:12px;color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: right"><span style="font-size: 20px; line-height: 24px;">Your Accout Password is :</span></p><p style="margin: 0;font-size: 12px;line-height: 14px">&#160;<br></p></div>
    </div>

</div>


                    <div class="">

    <div style="color:#E01C1C;font-family:`Oswald`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:150%; padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;">
        <div style="line-height:18px;font-size:12px;font-family:Oswald, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;color:#E01C1C;text-align:left;"><p style="margin: 0;line-height: 18px;text-align: right;font-size: 12px"><span style="background-color: rgb(255, 255, 255); font-size: 58px; line-height: 87px;"><strong><span style="line-height: 87px; background-color: rgb(255, 255, 255); font-size: 28px;">&#160;'.$passcode.'&#160;</span></strong></span><br></p></div>
    </div>

</div>



<table border="0" cellpadding="0" cellspacing="0" width="100%" class="divider " style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
        <tr style="vertical-align: top">
            <td class="divider_inner" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 25px;padding-left: 25px;padding-top: 25px;padding-bottom: 25px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                <table class="divider_content" height="135px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid transparent;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                    <tbody>
                        <tr style="vertical-align: top">
                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 135px;line-height: 135px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <span>&#160;</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

             </div>
              </div>
            </div>

        </div>
      </div>
    </div>
    <div style="background-image:url(`https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png`);background-position:top center;background-repeat:repeat;;background-color:transparent">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">

            <div class="col num12" style="min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:50px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">


                    <div align="center" class="img-container center  autowidth  fullwidth " style="padding-right: 0px;  padding-left: 0px;">
  <img class="center  autowidth  fullwidth" align="center" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/rounded_up.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 600px" width="600">

</div>


             </div>
              </div>
            </div>

        </div>
      </div>
    </div>
    <div style="background-image:url(`https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png`);background-position:top center;background-repeat:repeat;;background-color:transparent">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;" class="block-grid mixed-two-up ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">

            <div class="col num4" style="display: table-cell;vertical-align: top;max-width: 320px;min-width: 200px;">
              <div style="background-color: transparent; width: 100% !important;">
              <div style="border-top: 0px solid transparent; border-left: 0px solid #C3C3C3; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">


                    <div align="right" class="img-container right fixedwidth " style="padding-right: 30px;  padding-left: 0px;">
<div style="line-height:30px;font-size:1px">&#160;</div>  <img class="right fixedwidth" align="right" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/pickup.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 110px" width="110">

</div>



                    <div class="">
    <div style="color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:120%; padding-right: 30px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: right"><strong>Password</strong></p><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: right"><strong>Change Your Password ASAP!!</strong></p></div>
    </div>

</div>
             </div>
              </div>
            </div>

            <div class="col num8" style="display: table-cell;vertical-align: top;min-width: 320px;max-width: 400px;">
              <div style="background-color: transparent; width: 100% !important;">
             <div style="border-top: 0px solid transparent; border-left: 1px dotted #E7E7E7; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:35px; padding-right: 35px; padding-left: 0px;">

                    <div class="">

    <div style="color:#555555;font-family:`Oswald`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:120%; padding-right: 10px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;font-family:Oswald, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;color:#555555;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: left"><span style="font-size: 26px; line-height: 31px;"><strong><span style="line-height: 31px; font-size: 26px;">Thing To do after your 1st Login</span></strong></span></p><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: left"><span style="font-size: 26px; line-height: 31px;"><span style="line-height: 31px; font-size: 26px;"><h2>How You Can Create a Secure Password</h2></span></span></p></div>
    </div>

</div>


                    <div class="">

    <div style="color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 0px;">
        <div style="font-size:12px;line-height:14px;color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;text-align:left;"><ol><li style="font-size: 14px; line-height: 16px; text-align: left;">&#160; Do use a combination of uppercase and lowercase letters, symbols and numbers.<br><br></li><li style="font-size: 14px; line-height: 16px; text-align: left;"><span style="background-color: rgb(255, 255, 153); font-size: 14px; line-height: 16px;"></span>&#160; Don`t use commonly used passwords such as 123456, the word "password," “qwerty”, “111111”, or a word like, “monkey”.<br><br></li><li style="font-size: 14px; line-height: 16px; text-align: left;">&#160; Don`t write your passwords down, share them with anyone or let anyone see you log into devices or websites.<br><br></li><li style="font-size: 14px; line-height: 16px; text-align: left;">&#160;Do change your passwords regularly.</li></ol></div>
    </div>

</div>


                    <div class="">

    <div style="color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:150%; padding-right: 10px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:18px;color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: left"><span style="font-size: 12px; line-height: 18px; color: rgb(153, 153, 153);"></span></p></div>
    </div>

</div>
              </div>
              </div>
            </div>

        </div>
      </div>
    </div>
    <div style="background-image:url(`https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png`);background-position:top center;background-repeat:repeat;;background-color:transparent">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">

            <div class="col num12" style="min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
             <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">



<div align="center" class="button-container center " style="padding-right: 30px; padding-left: 30px; padding-top:30px; padding-bottom:30px;">

    <div style="color: #ffffff; background-color: #f2002a; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 292px; width: 202px;width: auto; border-top: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-left: 0px solid transparent; padding-top: 5px; padding-right: 45px; padding-bottom: 0px; padding-left: 45px; font-family: `Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif; text-align: center; mso-border-alt: none;">
      <span style="font-size:16px;line-height:32px;"><span style="font-size: 18px; line-height: 36px;" data-mce-style="font-size: 18px;"><strong>LOGIN FOR MORE DETAILS</strong></span></span>
    </div>

</div>


            </div>
            </div>

        </div>
      </div>
    </div>
    <div style="background-image:url(`https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/stripes-light.png`);background-position:top center;background-repeat:repeat;;background-color:transparent">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">

            <div class="col num12" style="min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">

                    <div align="center" class="img-container center  autowidth  fullwidth " style="padding-right: 0px;  padding-left: 0px;">

  <img class="center  autowidth  fullwidth" align="center" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/rounded_bottom.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 600px" width="600">
<div style="line-height:50px;font-size:1px">&#160;</div>
</div>


              </div>
              </div>
            </div>

        </div>
      </div>
    </div>
    <div style="background-color:#6bcfc7;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid mixed-two-up no-stack">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">

            <div class="col num8" style="display: table-cell;vertical-align: top;min-width: 320px;max-width: 400px;">
              <div style="background-color: transparent; width: 100% !important;">
          <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">


                    <div class="">
    <div style="color:#FFFFFF;font-family:`Oswald`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 40px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;font-family:Oswald, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;color:#FFFFFF;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px"><span style="font-size: 20px; line-height: 24px;"><strong>Need help? No problem.</strong></span></p></div>
    </div>

</div>


                    <div class="">
    <div style="color:#FFFFFF;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:150%; padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 15px;">
        <div style="font-size:12px;line-height:18px;color:#FFFFFF;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 18px"><span style="font-size: 14px; line-height: 21px;">Greeting from HireTruck We are always Here to Hear from you You can Contact us 24/7.</span></p></div>
    </div>

</div>



<div align="left" class="button-container left " style="padding-right: 10px; padding-left: 10px; padding-top:0px; padding-bottom:25px;">
    <div style="color: #ffffff; background-color: transparent; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 250px; width: 210px;width: auto; border-top: 4px solid #FFFFFF; border-right: 4px solid #FFFFFF; border-bottom: 4px solid #FFFFFF; border-left: 4px solid #FFFFFF; padding-top: 0px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px; font-family: `Oswald`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif; text-align: center; mso-border-alt: none;">
      <span style="font-size:16px;line-height:28px;"><strong><span style="font-size: 30px; line-height: 54px;" data-mce-style="font-size: 30px; line-height: 54px;">7096942284</span></strong></span>
    </div>

</div>


              </div>
              </div>
            </div>
            <div class="col num4" style="display: table-cell;vertical-align: top;max-width: 320px;min-width: 200px;">
              <div style="background-color: transparent; width: 100% !important;">
              <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:35px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">


                    <div align="center" class="img-container center  autowidth  " style="padding-right: 0px;  padding-left: 0px;">
<div style="line-height:20px;font-size:1px">&#160;</div>  <img class="center  autowidth " align="center" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/customer_care.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 152px" width="152">

</div>


            </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div style="background-image:url(`https://d1oco4z2z1fhwp.cloudfront.net/templates/default/117/bg_footer_1.png`);background-position:top center;background-repeat:repeat;;background-color:#e4f9f7">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">

            <div class="col num12" style="min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
             <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;">

                    <div class="">
    <div style="color:#3C82A0;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;color:#3C82A0;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><strong>HireTruck Service</strong><br></p><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 12px; line-height: 14px;"> At: RakshaShakti University Hostel, Lavad Campus, Dahegam, Gandhinagar</span></p><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 12px; line-height: 14px;">jamesmrt@gmail.com</span></p></div>
    </div>

</div>

              </div>
              </div>
            </div>

        </div>
      </div>
    </div>
    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">

            <div class="col num12" style="min-width: 320px;max-width: 600px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
            <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:15px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">


                    <div class="">
    <div style="color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;color:#555555;font-family:`Catamaran`, `Lucida Sans Unicode`, `Lucida Grande`, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center">Love From HireTruck Team</p><p style="margin: 0;font-size: 12px;line-height: 14px">&#160;<br></p></div>
    </div>

</div>

              </div>
              </div>
            </div>

        </div>
      </div>
    </div>

        </td>
  </tr>
  </tbody>
  </table>

</body></html>';
    $mail->AltBody = 'Nothing';

    $mail->send();
    echo " <div class='container'> <div class='alert alert-success' role='alert' style='text-align:center; margin-top:25%;padding-top:2%;padding-bottom:2%' ></h4> <strong>Well done You are Almost There!</strong> Now Check Your MailBox For the Password!!</h4></div> </div> <?php ";
    header( "refresh:1;url=index.php?=Ad_Edited_Successfully" );
} catch (Exception $e) {
    echo " <div class='container'> <div class='alert alert-danger' role='alert' style='text-align:center; margin-top:25%;padding-top:2%;padding-bottom:2%' ></h4> <strong>Ohh Snap!!!</strong> Something is wrong with us Plelase Try again After sometime!!</h4></div> </div> <?php ", $mail->ErrorInfo;
    header( "refresh:3;url=index.php?=Ad_Edited_Successfully" );
}
}
?>
