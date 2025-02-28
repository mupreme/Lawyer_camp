<?php
    $first_Name=$first_Name;
    $last_Name=$last_Name;
    $password=$password;
	
	$mailto = $email;
    $mailSub = "Notification For Account Information";
	$message="
	
	<table border='1' width='590' align='center' cellpadding='2px' cellspacing='2' >
			<tr>
				<td align='left' style='color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;'>
				<!-- section text ======-->
				<h2 style=''>
					Dear ".$first_Name." <hr/>
					Your Account informatiom
					
				</h2>
				
				<h6 style=''>
					<b> First Name : </b>".$first_Name."
				</h6>
				<h6 style=''>
					<b> Last Name : </b>".$last_Name."
				</h6>
				<h6 style=''>
					<b> Full Name : </b>".$first_Name." ".$last_Name."
				</h6>
				<h6 style=''>
					<b> Your Email Address: </b>".$mailto."
				</h6>
					<h6 style=''>
					<b> Your  Password: </b>".$password."
				</h6>
				
				<p>Wait for Approval Email. Then You Can Easily Login to the system</p>
				<a href='http://localhost/lawyermanagementsystem/login.php'>Login Here</a>
			</td>
		</tr>
	</table>

	
	"
	;
    $mailMsg = $message;
	use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug =0 ;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'freelancelaw2022@gmail.com';                     //SMTP username
    $mail->Password   = 'uvdzbfddyuxdvktt';                               //SMTP password
    $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('freelancelaw2022@gmail.com', 'Account info');
    $mail->addAddress($mailto);     //Add a recipient
                 //Name is optional
    

   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mailSub;
    $mail->Body    = $mailMsg;
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>