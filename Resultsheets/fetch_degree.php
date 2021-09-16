<?php
session_start();
include("connection2.php");
$acad=$_POST['acad_id'];
//echo "acad id= ". $acad;
?>
<table align="center">
<tr>
<td width="150">Degree Level:</td>
<td width="400">
 <select name="degree" id="drop2">
 <option value="Select" selected>Select</option>
		<option value="R">Doctorate</option>
		<option value="P">M.Phil</option>
		<option value="M">Master</option>
		<option value="B">Bachelors</option>
		<option value="G">PG Diploma</option>
		<option value="A">Advance Diploma</option>
		<option value="D">Diploma</option>
		<option value="C">Certificate</option>
		<option value="S">Short Term</option>
		<option value="O">Others</option>

</select>
 </td>
</tr>
</table>
<script>
$(document).ready(function(){
$("select#drop2").change(function(){

	var degree_id =  $("select#drop2 option:selected").attr('value'); 
// alert(country_id);	
	if (degree_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
      		url: "fetch_exam1.php",
			data: "degree_id="+degree_id,
			cache: false,
			beforeSend: function () { 
				$('#exam').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#exam").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start(); 
$_SESSION['acad'] = $acad;
?> 
