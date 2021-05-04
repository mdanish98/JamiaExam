  <?php
  include '../webusercon.php';
  session_start();
  $enroll=$_SESSION['enroll'];
if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}echo "enter your new Email address";
 echo " <form method='POST'>
<input type='email' name='email' placeholder='Enter E-mail Address'>
<input type='submit' name='submit'>";
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$sql = "UPDATE enroll SET Email='$email' where enrollment='$enroll'";
$run1 = sqlsrv_query($con,$sql) or die ("unable to connect");
if($email==""){echo "<br>please enter mobile";}
if($run1&&$email!="")
{
	header("location:personalinfo1.php");
}
}

?>