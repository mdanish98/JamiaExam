<?php
session_start();
include('../webusercon.php');
$enroll = $_SESSION['enroll'];
if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}
	echo "examid".$exam_id = $_SESSION['examid'];
$roll_id = $_SESSION['roll_id'];
echo 'rollid after post = '.$_SESSION['roll_id'] = $roll_id;
echo "category = ".$cat = $_SESSION['cat'];
echo "classsid = ".$classsid = $_SESSION['classsid'];
$date = date('Y-m-d H:i:s');
echo "date = ".$date;
$rollid = $_POST['rollid'];


//photo upload start
$temp = explode(".",$_FILES["photo"]["name"]);
$photo =  '../uploads/'.$enroll."-".$exam_id.".".end($temp);
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photo)) {
        //photo has been uploaded
    } else {
        //there was an error uploading photo
    }
//photo upload end
//sign upload start
$temp2 = explode(".",$_FILES["signature"]["name"]);
$signature =  '../uploads/'.$enroll."-".$exam_id."-sign.".end($temp2);
if (move_uploaded_file($_FILES["signature"]["tmp_name"], $signature)) {
        //signature uploaded
    } else {
        //there was an error uploading signature
    }

//sign upload end



$query1 = "UPDATE RegisterRoll SET FormSubmitted=1,DateFormSubmitted='$date',ProfileImage='$photo',ProfiileSign='$signature' WHERE RollID='$rollid'";
$run1 = sqlsrv_query($con,$query1);
if($run1)
{
	echo "Success";
  //header("Location: HomePage.php?q=5");
}
else
{
	echo "Not Success";
	//header("Location: RegConfirm.php?q=3");
}

?>