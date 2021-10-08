<?php
include('smtp/PHPMailerAutoload.php');
$html='Msg';
echo smtp_mailer('user_email_id','subject',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "thenightmarketeradwords@gmail.com";
	$mail->Password = "pslpapghbdrducly";
	$mail->SetFrom("SMTP_EMAIL_ID");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}






smtp_mailer('phpfact@gmail.com', 'test smtp mailer working', 'Google smtp working fine');




?>