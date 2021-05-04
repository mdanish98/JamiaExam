<?php
session_start();
include("connection2.php");
$faculty=$_SESSION['faculty'];
//echo "----faculty= ". $faculty;
$acad=$_SESSION['acad'];
//echo "----acad id= ". $acad;
$dept_id=$_SESSION['dept_id'];
//echo "----dept_id= ". $dept_id;
$course_id=$_POST['course_id'];
//echo "----course_id= ". $course_id;

?>
<table align="center">
<tr>
<td width="150">Course ID:</td>
<td width="400">
<select name="courseid" id="drop5">
	<option value="0">Please Select</option>
	<option value="<?php echo $acad.$course_id; ?>"><?php echo $acad.$course_id; ?></option>
</select>        
</td>
</tr>
</table>
<script>
$(document).ready(function(){
$("select#drop5").change(function(){

	var course_idd =  $("select#drop5 option:selected").attr('value'); 
// alert(country_id);	
		if (course_idd.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
		    url: "fetch_submitt.php",
			data: "course_idd="+course_idd,
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
$_SESSION['faculty'] = $faculty;
$_SESSION['dept_id'] = $dept_id;
$_SESSION['course_id'] = $course_id;
?> 
