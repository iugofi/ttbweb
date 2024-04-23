<?php
include 'includes/session.php';
require("testscript/class.phpmailer.php");

$userFullName = '';
$code = '';
$userID = '';
if(isset($_POST['reset'])){
	$to_email = $_POST['email'];
	$connForErpsDb = $pdoForErps->open();
	$stmt = $connForErpsDb->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
	$stmt->execute(['email'=>$to_email]);
	$row = $stmt->fetch();
	if($row['numrows'] > 0){
		//generate code
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 15);

		$stmt = $connForErpsDb->prepare("UPDATE users SET reset_tokens=:code WHERE id=:id");
		$stmt->execute(['code'=>$code, 'id'=>$row['id']]);

		if(!empty($row['last_name'])) {
			$userFullName = $row['name']." ".$row['last_name'];
		} else {
			$userFullName = $row['name'];
		}
		$userID = $row['id'];

	}
	$subject = "TTB Internet Security Password Reset";
	// $message = "<h2>Password Reset</h2>
	// 				<p>Your Account:</p>
	// 				<p>Email: ".$to_email."</p>
	// 				<p>Please click the link below to reset your password.</p>
	// 				<a href='https://www.ttbinternetsecurity.com/password_reset.php?code=".$code."&user=".$userID."'>Reset Password</a>";
  $message = "<body class='clean-body u_body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #e7e7e7;color: #000000'>
