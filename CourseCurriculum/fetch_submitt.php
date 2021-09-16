<?php
session_start();
include("connection2.php");
$faculty=$_SESSION['faculty'];
//echo "----faculty= ". $faculty;
$acad=$_SESSION['acad'];
//echo "----acad id= ". $acad;
$dept_id=$_SESSION['dept_id'];
//echo "----dept_id= ". $dept_id;
$course_id=$_SESSION['course_id'];
//echo "----course_id= ". $course_id;
$course_idd=$_POST['course_idd'];
//echo "----course_idd= ". $course_idd;


?>
<span style="display:block; height: 10px;"></span>
<input type="button" value="Go" onClick="popUp();">
<span style="display:inline-block; width: 40px;"></span>
<a href="http://localhost/JamiaExam/CourseCurriculum/coursecurriculum.php">
<input type="button" value="Reset"></a>

<script>
var wi=null;
function popUp(){
   if (wi) wi.close();
   wi=window.open("http://203.190.132.18/WebMarkSheet/EvalschemeViewer.aspx?coursesid=<?php echo $acad.$course_id; ?>","","width=1340,height=720,location=center,scrollbars=yes,status=no");
}
//-->
</script>
