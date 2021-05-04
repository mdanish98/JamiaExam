<?php
session_start();
include("connection2.php");
$faculty=$_SESSION['faculty'];
//echo "----faculty= ". $faculty;
$acad=$_SESSION['acad'];
//echo "----acad id= ". $acad;
$dept_id=$_POST['dept_id'];
//echo "----dept_id= ". $dept_id;
?>
<?php
$sql = "SELECT CourseID,CourseName from course where DID='$dept_id'";
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
}*/
?> 
<table align="center">
<tr>
<td width="150">Course Name:</td>
<td width="400">
<select name="course" id="drop4">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { 
		?>
    
	<option value="<?php echo $row["CourseID"]; ?>"><?php echo $row["CourseName"] ?></option>
	<?php } ?>
    
</select>        
</td>
</tr>
</table>
<script>
$(document).ready(function(){
$("select#drop4").change(function(){

	var course_id =  $("select#drop4 option:selected").attr('value'); 
// alert(country_id);	
		if (course_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
		    url: "fetch_courseid.php",
			data: "course_id="+course_id,
			cache: false,
			beforeSend: function () { 
				$('#courseid').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#courseid").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start(); 
$_SESSION['acad'] = $acad;
$_SESSION['faculty'] = $faculty;
$_SESSION['dept_id'] = $dept_id;

?> 
