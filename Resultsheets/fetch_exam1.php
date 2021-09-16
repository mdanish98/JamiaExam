<?php
session_start();
include("connection2.php");
$degr=$_POST['degree_id'];
//echo "degree= ". $degr;
$acad=$_SESSION['acad'];
//echo "acad id= ". $acad;
?>
<?php
$sql = "SELECT distinct ExamName,ExamID FROM [Exam] where SID='$acad' order by ExamName DESC";
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
<td width="150" >Exam:</td>
<td width="400">
<select name="exam" id="drop3">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
	<option value="<?php echo $row["ExamID"]; ?>"><?php echo $row["ExamName"] ?></option>
	<?php } ?>
</select>        
</td>
</tr>
</table>
<script>
$(document).ready(function(){
$("select#drop3").change(function(){

	var exam_id =  $("select#drop3 option:selected").attr('value'); 
// alert(country_id);	
		if (exam_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
		    url: "fetch_course.php",
			data: "exam_id="+exam_id,
			cache: false,
			beforeSend: function () { 
				$('#course').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#course").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start(); 
$_SESSION['acad'] = $acad;
$_SESSION['degree'] = $degr;
?> 
