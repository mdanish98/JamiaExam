
<?php
    session_start();
	include("../slogin/Pinfo/connection/connectionsql.php");
	$username = $_SESSION['username'];
	$tbname = $_SESSION['tbname'];
	$sql4 = "UPDATE $tbname SET Status=0 WHERE UserName='$username'";
	$run4 = mysql_query($sql4);
    session_destroy();
    header('Location: index.php?y=1 ');
?>
