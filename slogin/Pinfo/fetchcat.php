<?php
session_start();
include("../../connection2.php");
$enroll = $_SESSION['enroll'];
$examid = $_SESSION['examid'];
$examid = $_POST['exam_id'];
$_SESSION['examid']=$examid;
?>

<table align="center">
<tr>
<td width="150">Category:</td>
<td width="400">

   <select name="exam" id = "drop2">
               <option value="">Please Select</option>
               <option value="1"&nbsp;&nbsp;&nbsp;&nbsp; id="opt1" > Regular </option>
               <option value="3"&nbsp;&nbsp;&nbsp;&nbsp; id="opt1" > CR/DI </option>
               <option value="4"&nbsp;&nbsp;&nbsp;&nbsp; id="opt1" > Compartment </option>
               <option value="2"&nbsp;&nbsp;&nbsp;&nbsp; id="opt1" > Ex-Regular </option>
               </select>       
               
</td>
</tr>
</table>
               
                  
<script>
$(document).ready(function(){
$("select#drop2").change(function(){

	var cat =  $("select#drop2 option:selected").attr('value'); 
// alert(country_id);	
	if (cat.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_course.php",
			data: "cat="+cat,
			cache: false,
			beforeSend: function () { 
				$('#inexam').html('<img src="../../loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#inexam").html( html );
			}
		});
	} 
});
});
</script>
<?php
session_start(); 
$_SESSION['enrol'] = $post_data;
?> 
