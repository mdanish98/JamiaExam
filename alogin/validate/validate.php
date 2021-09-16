
<?php
session_start();
include("../../slogin/Pinfo/connection/connectionsql.php");
echo "username = ".$username=$_POST['username'];
echo "password = ".$pass=$_POST['password'];
echo "tbname = ".$tbname = $_POST['tbname'];
echo "sqlquery = ".$sql = "SELECT UserName,Name FROM $tbname where UserName='$username' AND Password='$pass'";
$_SESSION['tbname'] = $tbname; 
$run = mysql_query($sql);
$count = mysql_num_rows($run);
if($count>0)
{
	if ($_POST['captcha'] == $_SESSION['code'])
    {
		echo "captcha matched";
		if($tbname=='alogin')
		{
			$sql4 = "UPDATE $tbname SET Status=1 WHERE UserName='$username'";
			$run4 = mysql_query($sql4);
			header("Location: ../Admin.php");
		}
		else if($tbname=='user')
		{
			$sql4 = "UPDATE $tbname SET Status=1 WHERE UserName='$username'";
			$run4 = mysql_query($sql4);
			header("Location: ../user/user.php");
		}
		
        //$run4 = sqlsrv_query($con,$sql4);
        //header('location: ../Pinfo/personalinfo1.php');
//Update login detail into database....
    }
    else
    { 
        header('location: ../index.php?k=1');
    }

}
else {
header('location: ../index.php?k=2');
}
?>
<?php
session_start();
$_SESSION['username']=$username;
?>