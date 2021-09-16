<?php
include("../../connection2.php");

session_start();
$enroll=$_SESSION['enroll'];
$exam_id = $_SESSION['examid'];
$cat = $_SESSION['cat'];
$classsid = $_POST['classsid'];
$_SESSION['classsid'] = $classsid;
?>

<style>
.cascade2
{
	margin:-50px auto;

}
</style>
<?php 
echo "<br/><br/><br/><br/>";
$sql = "SELECT StudentID,Roll,RNO,RollID,FirstName,LastName,FatherName FROM [RollListCourse] where ExamID='$exam_id' AND ClassSID='$classsid' AND Enrollment='$enroll'";
$run = sqlsrv_query($con,$sql);
?> 
       <div id="center" class="cascade2">
  
<select name="exam1" id="drop4">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
	<option value="<?php echo $row["RollID"]; ?>"><?php echo $row['RNO']." : ".$row["FirstName"]." ".$row["LastName"]." : ".$row['FatherName']." : ".$row['RollID']." : ".$row['StudentID'];  ?></option>
	<?php } ?>
    
</select>
</div>

<script>
$(document).ready(function(){
$("select#drop4").change(function(){

	var roll_id =  $("select#drop4 option:selected").attr('value'); 
// alert(country_id);	
	
	if (roll_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_roll.php",
			data: "roll_id="+roll_id,
			cache: false,
			beforeSend: function () { 
				$('#roll').html('<img src="../../loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#roll").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start();
?> 