<table style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 800px;Margin: 0 auto;background-color: #e7e7e7;width:100%' cellpadding='0' cellspacing='0'>
<tbody>
<tr style='vertical-align: top'>
<td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
<div class='u-row-container' style='padding: 0px;background-color: #444444'>
<div class='u-row' style='Margin: 0 auto;min-width: 800px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
<div class='u-col u-col-100' style='max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;'>
<div style='background-color: #444444;width: 100% !important;'>
<div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody>
<tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<div style='color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;'>
<p style='font-size: 14px; line-height: 140%;'><span style='font-size: 10px; line-height: 14px;'>DO NOT REPLY TO THIS MESSAGE. If you require Customer Service or Technical Support, please go to https://ttbinternetsecurity.com</span></p>
</div></td></tr></tbody></table>
</div></div></div></div></div></div>
<div class='u-row-container' style='padding: 0px;background-color: #333333'>
<div class='u-row' style='Margin: 0 auto;min-width: 800px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
<div class='u-col u-col-100' style='max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;'>
<div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
<div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody>
<tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<table width='100%' cellpadding='0' cellspacing='0' border='0'>
<tr>
<td style='padding-right: 0px;padding-left: 0px;' align='center'>
<img align='center' border='0' src='https://www.ttbinternetsecurity.com/images/image-1.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 200px;' width='200'/>
</td></tr></table></td></tr></tbody></table>
</div></div></div></div></div></div>
<div class='u-row-container' style='padding: 0px;background-color: #333333'>
<div class='u-row' style='Margin: 0 auto;min-width: 800px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
<div class='u-col u-col-100' style='max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;'>
<div style='background-color: #ffffff;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
<div style='padding: 0px 20px;border-top: 10px solid #11d8aa;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 10px solid #11d8aa;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody>
<tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<h1 style='margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 32px;'>
Password Change
</h1></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody>
<tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<h1 style='margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 13px;'>
Hello <strong> ".$userFullName.",</strong>
</h1></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody><tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
<p style='font-size: 14px; line-height: 140%;'><span style='font-size: 12px; line-height: 16.8px;'>We received a request to reset your account password. Click on the link below to proceed.</span></p>
</div></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody><tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<div align='center'>
<a href='https://www.ttbinternetsecurity.com/password_reset.php?code=".$code."&user=".$row['id']."' target='_blank' style='box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #1bc7a6; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;'>
<span style='display:block;padding:10px 20px;line-height:120%;'>Reset Password</span>
</div></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody>
<tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<h1 style='margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 14px;'>
<strong>This link is valid for 1 Hour and will expire immediately after that.</strong>
</h1></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody><tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<h1 style='margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 14px;'>
<strong>Regards,<br>
Team TTB</strong>
</h1></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody><tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<table height='0px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 3px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
<tbody><tr style='vertical-align: top'>
<td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
<span>&#160;</span>
</td></tr></tbody></table></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody>
<tr><td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
<div style='line-height: 140%; text-align: left; word-wrap: break-word;'>
<p style='font-size: 14px; line-height: 140%;'><span style='font-size: 12px; line-height: 16.8px;'>If you don’t request a password change, do not worry. Your account is still safe.<span></p>
</div></td></tr></tbody></table></div></div></div></div></div></div>
<div class='u-row-container' style='padding: 0px;background-color: #333333'>
<div class='u-row' style='Margin: 0 auto;min-width: 800px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
<div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
<div class='u-col u-col-100' style='max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;'>
<div style='background-color: #333333;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
<div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody><tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
<table height='0px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 3px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
<tbody>
<tr style='vertical-align: top'>
<td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
<span>&#160;</span>
</td></tr></tbody></table></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody>
<tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:10px 0;font-family:arial,helvetica,sans-serif;' align='left'>
<div class='menu' style='text-align:left'>
<a href='https://www.ttbinternetsecurity.com/privacy_policy.php' target='_blank' style='padding:5px 10px 5px 0px;display:inline-block;color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:14px;text-decoration:none' >
Privacy</a>
<a href='https://www.ttbinternetsecurity.com/ttb-antivirus/download.php' target='_blank' style='padding:5px 10px 5px 0px;display:inline-block;color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:14px;text-decoration:none' >
Download</a>
<a href='https://www.ttbinternetsecurity.com/terms_conditions.php' target='_blank' style='padding:5px 10px 5px 0px;display:inline-block;color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:14px;text-decoration:none' >
Terms of Service</a>
<a href='https://www.ttbinternetsecurity.com/support.php' target='_blank' style='padding:5px 10px 5px 0px;display:inline-block;color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:14px;text-decoration:none' >
Support</a>
<a href='https://www.ttbinternetsecurity.com/return_policy.php' target='_blank' style='padding:5px 10px 5px 0px;display:inline-block;color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:14px;text-decoration:none' >
Legal</a></div></td></tr></tbody></table>
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
<tbody><tr>
<td style='overflow-wrap:break-word;word-break:break-word;padding:0px 0px 10px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
<div style='color: #ffffff; line-height: 140%; text-align: left; word-wrap: break-word;'>
<p style='font-size: 14px; line-height: 140%;'><span style='font-size: 10px; line-height: 14px;'>You have received this mail as a service manager from TTB Antivirus regarding the status of your TTB Antivirus product subscription</span></p>
<p style='font-size: 14px; line-height: 140%;'><span style='font-size: 10px; line-height: 14px;'>Copyright &copy; TTB Antivirus Inc. All rights reserved.</span></p>
</div></td></tr></tbody></table></div></div></div></div></div></div></td></tr></tbody></table></body></html>";

	$headers = 'From: noreply@ttbinternetsecurity.com';
  $headers.= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $mail = new PHPMailer();

  $mail->IsSMTP();
  $mail->Host = "162.240.62.108";

  $mail->SMTPAuth = true;
  //$mail->SMTPSecure = "ssl";
  $mail->Port = 587;
  $mail->Username = "supporttest@ttbinternetsecurity.com";
  $mail->Password = "p9i.vZr8v3sQ";

  $mail->From = "supporttest@ttbinternetsecurity.com";
  $mail->FromName = "TTB Internet Security";
  //$mail->AddAddress("harjindersingh1017@gmail.com");
  $mail->AddAddress($to_email);
  //$mail->AddReplyTo("mail@mail.com");

  $mail->IsHTML(true);

  $mail->Subject = $subject;
  $mail->Body = $message;
  //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

  if(!$mail->Send())
  {
  echo "Message could not be sent. <p>";
  echo "Mailer Error: " . $mail->ErrorInfo;
  exit;
} else {
  echo "Message has been sent";
}
echo '<script>window.location.replace("https://www.ttbinternetsecurity.com/password_forgot.php");</script>';
}
?>
