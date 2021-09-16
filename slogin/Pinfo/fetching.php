  <?php
 include '../webusercon.php';
  session_start();
  $enroll=$_SESSION['enroll'];
if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}
echo "enter your new Local Phone";
 echo " <form method='POST'>
<input type='number' name='lcphone'>
<input type='submit' name='submit'>";
if(isset($_POST['submit'])){
	$lcphone = $_POST['lcphone'];
	$sql = "UPDATE enroll SET LocalPhone='$lcphone' where enrollment='$enroll'";
$run1 = sqlsrv_query($con,$sql) or die ("unable to connect");
if($lcphone==""){echo "<br>please enter mobile";}
if($run1&&$lcphone!="")
{
	header("location:personalinfo1.php");
}
}

?>