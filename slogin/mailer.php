<?php
session_start();
include '../connection2.php';
$email=$_POST['emailf'];
$enroll=$_POST['enrollf'];
$sql = "SELECT evalidationcode,mvalidationcode,EVerified,MVerified,email,enrollment FROM [enroll] where enrollment='$enroll' AND email='$email'";
$run = sqlsrv_query($con,$sql);
$row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC);
$evalcode=$row['evalidationcode'];
$mvalcode=$row['mvalidationcode'];
$everified=$row['EVerified'];
$mverified=$row['MVerified'];
$count = sqlsrv_has_rows($run);
if($count)
{
require 'class.phpmailer.php';
include 'class.smtp.php';
$email=$_POST['emailf'];
$enroll=$_POST['enrollf'];
$mail = new PHPMailer;
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'ssl'; 
$mail->Port = "465";
$mail->Username = 'ceojamia@gmail.com';                            // SMTP username

$mail->Password = 'ceojamia@123';                           // SMTP password

                           // Enable encryption, 'ssl' also accepted
$mail->From = "ceojamia@gmail.com";
$mail->FromName = 'Controller of Examinations Jamia Millia Islamia';
$mail->AddAddress($email);  // Add a recipient
echo "email= ".$_POST['email'];
$mail->AddAddress('mdanish98@gmail.com',$enroll);               // Name is optional
//$mail->AddReplyTo('mdanish98@gmail.com', $enroll);
//$mail->AddCC('ceojamia@gmail.com');
//$mail->AddBCC('mohammadsajjadamu@gmail.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML


$mail->Subject = 'Password Validation code';
$mail->Body    = '<b>Dear '.$enroll.'</b> <br/> Your Email verification code is='.$evalcode. ' and<br/>Your Mobile verification code is='.$mvalcode.'<br/>Please Enter these details to reset your password.<br/><b>Incharge Tabulation<br/>Office of the Controller of Examinations <br/>Jamia Millia Islamia</b><br/><i>This is a web generated mail please dont reply to this mail</i>';
$mail->AltBody = '<b>Dear '.$enroll.'</b> <br/> Your Email verification code is='.$evalcode. ' and<br/>Your Mobile verification code is='.$mvalcode.'<br/>Please Enter these details to reset your password.<br/><b>Incharge Tabulation<br/>Office of the Controller of Examinations <br/>Jamia Millia Islamia</b><br/><i>This is a web generated mail please dont reply to this mail</i>';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
header('location: studentlog.php?l=1');
}
else 
{
	header('location: studentlog.php?m=1');
}
?>
<?php
$_SESSION['email']=$email;
$_SESSION['enroll']=$enroll;
?>