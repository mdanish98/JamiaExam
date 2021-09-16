<?php
include("connection2.php");
session_start();
?>
<style>
#submit2
{
	margin:70px auto;

}
</style>
<?php
$sem_exam1=$_POST['exam1_id'];
$exam1_id=$_SESSION['enrol']; 
$exam2_id =$_SESSION['exam2_id'];
?>
<form action="http://localhost/JamiaExam/students_info.php">
<input type="submit" name="submit2" id="submit2" class="submit2" value="Submit" />
</form>

<!--
<a class="submit2" href="http://localhost/JamiaExam/students_info.php
">
<br><br>
<input type="button" name="submit2" class="submit2" id="submit2" value="Submit">
</a>
-->
<?php
session_start();
$_SESSION['sem_exam1']=$sem_exam1;
$_SESSION['exam1_id']=$exam1_id;
$_SESSION['exam2_id'] =$exam2_id;
?>