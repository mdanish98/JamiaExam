<?php
session_start();
include('../webusercon.php');
//include('connection/connectionsql.php');
echo "examid".$exam_id = $_SESSION['examid'];
$roll_id = $_SESSION['roll_id'];
echo 'rollid after post = '.$_SESSION['roll_id'] = $roll_id;
echo "category = ".$cat = $_SESSION['cat'];
echo "classsid = ".$classsid = $_SESSION['classsid'];
$date = date('Y-m-d H:i:s');
echo "date = ".$date;

foreach($_POST['check1'] as $check)
{
	$query1 = "Delete from RegisterExam where PsetID='$check'";
	$run1 = sqlsrv_query($con,$query1);
}
header("Location: RegConfirm.php?q=2");


?>