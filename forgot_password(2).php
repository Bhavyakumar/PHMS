<?php
require 'PHPMailer\phpmailer\PHPMailerAutoload.php';
include("connection.php");
//$mail=$_POST["txtmail"];
$mail=trim($_POST["txtmail"]);
$qry="select * from scientist where s_email='$mail'";
$rc=mysql_query($qry);
$row=mysql_num_rows($rc);
if($row==1)
{
	$data=mysql_fetch_assoc($rc);
	$Username=$data["s_username"];
	$Password=$data["s_password"];
	//openssl.cafile = C:\xampp\htdocs\Dairy_Hub\project\PHPMailer\cacert.pem
	//curl.cainfo = C:\xampp\htdocs\Dairy_Hub\project\PHPMailer\cacert.pem
	
	//Mail PORTION

		$mail = new PHPMailer;
		//$mail->SMTPDebug = 4;                               
		$mail->isSMTP();                                      
		$mail->Host = 'smtp.gmail.com';  
		$mail->SMTPAuth = true;                               
		$mail->Username = 'bhavychaudhary5@student.aau.in';                 
		$mail->Password = '90996726101998';                           
		$mail->SMTPSecure = 'tls';                            
		$mail->Port = 587;                                    
		$mail->setFrom('bhavychaudhary5@student.aau.in', 'Bhavya Chaudhary');
		$mail->isHTML(true);                                
		$mail->Subject = 'Plant HealthCare Management System Forgot Password???';
		
	//Mail portion exist
	echo"<pre>";
	print_r($_POST);
	echo"</pre>";
	$email=$_POST['txtmail'];
	$mail->addAddress($email,'bhavya');  
			$mail->Body    = "
				<div style='height:150px;background-color:aqua;padding:10px;'>
					<div style='padding-top:10px;'>
						<h3>તમારુ પ્લાન્ટ હેલ્થકેર મેનેજમેન્ટ સિસ્ટમ મા સ્વાગત છે.</h3><hr>
						<b><b><br>
						યુઝરનેમ:$Username,<br>
						પાસવર્ડ:$Password;<br>
					</div>
				</div>
			";
		if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
				
				
			}
			else
			{
				
				header("location:forgot_password.php?error=1");
			}

}
else
{
	header("location:forgot_password.php?error=0");
}
?>