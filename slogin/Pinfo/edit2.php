  <?php
  include '../webusercon.php';
  session_start();
  $enroll=$_SESSION['enroll'];
if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}



echo "enter your new alternate mobile number";
 echo " <form method='POST'>
<input type='number' name='lcphone2' placeholder='Enter Mobile No.'>
<input type='submit' name='submit'>";
if(isset($_POST['submit'])){
	$lcphone2 = $_POST['lcphone2'];
	$sql = "UPDATE enroll SET Mobile='$lcphone2' where enrollment='$enroll'";
$run1 = sqlsrv_query($con,$sql) or die ("unable to connect");
if($lcphone2==""){echo "<br>please enter mobile";}
if($run1&&$lcphone2!="")
{
	header("location:personalinfo1.php");
}
}

?>