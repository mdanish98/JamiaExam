  <?php
  include '../webusercon.php';
  session_start();
  $enroll=$_SESSION['enroll'];
if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}
$sql2 = "SELECT LocalStreet1,LocalStreet2,LocalStreet3,LocalCity,LocalState,LocalPin from enroll where enrollment='$enroll'";
$run2 = sqlsrv_query($con,$sql2) or die ("unable to connect sql2");
echo "enter your new Correspondance Address";
while ($row2=sqlsrv_fetch_array($run2,SQLSRV_FETCH_ASSOC))
{
	$addd1=$row2['LocalStreet1'];
	$addd2=$row2['LocalStreet2'];
	$addd3=$row2['LocalStreet3'];
	$addd4=$row2['LocalCity'];
	$addd5=$row2['LocalState'];
	$addd6=$row2['LocalPin'];
 echo " <form method='POST'>
<input type='text' name='add1' placeholder='Adressline 1' value='$addd1'>
<input type='text' name='add2' placeholder='Adressline 2' value='$addd2'>
<input type='text' name='add3' placeholder='Adressline 3' value='$addd3'>
<input type='text' name='add4' placeholder='City' value='$addd4'>
<input type='text' name='add5' placeholder='State' value='$addd5'>
<input type='number' name='add6' placeholder='PIN' value='$addd6'>";
}
echo "<input type='submit' name='submit'>";

if(isset($_POST['submit'])){
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];
	$add3 = $_POST['add3'];
	$add4 = $_POST['add4'];
	$add5 = $_POST['add5'];
	$add6 = $_POST['add6'];
	$sql = "UPDATE enroll SET LocalStreet1='$add1',LocalStreet2='$add2',LocalStreet3='$add3',LocalCity='$add4',LocalState='$add5',LocalPin='$add6' where enrollment='$enroll'";
$run1 = sqlsrv_query($con,$sql) or die ("unable to connect");
if($add1=="" && $add6 == "" && $add5 == ""){echo "<script> alert('please enter present address'); </script>";}
if($run1&&$add1!="")
{
	header("location:personalinfo1.php");
}
}

?>