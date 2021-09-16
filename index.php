<?php
session_start();

include("connection2.php");

?>
          <?php
		  $post_data=$_POST['enroll'];
	$sql = "SELECT distinct ClassSID,ClassName FROM [studentResultStatus] where Enrollment='$post_data' 
  ORDER BY ClassName ASC";
		$run = sqlsrv_query($con, $sql);
		$count = sqlsrv_has_rows($run);

		if($count>0)
		{

		?>
            
            <select name="exam" id = "drop1">
              <option value="">Please Select</option>

			  <?php while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
              <option value="<?php echo $row["ClassSID"]; ?>"&nbsp;&nbsp;&nbsp;&nbsp; id="opt1" ><?PHP echo $row['ClassName']; ?> </option>
              
			  <?php 
			  }
			  }
			  
              else
			  {
				  echo "<p style='color:RED; letter-spacing: 1px;
'>Sorry! Enrollment no. " .$post_data ." doesn't exist.Please search your Enrollment no.</p>";
			  }
			  
			  
			   ?>
            </select>
            
        <div class="cascade" id="exam"></div> 

          <div id="inexam" class="cascade"></div> 

<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("select#drop1").change(function(){

	var exam_id =  $("select#drop1 option:selected").attr('value'); 
// alert(country_id);	
	$("#exam").html( "" );
	$("#inexam").html( "" );
	if (exam_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_exam.php",
			data: "exam_id="+exam_id,
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
$_SESSION['enrol'] = $post_data;
?> 
