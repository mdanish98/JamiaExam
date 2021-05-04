<?php
session_start();
include '../connection2.php';
$email=$_SESSION['email'];
$enroll=$_SESSION['enroll'];
$Everr=$_POST['EVer'];
$Mverr=$_POST['MVer'];
echo 'emmmmail= '.$email;
echo 'enroll= '.$enroll;
echo 'Ever= '.$Everr;
echo 'Mver= '.$Mverr;

$sql = "SELECT * FROM [enroll] where enrollment='$enroll' AND email='$email' AND Evalidationcode='$Everr' and Mvalidationcode='$Mverr' ";
$run = sqlsrv_query($con,$sql);
$count = sqlsrv_has_rows($run);
if($count)
{
	header('location: studentlog.php?o=1');
}
else
{
header('location: studentlog.php?o=2');
}
?>
<?php
session_start();
$_SESSION['email']=$email;
$_SESSION['enroll']=$enroll;
$_SESSION['ever']=$Everr;
$_SESSION['mver']=$Mverr;

?>