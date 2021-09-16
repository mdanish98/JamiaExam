<?php
session_start();
include("connection2.php");
$degr=$_SESSION['degree'];
echo "----degree= ". $degr;
$acad=$_SESSION['acad'];
echo "----acad id= ". $acad;
$exam_id=$_POST['exam_id'];
echo "----exam= ". $exam_id;
?>
<?php
$sql = "SELECT distinct classsid,ExamID,ClassName,ExamName FROM [StudentResultStatus] where ExamID='$exam_id' and classsid like '_$degr%' order by classsid asc";
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
<select name="exam1" id="drop4">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { 
		?>
    
	<option value="<?php echo $row["ClassName"]; ?>"><?php echo $row["ClassName"] ?></option>
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
		    url: "fetch_submit.php",
			data: "course_id="+course_id,
			cache: false,
			beforeSend: function () { 
				$('#submitt').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#submitt").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start(); 
$_SESSION['acad'] = $acad;
$_SESSION['exam_id'] = $exam_id;
$_SESSION['degree'] = $degr;

?> 
