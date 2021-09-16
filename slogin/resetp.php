<?php
include 'webusercon.php';
session_start();
$email=$_SESSION['email'];
$enroll=$_SESSION['enroll'];
echo 'email'.$email;
echo 'enroll'.$enroll;
$pass1=$_POST['newpass'];
$pass2=$_POST['repass'];
if($pass1==$pass2)
{
$sql = "UPDATE enroll
SET EnrollPWD='$pass1',everified=1,mverified=1
WHERE enrollment='$enroll'";
$run = sqlsrv_query($con,$sql);
$count = sqlsrv_has_rows($run);
if($run)
{
   	header('location: studentlog.php?s=2');
}
else
{
	header('location: studentlog.php?s=3');
}
}
?>
