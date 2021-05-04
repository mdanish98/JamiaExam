<?php
session_start();
include("../webusercon.php");
$enroll=$_POST['username'];
$pass=$_POST['password'];
$sql = "SELECT enrollment,enrollPWD,EVerified,MVerified FROM [enroll] where enrollment='$enroll' AND enrollPWD='$pass' and Everified=1 and mverified<4";
$run = sqlsrv_query($con,$sql);
$count = sqlsrv_has_rows($run);
if($count>0)
{
	if ($_POST['captcha'] == $_SESSION['code'])
    {
		$sql4 = "UPDATE enroll
SET MVerified=1
WHERE enrollment='$enroll'";
$run4 = sqlsrv_query($con,$sql4);
header('location: ../Pinfo/personalinfo1.php');
//Update login detail into database....
}
else
{
header('location: ../Studentlog.php?k=1');
}

}
else {

$sql4 = "Select MVerified from enroll
WHERE enrollment='$enroll'";
$run4 = sqlsrv_query($con,$sql4);
$count2=sqlsrv_has_rows($run4);

if($count2>0)
{

	
$sql2 = "UPDATE enroll
SET MVerified=MVerified+1
WHERE enrollment='$enroll'";
$run2 = sqlsrv_query($con,$sql2);
$sql3 = "Select MVerified from enroll
WHERE enrollment='$enroll'";
$run3 = sqlsrv_query($con,$sql3);

if($run2)
{
    while($row=sqlsrv_fetch_array($run3,SQLSRV_FETCH_ASSOC))
	{
		if($row['MVerified']<4)
		{
			header('location: ../Studentlog.php?s=1');
		}
		else if($row['MVerified']>=4)
		{
			header('location: ../Studentlog.php?p=1');
		}
	}
}
}
else
{
	header('location: ../Studentlog.php?x=1');
}

}
?>
<?php
session_start();
$_SESSION['enroll']=$enroll;
?>