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





foreach($_POST['check'] as $check)
{
	$query1 = "select PsetID,PaperID,PaperCode,PaperName from PaperSet where PsetID='$check'";
	$run1 = sqlsrv_query($con,$query1);
	while($row=sqlsrv_fetch_array($run1,SQLSRV_FETCH_ASSOC))
	{
		$psetid = $row["PsetID"];
		$paperid = $row["PaperID"];
		$papercode = $row["PaperCode"];
		$papername = $row["PaperName"];
		$query2 = "INSERT INTO [RegisterExam]
           ([ExamID]
           ,[RollID]
           ,[PsetID]
           ,[PaperID]
           ,[PaperCode]
           ,[PaperName]
           ,[DateFilled]
           ,[FormSubmitted]
           ,[DateFormSubmitted])
     VALUES
           ('$exam_id'
           ,'$roll_id'
           ,'$psetid'
           ,'$paperid'
           ,'$papercode'
           ,'$papername'
           ,'$date'
           ,0
           ,null);";
		$run2 = sqlsrv_query($con,$query2);
		$query3 = "INSERT INTO [RegisterRoll]
           ([ExamID]
           ,[RollID]
           ,[DateFilled]
           ,[FormSubmitted]
           ,[DateFormSubmitted]
           ,[FormApproved]
           ,[DateFormApproved]
           ,[CAT]
           ,[ClassSID]
           ,[ProfileImage]
           ,[ProfiileSign])
     VALUES
           ('$exam_id'
           ,'$roll_id'
           ,'$date'
           ,0
           ,null
           ,0
           ,null
           ,'$cat'
           ,'$classsid'
           ,'ProfileImage'
           ,'ProfileSignature');";
	$run3 = sqlsrv_query($con,$query3);
	
	}//end of while loop
	

}//end of foreach loop

header("Location: RegConfirm.php?q=1");


?>