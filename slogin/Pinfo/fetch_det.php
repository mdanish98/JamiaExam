<?php
include("../../connection2.php");

session_start();
$enroll=$_SESSION['enroll'];
$exam_id = $_SESSION['examid'];
$cat = $_SESSION['cat'];
$classsid = $_POST['classsid'];
$strlenn = strlen($classsid);
$part = substr($classsid, 0, 1);
$classsidd = substr($classsid, 1, $strlenn);

$_SESSION['part'] = $part;
$_SESSION['classsid'] = $classsidd;


?>

<?php 
$sql = "SELECT StudentID,Roll,RNO,RollID,FirstName,LastName,FatherName FROM [RollListCourse] where ExamID='$exam_id' AND ClassSID='$classsidd' AND Enrollment='$enroll'";
$run = sqlsrv_query($con,$sql);
?> 
    <table align="center">
<tr>
<td width="150">Session:</td>
<td width="400">  
<select name="exam1" id="drop4">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
	<option value="<?php echo $row["RollID"]; ?>"><?php echo $_SESSION['sessionn']=$row['RNO']." : ".$row["FirstName"]." ".$row["LastName"]." : ".$row['FatherName']." : ".$row['RollID']." : ".$row['StudentID'];  ?></option>
	<?php } ?>
    
</select>
</td>
</tr>
</table>

<script>
$(document).ready(function(){
$("select#drop4").change(function(){

	var roll_id =  $("select#drop4 option:selected").attr('value'); 
// alert(country_id);	
	
	if (roll_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_pap.php",
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
<br/>
<center>
<a href="RegConfirm.php"><input type="button" name="btn" value="proceed" />
</a>
</center>
<?php
session_start();
?> 