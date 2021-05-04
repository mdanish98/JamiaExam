
<?php
session_start();
include('../connection/connectionsql.php');
$enroll = $_SESSION['enroll'];
if(!isset($enroll))
	{
	header("Location: ../../Studentlog.php?z=1");
	exit();
	}
	
$cookie_name = "encat";
$cookie_value = $_POST['pay'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	$cookie_name;
	$_COOKIE[$cookie_name];
	$encatt = $_COOKIE[$cookie_name];
	$enrollcat = $_POST['pay'];
	$_SESSION['encat'] = $enrollcat;
	//form filled check starts
	/*$enrollcat = $_POST['pay'];
	$_SESSION['encat'] = $enrollcat;
 	if(empty($enrollcat))
	{
		header("Location: ../HomePage.php?q=2");
		exit();
	}*/
	
	$encat = $_SESSION['encat'];
	?>
	<html>
    <head>
    <title>Payment</title>
    </head>
    <body>
    <h1 align="center">
    <img src="http://localhost/JamiaExam/loader.gif" height="64" width="64" alt="loading" /> 
    </h1>
    <h3 align="center">Transaction Process</h2>
    <p align="center">Please Do Not Refresh or Close this page<br/>
    You will be automatically redirected to the<br/>
    Merchant Site</p>
    </body>
    </html>
    <?php
	if(empty($_GET['booking_id']))
	{
			header( "refresh:10;url=https://jamiaexam.checkfront.com/reserve/?item_id=2&category_id=2" );
	}
?>

<?php
$bookingid = $_GET['booking_id'];

$bookingtotal = $_GET['total'];

$tid = $_GET['item'];

if(!empty($bookingid))
{
	$query = "Update registeration SET Bookingno='$bookingid',BookingStatus=1 Where EnrollCat='$encatt'";
	$run = mysql_query($query);
	if($run)
	{
		header( "refresh:6;url=http://localhost/JamiaExam/slogin/Pinfo/HomePage.php?q=3");
	}
	else
	{
		header( "refresh:6;url=http://localhost/JamiaExam/slogin/Pinfo/HomePage.php?q=4");
	}
}



?>