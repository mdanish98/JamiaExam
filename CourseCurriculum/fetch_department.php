<?php
session_start();
include("connection2.php");
$faculty=$_POST['fac_id'];
//echo "fac id= ". $faculty;
$acad=$_SESSION['acad'];
//echo "acad id= ". $acad;
?>
<?php
$sql = "SELECT DID,DName FROM [department] where FID='$faculty'";
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
<td width="150" >Department:</td>
<td width="400">
<select name="department" id="drop3">
	<option value="">Please Select</option>
	<?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
	<option value="<?php echo $row["DID"]; ?>"><?php echo $row["DName"] ?></option>
	<?php } ?>
</select>        
</td>
</tr>
</table>
<script>
$(document).ready(function(){
$("select#drop3").change(function(){

	var dept_id =  $("select#drop3 option:selected").attr('value'); 
// alert(country_id);	
		if (dept_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
		    url: "fetch_course.php",
			data: "dept_id="+dept_id,
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
$_SESSION['faculty'] = $faculty;
?> 
