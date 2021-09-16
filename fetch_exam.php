<?php
include("connection2.php");

session_start();
$Enroll=$_SESSION['enrolm'];
$exam_id = $_POST['exam_id'];


?>
<script src="jquery-1.9.0.min.js"></script>

<style>
.cascade2
{
	margin:-50px auto;

}
</style>
<?php 
echo "<br/><br/><br/><br/>";
$sql = "SELECT distinct ExamID,ExamName FROM [studentResultStatus] where ClassSID='$exam_id' AND Enrollment='$Enroll'";
$run = sqlsrv_query($con,$sql);
?> 
       <div id="center" class="cascade2">

<select name="inexam" id="drop2">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
	<option value="<?php echo $row["ExamID"]; ?>"><?php echo $row["ExamName"] ?></option>
	<?php } ?>
</select>
<div class="cascade2" id="exam1"></div> 

          <div id="inexam1" class="cascade2"></div> 
        </div>
    </div>
<script>
$(document).ready(function(){
$("select#drop2").change(function(){

	var exam1_id =  $("select#drop2 option:selected").attr('value'); 
// alert(country_id);	
	$("#exam1").html( "" );
	$("#inexam1").html( "" );
	if (exam1_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_det.php",
			data: "exam1_id="+exam1_id,
			cache: false,
			beforeSend: function () { 
				$('#exam1').html('<img src="loader.gif" alt="" width="24" height="24">');
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
$exam1_id=$_SESSION['enrol']; 
$_SESSION['exam2_id'] = $_POST['exam_id'];
?> 