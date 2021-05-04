<?php
session_start();
include("connection2.php");
$degr=$_SESSION['degree'];
//echo "----degree= ". $degr;
$acad=$_SESSION['acad'];
//echo "----acad id= ". $acad;
$exam_id=$_SESSION['exam_id'];
//echo "----exam= ". $exam_id;
$course_id=$_POST['course_id'];
//echo "----course_id= ". $course_id;
$classsidd=$_SESSION['classsidd'];
//echo "----classsidd_id= ". $classsidd;

?>
<?php
$sql = "SELECT classid FROM [rolllist] where coursename='$course_id'";
//$count = sqlsrv_num_rows( sqlsrv_query($con, $sql) );
//if ($count > 0 ) {
$run = sqlsrv_query($con,$sql);
while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) {    
	//echo $row["classid"];
	$classid=$row['classid'];
 }
?>
<!--<a href="http://203.190.132.18/WebMarkSheet/RollListViewer.aspx?ID=<?php //echo $acad; ?><?php //echo $degr; ?><?php //echo $exam_id; ?><?php //echo $classid; ?>" >-->
<br/>
<input type="button" value="Go" onClick="popUp();">
<span style="display:inline-block; width: 40px;"></span>
<a href="http://localhost/jamiaexam/resultsheets/resultsheets.php">
<input type="button" value="Reset"></a>


<script>
var wi=null;
function popUp(){
   if (wi) wi.close();
   wi=window.open("http://203.190.132.18/WebMarkSheet/RollListViewer.aspx?ID=<?php echo $acad; ?>@<?php echo $degr; ?>@<?php echo $exam_id; ?>@<?php echo $classid; ?>","","width=1360,height=740,location=center,scrollbars=yes,status=no");
}
//-->
</script>
