<?php
include("connection2.php");
$sql = "SELECT distinct ClassName FROM [StudentResultStatus] where ExamID='E14'";
//$count = sqlsrv_num_rows( sqlsrv_query($con, $sql) );
//if ($count > 0 ) {
$run = sqlsrv_query($con,$sql);
/*if($run)
{
	echo "enroll = " . $Enroll;
	echo "examid = " . $exam_id;

	echo "statemennt executed";
}
else
{
	echo "statemennt not executed";
}
*/

while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { 
  echo $row["ClassName"];
}
?>