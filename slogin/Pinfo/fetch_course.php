<?php
include("../../connection2.php");

session_start();
$enroll=$_SESSION['enroll'];
$exam_id = $_SESSION['examid'];
$cat = $_POST['cat'];
$_SESSION['cat'] = $cat;
?>

<?php 
$sql = "SELECT ClassSID,CourseName,Part,RNO,RollID FROM [RollListCourse] where ExamID='$exam_id' AND CAT='$cat' AND Enrollment='$enroll'";
$run = sqlsrv_query($con,$sql);
?> 
    <table align="center">
<tr>
<td width="150">Course:</td>
<td width="400">
  
<select name="exam1" id="drop3">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
	<option value="<?php echo $row['Part'].$row["ClassSID"]; ?>"><?php echo $_SESSION['course'] = $row["CourseName"]." : ".$row['Part'];  ?></option>
	<?php 
	
		}
		 
	
	?>
    
</select>
</td>
</tr>
</table>
<script>
$(document).ready(function(){
$("select#drop3").change(function(){

	var classsid =  $("select#drop3 option:selected").attr('value'); 
// alert(country_id);	
	
	if (classsid.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_det.php",
			data: "classsid="+classsid,
			cache: false,
			beforeSend: function () { 
				$('#exam1').html('<img src="../../loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#exam1").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start();
?> 